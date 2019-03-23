<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    //
    protected $primaryKey = 'id_entidad';
    protected $table = 'cat_entidad';
    protected $guarded = ['id_entidad'];
    //public $timestamps = false;

     public function scopeZonaCentro($query)
    {
        
          return $query->where('id_zona', 1);
    }

}
