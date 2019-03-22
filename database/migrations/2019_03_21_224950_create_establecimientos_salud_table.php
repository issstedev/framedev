<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientosSaludTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos_salud', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
                       $table->string('clues');
            $table->string('nombre_de_la_entidad')->nullable();
            $table->integer('clave_de_la_entidad')->nullable();
            $table->string('nombre_del_municipio')->nullable();
            $table->integer('clave_del_municipio')->nullable();
            $table->string('nombre_de_la_localidad')->nullable();
            $table->integer('clave_de_la_localidad')->nullable();
            $table->string('nombre_de_la_jurisdiccion')->nullable();
            $table->integer('clave_de_la_jurisdiccion')->nullable();
            $table->string('nombre_de_la_institucion')->nullable();
            $table->string('clave_de_la_institucion')->nullable();
            $table->string('clave_corta_de_la_institucion')->nullable();
            $table->string('nombre_tipo_establecimiento')->nullable();
            $table->integer('clave_tipo_establecimiento')->nullable();
            $table->string('nombre_de_tipologia')->nullable();
            $table->string('clave_de_tipologia')->nullable();
            $table->string('nombre_de_subtipologia')->nullable();
            $table->string('clave_de_subtipologia')->nullable();
            $table->string('clave_scian')->nullable();
            $table->string('descripcion_clave_scian')->nullable();
            $table->string('consultorios_de_med_gral')->nullable();
            $table->string('consultorios_en_otras_areas')->nullable();
            $table->string('total_de_consultorios')->nullable();
            $table->string('camas_en_area_de_hos')->nullable();
            $table->string('camas_en_otras_areas')->nullable();
            $table->string('total_de_camas')->nullable();
            $table->text('nombre_de_la_unidad')->nullable();
            $table->string('clave_de_vialidad')->nullable();
            $table->string('tipo_de_vialidad')->nullable();
            $table->text('vialidad')->nullable();
            $table->string('numero_exterior')->nullable();
            $table->string('numero_interior')->nullable();
            $table->string('clave_del_tipo_de_asentamiento')->nullable();
            $table->string('tipo_de_asentamiento')->nullable();
            $table->string('asentamiento')->nullable();
            $table->string('entre_tipo_de_vialidad_1')->nullable();
            $table->string('entre_vialidad_1')->nullable();
            $table->string('entre_tipo_de_vialidad_2')->nullable();
            $table->string('entre_vialidad_2')->nullable();
            $table->text('observaciones_de_la_direccion')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('estatus_de_operacion')->nullable();
            $table->integer('clave_de_estatus_de_operacion')->nullable();
            $table->string('tiene_licencia_sanitaria')->nullable();
            $table->string('numero_de_licencia_sanitaria')->nullable();
            $table->string('tiene_aviso_de_funcionamiento')->nullable();
            $table->string('fecha_emision_av_fun')->nullable();
            $table->string('rfc_del_establecimiento')->nullable();
            $table->string('fecha_de_construccion')->nullable();
            $table->string('fecha_de_inicio_de_operacion')->nullable();
            $table->string('unidad_movil_marca')->nullable();
            $table->string('unidad_movil_modelo')->nullable();
            $table->string('unidad_movil_capacidad')->nullable();
            $table->string('unidad_movil_programa')->nullable();
            $table->string('unidad_movil_clave_programa')->nullable();
            $table->string('unidad_movil_tipo')->nullable();
            $table->string('unidad_movil_clave_tipo')->nullable();
            $table->string('unidad_movil_tipologia')->nullable();
            $table->string('unidad_movil_clave_tipologia')->nullable();
            $table->string('longitud')->nullable();
            $table->string('latitud')->nullable();
            $table->text('nombre_de_la_ins_adm')->nullable();
            $table->string('clave_de_la_ins_adm')->nullable();
            $table->text('nivel_atencion')->nullable();
            $table->integer('clave_nivel_atencion')->nullable();
            $table->text('estatus_acreditacion')->nullable();
            $table->integer('clave_estatus_acreditacion')->nullable();
            $table->text('acreditaciones')->nullable();
            $table->text('subacreditacion')->nullable();
            $table->text('estrato_unidad')->nullable();
            $table->integer('clave_estrato_unidad')->nullable();
            $table->string('tipo_obra')->nullable();
            $table->integer('clave_tipo_obra')->nullable();
            $table->text('horario_de_atencion')->nullable();
            $table->text('areas_y_servicios')->nullable();
            $table->text('ultimo_movimiento')->nullable();
            $table->string('fecha_ultimo_movimiento')->nullable();
            $table->text('certificacion_csg')->nullable();
            $table->string('tipo_certificacion')->nullable();
            $table->string('vigencia_certificacion')->nullable();
            $table->decimal('lat', 11, 8)->nullable();
            $table->decimal('lon', 11, 8)->nullable();
            $table->integer('has_ubicacion')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establecimientos_salud');
    }
}
