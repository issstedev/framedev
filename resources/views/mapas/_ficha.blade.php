<div class="m-content">
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        {{$establecimiento->nombre_completo()}}
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="row">
                <div class="col-lg-6">
                    <div style="width: 350px; height: 300px; margin: 0 auto;">
                        {!! $establecimiento->pintaMapa() !!}
                    </div>
                </div>
                <div class="m-demo__preview col-lg-6">
                    <div class="m-list-search">
                        <div class="m-list-search__results">
                            <span class="m-list-search__result-category m-list-search__result-category--first">
                            Informacion General
                            </span>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-interface-3 m--font-warning"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            CLUES: {{$establecimiento->clues}}
                            </span>
                            <br>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-share m--font-success"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            INSTITUCION:{{$establecimiento->nombre_de_la_institucion}}
                            </span>
                            <br>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-share m--font-success"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            TIPO:{{$establecimiento->nombre_de_tipologia}}
                            </span>
                            <br>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-share m--font-success"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            INICIO:{{$establecimiento->fecha_de_inicio_de_operacion}}
                            </span>
                            <br>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-share m--font-success"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            ENTIDAD:{{$establecimiento->nombre_de_la_entidad}}
                            </span>
                            <br>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-share m--font-success"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            MUNICIPIO:{{$establecimiento->nombre_del_municipio}}
                            </span>
                            <br>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-share m--font-success"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            JURISDICCION:{{$establecimiento->nombre_de_la_jurisdiccion}}
                            </span>
                            <br>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-share m--font-success"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            DIRECCIÓN:{{$establecimiento->direccion()}}
                            </span>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD

    <div class="row">
    	    <div class="col-lg-6">
    	
    	    

    		 <div class="m-portlet m-portlet--mobile">

             
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                          	Areas
                                        </h3>
                                    </div>
                                </div>

                            </div>

                       <div class="m-portlet__body">

                       		

	
                       </div>		
               </div>        	

    	    </div>
    	    
    	    <div class="col-lg-6">
    		    		 <div class="m-portlet m-portlet--mobile">

             
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                          	Recursos Humanos
                                        </h3>
                                    </div>
                                </div>

                            </div>

                       <div class="m-portlet__body">
                       	<div class="m-portlet m-portlet--full-height m-portlet--tabs  ">

      <div class="m-portlet__head">
        <div class="m-portlet__head-tools">
          <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link active" data-toggle="tab" href="#rrhh_tab_1" role="tab">
                <i class="flaticon-share m--hide"></i>
                Médicos
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#rrhh_tab_2" role="tab">
                <i class="flaticon-share m--hide"></i>
                Servicios auxiliares y diagnósticos
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#rrhh_tab_3" role="tab">
                <i class="flaticon-share m--hide"></i>
                Otras profesiones
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#rrhh_tab_4" role="tab">
                <i class="flaticon-share m--hide"></i>
                Administrativo
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#rrhh_tab_5" role="tab">
                <i class="flaticon-share m--hide"></i>
                Otro
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#rrhh_tab_6" role="tab">
                <i class="flaticon-share m--hide"></i>
                Enfermeras
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content">
        <div class="tab-pane active" id="rrhh_tab_1">

          <div class="col s12 m6 l6">
              <table style="display:{{$display1}}" id="rrhh_table_1" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($list_medicos as $clave => $valor)
                      <tr>
                        <td>{{++$clave}}</td>
                        <td>{{strtoupper($valor->descripcion)}}</td>
                        <td>{{strtoupper($valor->cantidad)}}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
        </div>
        <div class="tab-pane" id="rrhh_tab_2">
 
          <div class="col s12 m6 l6">
              <table style="display:{{$display2}}" id="rrhh_table_2" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($list_servicios_auxiliares as $clave => $valor)
                      <tr>
                        <td>{{++$clave}}</td>
                        <td>{{strtoupper($valor->descripcion)}}</td>
                        <td>{{strtoupper($valor->cantidad)}}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
        </div>
        <div class="tab-pane" id="rrhh_tab_3">

          <div class="col s12 m6 l6">
              <table style="display:{{$display3}}" id="rrhh_table_3" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($list_otras_profesiones as $clave => $valor)
                      <tr>
                        <td>{{++$clave}}</td>
                        <td>{{strtoupper($valor->descripcion)}}</td>
                        <td>{{strtoupper($valor->cantidad)}}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
        </div>
        <div class="tab-pane" id="rrhh_tab_4">

          <div class="col s12 m6 l6">
              <table style="display:{{$display4}}" id="rrhh_table_4" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($list_administrativo as $clave => $valor)
                      <tr>
                        <td>{{++$clave}}</td>
                        <td>{{strtoupper($valor->descripcion)}}</td>
                        <td>{{strtoupper($valor->cantidad)}}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
        </div>
        <div class="tab-pane" id="rrhh_tab_5">
 
          <div class="col s12 m6 l6">
              <table style="display:{{$display5}}" id="rrhh_table_5" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($list_otro_personal as $clave => $valor)
                      <tr>
                        <td>{{++$clave}}</td>
                        <td>{{strtoupper($valor->descripcion)}}</td>
                        <td>{{strtoupper($valor->cantidad)}}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
        </div>
        <div class="tab-pane" id="rrhh_tab_6">
                    <div class="col s12 m6 l6">
              <table style="display:{{$display6}}" id="rrhh_table_6" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($list_enfermeras as $clave => $valor)
                      <tr>
                        <td>{{++$clave}}</td>
                        <td>{{strtoupper($valor->descripcion)}}</td>
                        <td>{{strtoupper($valor->cantidad)}}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
        </div>
      </div>
     </div>
	
                       </div>		
               </div>  
    	    </div>
    	    	

    </div>


    <div class="row">
    	    <div class="col-lg-6">
    	    		 <div class="m-portlet m-portlet--mobile">

             
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                          	Tic's
                                        </h3>
                                    </div>
                                </div>

                            </div>

                       <div class="m-portlet__body">
	
                       </div>		
               </div>  
    	    </div>
    	    
    	    <div class="col-lg-6">
    		    		 <div class="m-portlet m-portlet--mobile">

             
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                          	Equipamiento Médico
                                        </h3>
                                    </div>
                                </div>

                            </div>

                       <div class="m-portlet__body">
	
                       </div>		
               </div>  



    	    </div>
    	    	

    </div>	
    

    </div>  	
=======
</div>
>>>>>>> 9c5530ac875e3e7513da9c994a3edee03690199d
