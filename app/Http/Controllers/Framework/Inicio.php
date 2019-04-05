<?php
namespace App\Http\Controllers\Framework;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Framework\Roles;
use App\Models\Framework\Usuarios;
use App\Models\Framework\Login;

use Helpme;
use App\EstablecimientoSalud;
use App\Entidad;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Session;

class Inicio extends Controller
{
     protected $entidad;
     protected $establecimiento;
     protected $mapaDefault;

  public function __construct(Entidad $entidad, EstablecimientoSalud $establecimiento)
  {
      $this->middleware('permiso:Inicio|index', ['only' => ['index','load_start']]);


    $this->entidad = $entidad;
    $this->establecimiento = $establecimiento;

  }

  public function index()
  {
    $avatar_usr_circ = '';
    $usuario_name = array();


    if(isset($_SESSION['id_rol'])){

            $id_rol = $_SESSION['id_rol'];
            $id_usuario = $_SESSION['id_usuario'];
            $rol = Roles::rol();


            $usuario_menu_top = Usuarios::datos_usuario($id_usuario);
            $perfil_menu_top  = Usuarios::perfil_usuario($id_usuario);
            $avatar_usr_circ = (empty ($perfil_menu_top['avatar'])) ? 'img/avatar.jpg' : 'tmp/'.Helpme::duplicatePublic($perfil_menu_top['avatar'],'perfiles');
            $usuario_name = $usuario_menu_top['nombres'];

    }
           $usuario =Usuarios::find($_SESSION['id_usuario']);
       Session::put('avatar_usr_circ',  $avatar_usr_circ);
       Session::put('usuario',  $usuario);
       Session::put('rol',  $rol);
       Session::put('id_rol',  $id_rol);
       Session::put('usuario_menu_top',  $usuario_menu_top);

    $datos = [
        'avatar_usr_circ' => $avatar_usr_circ,
        'usuario_name' => $usuario_name,
        'rol' => $rol,
        'id_rol' => $id_rol,
        'usuario_menu_top' => $usuario_menu_top,
        'establecimiento' => EstablecimientoSalud::nombre_de_la_institucion()
    ];



    return view('plantilla/start')->with('datos', $datos);
  }

    public function ubicacion(){

        $avatar_usr_circ = '';
      $usuario_name = array();

    if(isset($_SESSION['id_rol'])){

            $id_rol = $_SESSION['id_rol'];
            $id_usuario = $_SESSION['id_usuario'];
            $rol = Roles::rol();
            $usuario_menu_top = Usuarios::datos_usuario($id_usuario);
            $perfil_menu_top  = Usuarios::perfil_usuario($id_usuario);
            $avatar_usr_circ = (empty ($perfil_menu_top['avatar'])) ? 'img/avatar.jpg' : 'tmp/'.Helpme::duplicatePublic($perfil_menu_top['avatar'],'perfiles');
            $usuario_name = $usuario_menu_top['nombres'];

    }/*else{
      $_SESSION['id_usuario']=1;
      $usuario =Usuarios::find($_SESSION['id_usuario']);
      $_SESSION['id_rol']=$usuario->rol;
      $id_usuario = $_SESSION['id_usuario'];
      $id_rol = $_SESSION['id_rol'];
      $rol = Roles::rol();
            $usuario_menu_top = Usuarios::datos_usuario($id_usuario);
            $perfil_menu_top  = Usuarios::perfil_usuario($id_usuario);
            $avatar_usr_circ = (empty ($perfil_menu_top['avatar'])) ? 'img/avatar.jpg' : 'tmp/'.Helpme::duplicatePublic($perfil_menu_top['avatar'],'perfiles');
            $usuario_name = $usuario_menu_top['nombres'];
      Login::permisos($_SESSION['id_rol']);
      $_SESSION['token'] = Helpme::token(62);
        $_SESSION['user_token']=Helpme::token(62);
        $_SESSION['rol_token']=Helpme::token(62);
        
      

    }*/

       $usuario =Usuarios::find($_SESSION['id_usuario']);
       Session::put('avatar_usr_circ',  $avatar_usr_circ);
       Session::put('usuario',  $usuario);
       Session::put('rol',  $rol);
       Session::put('id_rol',  $id_rol);
       Session::put('usuario_menu_top',  $usuario_menu_top);




          $entidades = $this->entidad->zonaCentro()->orderBy('id_entidad', 'ASC')->get();
        Mapper::map($entidades->first()->lat, $entidades->first()->lat,
            [
              'zoom' => 15,
                'draggable' => false,
                'marker' => false,
                'center' => false,
                'eventBeforeLoad' => 'console.log("before load");',
                'cluster' => false
            ]);
            foreach ($entidades as $entidad) {
                  $content = '<b>' .strtoupper($entidad->entidad).

                  '<br> Total de Camas
                  <br> Total de Establecimientos
                   </b>
             <a href="mapas/'.$entidad->id_entidad.'" class="secondary-content"><i class="mdi-content-send"></i></a>'
                          ;
          Mapper::informationWindow($entidad->lat, $entidad->lon, $content, ['markers' => [ 'animation' => 'DROP',

           'scale' => 10000
                ]]);


    }

    $mapa=Mapper::render();


        return view('mapas/index', compact('entidades', 'mapa', 'datos') );
    }


  public function load_start(){
      return view('inicio/index');
  }
}
