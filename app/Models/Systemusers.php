<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Helpme;
use DB;

class Systemusers extends Model
{
  protected $table = 'fw_usuarios';
  protected $primaryKey = 'id_usuario';
  public $timestamps = false;

  static function usuarios_bloqueados(){
    return DB::table('fw_usuarios as fwu')
                  ->join('sistemas_usuario as su','su.id_usuario','=','fwu.id_usuario')
                  ->where('fwu.cat_status','=',9)
                  ->where('fwu.id_usuario','IN','su.id_usuario')
                  ->groupBy('fwu.id_usuario')
                  ->count();
  }
}
