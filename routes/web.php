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

Route::any('usuarios/upload_dropzone/{ruta}/{permisos}', 'Usuarios@upload_dropzone');
Route::post('usuarios/editar_perfil', 'Usuarios@editar_perfil');
Route::any('/usuarios/perfil', 'Usuarios@perfil');
Route::any('/usuarios', 'Usuarios@index');

Route::get('/', 'Inicio@index');
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
Route::post('/login/keepAliveReset', 'Login@keepAliveReset');
Route::post('/login/keepAlive', 'Login@keepAlive');

Route::any('/site', 'Site@index');

Route::fallback('Login@error404');
