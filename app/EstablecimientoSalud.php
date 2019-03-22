<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstablecimientoSalud extends Model
{
  protected $table = 'establecimientos_salud';
    protected $guarded = ['id'];


    public function scopeEntidad($query, $clave)
    {
        if($clave != 99)
        return $query->where('clave_de_la_entidad', $clave);
    }

    public function scopeTipoInstiTucion($query, $clave)
    {
      if ($clave)
      return $query->where('clave_de_la_institucion', $clave);
    }
    public function scopeTipoEstablecimiento($query, $clave)
    {
        if  ($clave) 
          return $query->where('clave_tipo_establecimiento', $clave);
    }
    public function scopeEstatus($query, $clave)
    {
        if ($clave) 
            return $query->where('clave_de_estatus_de_operacion', $clave);
    }

    public function scopeNivelAtencion($query, $clave)
    {
        if ($clave)
          return $query->where('clave_nivel_atencion', $clave);
    }

    public function totalCamas($id){
        if ($id != 99){
          $result = $this->select(DB::raw("sum(cast (total_de_camas as integer))"))->where('clave_de_la_entidad', $id)->get();
        }
        
        if ($id = 99){
          $result = $this->select(DB::raw("sum(cast (total_de_camas as integer))"))->get(); 
            }   
       return $result[0]['sum'];     

    }
    
    public function totalConsultorios($id){

        if ($id != 99){
          $result = $this->select(DB::raw("sum(cast (total_de_consultorios as integer))"))->where('clave_de_la_entidad', $id)->get();
        }
        if ($id = 99)  { 
          $result = $this->select(DB::raw("sum(cast (total_de_consultorios as integer))"))->get();      
        }    
        return $result[0]['sum'];
    }

    //
}
