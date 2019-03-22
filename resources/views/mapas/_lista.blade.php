     <div class="row">
            	<div class="col s12 m12 l12 card-panel z-depth-1">
                    <div class="container">
                    	<div class="row">
    						<h4>Establecimientos</h4>
    				</div>
                        <div class="row">
                                <div class="col m12">
                                    <table class="striped" id="table_establecimientos">
                                        <thead>
                                            <tr class="row">
                                               <th class="">CLUES</th>
                                                <th class="">Tipo Institucion</th>
                                                <th class="">Nombre Unidad</th>
                                                <th class="">Nivel de Atencion</th>
                                                <th class="">Estado</th>
                                                <th class="">Mayor detalle</th>
                                            </tr>
                                        </thead>
                            <tbody>
                                            @foreach ($establecimientos as $establecimiento)
                                                <tr class="row">
                                                    
                                                    <td class=""> {{$establecimiento->clues}}</td>

                                                    <td class="">{{ucfirst($establecimiento->clave_de_la_institucion)}}</td>
                                                    <td class="">{{strtoupper($establecimiento->nombre_de_la_unidad) }}</td>
                                                    <td class="">{{strtoupper($establecimiento->nivel_atencion)}}</td>
                                                     <td class="">{{strtoupper($establecimiento->estatus_de_operacion)}}</td>

                                                    <td class="">
                                                       
                                                        <a href="{{url('susmx/mapas/'.$establecimiento->id.'/show')}}" class="btn-floating btn-large waves-effect waves-light red darken-4">+</a>
                                                        
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                    </div>
                </div>
              </div>

