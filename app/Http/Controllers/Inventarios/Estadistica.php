<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Framework\Catalogo;
use App\Models\Inventarios\Estadistica as ModelEstadistica;
use App\EstablecimientoSalud;
use Helpme;

class Estadistica extends Controller
{
  protected $nombre_centro;
  public function __construct()
  {
      $this->middleware('permiso:Estadistica|index', ['only' => ['index']]);
      $this->middleware('permiso:Estadistica|contacto', ['only' => ['contacto']]);
      $this->middleware('permiso:Estadistica|areas', ['only' => ['areas']]);
      $this->middleware('permiso:Estadistica|rhumanos', ['only' => ['rhumanos']]);
      $this->middleware('permiso:Estadistica|comunicaciones', ['only' => ['comunicaciones']]);
      $this->middleware('permiso:Estadistica|inventario', ['only' => ['inventario']]);
      $this->nombre_centro = EstablecimientoSalud::nombre_de_la_institucion();
  }



  public function add_contacto(Request $request){ print json_encode(ModelEstadistica::add_contacto($request)); }

  public function add_consultorio(Request $request){ print json_encode(ModelEstadistica::add_estadistica($request)); }
  public function add_camas(Request $request){ print json_encode(ModelEstadistica::add_estadistica($request)); }
  public function add_camasno(Request $request){ print json_encode(ModelEstadistica::add_estadistica($request)); }
  public function add_instalaciones(Request $request){ print json_encode(ModelEstadistica::add_estadistica($request)); }

  public function add_medicos(Request $request){ print json_encode(ModelEstadistica::add_estadistica($request)); }
  public function add_servicios(Request $request){ print json_encode(ModelEstadistica::add_estadistica($request)); }
  public function add_otras_profesiones(Request $request){ print json_encode(ModelEstadistica::add_estadistica($request)); }
  public function add_administrativo(Request $request){ print json_encode(ModelEstadistica::add_estadistica($request)); }
  public function add_otro_personal(Request $request){ print json_encode(ModelEstadistica::add_estadistica($request)); }
  public function add_enfermeras(Request $request){ print json_encode(ModelEstadistica::add_estadistica($request)); }

  public function add_enlace(Request $request){ print json_encode(ModelEstadistica::add_estadistica($request)); }
  public function add_server(Request $request){ print json_encode(ModelEstadistica::add_estadistica($request)); }
  public function add_computo(Request $request){ print json_encode(ModelEstadistica::add_estadistica($request)); }

  public function add_inventario(Request $request){ print json_encode(ModelEstadistica::add_estadistica($request)); }

  public function index(){return view('plantilla/404_full');}

  public function contacto(){
    $contacts = ModelEstadistica::get_contacts();
    $count = count($contacts);
    $centro = $this->nombre_centro->nombre_de_la_institucion;
    return view('estadistica/contacto', compact('contacts', 'count', 'centro'));
  }

  public function areas()
  {
    $consultorios = Catalogo::selectCatalog('consultorios',null);
    $camas_censables = Catalogo::selectCatalog('camas_censables',null);
    $camas_no_censables = Catalogo::selectCatalog('camas_no_censables',null);
    $instalaciones = Catalogo::selectCatalog('instalaciones',null);

    $list_consultorios = ModelEstadistica::get_estadisticas(22, $_SESSION['ubicacion']);
    $count1 = count($list_consultorios);
    $list_camas = ModelEstadistica::get_estadisticas(23, $_SESSION['ubicacion']);
    $count2 = count($list_camas);
    $list_noCensables = ModelEstadistica::get_estadisticas(24, $_SESSION['ubicacion']);
    $count3 = count($list_noCensables);
    $list_instalaciones = ModelEstadistica::get_estadisticas(25, $_SESSION['ubicacion']);
    $count4 = count($list_instalaciones);
    $centro = $this->nombre_centro->nombre_de_la_institucion;

    return view('estadistica/areas', compact(
      'consultorios',
      'camas_censables',
      'camas_no_censables',
      'instalaciones',
      'list_consultorios',
      'list_camas',
      'list_noCensables',
      'list_instalaciones',
      'count1',
      'count2',
      'count3',
      'count4',
      'centro'
    ));
  }

  public function rhumanos()
  {
    $medicos = Catalogo::selectCatalog('medicos',null);
    $servicios_auxiliares = Catalogo::selectCatalog('servicios_auxiliares',null);
    $otras_profesiones = Catalogo::selectCatalog('otras_profesiones',null);
    $administrativo = Catalogo::selectCatalog('administrativo',null);
    $otro_personal = Catalogo::selectCatalog('otro_personal',null);
    $enfermeras = Catalogo::selectCatalog('enfermeras',null);

    $list_medicos = ModelEstadistica::get_estadisticas(26, $_SESSION['ubicacion']);
    $count1 = count($list_medicos);
    $list_servicios_auxiliares = ModelEstadistica::get_estadisticas(27, $_SESSION['ubicacion']);
    $count2 = count($list_servicios_auxiliares);
    $list_otras_profesiones = ModelEstadistica::get_estadisticas(28, $_SESSION['ubicacion']);
    $count3 = count($list_otras_profesiones);
    $list_administrativo = ModelEstadistica::get_estadisticas(29, $_SESSION['ubicacion']);
    $count4 = count($list_administrativo);
    $list_otro_personal = ModelEstadistica::get_estadisticas(30, $_SESSION['ubicacion']);
    $count5 = count($list_otro_personal);
    $list_enfermeras = ModelEstadistica::get_estadisticas(94, $_SESSION['ubicacion']);
    $count6 = count($list_enfermeras);
    $centro = $this->nombre_centro->nombre_de_la_institucion;

    return view('estadistica/rhumanos',compact(
      'medicos',
      'servicios_auxiliares',
      'otras_profesiones',
      'administrativo',
      'otro_personal',
      'enfermeras',
      'list_medicos',
      'count1',
      'list_servicios_auxiliares',
      'count2',
      'list_otras_profesiones',
      'count3',
      'list_administrativo',
      'count4',
      'list_otro_personal',
      'count5',
      'list_enfermeras',
      'count6',
      'centro'
    ));
  }

  public function comunicaciones()
  {
    $enlaces = Catalogo::selectCatalog('enlaces_comunicacion',null);
    $servidores = Catalogo::selectCatalog('servidores_en_sitio',null);
    $computo = Catalogo::selectCatalog('computo',null);

    $list_enlaces = ModelEstadistica::get_estadisticas(31, $_SESSION['ubicacion']);
    $count1 = count($list_enlaces);
    $list_servidores = ModelEstadistica::get_estadisticas(32, $_SESSION['ubicacion']);
    $count2 = count($list_servidores);
    $list_computo = ModelEstadistica::get_estadisticas_computo(33, $_SESSION['ubicacion']);
    $count3 = count($list_computo);

    $centro = $this->nombre_centro->nombre_de_la_institucion;

    return view('estadistica/comunicaciones',compact(
      'enlaces',
      'servidores',
      'computo',
      'list_enlaces',
      'count1',
      'list_servidores',
      'count2',
      'list_computo',
      'count3',
      'centro'
    ));
  }

  public function inventario()
  {
    $equipo_medico = Catalogo::selectCatalog('equipo_medico',null);

    $list_equipo_medico = ModelEstadistica::get_estadisticas(34, $_SESSION['ubicacion']);
    $count1 = count($list_equipo_medico);
    $centro = $this->nombre_centro->nombre_de_la_institucion;
    return view('estadistica/inventario',compact(
      'equipo_medico',
      'list_equipo_medico',
      'count1',
      'centro'
    ));
  }

}
