 @extends('plantilla.master')
@section('content')

 <a href="{{url('susmx/mapas/'.$establecimiento->clave_de_la_entidad)}}" class="btn btn-success m-btn m-btn--custom m-btn--icon">
                              <span>
                                <i class="fa flaticon-delete"></i>
                                <span>
                                  Regresar
                                </span>
                              </span>
                            </a>	

 @include('mapas._ficha', ['establecimiento'=> $establecimiento ] ) 

 @include('mapas._fichaDetalle', ['establecimiento'=> $establecimiento ] ) 
 @endsection

 