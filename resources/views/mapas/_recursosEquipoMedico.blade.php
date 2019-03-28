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
 	
                             <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">

      <div class="m-portlet__head">
        <div class="m-portlet__head-tools">
          <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#inventario_tab_1" role="tab">
                <i class="flaticon-share m--hide"></i>
                Equipo médico
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content">
        <div class="tab-pane active" id="inventario_tab_1">

          <div class="col s12 m6 l6">
                @include('mapas._recursos', ['establecimiento'=> $establecimiento, 'idCatalogo'=> 34, 'idTabla' => 'inventario_table_1'] ) 

          </div>
        </div>
        </div>
     </div>
 </div>		
