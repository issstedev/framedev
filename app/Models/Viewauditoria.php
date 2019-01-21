<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use LiveControl\EloquentDataTable\DataTable as DT;
use LiveControl\EloquentDataTable\ExpressionWithName;
use Helpme;

class Viewauditoria extends Model
{
  protected $table = 'view_auditoria';
  protected $primaryKey = 'id_auditoria';
  public $timestamps = false;

  static function auditar(){
    $audit = new Viewauditoria();
    $dataTable = new DT(
      $audit,
      ['id_auditoria', 'id_sistema', 'controlador', 'metodo', 'permiso', 'ip', 'url', 'method', 'token_session', 'usuario', 'id_usuario', 'fecha_alta']
    );

    $dataTable->setFormatRowFunction(function ($audit) {
      return [
        $audit->id_auditoria ,
        $audit->id_sistema ,
        $audit->controlador ,
        $audit->metodo ,
        $audit->permiso ,
        $audit->ip ,
        $audit->url ,
        $audit->method ,
        $audit->token_session ,
        $audit->usuario ,
        $audit->id_usuario ,
        $audit->fecha_alta
        //self::ou2($audit->id_usuario,$audit->cat_status)
      ];
    });
    return $dataTable->make();
  }


  static function ou2($id_usuario, $cat_status){

    $salida = '
    <a data-function="'.$id_usuario.'" class="usr_js_fn_03 btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
      <i class="flaticon-cogwheel"></i>
    </a>
    ';
    if($cat_status == 9){
        $salida .= '
        <a data-function="'.$id_usuario.'" id="usr_js_fn_07" class="btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
          <i class="flaticon-lock"></i>
        </a>
        ';
    }

    if(Helpme::tiene_permiso('Sistemas|relacionar_sistemas')){
      $salida .= '
      <a data-function="'.$id_usuario.'" class="sys_js_fn_05 btn btn-outline-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air">
        <i class="flaticon-imac"></i>
      </a>
      ';
    }
    return $salida;
  }
}
