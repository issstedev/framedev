<?php

use Illuminate\Database\Seeder;
use App\EstablecimientoSalud;

class LoadLatLonEstablecimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $establecimientos =  new EstablecimientoSalud;
        $establecimientos = $establecimientos->all();

        foreach($establecimientos AS $establecimiento) {
    	
        	if ($establecimiento->latitud != ''){
        		   Log::info('entra: '.$establecimiento->id);


        		$lat= str_replace(',', '', $establecimiento->latitud);
        		$lon= str_replace(',', '', $establecimiento->longitud);
        	  Log::info($lat.'es numero'.$this->es_numero((float)$lat));
        		if( $this->es_numero($lat) == true and $this->es_numero($lon) == true ){
        			if ((((float)$lat) < 90  and (((float)$lat) > -90)) and ((((float)$lon) < 180) and (((float)$lon) > -180))){
        				Log::info('puede grabar: '.$establecimiento->id);

        				$establecimiento->lat= (float) $lat;
        				$establecimiento->lon= (float) $lon;
        				$establecimiento->save();	
					}
				//}	
			}

   	 	}	
	}
}




    private function es_numero($num)
    {
    if (is_float($num)) {
    	return 'true';
	} else {
    	return 'false';
	}
    	
   }
}
