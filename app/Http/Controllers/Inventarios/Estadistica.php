<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Inventarios as InventariosModel;
use App\Models\Catalogo;
use Helpme;

class Estadistica extends Controller
{
  public function __construct()
  {
      $this->middleware('permiso:Estadistica|index', ['only' => ['index']]);
      $this->middleware('permiso:Estadistica|contacto', ['only' => ['contacto']]);
      $this->middleware('permiso:Estadistica|areas', ['only' => ['areas']]);
      $this->middleware('permiso:Estadistica|rhumanos', ['only' => ['rhumanos']]);
      $this->middleware('permiso:Estadistica|comunicaciones', ['only' => ['comunicaciones']]);
      $this->middleware('permiso:Estadistica|inventario', ['only' => ['inventario']]);
      $this->middleware('permiso:Estadistica|inf_hospitalaria', ['only' => ['inf_hospitalaria']]);
  }

  public function index(){
    return view('plantilla/404_full');
  }

  public function contacto()
  {
    $tiporol = Catalogo::selectCatalog('tiporol',null);
    $datos = [
        'tiporol' => $tiporol
    ];
    return view('estadistica/contacto')->with('datos', $datos);
  }

  public function areas()
  {
    $tiporol = Catalogo::selectCatalog('tiporol',null);
    $datos = [
        'tiporol' => $tiporol
    ];
    return view('estadistica/areas')->with('datos', $datos);
  }

  public function rhumanos()
  {
    $tiporol = Catalogo::selectCatalog('tiporol',null);
    $datos = [
        'tiporol' => $tiporol
    ];
    return view('estadistica/rhumanos')->with('datos', $datos);
  }

  public function comunicaciones()
  {
    $tiporol = Catalogo::selectCatalog('tiporol',null);
    $datos = [
        'tiporol' => $tiporol
    ];
    return view('estadistica/comunicaciones')->with('datos', $datos);
  }

  public function inventario()
  {
    $tiporol = Catalogo::selectCatalog('tiporol',null);
    $datos = [
        'tiporol' => $tiporol
    ];
    return view('estadistica/inventario')->with('datos', $datos);
  }

  public function inf_hospitalaria()
  {
    $tiporol = Catalogo::selectCatalog('tiporol',null);
    $datos = [
        'tiporol' => $tiporol
    ];
    return view('estadistica/inf_hospitalaria')->with('datos', $datos);
  }


}
