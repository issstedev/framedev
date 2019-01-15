<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::any('/roles/index', 'Roles@index');
Route::any('/roles/establecer_permiso/{role}/{metodo}/{estado}', 'Roles@establecer_permiso');
Route::any('/roles/establecer_acceso/{id_rol}/{access}/{estado}', 'Roles@establecer_acceso');
Route::any('/roles/clonar/{id_rol}/{transfer}', 'Roles@clonar');
Route::any('/roles/agregar_rol', 'Roles@agregar_rol');
Route::any('/roles/modal_roles', 'Roles@modal_roles');
Route::any('/roles/permisos/{rol}', 'Roles@permisos');


Route::any('/controllers', 'Controllers@index');
Route::any('/controllers/obtener_controllers', 'Controllers@obtener_controllers');
Route::any('/controllers/data_controller/{id}', 'Controllers@data_controller');
Route::any('/controllers/editar_metodo', 'Controllers@editar_metodo');
Route::any('/controllers/modal_add_metodo', 'Controllers@modal_add_metodo');
Route::any('/controllers/agregar_metodo', 'Controllers@agregar_metodo');
Route::any('/controllers/eliminar_par/{id}', 'Controllers@eliminar_par');


Route::any('/sistemas', 'Sistemas@index');
Route::any('/sistemas/listado_sistemas', 'Sistemas@listado_sistemas');
Route::any('/sistemas/modal_add_sys', 'Sistemas@modal_add_sys');
Route::any('/sistemas/agregar_sistema', 'Sistemas@agregar_sistema');
Route::any('/sistemas/modal_editar_sistema/{id_sistema}', 'Sistemas@modal_editar_sistema');
Route::any('/sistemas/editar_sistema', 'Sistemas@editar_sistema');
Route::any('/sistemas/modal_relacionar_sistemas/{id_usuario}', 'Sistemas@modal_relacionar_sistemas');
Route::any('/sistemas/vincular_sistema/{id_usuario}/{id_sistema}/{estado}', 'Sistemas@vincular_sistema');



Route::any('/usuarios/upload_dropzone/{ruta}/{permisos}', 'Usuarios@upload_dropzone');
Route::post('/usuarios/editar_perfil', 'Usuarios@editar_perfil');
Route::any('/usuarios/perfil', 'Usuarios@perfil');
Route::any('/usuarios', 'Usuarios@index');
Route::any('/usuarios/obtener_usuarios', 'Usuarios@obtener_usuarios');
Route::any('/usuarios/modal_add_usr', 'Usuarios@modal_add_usr');
Route::any('/usuarios/agregar_usuario', 'Usuarios@agregar_usuario');
Route::any('/usuarios/datos_usuario/{id_usuario}', 'Usuarios@datos_usuario');
Route::any('/usuarios/desbloquea_usuario/{id_usuario}', 'Usuarios@desbloquea_usuario');
Route::any('/usuarios/desbloquear_usuarios', 'Usuarios@desbloquear_usuarios');
Route::any('/usuarios/editar_usuario', 'Usuarios@editar_usuario');
Route::any('/usuarios/logueados', 'Usuarios@logueados');
Route::any('/usuarios/logueados_get', 'Usuarios@logueados_get');



Route::get('/inicio', 'Inicio@index');
Route::get('/inicio/load_start', 'Inicio@load_start');



Route::get('/login', 'Login@index');
Route::any('/login/logear', 'Login@logear');
Route::get('/login/recuperar_datos', 'Login@recuperar_datos');
Route::get('/login/403', 'Login@error403');
Route::get('/login/tyc', 'Login@tyc');
Route::get('/login/pass_chge', 'Login@pass_chge');
Route::get('/login/lockSession', 'Login@lockSession');
Route::any('/login/salir', 'Login@salir');
Route::any('/login/verifica_session', 'Login@verifica_session');
Route::any('/login/keepAliveReset', 'Login@keepAliveReset');
Route::any('/login/keepAlive', 'Login@keepAlive');
Route::any('/login/modal_sign_out/{id_usuario}', 'Login@modal_sign_out');
Route::any('/login/sign_out/{id_usuario}', 'Login@sign_out');
Route::any('/login/loginlogger', 'Login@loginlogger');
Route::any('/login/loginlogger_get', 'Login@loginlogger_get');



Route::any('/', 'Site@index');
Route::any('/site', 'Site@index');



Route::fallback('Login@error404');
