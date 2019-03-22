<?php

use Illuminate\Database\Seeder;
use App\EstablecimientoSalud;
use Keboola\Csv\CsvFile;


class LoadEstablecimientoSaludSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
               $csv= new CsvFile(base_path().'/database/seeds/csv/ESTABLECIMIENTO_SALUD_201811-pipe3.csv','|');
      foreach($csv AS $row) {
    		$establecimiento= new EstablecimientoSalud;
            $establecimiento->create([
       		'clues'=> $row[0],
			'nombre_de_la_entidad'=> $row[1],
			'clave_de_la_entidad'=> (int)$row[2],
			'nombre_del_municipio'=> $row[3],
			'clave_del_municipio'=> (int)$row[4],
			'nombre_de_la_localidad'=> $row[5],
			'clave_de_la_localidad'=> (int)$row[6],
			'nombre_de_la_jurisdiccion'=> $row[7],
			'clave_de_la_jurisdiccion'=> (int)$row[8],
			'nombre_de_la_institucion'=> $row[9],
			'clave_de_la_institucion'=> $row[10],
			'clave_corta_de_la_institucion'=> $row[11],
			'nombre_tipo_establecimiento'=> $row[12],
			'clave_tipo_establecimiento'=> (int)$row[13],
			'nombre_de_tipologia'=> $row[14],
			'clave_de_tipologia'=> $row[15],
			'nombre_de_subtipologia'=> $row[16],
			'clave_de_subtipologia'=> $row[17],
			'clave_scian'=> $row[18],
			'descripcion_clave_scian'=> $row[19],
			'consultorios_de_med_gral'=> $row[20],
			'consultorios_en_otras_areas'=> $row[21],
			'total_de_consultorios'=> $row[22],
			'camas_en_area_de_hos'=> $row[23],
			'camas_en_otras_areas'=> $row[24],
			'total_de_camas'=> $row[25],
			'nombre_de_la_unidad'=> trim(preg_replace('/[\x00-\x1f\x7f\xa0]/u', '', $row[26])),
			'clave_de_vialidad'=> $row[27],
			'tipo_de_vialidad'=> $row[28],
			'vialidad'=> trim(preg_replace('/[\x00-\x1f\x7f\xa0]/u', '', $row[29])),
			'numero_exterior'=> trim($row[20]),
			'numero_interior'=> $row[31],
			'clave_del_tipo_de_asentamiento'=> $row[32],
			'tipo_de_asentamiento'=> $row[33],
			'asentamiento'=> trim(preg_replace('/[\x00-\x1f\x7f\xa0]/u', '', $row[34])),
			'entre_tipo_de_vialidad_1'=> trim(preg_replace('/[\x00-\x1f\x7f\xa0]/u', '', $row[35])),
			'entre_vialidad_1'=> trim(preg_replace('/[\x00-\x1f\x7f\xa0]/u', '', $row[36])),
			'entre_tipo_de_vialidad_2'=> trim(preg_replace('/[\x00-\x1f\x7f\xa0]/u', '', $row[37])),
			'entre_vialidad_2'=> trim(preg_replace('/[\x00-\x1f\x7f\xa0]/u', '', $row[38])),
			'observaciones_de_la_direccion'=> trim(preg_replace('/[\x00-\x1f\x7f\xa0]/u', '', $row[39])),
			'codigo_postal'=> $row[40],
			'estatus_de_operacion'=> $row[41],
			'clave_de_estatus_de_operacion'=> (int)$row[42],
			'tiene_licencia_sanitaria'=> $row[43],
			'numero_de_licencia_sanitaria'=> $row[44],
			'tiene_aviso_de_funcionamiento'=> $row[45],
			'fecha_emision_av_fun'=> $row[46],
			'rfc_del_establecimiento'=> $row[47],
			'fecha_de_construccion'=> $row[48],
			'fecha_de_inicio_de_operacion'=> $row[49],
			'unidad_movil_marca'=> $row[50],
			'unidad_movil_modelo'=> $row[51],
			'unidad_movil_capacidad'=> $row[52],
			'unidad_movil_programa'=> $row[53],
			'unidad_movil_clave_programa'=> $row[54],
			'unidad_movil_tipo'=> $row[55],
			'unidad_movil_clave_tipo'=> $row[56],
			'unidad_movil_tipologia'=> $row[57],
			'unidad_movil_clave_tipologia'=> $row[58],
			'longitud'=> $row[59],
			'latitud'=> $row[60],
			'nombre_de_la_ins_adm'=> $row[61],
			'clave_de_la_ins_adm'=> $row[62],
			'nivel_atencion' => $row[63],
			'clave_nivel_atencion'=> (int)$row[64],
			'estatus_acreditacion'=> $row[65],
			'clave_estatus_acreditacion'=>(int) $row[66],
			'acreditaciones'=> trim(preg_replace('/[\x00-\x1f\x7f\xa0]/u', '', $row[67])),
			'subacreditacion'=> trim(preg_replace('/[\x00-\x1f\x7f\xa0]/u', '', $row[68])),
			'estrato_unidad'=> $row[69],
			'clave_estrato_unidad'=> (int)$row[70],
			'tipo_obra'=> $row[71],
			'clave_tipo_obra'=> (int)$row[72],
			'horario_de_atencion'=> trim(preg_replace('/[\x00-\x1f\x7f\xa0]/u', '', $row[73])),
			'areas_y_servicios'=> trim(preg_replace('/[\x00-\x1f\x7f\xa0]/u', '', $row[74])),
			'ultimo_movimiento'=> $row[75],
			'fecha_ultimo_movimiento'=> $row[76],
			'certificacion_csg'=> $row[77],
			'tipo_certificacion'=> $row[78],
			'vigencia_certificacion'=> $row[79]



       	  ]);
        }    
    }
}
