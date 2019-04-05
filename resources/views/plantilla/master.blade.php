<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8" />
		<title>
			<?=env('APP_NAME')?>
		</title>
		<meta name="description" content="Framedev -  Framework para desarrolladores">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		@include('plantilla/scripts_css_top')
	</head>

<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
  <div id="initpreloader">;
  	   <div id="initloader"></div>
  </div>

  <div class="m-page-loader m-page-loader--base m-page-loader--non-block" style="margin-left: -80px; margin-top: -20px;">
  	<div class="m-blockui">
  		<span>
  			Cargando ...
  		</span>
  		<span>
  			<div class="m-loader m-loader--brand"></div>
  		</span>
  	</div>
  </div>

  <div class="m-grid m-grid--hor m-grid--root m-page">
<header id="m_header" class="m-grid__item    m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200" >
  <div class="m-container m-container--fluid m-container--full-height">
    <div class="m-stack m-stack--ver m-stack--desktop">
  
      <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

        <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
          <i class="la la-close"></i>
        </button>


        <!-- Corresponde a los breadcrumbs cuando estan en el lugar del menu, se modificaron para dar lugar al menu-->

        <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
           <h5 class="m-subheader__title m-subheader__title--separator" id="breadcrumb-title" style="top: 33px; position: relative;">
              <?=env('APP_NAME')?>
           </h5>
        </div>


        <?php //@include('plantilla/top_left_menu');?>

        @include('plantilla/top_right_menu_non_login')

      </div>
    </div>
  </div>
</header>
    


    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
  <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
    <i class="la la-close"></i>
  </button>



  <div class="m-grid__item m-grid__item--fluid m-wrapper">
  
    <div class="m-content" id="contenedor_principal">
      	@yield('content')
    </div>
  </div>

</div>
    



    @include('plantilla/footer')
  </div>
  <?php //@include('plantilla/quicksidebar'); /*<< corresponde al sidebar derecho*/ ?>

  <div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
  </div>

  <?php //@include('plantilla/quicknav');?>
  @include('plantilla/scripts')

</body>





</html>
