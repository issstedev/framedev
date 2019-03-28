 @extends('plantilla.master')
@section('content')

 @include('mapas._ficha', ['establecimiento'=> $establecimiento ] ) 

 @include('mapas._fichaDetalle', ['establecimiento'=> $establecimiento ] ) 
 @endsection