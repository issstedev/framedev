<!--Section: Team v.1-->
<script>
$("#breadcrumb-title").html('<?=$centro?>');
$("#breadcrumb-title").append(' / Captura / RR. HH.');
</script>
<?php
$display1 = ($count1 == 0)?'none':'table';
$display2 = ($count2 == 0)?'none':'table';
$display3 = ($count3 == 0)?'none':'table';
$display4 = ($count4 == 0)?'none':'table';
$display5 = ($count5 == 0)?'none':'table';
$display6 = ($count6 == 0)?'none':'table';
?>
<div class="row">
  <div class="col-xl-12 col-lg-11">
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
          <form class="m-form m-form--fit m-form--label-align-right" id="rrhh_medicos">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Descripción
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="descripcion1" name="cat_fr_estadisticas">
                      <?php echo $medicos; ?>
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
                      <a id="est_js_fn_08" class="btn btn-accent m-btn m-btn--air m-btn--custom">
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
          <form class="m-form m-form--fit m-form--label-align-right" id="rrhh_servicios">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Descripción
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="descripcion2" name="cat_fr_estadisticas">
                      <?php echo $servicios_auxiliares; ?>
                      </select>


                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Cantidad
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="number" id="cantidad2" name="cantidad" placeholder="Cantidad" value="">
                </div>
              </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-7">
                      <a id="est_js_fn_09" class="btn btn-accent m-btn m-btn--air m-btn--custom">
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
          <form class="m-form m-form--fit m-form--label-align-right" id="rrhh_otras_profesiones">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Descripción
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="descripcion3" name="cat_fr_estadisticas">
                      <?php echo $otras_profesiones; ?>
                      </select>


                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Cantidad
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="number" id="cantidad3" name="cantidad" placeholder="Cantidad" value="">
                </div>
              </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-7">
                      <a id="est_js_fn_10" class="btn btn-accent m-btn m-btn--air m-btn--custom">
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
          <form class="m-form m-form--fit m-form--label-align-right" id="rrhh_administrativo">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Descripción
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="descripcion4" name="cat_fr_estadisticas">
                      <?php echo $administrativo; ?>
                      </select>


                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Cantidad
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="number" id="cantidad4" name="cantidad" placeholder="Cantidad" value="">
                </div>
              </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-7">
                      <a id="est_js_fn_11" class="btn btn-accent m-btn m-btn--air m-btn--custom">
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
          <form class="m-form m-form--fit m-form--label-align-right" id="rrhh_otros">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Descripción
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="descripcion5" name="cat_fr_estadisticas">
                      <?php echo $otro_personal; ?>
                      </select>


                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Cantidad
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="number" id="cantidad5" name="cantidad" placeholder="Cantidad" value="">
                </div>
              </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-7">
                      <a id="est_js_fn_12" class="btn btn-accent m-btn m-btn--air m-btn--custom">
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
          <form class="m-form m-form--fit m-form--label-align-right" id="rrhh_enfermeras">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Descripción
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="descripcion6" name="cat_fr_estadisticas">
                      <?php echo $enfermeras; ?>
                      </select>


                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Cantidad
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="number" id="cantidad6" name="cantidad" placeholder="Cantidad" value="">
                </div>
              </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-7">
                      <a id="est_js_fn_13" class="btn btn-accent m-btn m-btn--air m-btn--custom">
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
