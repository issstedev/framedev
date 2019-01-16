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
Route::any('/systemroles/modal_roles/{id_sistema}', 'Systemroles@modal_roles');
Route::any('/systemroles/agregar_rol/{id_sistema}', 'Systemroles@agregar_rol');
Route::any('/systemroles/permisos/{id_rol}/{id_sistema}', 'Systemroles@permisos');


Route::any('/permisos', 'Permisos@index');
Route::any('/permisos/main/{id_sistema}', 'Permisos@main');
Route::any('/permisos/obtener_controllers/{id_sistema}', 'Permisos@obtener_controllers');
Route::any('/permisos/modal_add_metodo/{id_sistema}', 'Permisos@modal_add_metodo');
Route::any('/permisos/agregar_metodo', 'Permisos@agregar_metodo');
Route::any('/permisos/data_controller/{id}', 'Permisos@data_controller');
Route::any('/permisos/editar_metodo', 'Permisos@editar_metodo');
Route::any('/permisos/eliminar_par/{id}', 'Permisos@eliminar_par');


Route::any('/systemusers', 'Systemusers@index');
Route::any('/systemusers/listado/{id_sistema}', 'Systemusers@listado');
Route::any('/systemusers/obtener_usuarios/{id_sistema}', 'Systemusers@obtener_usuarios');
Route::any('/systemusers/loginlogger/{id_sistema}', 'Systemusers@loginlogger');
Route::any('/systemusers/loginlogger_get/{id_sistema}', 'Systemusers@loginlogger_get');


Route::any('/catalogo', 'Catalogo@index');
Route::any('/catalogo/obtener_catalogo', 'Catalogo@obtener_catalogo');
Route::any('/catalogo/editar_catalogo', 'Catalogo@editar_catalogo');
Route::any('/catalogo/eliminar_elemento/{ID}', 'Catalogo@eliminar_elemento');
Route::any('/catalogo/modal_add_elemento', 'Catalogo@modal_add_elemento');
Route::any('/catalogo/agregar_elemento', 'Catalogo@agregar_elemento');
Route::any('/catalogo/getCatalogoSecundario/{id_padre}/{nombre_cat}/{other?}', 'Catalogo@getCatalogoSecundario');
Route::any('/catalogo/data_catalogo/{id}', 'Catalogo@data_catalogo');


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
Route::any('/usuarios/editar_perfil', 'Usuarios@editar_perfil');
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



Route::any('/login', 'Login@index');
Route::any('/login/logear', 'Login@logear');
Route::any('/login/recuperar_datos', 'Login@recuperar_datos');
Route::any('/login/403', 'Login@error403');
Route::any('/login/tyc', 'Login@tyc');
Route::any('/login/pass_chge', 'Login@pass_chge');
Route::any('/login/lockSession', 'Login@lockSession');
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
