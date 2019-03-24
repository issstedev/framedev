<!--Section: Team v.1-->
<script>
$("#breadcrumb-title").html('<?=env('APP_NAME')?>');
$("#breadcrumb-title").append(' / Captura / Áreas');
</script>

<?php
$display1 = ($count1 == 0)?'none':'table';
$display2 = ($count2 == 0)?'none':'table';
$display3 = ($count3 == 0)?'none':'table';
$display4 = ($count4 == 0)?'none':'table';
?>

<div class="row">
  <div class="col-xl-12 col-lg-11">
    <div class="m-portlet m-portlet--full-height m-portlet--tabs ">

      <div class="m-portlet__head">
        <div class="m-portlet__head-tools">
          <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link active" data-toggle="tab" href="#areas_tab_1" role="tab">
                <i class="flaticon-share m--hide"></i>
                Consulta Externa (Consultorios)
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#areas_tab_2" role="tab">
                <i class="flaticon-share m--hide"></i>
                Hospitalización (Camas Censables)
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#areas_tab_3" role="tab">
                <i class="flaticon-share m--hide"></i>
                Hospitalización (Camas No Censables)
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#areas_tab_4" role="tab">
                <i class="flaticon-share m--hide"></i>
                Instalaciones (Áreas)
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content">
        <div class="tab-pane active" id="areas_tab_1">
          <form class="m-form m-form--fit m-form--label-align-right" id="areas_consultorios">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Descripción
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="descripcion1" name="cat_fr_estadisticas">
                      <?php echo $consultorios; ?>
                      </select>


                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Cantidad
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="number" id="cantidad1" name="cantidad" placeholder="Cantidad" value="">
                </div>
              </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-7">
                      <a id="est_js_fn_04" class="btn btn-accent m-btn m-btn--air m-btn--custom">
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
              <table style="display:{{$display1}}" id="areas_table_1" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($list_consultorios as $clave => $consultorio)
                      <tr>
                        <td>{{++$clave}}</td>
                        <td>{{strtoupper($consultorio->descripcion)}}</td>
                        <td>{{strtoupper($consultorio->cantidad)}}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
        </div>
        <div class="tab-pane" id="areas_tab_2">
          <form class="m-form m-form--fit m-form--label-align-right" id="areas_camas">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Descripción
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="descripcion2" name="cat_fr_estadisticas">
                      <?php echo $camas_censables; ?>
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
                      <a id="est_js_fn_05" class="btn btn-accent m-btn m-btn--air m-btn--custom">
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
              <table style="display:{{$display2}}" id="areas_table_2" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($list_camas as $clave => $cama)
                      <tr>
                        <td>{{++$clave}}</td>
                        <td>{{strtoupper($cama->descripcion)}}</td>
                        <td>{{strtoupper($cama->cantidad)}}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
        </div>
        <div class="tab-pane" id="areas_tab_3">
          <form class="m-form m-form--fit m-form--label-align-right" id="areas_camasno">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Descripción
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="descripcion3" name="cat_fr_estadisticas">
                      <?php echo $camas_no_censables; ?>
                      </select>


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
                      <a id="est_js_fn_06" class="btn btn-accent m-btn m-btn--air m-btn--custom">
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
              <table style="display:{{$display3}}" id="areas_table_3" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($list_noCensables as $clave => $camaNo)
                      <tr>
                        <td>{{++$clave}}</td>
                        <td>{{strtoupper($camaNo->descripcion)}}</td>
                        <td>{{strtoupper($camaNo->cantidad)}}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
        </div>
        <div class="tab-pane" id="areas_tab_4">
          <form class="m-form m-form--fit m-form--label-align-right" id="areas_instalaciones">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Descripción
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="descripcion4" name="cat_fr_estadisticas">
                      <?php echo $instalaciones; ?>
                      </select>


                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Cantidad
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="cantidad4" name="cantidad" placeholder="Cantidad" value="">
                </div>
              </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-7">
                      <a id="est_js_fn_07" class="btn btn-accent m-btn m-btn--air m-btn--custom">
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
              <table style="display:{{$display4}}" id="areas_table_4" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($list_instalaciones as $clave => $instalacion)
                      <tr>
                        <td>{{++$clave}}</td>
                        <td>{{strtoupper($instalacion->descripcion)}}</td>
                        <td>{{strtoupper($instalacion->cantidad)}}</td>
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
