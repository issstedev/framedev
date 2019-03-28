
             
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                          Infraestructura Técnologica
                                        </h3>
                                    </div>
                                </div>

                            </div>

                       <div class="m-portlet__body">
	
                         <div class="col-xl-12 col-lg-11">
    <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">

      <div class="m-portlet__head">
        <div class="m-portlet__head-tools">
          <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link active" data-toggle="tab" href="#comunicaciones_tab_1" role="tab">
                <i class="flaticon-share m--hide"></i>
                Enlaces de comunicacion
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#comunicaciones_tab_2" role="tab">
                <i class="flaticon-share m--hide"></i>
                Servidores en sitio
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#comunicaciones_tab_3" role="tab">
                <i class="flaticon-share m--hide"></i>
                Computo
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content">
        <div class="tab-pane active" id="comunicaciones_tab_1">

          <div class="col s12 m6 l6">

                 @include('mapas._recursos', ['establecimiento'=> $establecimiento, 'idCatalogo'=> 31, 'idTabla' => 'comunicaciones_table_1'] ) 

          </div>
        </div>
        <div class="tab-pane" id="comunicaciones_tab_2">

          <div class="col s12 m6 l6">

               @include('mapas._recursos', ['establecimiento'=> $establecimiento, 'idCatalogo'=> 32, 'idTabla' => 'comunicaciones_table_2'] ) 

          </div>
        </div>
        <div class="tab-pane" id="comunicaciones_tab_3">

          <div class="col s12 m6 l6">

              @include('mapas._recursosCPU', ['establecimiento'=> $establecimiento, 'idCatalogo'=> 33, 'idTabla' => 'comunicaciones_table_3'] ) 

          </div>
        </div>
      </div>
     </div>


</div>		
               </div> 