<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Framework\Catalogo;
use Helpme;

class Inventarios extends Controller
{
  public function __construct()
  {
      $this->middleware('permiso:Inventarios|index', ['only' => ['index']]);
      $this->middleware('permiso:Inventarios|alta', ['only' => ['computo','telefonia','red']]);
  }

  public function index(){
    return view('plantilla/404_full');
  }

  public function computo()
  {
    $tiporol = Catalogo::selectCatalog('tiporol',null);
    $datos = [
        'tiporol' => $tiporol
    ];
    return view('inventarios/computo')->with('datos', $datos);
  }

  public function telefonia()
  {
    $tiporol = Catalogo::selectCatalog('tiporol',null);
    $datos = [
        'tiporol' => $tiporol
    ];
    return view('inventarios/telefonia')->with('datos', $datos);
  }

  public function red()
  {
    $tiporol = Catalogo::selectCatalog('tiporol',null);
    $datos = [
        'tiporol' => $tiporol
    ];
    return view('inventarios/red')->with('datos', $datos);
  }

}
