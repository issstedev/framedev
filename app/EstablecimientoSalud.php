<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use DB;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
class EstablecimientoSalud extends Model
{
  protected $table = 'establecimientos_salud';
    protected $guarded = ['id'];

        public function direccion(){
        return 'AV'.$this->vialidad.' Col'.$this->asentamiento.' #'.$this->numero_exterior.' cp'.$this->codigo_postal;
    }

    static public function nombre_de_la_institucion(){
      return EstablecimientoSalud::where('id', $_SESSION['ubicacion'])->select('nombre_de_la_institucion')->first();
    }
    public function nombre_completo(){

        return $this->clave_de_la_institucion.' '.$this->nombre_de_tipologia.' '.$this->nombre_de_la_unidad;
    }

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
          $result = $this->select(DB::raw("sum(CAST(total_de_camas as UNSIGNED))"))->where('clave_de_la_entidad', $id)->get();
        }

        if ($id = 99){
          $result = $this->select(DB::raw("sum(CAST(total_de_camas as UNSIGNED))"))->get();
            }
       return $result[0]['sum'];

    }

    public function totalConsultorios($id){

        if ($id != 99){
          $result = $this->select(DB::raw("sum(CAST(total_de_consultorios as UNSIGNED))"))->where('clave_de_la_entidad', $id)->get();
        }
        if ($id = 99)  {
          $result = $this->select(DB::raw("sum(CAST(total_de_consultorios as UNSIGNED))"))->get();
        }
        return $result[0]['sum'];
    }


    public function pintaMapa()
    {
           Mapper::map($this->lat, $this->lon,
            [
                'zoom' => 15,
                'draggable' => false,
                'marker' => true,
                'center' => true,
                'eventBeforeLoad' => 'console.log("before load");'
            ]);
           $mapa=Mapper::render();
           return $mapa;
    }



  public function scopeEstadisticaConsultorios($query)
    {

       return $query->whereHas('estadisticas', function ($query) {
            $query->whereHas('catalogo', function($query){
                        $query->where('catalogo','consultorios');
                    });
        });

  }


    public function estadisticas()
{
    return $this->hasMany('App\Models\Inventarios\Estadistica', 'id_establecimiento', 'id');
}

public function contactos()
{

    return $this->hasMany('App\Models\Inventarios\Contacto', 'id_establecimiento', 'id');
  
}

    

    //
}
