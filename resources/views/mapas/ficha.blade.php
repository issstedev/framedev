 @extends('plantilla.master')
@section('content')

<i class="fa fa-undo"> ::before </i>

 @include('mapas._ficha', ['establecimiento'=> $establecimiento ] ) 

 @include('mapas._fichaDetalle', ['establecimiento'=> $establecimiento ] ) 
 @endsection