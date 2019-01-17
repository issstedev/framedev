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
Route::any('/systemroles', 'Systemroles@index');
Route::get('/systemroles/modal_roles/{id_sistema}', 'Systemroles@modal_roles');
Route::post('/systemroles/agregar_rol/{id_sistema}', 'Systemroles@agregar_rol');
Route::get('/systemroles/permisos/{id_rol}/{id_sistema}', 'Systemroles@permisos');


Route::any('/permisos', 'Permisos@index');
Route::get('/permisos/main/{id_sistema}', 'Permisos@main');
Route::post('/permisos/obtener_controllers/{id_sistema}', 'Permisos@obtener_controllers');
Route::get('/permisos/modal_add_metodo/{id_sistema}', 'Permisos@modal_add_metodo');
Route::post('/permisos/agregar_metodo', 'Permisos@agregar_metodo');
Route::any('/permisos/data_controller/{id}', 'Permisos@data_controller');
Route::any('/permisos/editar_metodo', 'Permisos@editar_metodo');
Route::any('/permisos/eliminar_par/{id}', 'Permisos@eliminar_par');


Route::get('/systemusers', 'Systemusers@index');
Route::get('/systemusers/listado/{id_sistema}', 'Systemusers@listado');
Route::post('/systemusers/obtener_usuarios/{id_sistema}', 'Systemusers@obtener_usuarios');
Route::get('/systemusers/loginlogger/{id_sistema}', 'Systemusers@loginlogger');
Route::post('/systemusers/loginlogger_get/{id_sistema}', 'Systemusers@loginlogger_get');
Route::get('/systemusers/logueados/{id_sistema}', 'Systemusers@logueados');
Route::post('/systemusers/logueados_get/{id_sistema}', 'Systemusers@logueados_get');


Route::get('/catalogo', 'Catalogo@index');
Route::post('/catalogo/obtener_catalogo', 'Catalogo@obtener_catalogo');
Route::any('/catalogo/editar_catalogo', 'Catalogo@editar_catalogo');
Route::get('/catalogo/eliminar_elemento/{ID}', 'Catalogo@eliminar_elemento');
Route::get('/catalogo/modal_add_elemento', 'Catalogo@modal_add_elemento');
Route::post('/catalogo/agregar_elemento', 'Catalogo@agregar_elemento');
Route::any('/catalogo/getCatalogoSecundario/{id_padre}/{nombre_cat}/{other?}', 'Catalogo@getCatalogoSecundario');
Route::get('/catalogo/data_catalogo/{id}', 'Catalogo@data_catalogo');


Route::any('/roles/index', 'Roles@index');
Route::get('/roles/establecer_permiso/{role}/{metodo}/{estado}', 'Roles@establecer_permiso');
Route::any('/roles/establecer_acceso/{id_rol}/{access}/{estado}', 'Roles@establecer_acceso');
Route::any('/roles/clonar/{id_rol}/{transfer}', 'Roles@clonar');
Route::post('/roles/agregar_rol', 'Roles@agregar_rol');
Route::get('/roles/modal_roles', 'Roles@modal_roles');
Route::get('/roles/permisos/{rol}', 'Roles@permisos');


Route::get('/controllers', 'Controllers@index');
Route::post('/controllers/obtener_controllers', 'Controllers@obtener_controllers');
Route::get('/controllers/data_controller/{id}', 'Controllers@data_controller');
Route::post('/controllers/editar_metodo', 'Controllers@editar_metodo');
Route::get('/controllers/modal_add_metodo', 'Controllers@modal_add_metodo');
Route::post('/controllers/agregar_metodo', 'Controllers@agregar_metodo');
Route::get('/controllers/eliminar_par/{id}', 'Controllers@eliminar_par');


Route::get('/sistemas', 'Sistemas@index');
Route::post('/sistemas/listado_sistemas', 'Sistemas@listado_sistemas');
Route::get('/sistemas/modal_add_sys', 'Sistemas@modal_add_sys');
Route::post('/sistemas/agregar_sistema', 'Sistemas@agregar_sistema');
Route::get('/sistemas/modal_editar_sistema/{id_sistema}', 'Sistemas@modal_editar_sistema');
Route::post('/sistemas/editar_sistema', 'Sistemas@editar_sistema');
Route::get('/sistemas/modal_relacionar_sistemas/{id_usuario}', 'Sistemas@modal_relacionar_sistemas');
Route::get('/sistemas/vincular_sistema/{id_usuario}/{id_sistema}/{estado}', 'Sistemas@vincular_sistema');



Route::post('/usuarios/upload_dropzone/{ruta}/{permisos}', 'Usuarios@upload_dropzone');
Route::post('/usuarios/update_avatar/{file}', 'Usuarios@update_avatar');
Route::post('/usuarios/editar_perfil', 'Usuarios@editar_perfil');
Route::get('/usuarios/perfil', 'Usuarios@perfil');
Route::get('/usuarios', 'Usuarios@index');
Route::post('/usuarios/obtener_usuarios', 'Usuarios@obtener_usuarios');
Route::get('/usuarios/modal_add_usr', 'Usuarios@modal_add_usr');
Route::post('/usuarios/agregar_usuario', 'Usuarios@agregar_usuario');
Route::get('/usuarios/datos_usuario/{id_usuario}', 'Usuarios@datos_usuario');
Route::get('/usuarios/desbloquea_usuario/{id_usuario}', 'Usuarios@desbloquea_usuario');
Route::get('/usuarios/desbloquear_usuarios', 'Usuarios@desbloquear_usuarios');
Route::post('/usuarios/editar_usuario', 'Usuarios@editar_usuario');
Route::get('/usuarios/logueados', 'Usuarios@logueados');
Route::post('/usuarios/logueados_get', 'Usuarios@logueados_get');
Route::post('/usuarios/cambiar_password', 'Usuarios@cambiar_password');
Route::get('/usuarios/tyc/{stat}', 'Usuarios@tyc');



Route::get('/inicio', 'Inicio@index');
Route::get('/inicio/load_start', 'Inicio@load_start');



Route::get('/login', 'Login@index');
Route::post('/login/logear', 'Login@logear');
Route::any('/login/recuperar_datos', 'Login@recuperar_datos');
Route::any('/login/403', 'Login@error403');
Route::get('/login/tyc', 'Login@tyc');
Route::get('/login/pass_chge', 'Login@pass_chge');
Route::get('/login/lockSession', 'Login@lockSession');
Route::post('/login/salir', 'Login@salir');
Route::post('/login/verifica_session', 'Login@verifica_session');
Route::get('/login/keepAliveReset', 'Login@keepAliveReset');
Route::any('/login/keepAlive', 'Login@keepAlive');
Route::get('/login/modal_sign_out/{id_usuario}', 'Login@modal_sign_out');
Route::get('/login/sign_out/{id_usuario}', 'Login@sign_out');
Route::get('/login/loginlogger', 'Login@loginlogger');
Route::post('/login/loginlogger_get', 'Login@loginlogger_get');



Route::get('/', 'Site@index');
Route::get('/site', 'Site@index');



Route::fallback('Login@error404');
