<!--Section: Team v.1-->
<script>
$("#breadcrumb-title").html('<?=$centro?>');
$("#breadcrumb-title").append(' / Captura / Contacto');
</script>

<div class="row">
  <div class="col-xl-12 col-lg-11">
    <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">

      <div class="m-portlet__head">
        <div class="m-portlet__head-tools">
          <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link active" data-toggle="tab" href="#contact_tab_1" role="tab">
                <i class="flaticon-share m--hide"></i>
                Datos de la unidad médica
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#contact_tab_2" role="tab">
                <i class="flaticon-share m--hide"></i>
                Mapa geolocalizado
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#contact_tab_3" role="tab">
                <i class="flaticon-share m--hide"></i>
                Información de contacto
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content">
        <div class="tab-pane active" id="contact_tab_1">
          <form class="m-form m-form--fit m-form--label-align-right" id="contacto_datos_unidad">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="nombres" class="col-2 col-form-label">
                  Nombre
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="nombres" name="nombres" placeholder="Nombre de la unidad médica" value="{{Session::get('ubicacion')->nombre_de_la_unidad}}">
                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="clues" class="col-2 col-form-label">
                  CLUES
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="clues" name="clues" placeholder="CLUES" value="{{Session::get('ubicacion')->clues}}">
                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="jurisdiccion" class="col-2 col-form-label">
                  Jurisdicción
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="jurisdiccion" name="jurisdiccion" placeholder="Jurisdicción" value="{{Session::get('ubicacion')->nombre_de_la_jurisdiccion}}">
                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="telefono" class="col-2 col-form-label">
                  Teléfono
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="telefono" name="telefono" placeholder="Correo" value="{{Session::get('ubicacion')->direccion()}}">
                </div>
              </div>


              <div class="form-group m-form__group row">
                <label for="direccion" class="col-2 col-form-label">
                  Dirección
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="direccion" name="direccion" placeholder="Dirección" value="{{Session::get('ubicacion')->direccion()}}">
                </div>
              </div>

            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-7">
                      <a id="est_js_fn_01" class="btn btn-accent m-btn m-btn--air m-btn--custom">
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

        </div>


        <div class="tab-pane" id="contact_tab_2">
          <form class="m-form m-form--fit m-form--label-align-right" id="contacto_mapas">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="longitud" class="col-2 col-form-label">
                  Longitud
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="number" id="longitud" name="longitud" placeholder="Longitud" value="{{Session::get('ubicacion')->lon}}">
                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="latitud" class="col-2 col-form-label">
                  Latitud
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="number" id="latitud" name="latitud" placeholder="Latitud" value="{{Session::get('ubicacion')->lat}}">
                </div>
              </div>
            </div>

            <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-7">
                      <a id="est_js_fn_02" class="btn btn-accent m-btn m-btn--air m-btn--custom">
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
        </div>


        <div class="tab-pane" id="contact_tab_3">
          <form class="m-form m-form--fit m-form--label-align-right" id="contacto_contacto">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="nombre" class="col-2 col-form-label">
                  Nombre (s)
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="nombre" name="nombre" placeholder="Nombre (s)" value="">
                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="cargo" class="col-2 col-form-label">
                  Cargo
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="cargo" name="cargo" placeholder="Cargo" value="">
                </div>
              </div>

              <div class="form-group m-form__group row">
                <label for="correo" class="col-2 col-form-label">
                  Correo
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="correo" name="correo" placeholder="Correo" value="">
                </div>
              </div>
            </div>

            <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-7">
                      <a id="est_js_fn_03" class="btn btn-accent m-btn m-btn--air m-btn--custom">
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
          <?php
          $display = ($count == 0)?'none':'table';
          ?>
          <div class="col s12 m6 l6">
              <table style="display:{{$display}}" id="contact_table_3" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cargo</th>
                          <th>Correo</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($contacts as $clave => $contact)
                      <tr>
                        <td>{{++$clave}}</td>
                        <td>{{strtoupper($contact->nombre)}}</td>
                        <td>{{strtoupper($contact->cargo)}}</td>
                        <td>{{strtoupper($contact->correo)}}</td>
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
