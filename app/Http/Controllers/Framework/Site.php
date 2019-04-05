<?php
namespace App\Http\Controllers\Framework;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Helpme;
use App\EstablecimientoSalud;
use App\Entidad;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
class Site extends Controller
{

		     protected $entidad;
     protected $establecimiento;
     protected $mapaDefault;

  public function __construct(Entidad $entidad, EstablecimientoSalud $establecimiento)
  {



    $this->entidad = $entidad;
    $this->establecimiento = $establecimiento;

  }


  public function index()
  {
  	  $entidades = $this->entidad->zonaCentro()->orderBy('id_entidad', 'ASC')->get();
        Mapper::map($entidades->first()->lat, $entidades->first()->lat,
            [
              'zoom' => 15,
                'draggable' => false,
                'marker' => false,
                'center' => false,
                'eventBeforeLoad' => 'console.log("before load");',
                'cluster' => false
            ]);
            foreach ($entidades as $entidad) {
                  $content = '<b>' .strtoupper($entidad->entidad).

                  '<br> Total de Camas
                  <br> Total de Establecimientos
                   </b>
             <a href="mapas/'.$entidad->id_entidad.'" class="secondary-content"><i class="mdi-content-send"></i></a>'
                          ;
          Mapper::informationWindow($entidad->lat, $entidad->lon, $content, ['markers' => [ 'animation' => 'DROP',

           'scale' => 10000
                ]]);


    }

    $mapa=Mapper::render();


        return view('mapas/index', compact('entidades', 'mapa', 'datos') );


        //return view('site/plantilla/index');
  }
  public function site()
  {
      return view('site/plantilla/index');
  }
}
