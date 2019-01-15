<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Login as ModelLogin;
use App\Models\Usuarios;
use App\Models\Viewlog;
use Helpme;

class Login extends Controller
{
    public function __construct()
    {
        $this->middleware('permiso:Login|force_all_sign_out', ['only' => ['modal_all_sign_out']]);
        $this->middleware('permiso:Login|force_sign_out', ['only' => ['sign_all_out','sign_out','modal_sign_out']]);
        $this->middleware('permiso:Login|salir', ['only' => ['keepAliveReset','salir','lockSession']]);
        $this->middleware('permiso:Login|loginlogger', ['only' => ['loginlogger','loginlogger_get']]);
    }

    public function index() {return view('login/index'); }

    public function error403() { return view('plantilla/403'); }

    public function tyc() { return view('plantilla/tyc'); }

    public function pass_chge() { return view('plantilla/pass_chge'); }

    public function logear(Request $request) { return ModelLogin::logear($request); }

    public function error404() { return view('plantilla/404_full'); }

    public function salir(){return ModelLogin::salir();}

    public function verifica_session() {return ModelLogin::verificarSession();}

    public function keepAliveReset() { print json_encode(ModelLogin::keepAlive());}

    public function keepAlive() {print json_encode(ModelLogin::keepAlive());}

    public function modal_all_sign_out() { return view('modales/login/sign-all-out'); }

    public function sign_out($id_usuario){ print ModelLogin::signout($id_usuario); }

    public function modal_sign_out($id_usuario) {return view('modales/login/sign-out'); }

    public function loginlogger() { return view('login/logger'); }

    public function loginlogger_get(){ print json_encode(Viewlog::logger()); }

    public function salirAlternativo() { return ModelLogin::salir();}

    public function lockSession()
    {
        $usuario = Usuarios::datos_usuario($_SESSION['id_usuario']);
        $perfil  = Usuarios::perfil_usuario($_SESSION['id_usuario']);
        if($perfil['avatar']){$avatar = Helpme::duplicatePublic($perfil['avatar'],'perfiles');}
        $usuario_menu_top = Usuarios::datos_usuario($_SESSION['id_usuario']);
        $correo = $_SESSION['correo'];
        $username = $_SESSION['usuario'];
        $usuario_name = $usuario_menu_top['nombres'];
        ModelLogin::salirDirect();
        $datos = [
            'usuario' => $usuario,
            'perfil' => $perfil,
            'avatar' => $avatar,
            'usuario_menu_top' => $usuario_menu_top,
            'correo' => $correo,
            'username' => $username,
            'usuario_name' => $usuario_name
        ];
        return view('login/lock')->with('datos', $datos);
    }


    public function recuperar_datos(Request $request)
    {
        $token = Helpme::token(62);
        $recuperar = ModelLogin::recuperar_datos($request->input('correo'),$token);

        $datamail['subject'] = 'Recuperación de cuenta';
        $datamail['plantilla'] = 'lostpassword';
        $datamail['destinatarios'] = array(
          $request->input('correo')
        );
        $datamail['body'] = array(
          'token' => $token,
          'usuario' => $recuperar[0]['usuario']
        );

        Helpme::sendMail($datamail);

        print json_encode($recuperar);
    }

    public function sign_all_out()
    {
        $whosLogin = ModelLogin::whoisLogged();

        foreach ($whosLogin as $logged){
            ModelLogin::signout($logged['id_usuario']);
        }
    }
}
