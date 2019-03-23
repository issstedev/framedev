
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                           Establecimientos
                                        </h3>
                                    </div>
                                </div>

                            </div>
                            <div class="m-portlet__body">
                                <!--begin: Search Form -->
                    
                                <!--end: Search Form -->
        <!--begin: Datatable -->
                                <div class="m-datatable m-datatable--default m-datatable--brand m-datatable--loaded">
                                     <table class="m-datatable__table" id="table_establecimientos" width="100%" style="display: block; height: auto; overflow-x: auto;">
                                        <thead class="m-datatable__head">
                                            <tr class="m-datatable__row">
                                               <th class="m-datatable__cell m-datatable__cell--sort">CLUES</th>
                                                <th class="m-datatable__cell m-datatable__cell--sort">Tipo Institucion</th>
                                                <th class="m-datatable__cell m-datatable__cell--sort">Nombre Unidad</th>
                                                <th class="m-datatable__cell m-datatable__cell--sort">Nivel de Atencion</th>
                                                <th class="m-datatable__cell m-datatable__cell--sort">Estado</th>
                                                <th class="m-datatable__cell m-datatable__cell--sort">Ficha</th>
                                                <th class="m-datatable__cell m-datatable__cell--sort">Registro</th>
                                            </tr>
                                        </thead>
                            <tbody>
                                            @foreach ($establecimientos as $establecimiento)
                                                <tr class="m-datatable__row m-datatable__row--even">
                                                    <td class="m-datatable__cell"> {{$establecimiento->clues}}</td>
                                                    <td class="m-datatable__cell">{{ucfirst($establecimiento->clave_de_la_institucion)}}</td>
                                                    <td class="m-datatable__cell">{{strtoupper($establecimiento->nombre_de_la_unidad) }}</td>
                                                    <td class="m-datatable__cell">{{strtoupper($establecimiento->nivel_atencion)}}</td>
                                                     <td class="m-datatable__cell">{{strtoupper($establecimiento->estatus_de_operacion)}}</td>

                                                    <td class="datatable__cell">
                                                       
                                                        <a href="{{url('susmx/mapa/'.$establecimiento->id.'/ficha')}}" class="btn m-btn m-btn--gradient-from-info m-btn--gradient-to-accent">+</a>
                                                        
                                                    </td>
                                                       <td class="datatable__cell">
                                                       
                                                           <a href="{{url('susmx/mapa/inicio/'.$establecimiento->id)}}" class="btn btn-danger">+</a>
                                                        
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    </div>
                                <!--end: Datatable -->
                            </div>
