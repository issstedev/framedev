@extends('plantilla.master')
@section('content')

<br>

<div class="row">
  



  <div class="col s6 m6 l6">
    <div style="width: 650px; height: 500px; margin: 0 auto;">
                        {!! $mapa !!}
    </div>
   </div> 

    <div class="col s12 m6 l6">
          
          <table id="entidad" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
          <thead>
            <tr>
                <th>ID</th>
                <th>Entidad</th>
                <th>clave</th>
                <th>accciones</th>
            </tr>
          </thead>

              @foreach ($entidades as $entidad)
                  <tr>
                    <td>{{$entidad->id_entidad}}</td>
                    <td>{{strtoupper($entidad->entidad)}}</td>
                    <td>{{strtoupper($entidad->clave)}}</td>
                     <td><a href="{{url('susmx/mapas/'.$entidad->id_entidad)}}">Entra</a></td>
                  </tr>
                    @endforeach
        </table>


     </div>  
 </div> 

@endsection
