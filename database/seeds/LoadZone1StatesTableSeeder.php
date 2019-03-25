<?php

use Illuminate\Database\Seeder;
use App\Entidad;

class LoadZone1StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      Entidad::where('id_entidad', 9)->update(['id_zona' => 1]);
      Entidad::where('id_entidad', 15)->update(['id_zona' => 1]);
      Entidad::where('id_entidad', 21)->update(['id_zona' => 1]);
      Entidad::where('id_entidad', 29)->update(['id_zona' => 1]);
      Entidad::where('id_entidad', 13)->update(['id_zona' => 1]);
      Entidad::where('id_entidad', 22)->update(['id_zona' => 1]);
      Entidad::where('id_entidad', 17)->update(['id_zona' => 1]);
      Entidad::where('id_entidad', 16)->update(['id_zona' => 1]);
      
    }
}
