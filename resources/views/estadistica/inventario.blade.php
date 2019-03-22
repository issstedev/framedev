<!--Section: Team v.1-->
<script>
$("#breadcrumb-title").html('<?=env('APP_NAME')?>');
$("#breadcrumb-title").append(' / Captura / Inventario');
</script>

<div class="row">
  <div class="col-xl-12 col-lg-11">
    <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">

      <div class="m-portlet__head">
        <div class="m-portlet__head-tools">
          <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link active" data-toggle="tab" href="#inventario_tab_1" role="tab">
                <i class="flaticon-share m--hide"></i>
                Computo
              </a>
            </li>
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link" data-toggle="tab" href="#inventario_tab_2" role="tab">
                <i class="flaticon-share m--hide"></i>
                Equipo médico
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content">
        <div class="tab-pane active" id="inventario_tab_1">
          <form class="m-form m-form--fit m-form--label-align-right" id="editar_perfil">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Nombre (s)
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="nombres" name="nombres" placeholder="Nombre (s)" value="">
                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Apellido paterno
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="apellido_paterno" name="apellido_paterno" placeholder="apellido paterno" value="">
                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Apellido materno
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="apellido_materno" name="apellido_materno" placeholder="apellido materno" value="">
                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Usuario
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="cat_tiporol" name="cat_tiporol">
                      <?php echo $datos['tiporol']; ?>
                      </select>


                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Correo
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="correo" name="correo" placeholder="Correo" value="">
                </div>
              </div>


              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Contraseña
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="password" id="password" name="password" value="">
                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Repetir contraseña
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="password" id="password2" name="password2" value="">
                </div>
              </div>

            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-7">
                    <?php
                    if(Helpme::tiene_permiso('Usuarios|editar_perfil')){
                    ?>
                      <a id="usr_js_fn_02" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                        Guardar
                      </a>
                    <?php
                    }
                    ?>
                    &nbsp;&nbsp;
                    <a type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                      Cancelar
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <input type="hidden" id="activar_paginado" name="activar_paginado" value="1">
            <input type="hidden" id="paginacion" name="paginacion" value="20">
          </form>
        </div>
        <div class="tab-pane" id="inventario_tab_2">
          <form class="m-form m-form--fit m-form--label-align-right" id="editar_perfil">
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Nombre (s)
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="nombres" name="nombres" placeholder="Nombre (s)" value="">
                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Apellido paterno
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="apellido_paterno" name="apellido_paterno" placeholder="apellido paterno" value="">
                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Apellido materno
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="apellido_materno" name="apellido_materno" placeholder="apellido materno" value="">
                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Usuario
                </label>
                <div class="col-7">

                      <select class="form-control m-input" id="cat_tiporol" name="cat_tiporol">
                      <?php echo $datos['tiporol']; ?>
                      </select>


                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Correo
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="text" id="correo" name="correo" placeholder="Correo" value="">
                </div>
              </div>


              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Contraseña
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="password" id="password" name="password" value="">
                </div>
              </div>
              <div class="form-group m-form__group row">
                <label for="example-text-input" class="col-2 col-form-label">
                  Repetir contraseña
                </label>
                <div class="col-7">
                  <input class="form-control m-input" type="password" id="password2" name="password2" value="">
                </div>
              </div>

            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-7">
                    <?php
                    if(Helpme::tiene_permiso('Usuarios|editar_perfil')){
                    ?>
                      <a id="usr_js_fn_02" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                        Guardar
                      </a>
                    <?php
                    }
                    ?>
                    &nbsp;&nbsp;
                    <a type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                      Cancelar
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <input type="hidden" id="activar_paginado" name="activar_paginado" value="1">
            <input type="hidden" id="paginacion" name="paginacion" value="20">
          </form>
        </div>
        </div>
     </div>
  </div>
</div>
