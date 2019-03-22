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
}
