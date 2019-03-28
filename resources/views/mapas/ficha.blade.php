@extends('plantilla.master')
@section('content')
Hola mundo
@include('mapas._ficha', ['establecimiento'=> $establecimiento ] )
@endsection
