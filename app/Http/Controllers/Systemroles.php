<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Systemroles as ModelSystemroles;
use App\Models\Roles as ModelRoles;
use App\Models\Catalogo;
use Helpme;

class Systemroles extends Controller
{
  public function __construct()
  {
      $this->middleware('permiso:Roles|index', ['only' => ['index']]);
      $this->middleware('permiso:Roles|modal_roles', ['only' => ['modal_roles']]);
      $this->middleware('permiso:Roles|agregar_rol', ['only' => ['agregar_rol']]);
      $this->middleware('permiso:Roles|permisos', ['only' => ['permisos']]);
  }
  public function index(){return view('plantilla/404_full');}

  public function modal_roles($id_sistema){
    $roles = ModelSystemroles::queryRoles($id_sistema);
    $tiporol = Catalogo::selectCatalog('tiporol',null);
    $datos = [
        'id_sistema' => $id_sistema,
        'roles' => $roles,
        'tiporol' => $tiporol
    ];
    return view('modales/sistemas/gestion_roles')->with('datos', $datos);
  }

  public function agregar_rol(Request $request, $id_sistema){
    print json_encode(ModelSystemroles::agregar_rol($request,$id_sistema));
  }

  public function permisos($id_rol,$id_sistema){
    $descripcion = ModelSystemroles::get_rol($id_rol, $id_sistema);
    $metodos = ModelSystemroles::getMetodos($id_sistema);

      foreach ($metodos as $num => $metodo){
        $permisos[$num] = ModelRoles::getPermisos($id_rol,$metodo->id_metodo);
      }

    $roles = ModelSystemroles::select_roles($id_sistema);
    $roles_ck = ModelSystemroles::check_roles($id_sistema);

      for($i=0;$i < count($roles_ck); $i++){
            $accesos[$i] = ModelRoles::getAccesos($id_rol,$roles_ck[$i]['value'],'fw_roles','fw_roles');
      }

    $datos = [
        'descripcion' => $descripcion,
        'metodos' => $metodos,
        'roles' => $roles,
        'roles_ck' => $roles_ck,
        'id_rol' => $id_rol,
        'permisos' => $permisos,
        'id_sistema' => $id_sistema,
        'accesos' => $accesos
    ];
    return view('sistemas/permisos')->with('datos', $datos);
  }
}
