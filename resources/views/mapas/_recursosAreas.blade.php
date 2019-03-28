  <div class="m-portlet m-portlet--full-height m-portlet--tabs ">

      <div class="m-portlet__head">
        <div class="m-portlet__head-tools">
          <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link active" data-toggle="tab" href="#areas_tab_1" role="tab">
                <i class="flaticon-share m--hide"></i>
                Consulta Externa 
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#areas_tab_2" role="tab">
                <i class="flaticon-share m--hide"></i>
                Camas Censables
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#areas_tab_3" role="tab">
                <i class="flaticon-share m--hide"></i>
                Camas No Censables
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#areas_tab_4" role="tab">
                <i class="flaticon-share m--hide"></i>
                Áreas
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content">
        <div class="tab-pane active" id="areas_tab_1">
             <div class="col s12 m6 l6">
                @include('mapas._recursos', ['establecimiento'=> $establecimiento, 'idCatalogo'=> 22, 'idTabla' => 'areas_table_1'] ) 
             </div> 

  
        </div>
        <div class="tab-pane" id="areas_tab_2">

          <div class="col s12 m6 l6">
                @include('mapas._recursos', ['establecimiento'=> $establecimiento, 'idCatalogo'=> 23, 'idTabla' => 'areas_table_2'] ) 
              
          </div>
        </div>
        <div class="tab-pane" id="areas_tab_3">

          <div class="col s12 m6 l6">
              
               @include('mapas._recursos', ['establecimiento'=> $establecimiento, 'idCatalogo'=> 24, 'idTabla' => 'areas_table_3'] ) 

              
          </div>
        </div>
        <div class="tab-pane" id="areas_tab_4">

          <div class="col s12 m6 l6">
             @include('mapas._recursos', ['establecimiento'=> $establecimiento, 'idCatalogo'=> 25, 'idTabla' => 'areas_table_4'] ) 

          </div>
        </div>

      </div>
     </div>