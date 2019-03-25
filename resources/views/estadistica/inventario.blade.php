<!--Section: Team v.1-->
<script>
$("#breadcrumb-title").html('<?=$centro?>');
$("#breadcrumb-title").append(' / Captura / Inventario');
</script>
<?php
$display1 = ($count1 == 0)?'none':'table';
?>
<div class="row">
  <div class="col-xl-12 col-lg-11">
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
          <form class="m-form m-form--fit m-form--label-align-right" id="inventario_equipo">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Descripción
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="descripcion1" name="cat_fr_estadisticas">
                      <?php echo $equipo_medico; ?>
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
                      <a id="est_js_fn_17" class="btn btn-accent m-btn m-btn--air m-btn--custom">
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
              <table style="display:{{$display1}}" id="inventario_table_1" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Descripción</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($list_equipo_medico as $clave => $valor)
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
