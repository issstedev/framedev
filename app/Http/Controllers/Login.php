<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Login as ModelLogin;
use App\Models\Usuarios;
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

    public function salir(){return ModelLogin::salir();}

    public function verifica_session() {return ModelLogin::verificarSession();}

    public function keepAliveReset() { print json_encode(ModelLogin::keepAlive());}

    public function keepAlive() {print json_encode(ModelLogin::keepAlive());}


    public function recuperar_datos()
    {
        $token = Helpme::token(62);
        D::bug($_POST['correo']);
        $recuperar = ModelLogin::recuperar_datos($_POST['correo'],$token);

        $datamail['subject'] = 'Recuperación de cuenta';
        $datamail['plantilla'] = 'lostpassword';
        $datamail['destinatarios'] = array(
          $_POST['correo']
        );
        $datamail['body'] = array(
          'token' => $token,
          'usuario' => $recuperar[0]['usuario']
        );

        Helpme::sendMail($datamail);

        print json_encode($recuperar);
    }

    public function modal_all_sign_out()
    {
        require URL_VISTA.'modales/login/sign-all-out.php';
    }
    public function sign_all_out()
    {
        $login = $this->loadEloquent('Login');
        $whosLogin = $login->whoisLogged();

        foreach ($whosLogin as $logged){
            $login->signout($logged['id_usuario'], $this->help);
        }
    }

    public function sign_out($id_usuario)
    {
        $login = $this->loadEloquent('Login');
        print $login->signout($id_usuario, $this->help);
    }

    public function modal_sign_out($id_usuario)
    {
        require URL_VISTA.'modales/login/sign-out.php';
    }

    public function loginlogger()
    {
        include (URL_VISTA.'login/logger.php');
    }

    public function loginlogger_get()
    {
        $login = $this->loadEloquent('Viewlog');
        print json_encode($login->logger($this->help));
    }

    public function salirAlternativo()
    {
        return ModelLogin::salir($this->help);
    }
}
