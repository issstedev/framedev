<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Helpme;
use DB;

class Estadistica extends Model
{
  protected $table = 'estadisticas';
  protected $primaryKey = 'id';
  public $timestamps = false;

    static function get_contacts(){
      return DB::table('contacto')->where('id_establecimiento','=',$_SESSION['ubicacion'])->get();
    }

    static function get_estadisticas($padre){
      return DB::table('estadisticas')
          ->join('cm_catalogo AS cat','estadisticas.cat_fr_estadisticas','=','cat.id_cat')
          ->select('id','cat.etiqueta as descripcion','cantidad')
          ->where('cat.id_padre','=',$padre)
          ->where('id_establecimiento','=',$_SESSION['ubicacion'])
          ->get();
    }

    static function add_contacto($request){

        $id = DB::table('contacto')->insertGetId(
            [
                'id_establecimiento' => $_SESSION['ubicacion'],
                'nombre' => $request->input('nombre'),
                'cargo' => $request->input('cargo'),
                'correo' => $request->input('correo'),
                'user_alta' => $_SESSION['id_usuario'],
                'fecha_alta' => date("Y-m-d H:i:s")
            ]
        );

        if($id){
          $respuesta = array('resp' => true , 'mensaje' => 'Registro guardado correctamente.', 'id' => $id);
        }else{
          $respuesta = array('resp' => false , 'mensaje' => 'Error en el sistema.' , 'error' => 'Error al insertar registro.' );
        }
        return $respuesta;

      }

    static function add_estadistica($request){

        $id = DB::table('estadisticas')->insertGetId(
            [
                'id_establecimiento' => $_SESSION['ubicacion'],
                'cat_fr_estadisticas' => $request->input('cat_fr_estadisticas'),
                'cantidad' => $request->input('cantidad'),
                'user_alta' => $_SESSION['id_usuario'],
                'fecha_alta' => date("Y-m-d H:i:s")
            ]
        );

        if($request->input('computo_set') !== null)
            self::add_computo($request, $id);

        if($id){
          $respuesta = array('resp' => true , 'mensaje' => 'Registro guardado correctamente.', 'id' => $id);
        }else{
          $respuesta = array('resp' => false , 'mensaje' => 'Error en el sistema.' , 'error' => 'Error al insertar registro.' );
        }
        return $respuesta;

      }
      static function add_computo($request, $id){
        $id = DB::table('computo')->insertGetId(
            [
                'id_estadisticas' => $id,
                'marca' => $request->input('marca'),
                'servicetag' => $request->input('servicetag'),
                'user_alta' => $_SESSION['id_usuario'],
                'fecha_alta' => date("Y-m-d H:i:s")
            ]
        );
      }

      static function get_estadisticas_computo($padre){
        return DB::table('estadisticas')
            ->join('cm_catalogo AS cat','estadisticas.cat_fr_estadisticas','=','cat.id_cat')
            ->join('computo AS comp','estadisticas.id','=','comp.id_estadisticas')
            ->select('estadisticas.id','cat.etiqueta as descripcion','estadisticas.cantidad', 'comp.marca as marca', 'comp.servicetag as servicetag')
            ->where('cat.id_padre','=',$padre)
            ->where('id_establecimiento','=',$_SESSION['ubicacion'])
            ->get();
      }

}
