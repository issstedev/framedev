<!--Section: Team v.1-->
<script>
$("#breadcrumb-title").html('<?=env('APP_NAME')?>');
$("#breadcrumb-title").append(' / Captura / Comunicaciones');
</script>
<?php
$display1 = ($count1 == 0)?'none':'table';
$display2 = ($count2 == 0)?'none':'table';
$display3 = ($count3 == 0)?'none':'table';
?>
<div class="row">
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
          <form class="m-form m-form--fit m-form--label-align-right" id="comunicaciones_enlaces">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Descripción
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="descripcion1" name="cat_fr_estadisticas">
                      <?php echo $enlaces; ?>
                      </select>


                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Cantidad
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="cantidad1" name="cantidad" placeholder="Cantidad" value="">
                </div>
              </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-7">
                      <a id="est_js_fn_14" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                        Guardar
                      </a>
                    &nbsp;&nbsp;
                    <a type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                      Cancelar
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div class="col s12 m6 l6">
              <table style="display:{{$display1}}" id="comunicaciones_table_1" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($list_enlaces as $clave => $valor)
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
        <div class="tab-pane" id="comunicaciones_tab_2">
          <form class="m-form m-form--fit m-form--label-align-right" id="comunicaciones_servidores">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Descripción
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="descripcion2" name="cat_fr_estadisticas">
                      <?php echo $servidores; ?>
                      </select>


                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Cantidad
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="cantidad2" name="cantidad" placeholder="Cantidad" value="">
                </div>
              </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-7">
                      <a id="est_js_fn_15" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                        Guardar
                      </a>
                    &nbsp;&nbsp;
                    <a type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                      Cancelar
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div class="col s12 m6 l6">
              <table style="display:{{$display2}}" id="comunicaciones_table_2" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($list_servidores as $clave => $valor)
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
        <div class="tab-pane" id="comunicaciones_tab_3">
          <form class="m-form m-form--fit m-form--label-align-right" id="comunicaciones_computo">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Descripción
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="descripcion3" name="cat_fr_estadisticas">
                      <?php echo $computo; ?>
                      </select>


                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Marca
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="marca" name="marca" placeholder="Marca" value="">
                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  ServiceTag
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="servicetag" name="servicetag" placeholder="Etiqueta de Servicio" value="">
                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Cantidad
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="cantidad3" name="cantidad" placeholder="Cantidad" value="">
                </div>
              </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-7">
                      <a id="est_js_fn_16" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                        Guardar
                      </a>
                    &nbsp;&nbsp;
                    <a type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                      Cancelar
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <input type="hidden" id="computo_set" name="computo_set" value="computo">
          </form>
          <div class="col s12 m6 l6">
              <table style="display:{{$display3}}" id="comunicaciones_table_3" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Marca</th>
                          <th>Servicetag</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($list_computo as $clave => $valor)
                      <tr>
                        <td>{{++$clave}}</td>
                        <td>{{strtoupper($valor->descripcion)}}</td>
                        <td>{{strtoupper($valor->marca)}}</td>
                        <td>{{strtoupper($valor->servicetag)}}</td>
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
