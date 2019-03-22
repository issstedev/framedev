<?php

use Illuminate\Database\Seeder;
use App\Entidad;
use Keboola\Csv\CsvFile;
use Illuminate\Support\Facades\Log;


class LoadLatLonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        	$csv= new CsvFile(base_path().'/database/seeds/csv/latStates.csv',',');
    	foreach($csv AS $row) {
    		$id= (int) $row[0];
    		$lat= (float) $row[1];
    		$lon=(float) $row[2];
 					Log::info('entra: id'.$id. 'lat'.$lat.' lon'.$lon);

    	   $entidad = new Entidad;
    	   $entidad= $entidad->find($id);
    	   $entidad->lat=$lat;
    	   $entidad->lon=$lon;
    		Log::info('el estado es'.$entidad->entidad.'su lat'.$entidad->lat.'su lon '.$entidad->lon );
    		
    		
    		
    		$entidad->save();    	
        //
    	}
    }
}
