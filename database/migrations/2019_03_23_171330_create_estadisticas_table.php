<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadisticasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'estadisticas';

    /**
     * Run the migrations.
     * @table estadisticas
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('id_establecimiento')->nullable()->default(null);
            $table->unsignedInteger('cat_fr_estadisticas')->nullable()->default(null);
            $table->integer('cantidad')->nullable()->default(null);
            $table->integer('user_alta')->nullable()->default(null);
            $table->integer('user_mod')->nullable()->default(null);
            $table->dateTime('fecha_alta')->nullable()->default(null);
            $table->dateTime('fecha_mod')->nullable()->default(null);
            
            $table->index(["id_establecimiento"], 'fk_estadisticas_establecimientos_salud');
            $table->index(["cat_fr_estadisticas"], 'fk_estadisticas_cm_catalogo_1');

            $table->foreign('id_establecimiento', 'fk_estadisticas_establecimientos_salud')
                ->references('id')->on('establecimientos_salud')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('cat_fr_estadisticas', 'fk_estadisticas_cm_catalogo_1')
                ->references('id_cat')->on('cm_catalogo')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
