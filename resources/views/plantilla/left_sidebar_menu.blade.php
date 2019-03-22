<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <div
    id="m_ver_menu"
    class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
    m-menu-vertical="1"
    m-menu-scrollable="0" m-menu-dropdown-timeout="500"
    >
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
      <li class="m-menu__section ">
        <h4 class="m-menu__section-text">
          Componentes
        </h4>
        <i class="m-menu__section-icon flaticon-more-v3"></i>
      </li>

      <?php
         if(
           (Helpme::tiene_permiso('Usuarios|index')) OR
           (Helpme::tiene_permiso('Controllers|index')) OR
           (Helpme::tiene_permiso('Usuarios|logueados')) OR
           (Helpme::tiene_permiso('Catalogo|index')) OR
           (Helpme::tiene_permiso('Usuarios|perfil')) OR
           (Helpme::tiene_permiso('Login|loginlogger')) OR
           (Helpme::tiene_permiso('Login|auditoria'))
         )
         {
      ?>

      <li class="m-menu__item  m-menu__item--active" aria-haspopup="true"  m-menu-submenu-toggle="hover">
        <a  href="javascript:;" class="m-menu__link m-menu__toggle">
          <i class="m-menu__link-icon flaticon-network"></i>
          <span class="m-menu__link-text">
            Framedev
          </span>
          <i class="m-menu__ver-arrow la la-angle-right"></i>
        </a>
        <div class="m-menu__submenu ">
          <span class="m-menu__arrow"></span>
          <ul class="m-menu__subnav">

            <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
              <span class="m-menu__link">
                <span class="m-menu__link-text">
                  Framedev
                </span>
              </span>
            </li>

            <?php if(Helpme::tiene_permiso('Usuarios|perfil')){ ?>


              <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>usuarios/perfil');" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-profile-1"></i><span class="m-menu__link-text">Mi perfil</span></a>
              </li>

            <?php }if(Helpme::tiene_permiso('Usuarios|index')){ ?>


              <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>usuarios');" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-user-settings"></i><span class="m-menu__link-text">Control de usuarios</span></a>
              </li>


            <?php }

            if(Helpme::tiene_permiso('Controllers|index')){ ?>


              <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-user-ok"></i><span class="m-menu__link-text">Roles & Permisos</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item " aria-haspopup="true"><a href="javascript:;" id="rls_js_fn_02" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Roles</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>controllers');" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Permisos</span></a></li>
									</ul>
								</div>
							</li>

            <?php }

            if(Helpme::tiene_permiso('Usuarios|logueados')){ ?>

              <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>usuarios/logueados');" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-logout"></i><span class="m-menu__link-text">Control de sesiones</span></a>
              </li>

            <?php }if(Helpme::tiene_permiso('Login|loginlogger')){ ?>

            <li class="m-menu__item " aria-haspopup="true" >
              <a  href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>login/loginlogger');" class="m-menu__link ">
                <i class="m-menu__link-icon flaticon-logout"></i><span class="m-menu__link-text">Registro de accesos</span></a>
            </li>

            <?php }if(Helpme::tiene_permiso('Catalogo|index')){ ?>

              <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>catalogo');" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-text">Catálogo</span></a>
              </li>


            <?php }if(Helpme::tiene_permiso('Login|auditoria')){ ?>

              <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>login/auditoria');" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-eye"></i><span class="m-menu__link-text">Auditoría</span></a>
              </li>

            <?php } ?>
          </ul>
        </div>
      </li>
      <?php } ?>










      <?php
         if(
           (Helpme::tiene_permiso('Inventarios|alta'))
         )
         {
      ?>

      <li class="m-menu__item  m-menu__item--active" aria-haspopup="true"  m-menu-submenu-toggle="hover">
        <a  href="javascript:;" class="m-menu__link m-menu__toggle">
          <i class="m-menu__link-icon flaticon-network"></i>
          <span class="m-menu__link-text">
            <?=env('APP_NAME')?>
          </span>
          <i class="m-menu__ver-arrow la la-angle-right"></i>
        </a>
        <div class="m-menu__submenu ">
          <span class="m-menu__arrow"></span>
          <ul class="m-menu__subnav">

            <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
              <span class="m-menu__link">
                <span class="m-menu__link-text">
                  <?=env('APP_NAME')?>
                </span>
              </span>
            </li>

            <?php

            if(Helpme::tiene_permiso('Inventarios|alta')){ ?>


              <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-user-ok"></i><span class="m-menu__link-text">Alta de bienes</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item " aria-haspopup="true"><a href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>inventarios/computo');" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Computo</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>inventarios/telefonia');" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Telefonía</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>inventarios/red');" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Red</span></a></li>
									</ul>
								</div>
							</li>

            <?php } ?>

          </ul>
        </div>
      </li>
      <?php } ?>





      <?php
         if(
           (Helpme::tiene_permiso('Estadistica|contacto')) OR
           (Helpme::tiene_permiso('Estadistica|areas')) OR
           (Helpme::tiene_permiso('Estadistica|rhumanos')) OR
           (Helpme::tiene_permiso('Estadistica|comunicaciones')) OR
           (Helpme::tiene_permiso('Estadistica|inventario')) OR
           (Helpme::tiene_permiso('Estadistica|inf_hospitalaria'))
         )
         {
      ?>

      <li class="m-menu__item  m-menu__item--active" aria-haspopup="true"  m-menu-submenu-toggle="hover">
        <a  href="javascript:;" class="m-menu__link m-menu__toggle">
          <i class="m-menu__link-icon flaticon-network"></i>
          <span class="m-menu__link-text">
            Geo Estadística
          </span>
          <i class="m-menu__ver-arrow la la-angle-right"></i>
        </a>
        <div class="m-menu__submenu ">
          <span class="m-menu__arrow"></span>
          <ul class="m-menu__subnav">

            <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
              <span class="m-menu__link">
                <span class="m-menu__link-text">
                  Formularios
                </span>
              </span>
            </li>

            <?php

            if(
              (Helpme::tiene_permiso('Estadistica|contacto')) OR
              (Helpme::tiene_permiso('Estadistica|areas')) OR
              (Helpme::tiene_permiso('Estadistica|rhumanos')) OR
              (Helpme::tiene_permiso('Estadistica|comunicaciones')) OR
              (Helpme::tiene_permiso('Estadistica|inventario')) OR
              (Helpme::tiene_permiso('Estadistica|inf_hospitalaria'))
            )
            {
              ?>



              <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-user-ok"></i><span class="m-menu__link-text">Captura de datos</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">

                      <?php if(Helpme::tiene_permiso('Estadistica|contacto')){ ?>
                      <li class="m-menu__item " aria-haspopup="true"><a href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>estadistica/contacto');" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Contacto</span></a></li>

                      <?php } if(Helpme::tiene_permiso('Estadistica|areas')){ ?>
                      <li class="m-menu__item " aria-haspopup="true"><a href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>estadistica/areas');" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Áreas</span></a></li>

                      <?php } if(Helpme::tiene_permiso('Estadistica|rhumanos')){ ?>
                      <li class="m-menu__item " aria-haspopup="true"><a href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>estadistica/rhumanos');" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Recursos Humanos</span></a></li>

                      <?php } if(Helpme::tiene_permiso('Estadistica|comunicaciones')){ ?>
                      <li class="m-menu__item " aria-haspopup="true"><a href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>estadistica/comunicaciones');" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Comunicaciones</span></a></li>

                      <?php } if(Helpme::tiene_permiso('Estadistica|inventario')){ ?>
                      <li class="m-menu__item " aria-haspopup="true"><a href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>estadistica/inventario');" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Inventario</span></a></li>

                      <?php } if(Helpme::tiene_permiso('Estadistica|inf_hospitalaria')){ ?>
                      <li class="m-menu__item " aria-haspopup="true"><a href="javascript:;" onclick="carga_archivo('contenedor_principal','<?=env('APP_URL ')?>estadistica/inf_hospitalaria');" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Información Hospitalaria</span></a></li>
                      <?php }  ?>

									</ul>
								</div>
							</li>

            <?php } ?>

          </ul>
        </div>
      </li>
      <?php } ?>



    </ul>
  </div>
  <!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->
