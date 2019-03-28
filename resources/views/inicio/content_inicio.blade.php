 

 @include('mapas._ficha', ['establecimiento'=> Session::get('ubicacion') ] ) 
  @include('mapas._fichaDetalle', ['establecimiento'=> Session::get('ubicacion')] ) 