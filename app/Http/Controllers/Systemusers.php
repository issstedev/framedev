<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Viewsystemusers;
use App\Models\Viewsystemlog;
use App\Models\Systemusers as ModelSystemusers;
use Helpme;

class Systemusers extends Controller
{
  public function __construct()
  {
      $this->middleware('permiso:Usuarios|index', ['only' => ['index','listado']]);
      $this->middleware('permiso:Usuarios|obtener_usuarios', ['only' => ['obtener_usuarios']]);
      $this->middleware('permiso:Login|loginlogger', ['only' => ['loginlogger','loginlogger_get']]);
  }
  public function index()  {/*nothing :(*/}

  public function listado($id_sistema){return view('sistemas/usuarios')->with('bloqueados', ModelSystemusers::usuarios_bloqueados());}

  public function obtener_usuarios($id_sistema){print json_encode(Viewsystemusers::obtener_usuarios($id_sistema));  }

  public function loginlogger($id_sistema){return view('sistemas/logger');}

  public function loginlogger_get($id_sistema){print json_encode(Viewsystemlog::logger($id_sistema));}

}
