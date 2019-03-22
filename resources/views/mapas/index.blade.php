@extends('layouts.master')
@section('content')

<br>

<div class="row">
  



  <div class="col s6 m6 l6">
    <div style="width: 650px; height: 500px; margin: 0 auto;">
                        {!! $mapa !!}
    </div>
   </div> 

    <div class="col s12 m6 l6">
            <ul class="collection">
            @foreach ($entidades as $entidad)

                    <li class="collection-item dismissable" style="touch-action: pan-y;">
                    {{strtoupper($entidad->entidad)}}
                    <a href="{{url('susmx/mapas/'.$entidad->id_entidad)}}" class="secondary-content"><i class="mdi-content-send"></i></a>
                  </li>
            @endforeach
                </ul>

              </div>  
 </div> 



@endsection
