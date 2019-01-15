<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Viewsistemas;
use App\Models\Usuarios;
use App\Models\Sistemas as ModelSistemas;
use Helpme;

class Sistemas extends Controller
{
  public function __construct()
  {
      $this->middleware('permiso:Sistemas|index', ['only' => ['index','listado_sistemas']]);
      $this->middleware('permiso:Sistemas|relacionar_sistemas', ['only' => ['modal_relacionar_sistemas','vincular_sistema']]);
  }

  public function modal_relacionar_sistemas($id_usuario){

    $user = Usuarios::datos_usuario($id_usuario);
    $lista_sistemas = ModelSistemas::listado_sistemas();

    for($i=0;$i < count($lista_sistemas); $i++){
        $acceso[$i] = ModelSistemas::getAccesos($lista_sistemas[$i]->id_sistema, $id_usuario);
    }
    $datos = [
        'user' => $user,
        'lista_sistemas' => $lista_sistemas,
        'id_usuario' => $id_usuario,
        'acceso' => $acceso,

    ];
    return view('modales/sistemas/relacionar_sistemas')->with('datos', $datos);
  }

  public function vincular_sistema($id_usuario, $id_sistema, $estado){
     print json_encode(ModelSistemas::setear_permiso($id_usuario, $id_sistema, $estado));
  }

  public function index()
  {
    return view('sistemas/sistemas');
  }

  public function listado_sistemas(){
    print json_encode(Viewsistemas::listado_sistemas());
  }


  public function modal_add_sys(){
    $this->se_requiere_logueo(true,'Sistemas|agregar_sistema');
    $sistema = $this->loadEloquent('Sistemas');

    $catalogo = $this->loadEloquent('Catalogo');
    $status_sistema = $catalogo->selectCatalog($this->help, 'status_sistema');

    require URL_VISTA.'modales/sistemas/nuevo_sistema.php';
  }
  public function agregar_sistema(){
    $this->se_requiere_logueo(true,'Sistemas|agregar_sistema');
    $add_sistema = $this->loadEloquent('Sistemas');
    $inserta_sistema = $add_sistema->agregar_sistema($_POST);
    print json_encode($inserta_sistema);
  }
  public function modal_editar_sistema($id_sistema){
    $this->se_requiere_logueo(true,'Sistemas|editar_sistema');
    $sistema = $this->loadEloquent('Sistemas');
    $sis_data = $sistema->datos_sistema($id_sistema);

    $catalogo = $this->loadEloquent('Catalogo');
    $status_sistema = $catalogo->selectCatalog($this->help, 'status_sistema', $sis_data->cat_status_sistema);

    require URL_VISTA.'modales/sistemas/editar_sistema.php';
  }
  public function editar_sistema(){
    $this->se_requiere_logueo(true,'Sistemas|editar_sistema');
    $add_sistema = $this->loadEloquent('Sistemas');
    $editar_sistema = $add_sistema->editar_sistema($_POST);
    print json_encode($editar_sistema);
  }
}
