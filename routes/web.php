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


Route::get('/ubicacion', 'Framework\Inicio@ubicacion');

Route::group(['prefix' => 'susmx'], function() {

        Route::get('/mapas', 'Inventarios\MapsController@index');
        Route::get('mapas/{id}', 'Inventarios\MapsController@show')->name('mapasShow');
        Route::post('/mapas/buscar/{id}', 'Inventarios\MapsController@search')->name('buscar');
        Route::get('/mapa/demo', 'Inventarios\MapsController@pintaMapa');
        Route::get('/mapa/ficha/{id}', 'Inventarios\MapsController@ficha');
        Route::get('/mapa/inicio/{id}', 'Inventarios\MapsController@inicio');


});

Route::group(['prefix' => 'estadistica'], function(){
        Route::get('/', 'Inventarios\Estadistica@index');
        Route::get('/contacto', 'Inventarios\Estadistica@contacto');
        Route::get('/areas', 'Inventarios\Estadistica@areas');
        Route::get('/rhumanos', 'Inventarios\Estadistica@rhumanos');
        Route::get('/comunicaciones', 'Inventarios\Estadistica@comunicaciones');
        Route::get('/inventario', 'Inventarios\Estadistica@inventario');
        Route::get('/inf_hospitalaria', 'Inventarios\Estadistica@inf_hospitalaria');
        Route::post('/add_contacto', 'Inventarios\Estadistica@add_contacto');
        Route::post('/add_consultorio', 'Inventarios\Estadistica@add_consultorio');
        Route::post('/add_camas', 'Inventarios\Estadistica@add_camas');         
        Route::post('/add_camasno', 'Inventarios\Estadistica@add_camasno');
        Route::post('/add_instalaciones', 'Inventarios\Estadistica@add_instalaciones');
        Route::post('/add_medicos', 'Inventarios\Estadistica@add_medicos');
        Route::post('/add_servicios', 'Inventarios\Estadistica@add_servicios');
        Route::post('/add_otras_profesiones', 'Inventarios\Estadistica@add_otras_profesiones');
        Route::post('/add_administrativo', 'Inventarios\Estadistica@add_administrativo');
        Route::post('/add_otro_personal', 'Inventarios\Estadistica@add_otro_personal');
        Route::post('/add_enfermeras', 'Inventarios\Estadistica@add_enfermeras');
        Route::post('/add_enlace',  'Inventarios\Estadistica@add_enlace');
        Route::post('/add_server',  'Inventarios\Estadistica@add_server');
        Route::post('/add_computo', 'Inventarios\Estadistica@add_computo');
        Route::post('/add_inventario', 'Inventarios\Estadistica@add_inventario');
});

Route::group(['prefix' => 'inventarios'], function(){
        Route::get('/', 'Inventarios\inventarios@index');
        Route::get('/computo', 'Inventarios\inventarios@computo');
        Route::get('/telefonia', 'Inventarios\inventarios@telefonia');
        Route::get('/red', 'Inventarios\inventarios@red');
});

Route::group(['prefix' => 'webhook'], function(){
        Route::get('/', 'Framework\Webhook@index');
        Route::any('/backup', 'Framework\Webhook@backup');
        Route::any('/populate', 'Framework\Webhook@populate');
        Route::any('/syncuser', 'Framework\Webhook@syncuser');
        Route::any('/updateuser', 'Framework\Webhook@updateuser');
        Route::any('/updateroldata', 'Framework\Webhook@updateroldata');
        Route::any('/syncrol', 'Framework\Webhook@syncrol');
        Route::any('/syncmetodo', 'Framework\Webhook@syncmetodo');
});

Route::group(['prefix' => 'systemroles'], function(){
        Route::get('/', 'Framework\Systemroles@index');
        Route::get('/modal_roles/{id_sistema}', 'Framework\Systemroles@modal_roles');
        Route::post('/agregar_rol/{id_sistema}', 'Framework\Systemroles@agregar_rol');
        Route::get('/permisos/{id_rol}/{id_sistema}', 'Framework\Systemroles@permisos');
});

Route::group(['prefix' => 'permisos'], function(){
        Route::get('/', 'Framework\Permisos@index');
        Route::get('/main/{id_sistema}', 'Framework\Permisos@main');
        Route::post('/obtener_controllers/{id_sistema}', 'Framework\Permisos@obtener_controllers');
        Route::get('/modal_add_metodo/{id_sistema}', 'Framework\Permisos@modal_add_metodo');
        Route::post('/agregar_metodo', 'Framework\Permisos@agregar_metodo');
        Route::any('/data_controller/{id}', 'Framework\Permisos@data_controller');
        Route::any('/editar_metodo', 'Framework\Permisos@editar_metodo');
        Route::any('/eliminar_par/{id}', 'Framework\Permisos@eliminar_par');
});

Route::group(['prefix' => 'systemusers'], function(){
        Route::get('/', 'Framework\Systemusers@index');
        Route::get('/listado/{id_sistema}', 'Framework\Systemusers@listado');
        Route::post('/obtener_usuarios/{id_sistema}', 'Framework\Systemusers@obtener_usuarios');
        Route::get('/loginlogger/{id_sistema}', 'Framework\Systemusers@loginlogger');
        Route::post('/loginlogger_get/{id_sistema}', 'Framework\Systemusers@loginlogger_get');
        Route::get('/logueados/{id_sistema}', 'Framework\Systemusers@logueados');
        Route::post('/logueados_get/{id_sistema}', 'Framework\Systemusers@logueados_get');
});

Route::group(['prefix' => 'catalogo'], function(){
        Route::get('/', 'Framework\Catalogo@index');
        Route::post('/obtener_catalogo', 'Framework\Catalogo@obtener_catalogo');
        Route::any('/editar_catalogo', 'Framework\Catalogo@editar_catalogo');
        Route::get('/eliminar_elemento/{ID}', 'Framework\Catalogo@eliminar_elemento');
        Route::get('/modal_add_elemento', 'Framework\Catalogo@modal_add_elemento');
        Route::post('/agregar_elemento', 'Framework\Catalogo@agregar_elemento');
        Route::any('/getCatalogoSecundario/{id_padre}/{nombre_cat}/{other?}', 'Framework\Catalogo@getCatalogoSecundario');
        Route::get('/data_catalogo/{id}', 'Framework\Catalogo@data_catalogo');
});

Route::group(['prefix' => 'roles'], function(){
        Route::any('/', 'Framework\Roles@index');
        Route::any('/index', 'Framework\Roles@index');
        Route::get('/establecer_permiso/{role}/{metodo}/{estado}', 'Framework\Roles@establecer_permiso');
        Route::any('/establecer_acceso/{id_rol}/{access}/{estado}', 'Framework\Roles@establecer_acceso');
        Route::any('/clonar/{id_rol}/{transfer}', 'Framework\Roles@clonar');
        Route::post('/agregar_rol', 'Framework\Roles@agregar_rol');
        Route::get('/modal_roles', 'Framework\Roles@modal_roles');
        Route::get('/permisos/{rol}', 'Framework\Roles@permisos');
});

Route::group(['prefix' => 'controllers'], function(){
        Route::get('/', 'Framework\Controllers@index');
        Route::post('/obtener_controllers', 'Framework\Controllers@obtener_controllers');
        Route::get('/data_controller/{id}', 'Framework\Controllers@data_controller');
        Route::post('/editar_metodo', 'Framework\Controllers@editar_metodo');
        Route::get('/modal_add_metodo', 'Framework\Controllers@modal_add_metodo');
        Route::post('/agregar_metodo', 'Framework\Controllers@agregar_metodo');
        Route::get('/eliminar_par/{id}', 'Framework\Controllers@eliminar_par');
});

Route::group(['prefix' => 'sistemas'], function(){
        Route::get('/', 'Framework\Sistemas@index');
        Route::post('/listado_sistemas', 'Framework\Sistemas@listado_sistemas');
        Route::get('/modal_add_sys', 'Framework\Sistemas@modal_add_sys');
        Route::post('/agregar_sistema', 'Framework\Sistemas@agregar_sistema');
        Route::get('/modal_editar_sistema/{id_sistema}', 'Framework\Sistemas@modal_editar_sistema');
        Route::post('/editar_sistema', 'Framework\Sistemas@editar_sistema');
        Route::get('/modal_relacionar_sistemas/{id_usuario}', 'Framework\Sistemas@modal_relacionar_sistemas');
        Route::get('/vincular_sistema/{id_usuario}/{id_sistema}/{estado}', 'Framework\Sistemas@vincular_sistema');
});

Route::group(['prefix' => 'usuarios'], function(){
        Route::get('/', 'Framework\Usuarios@index');
        Route::post('/upload_dropzone/{ruta}/{permisos}', 'Framework\Usuarios@upload_dropzone');
        Route::post('/update_avatar/{file}', 'Framework\Usuarios@update_avatar');
        Route::post('/editar_perfil', 'Framework\Usuarios@editar_perfil');
        Route::get('/perfil', 'Framework\Usuarios@perfil');
        Route::post('/obtener_usuarios', 'Framework\Usuarios@obtener_usuarios');
        Route::get('/modal_add_usr', 'Framework\Usuarios@modal_add_usr');
        Route::post('/agregar_usuario', 'Framework\Usuarios@agregar_usuario');
        Route::get('/datos_usuario/{id_usuario}', 'Framework\Usuarios@datos_usuario');
        Route::get('/desbloquea_usuario/{id_usuario}', 'Framework\Usuarios@desbloquea_usuario');
        Route::get('/desbloquear_usuarios', 'Framework\Usuarios@desbloquear_usuarios');
        Route::post('/editar_usuario', 'Framework\Usuarios@editar_usuario');
        Route::get('/logueados', 'Framework\Usuarios@logueados');
        Route::post('/logueados_get', 'Framework\Usuarios@logueados_get');
        Route::post('/cambiar_password', 'Framework\Usuarios@cambiar_password');
        Route::get('/tyc/{stat}', 'Framework\Usuarios@tyc');
});


Route::group(['prefix' => 'inicio'], function(){
        Route::get('/', 'Framework\Inicio@index')->name('inicio');
        Route::get('/load_start', 'Framework\Inicio@load_start');
});

Route::group(['prefix' => 'login'], function(){
        Route::get('/', 'Framework\Login@index');
        Route::post('/logear', 'Framework\Login@logear');
        Route::any('/recuperar_datos', 'Framework\Login@recuperar_datos');
        Route::get('/403', 'Framework\Login@error403');
        Route::get('/error404', 'Framework\Login@error404');
        Route::get('/error500', 'Framework\Login@error500');
        Route::get('/tyc', 'Framework\Login@tyc');
        Route::get('/pass_chge', 'Framework\Login@pass_chge');
        Route::get('/lockSession', 'Framework\Login@lockSession');
        Route::post('/salir', 'Framework\Login@salir');
        Route::post('/verifica_session', 'Framework\Login@verifica_session');
        Route::get('/keepAliveReset', 'Framework\Login@keepAliveReset');
        Route::get('/keepAlive', 'Framework\Login@keepAlive');
        Route::get('/modal_sign_out/{id_usuario}', 'Framework\Login@modal_sign_out');
        Route::get('/sign_out/{id_usuario}', 'Framework\Login@sign_out');
        Route::get('/loginlogger', 'Framework\Login@loginlogger');
        Route::post('/loginlogger_get', 'Framework\Login@loginlogger_get');
        Route::get('/modal_all_sign_out', 'Framework\Login@modal_all_sign_out');
        Route::get('/sign_all_out', 'Framework\Login@sign_all_out');
        Route::get('/auditoria', 'Framework\Login@auditoria');
        Route::post('/auditoria_get', 'Framework\Login@auditoria_get');
        Route::get('/modal_auditoria/{id_usuario}', 'Framework\Login@modal_auditoria');
        Route::post('/getAuditoriaUserDate/{id_usuario}/{date}', 'Framework\Login@getAuditoriaUserDate');
});

Route::get('/', 'Framework\Site@index');

Route::group(['prefix' => 'site'], function(){
        Route::get('/', 'Framework\Site@index');
});

Route::fallback('Login@error404');
