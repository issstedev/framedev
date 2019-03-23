  @extends('plantilla.master')
  @section('content')
       
  		 <div class="m-content">
      <div class="m-portlet m-portlet--mobile">

   <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                           Buscar
                                        </h3>
                                    </div>
                                </div>

     </div>

  <div class="form-control m-input">
    {!! Form::open(['url' => '/susmx/mapas/buscar/'.$entidad->id_entidad, 'method' => 'post'] ) !!}
    {{ csrf_field() }}
    <div class="form-group m-form__group row">
   


      <div class="col-lg-3">
        {!! Form::label('clave_de_la_institucion', 'Tipo Institución', ["class" => "label"]) !!}
        {!! Form::select('clave_de_la_institucion', [''=> 'TODOS','CRO'=> 'CRUZ ROJA', 'DIF' => 'DIF', 'IMSS' => 'IMSS', 'IMSS-PROSPERA' => 'IMSS-PROSPERA', 'SSA'=> 'SSA', 'ISSSTE'=> 'ISSSTE', 'SEDENA' => 'SEDENA'], 'TODOS')  !!} 
    

      </div>
      <div class="col-lg-3">
      {!! Form::label('nivel_atencion', 'NIVEL DE ATENCIÓN', ["class" => "label"]) !!}
      {!! Form::select('nivel_atencion', [ ''=> 'TODOS', 6=> 'NO APLICA',  1=> 'PRIMER NIVEL',  2=> 'SEGUNDO NIVEL', 3=>'TERCER NIVEL' ])  !!} 
    </div>
      <div class="col-lg-3">
        {!! Form::label('status_de_operacion', 'Estatus', ["class" => "label"]) !!}
        {!! Form::select('status_de_operacion', [''=> 'TODOS',1 => 'EN OPERACION', 2 => 'PENDIENTE DE INICIO DE OPERACIONES',  3=> 'FUERA DE OPERACION' ])  !!} 

        
      </div>
      <div class="col-lg-3 m--align-right">
      <button type="submit" class="btn waves-effect waves-light red darken-4
">Buscar</button>
    </div>
</div>

  {!! Form::close() !!}
</div>

     
      @if($establecimientos->count() > 1 )         
    <div class="m-portlet__body">
      {{$establecimientos->count()}}
      
      </div>
    <div class="row">
    <div class="col-lg-6">
      <div style="width: 550px; height: 550px; margin: 0 auto;">
        {!! $mapa !!}
      </div>  
        </div> 
  



  
      <div class="col-lg-6">
        
               @include('mapas._lista', ['establecimientos'=> $establecimientos ] ) 
        
       </div>        
     </div>
            
      @endif           
      
     
 </div>
</div>

<script type="text/javascript">
    $(document).ready( function () {
        $('#table_establecimientos').DataTable();
    } );
</script>

  @endsection