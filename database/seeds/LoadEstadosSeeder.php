<?php

use Illuminate\Database\Seeder;
use App\Entidad;
use Keboola\Csv\CsvFile;

class LoadEstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   	$csv= new CsvFile(base_path().'/database/seeds/csv/cat_entidad.csv', ',');
      foreach($csv AS $row) {
    		$establecimiento= new Entidad;
            $establecimiento->create([
       		'entidad'=> $row[0],
			'clave'=> $row[1],
			'clave_elector'=> (int)$row[2],
			
       	  ]);
        }   //
    }
}
