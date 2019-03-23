 @extends('plantilla.master')
@section('content')

 @include('mapas._ficha', ['establecimiento'=> $establecimiento ] ) 
 @endsection