<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Helpme;
use DB;

class Config extends Model
{
  protected $table = 'fw_config';
  protected $primaryKey = 'id_config';
  public $timestamps = false;

  static function updateLogin(){

      DB::table('fw_login')
          ->where('id_usuario', $_SESSION['id_usuario'])
          ->where('open', 1)
          ->update(['ultima_verificacion' => date("Y-m-d H:i:s")]);
  }

  static function getConfig($id_site,$config){

        $result = Config::where('id_site', '=', $id_site)
              ->where('descripcion', '=', $config)
              ->select('valor','tmp_val as temporal','data')
              ->get();

        $array = array();

        if(count($result)>=1){
          foreach ($result as $row) {
            $array['valor']=$row->valor;
            $array['temporal']=$row->temporal;
            $array['datos']=$row->datos;
          }
        }
        return $array;
  }
  static function existConfig($data){

   $result = Config::where('id_site', '=', $id_site)
         ->where('descripcion', '=', $data['descripcion'])
         ->select('id_config')
         ->get();

   if(count($result)>=1){
     $return = true;
   }else{
     $return = false;
   }
   return $return;
  }
  static function setConfig($data){
   $exist = self::existConfig($data);
   if(!$exist){

     $store = new Config;
     $store->id_site = $data['id_site'];
     $store->descripcion = $data['descripcion'];
     $store->valor = $data['valor'];
     $store->tmp_val = $data['tmp_val'];
     $store->data = $data['data'];
     $store->user_alta = $_SESSION['id_usuario'];
     $store->fecha_alta = date("Y-m-d H:i:s");
     $store->save();

   }else{
     Config::where('id_site', '=', $data['id_site'])
               ->where('descripcion','=',$data['descripcion'])
               ->update(array(
                    'valor' => $data['valor'],
                    'tmp_val' => $data['tmp_val'],
                    'data' => $data['data'],
                    'user_mod' => $_SESSION['id_usuario'],
                    'fecha_mod' => NOW()
                  ));
   }
  }
}
