<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Roles;
use App\Models\Usuarios;
use Helpme;
use App\EstablecimientoSalud;
use App\Entidad;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

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

    $datos = [
        'avatar_usr_circ' => $avatar_usr_circ,
        'usuario_name' => $usuario_name,
        'rol' => $rol,
        'id_rol' => $id_rol,
        'usuario_menu_top' => $usuario_menu_top
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
                  
    }

    $datos = [
        'avatar_usr_circ' => $avatar_usr_circ,
        'usuario_name' => $usuario_name,
        'rol' => $rol,
        'id_rol' => $id_rol,
        'usuario_menu_top' => $usuario_menu_top
    ];
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
