<?php

use Illuminate\Database\Seeder;

class populateCatalogo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>1,
      'id_padre'=>NULL,
      'catalogo'=>'tipo_ubicacion',
      'etiqueta'=>'Oficinas Centrales',
      'activo'=>'1',
      'orden'=>0,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2017-11-15 18:25:59'
      ));



      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>2,
      'id_padre'=>NULL,
      'catalogo'=>'tipo_ubicacion',
      'etiqueta'=>'Base',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));



      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>3,
      'id_padre'=>NULL,
      'catalogo'=>'status',
      'etiqueta'=>'Activo',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));



      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>4,
      'id_padre'=>NULL,
      'catalogo'=>'status',
      'etiqueta'=>'Inactivo',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));



      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>5,
      'id_padre'=>NULL,
      'catalogo'=>'status',
      'etiqueta'=>'Eliminado',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));



      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>6,
      'id_padre'=>NULL,
      'catalogo'=>'tiporol',
      'etiqueta'=>'Framework',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));



      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>7,
      'id_padre'=>NULL,
      'catalogo'=>'tiporol',
      'etiqueta'=>'Cliente',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));



      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>8,
      'id_padre'=>NULL,
      'catalogo'=>'tiporol',
      'etiqueta'=>'Operacion',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:14'
      ));



      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>9,
      'id_padre'=>NULL,
      'catalogo'=>'status',
      'etiqueta'=>'Login Fallido',
      'activo'=>'1',
      'orden'=>4,
      'valor'=>NULL,
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));



      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>10,
      'id_padre'=>NULL,
      'catalogo'=>'pass_chge',
      'etiqueta'=>'Requerir cambio de password',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>NULL,
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:52:04'
      ));



      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>11,
      'id_padre'=>NULL,
      'catalogo'=>'pass_chge',
      'etiqueta'=>'No requerir cambio de password',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>NULL,
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:52:40'
      ));



      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>12,
      'id_padre'=>NULL,
      'catalogo'=>'access_name',
      'etiqueta'=>'Acceso a Roles',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>NULL,
      'user_alta'=>1,
      'user_mod'=>NULL,
      'fecha_alta'=>'2019-01-03 12:16:22',
      'fecha_mod'=>NULL
      ));


      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>13,
      'id_padre'=>NULL,
      'catalogo'=>'status',
      'etiqueta'=>'Unsync',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>19,
      'id_padre'=>NULL,
      'catalogo'=>'auditable',
      'etiqueta'=>'Auditar',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>20,
      'id_padre'=>NULL,
      'catalogo'=>'auditable',
      'etiqueta'=>'No auditar',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>21,
      'id_padre'=>NULL,
      'catalogo'=>'estadisticas',
      'etiqueta'=>'Estadisticas',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>22,
      'id_padre'=>21,
      'catalogo'=>'area',
      'etiqueta'=>'Consultorios',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>23,
      'id_padre'=>21,
      'catalogo'=>'area',
      'etiqueta'=>'Camas Censables',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>24,
      'id_padre'=>21,
      'catalogo'=>'area',
      'etiqueta'=>'Camas No Censables',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>25,
      'id_padre'=>21,
      'catalogo'=>'area',
      'etiqueta'=>'Instalaciones',
      'activo'=>'1',
      'orden'=>4,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>26,
      'id_padre'=>21,
      'catalogo'=>'rrhh',
      'etiqueta'=>'Médicos',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>27,
      'id_padre'=>21,
      'catalogo'=>'rrhh',
      'etiqueta'=>'Servicios auxiliares y diagnósticos',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>28,
      'id_padre'=>21,
      'catalogo'=>'rrhh',
      'etiqueta'=>'Otras Profesiones',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>29,
      'id_padre'=>21,
      'catalogo'=>'rrhh',
      'etiqueta'=>'Administrativo',
      'activo'=>'1',
      'orden'=>4,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>30,
      'id_padre'=>21,
      'catalogo'=>'rrhh',
      'etiqueta'=>'Otro',
      'activo'=>'1',
      'orden'=>5,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>31,
      'id_padre'=>21,
      'catalogo'=>'comunicaciones',
      'etiqueta'=>'Enlaces de comunicacion',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>32,
      'id_padre'=>21,
      'catalogo'=>'comunicaciones',
      'etiqueta'=>'Servidores en sitio',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>33,
      'id_padre'=>21,
      'catalogo'=>'comunicaciones',
      'etiqueta'=>'Computo',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>34,
      'id_padre'=>21,
      'catalogo'=>'inventario',
      'etiqueta'=>'Equipo Médico',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>35,
      'id_padre'=>22,
      'catalogo'=>'consultorios',
      'etiqueta'=>'Odontología',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>36,
      'id_padre'=>22,
      'catalogo'=>'consultorios',
      'etiqueta'=>'Especializados',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>37,
      'id_padre'=>22,
      'catalogo'=>'consultorios',
      'etiqueta'=>'Otros (Urgencias y Tocología)',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>38,
      'id_padre'=>23,
      'catalogo'=>'camas_censables',
      'etiqueta'=>'Camas Aislados',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>38,
      'id_padre'=>23,
      'catalogo'=>'camas_censables',
      'etiqueta'=>'Camas de Cirugía General o Cirugía Reconstructiva',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>39,
      'id_padre'=>23,
      'catalogo'=>'camas_censables',
      'etiqueta'=>'Camas de Gineco-Obstetricia',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>40,
      'id_padre'=>23,
      'catalogo'=>'camas_censables',
      'etiqueta'=>'Camas de Medicina Interna',
      'activo'=>'1',
      'orden'=>4,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>41,
      'id_padre'=>23,
      'catalogo'=>'camas_censables',
      'etiqueta'=>'Camas de Otras Especialidades',
      'activo'=>'1',
      'orden'=>5,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>42,
      'id_padre'=>24,
      'catalogo'=>'camas_no_censables',
      'etiqueta'=>'Camas de Urgencia',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>43,
      'id_padre'=>24,
      'catalogo'=>'camas_no_censables',
      'etiqueta'=>'Camas de Neonatologia',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>44,
      'id_padre'=>24,
      'catalogo'=>'camas_no_censables',
      'etiqueta'=>'Camas de Recuperación Postquirúrgica',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>45,
      'id_padre'=>24,
      'catalogo'=>'camas_no_censables',
      'etiqueta'=>'Camas de Terapia Intensiva (Incluye Pediátricas y Adultos)',
      'activo'=>'1',
      'orden'=>4,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>46,
      'id_padre'=>24,
      'catalogo'=>'camas_no_censables',
      'etiqueta'=>'Camas de Terapia Intermedia (Incluye Pediátricas y Adultos)',
      'activo'=>'1',
      'orden'=>5,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>47,
      'id_padre'=>24,
      'catalogo'=>'camas_no_censables',
      'etiqueta'=>'Camas de Recuperación de Cirugía Ambulatoria',
      'activo'=>'1',
      'orden'=>6,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>48,
      'id_padre'=>24,
      'catalogo'=>'camas_no_censables',
      'etiqueta'=>'Otras Camas No Censables',
      'activo'=>'1',
      'orden'=>7,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>49,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Trabajo de enfermería',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>50,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Salas de operaciones',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>51,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Central de esterilización y equipo',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>52,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Farmacia',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>53,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Salas de expulsión',
      'activo'=>'1',
      'orden'=>4,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>54,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Incubadoras',
      'activo'=>'1',
      'orden'=>5,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>55,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Residencias médicas',
      'activo'=>'1',
      'orden'=>6,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>56,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Imagenología',
      'activo'=>'1',
      'orden'=>7,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>57,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Laboratorio Clinico',
      'activo'=>'1',
      'orden'=>8,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>58,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Laboratorio de microbiologia',
      'activo'=>'1',
      'orden'=>9,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>59,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Anatomía patológica',
      'activo'=>'1',
      'orden'=>10,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>60,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Dirección',
      'activo'=>'1',
      'orden'=>11,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>61,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Administración',
      'activo'=>'1',
      'orden'=>12,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>62,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Jefatura de enfermería',
      'activo'=>'1',
      'orden'=>13,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>63,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Archivo clínico',
      'activo'=>'1',
      'orden'=>14,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>64,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Almacén general',
      'activo'=>'1',
      'orden'=>15,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>65,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Casa de máquinas',
      'activo'=>'1',
      'orden'=>16,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>66,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Calderas',
      'activo'=>'1',
      'orden'=>17,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>67,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Subestación eléctrica',
      'activo'=>'1',
      'orden'=>18,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>68,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Planta de emergencia',
      'activo'=>'1',
      'orden'=>19,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>69,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Cocina',
      'activo'=>'1',
      'orden'=>20,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>70,
      'id_padre'=>25,
      'catalogo'=>'instalaciones',
      'etiqueta'=>'Comedor',
      'activo'=>'1',
      'orden'=>21,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>71,
      'id_padre'=>26,
      'catalogo'=>'medicos',
      'etiqueta'=>'Médicos generales',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>72,
      'id_padre'=>26,
      'catalogo'=>'medicos',
      'etiqueta'=>'Médicos especialistas',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>73,
      'id_padre'=>26,
      'catalogo'=>'medicos',
      'etiqueta'=>'Odontologos',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>74,
      'id_padre'=>26,
      'catalogo'=>'medicos',
      'etiqueta'=>'Médicos en formación',
      'activo'=>'1',
      'orden'=>4,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>75,
      'id_padre'=>26,
      'catalogo'=>'medicos',
      'etiqueta'=>'Médicos en otras labores',
      'activo'=>'1',
      'orden'=>5,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>76,
      'id_padre'=>27,
      'catalogo'=>'servicios_auxiliares',
      'etiqueta'=>'Químicos',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>77,
      'id_padre'=>27,
      'catalogo'=>'servicios_auxiliares',
      'etiqueta'=>'Técnicos en odontología',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>78,
      'id_padre'=>27,
      'catalogo'=>'servicios_auxiliares',
      'etiqueta'=>'Técnico Electromédicos (Electrocardiografía y electroencefalografía)',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>79,
      'id_padre'=>27,
      'catalogo'=>'servicios_auxiliares',
      'etiqueta'=>'Técnico en laboratorio',
      'activo'=>'1',
      'orden'=>4,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>80,
      'id_padre'=>27,
      'catalogo'=>'servicios_auxiliares',
      'etiqueta'=>'Técnico en radiología',
      'activo'=>'1',
      'orden'=>5,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>81,
      'id_padre'=>27,
      'catalogo'=>'servicios_auxiliares',
      'etiqueta'=>'Técnico en histopatología',
      'activo'=>'1',
      'orden'=>6,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>82,
      'id_padre'=>27,
      'catalogo'=>'servicios_auxiliares',
      'etiqueta'=>'Técnico en citotecnología',
      'activo'=>'1',
      'orden'=>7,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>83,
      'id_padre'=>28,
      'catalogo'=>'otras_profesiones',
      'etiqueta'=>'Trabajo social',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>84,
      'id_padre'=>28,
      'catalogo'=>'otras_profesiones',
      'etiqueta'=>'Farmacobiologos',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>85,
      'id_padre'=>28,
      'catalogo'=>'otras_profesiones',
      'etiqueta'=>'Ingeniero Biomédico',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>86,
      'id_padre'=>28,
      'catalogo'=>'otras_profesiones',
      'etiqueta'=>'Técnico en trabajo social',
      'activo'=>'1',
      'orden'=>4,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>87,
      'id_padre'=>28,
      'catalogo'=>'otras_profesiones',
      'etiqueta'=>'Técnico en estadística',
      'activo'=>'1',
      'orden'=>5,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>88,
      'id_padre'=>28,
      'catalogo'=>'otras_profesiones',
      'etiqueta'=>'Otro personal técnico',
      'activo'=>'1',
      'orden'=>6,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>89,
      'id_padre'=>29,
      'catalogo'=>'administrativo',
      'etiqueta'=>'Administrativos',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>90,
      'id_padre'=>29,
      'catalogo'=>'administrativo',
      'etiqueta'=>'Archivo Clínico',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>91,
      'id_padre'=>30,
      'catalogo'=>'otro_personal',
      'etiqueta'=>'Conservación y Mantenimiento',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>92,
      'id_padre'=>30,
      'catalogo'=>'otro_personal',
      'etiqueta'=>'Intendencia (Incluye Lavandería)',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>93,
      'id_padre'=>30,
      'catalogo'=>'otro_personal',
      'etiqueta'=>'Otro personal',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>94,
      'id_padre'=>21,
      'catalogo'=>'rrhh',
      'etiqueta'=>'Enfermeras',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>95,
      'id_padre'=>94,
      'catalogo'=>'enfermeras',
      'etiqueta'=>'Enfermeras generales',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>96,
      'id_padre'=>94,
      'catalogo'=>'enfermeras',
      'etiqueta'=>'Enfermeras especialistas',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>97,
      'id_padre'=>94,
      'catalogo'=>'enfermeras',
      'etiqueta'=>'Enfermeras auxiliares',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>98,
      'id_padre'=>94,
      'catalogo'=>'enfermeras',
      'etiqueta'=>'Enfermeras en otras actividades',
      'activo'=>'1',
      'orden'=>4,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>99,
      'id_padre'=>31,
      'catalogo'=>'enlaces_comunicacion',
      'etiqueta'=>'MPLS',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>100,
      'id_padre'=>31,
      'catalogo'=>'enlaces_comunicacion',
      'etiqueta'=>'Enlace de microondas',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>101,
      'id_padre'=>31,
      'catalogo'=>'enlaces_comunicacion',
      'etiqueta'=>'Fibra optica',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>102,
      'id_padre'=>31,
      'catalogo'=>'enlaces_comunicacion',
      'etiqueta'=>'DSL',
      'activo'=>'1',
      'orden'=>4,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>103,
      'id_padre'=>32,
      'catalogo'=>'servidores_en_sitio',
      'etiqueta'=>'Intel Xeon 4 nucleos 2.93Ghz',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>104,
      'id_padre'=>33,
      'catalogo'=>'computo',
      'etiqueta'=>'CPU',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>105,
      'id_padre'=>33,
      'catalogo'=>'computo',
      'etiqueta'=>'Impresora',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>106,
      'id_padre'=>33,
      'catalogo'=>'computo',
      'etiqueta'=>'No Break',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>107,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Angiografo',
      'activo'=>'1',
      'orden'=>1,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));





      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>108,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Colonoscopio Flexible',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>109,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Duodenoscopio Flexible',
      'activo'=>'1',
      'orden'=>2,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>110,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Electrocardiógrafo',
      'activo'=>'1',
      'orden'=>3,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>111,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Electroencefalógrafo',
      'activo'=>'1',
      'orden'=>4,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>112,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Equipo de Portátil de Rayos X',
      'activo'=>'1',
      'orden'=>5,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>113,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Gastroscopio',
      'activo'=>'1',
      'orden'=>6,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>114,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Monitor de Signos Vitales',
      'activo'=>'1',
      'orden'=>7
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>115,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Monitor neonatal',
      'activo'=>'1',
      'orden'=>8,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>116,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Osciloscopio',
      'activo'=>'1',
      'orden'=>9,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>117,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Rayos X Dental',
      'activo'=>'1',
      'orden'=>10,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>118,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Sistema de Rayos X de Propósito General Fijo',
      'activo'=>'1',
      'orden'=>11,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>119,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Tomógrafo Computado',
      'activo'=>'1',
      'orden'=>12,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>120,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Ultrasonido de Diagnostico',
      'activo'=>'1',
      'orden'=>13,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>121,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Unidad Dental',
      'activo'=>'1',
      'orden'=>14,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>122,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Ventilador Adulto',
      'activo'=>'1',
      'orden'=>15,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>123,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Ventilador de alta frecuencia',
      'activo'=>'1',
      'orden'=>16,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>124,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Ventilador de traslado',
      'activo'=>'1',
      'orden'=>17,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

      DB::table('cm_catalogo')->insert(
      array(
      'id_cat'=>125,
      'id_padre'=>34,
      'catalogo'=>'equipo_medico',
      'etiqueta'=>'Ventilador neonatal pediátrico',
      'activo'=>'1',
      'orden'=>18,
      'valor'=>'',
      'user_alta'=>1,
      'user_mod'=>1,
      'fecha_alta'=>'2016-11-16 14:41:31',
      'fecha_mod'=>'2016-11-16 14:41:31'
      ));

    }
}
