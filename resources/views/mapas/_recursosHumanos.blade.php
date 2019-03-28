            
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
            
            @include('mapas._recursos', ['establecimiento'=> $establecimiento, 'idCatalogo'=> 26, 'idTabla' => 'rrhh_table_1'] ) 
          </div>
        </div>
        <div class="tab-pane" id="rrhh_tab_2">
 
          <div class="col s12 m6 l6">
               @include('mapas._recursos', ['establecimiento'=> $establecimiento, 'idCatalogo'=> 27, 'idTabla' => 'rrhh_table_2'] )   


          </div>
        </div>
        <div class="tab-pane" id="rrhh_tab_3">

          <div class="col s12 m6 l6">

                   @include('mapas._recursos', ['establecimiento'=> $establecimiento, 'idCatalogo'=> 28, 'idTabla' => 'rrhh_table_3'] )   

          </div>
        </div>
        <div class="tab-pane" id="rrhh_tab_4">

          <div class="col s12 m6 l6">
               @include('mapas._recursos', ['establecimiento'=> $establecimiento, 'idCatalogo'=> 29, 'idTabla' => 'rrhh_table_4'] )  
          </div>
        </div>
        <div class="tab-pane" id="rrhh_tab_5">
 
          <div class="col s12 m6 l6">
               @include('mapas._recursos', ['establecimiento'=> $establecimiento, 'idCatalogo'=> 30, 'idTabla' => 'rrhh_table_5'] )  
          </div>
        </div>
        <div class="tab-pane" id="rrhh_tab_6">
        
            <div class="col s12 m6 l6">
                           @include('mapas._recursos', ['establecimiento'=> $establecimiento, 'idCatalogo'=> 94, 'idTabla' => 'rrhh_table_6'] )  
            
          </div>
        </div>
      </div>
     </div>
	
     </div>		
       