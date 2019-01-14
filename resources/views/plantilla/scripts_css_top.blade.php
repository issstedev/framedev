<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script>
      WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
      });
</script>

<link href="<?=env('URL_PUBLIC')?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?=env('URL_PUBLIC')?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

<!--Calendario-->
<link href="<?=env('URL_PUBLIC')?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

<!--JQuery-->
<script src="<?=env('URL_PUBLIC')?>assets/plugins/jquery-3.2.1.min.js"></script>

<!--Plugins JQuery-->
<link href="<?=env('URL_PUBLIC')?>assets/plugins/bootstrap-touchspin/bootstrap.touchspin.min.css" rel="stylesheet" type="text/css" />
<link href="<?=env('URL_PUBLIC')?>assets/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />

<!--APP-->
<link href="<?=env('URL_PUBLIC')?>css/app.css" rel="stylesheet" type="text/css">

<!--calendar-->
<link href="<?=env('URL_PUBLIC')?>assets/vendors/custom/jquery-ui/jquery-ui.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?=env('URL_PUBLIC')?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

<!--iconos-->
<link href="<?=env('URL_PUBLIC')?>css/svg.css" rel="stylesheet" type="text/css">

<!--Loader-->
<link href="<?=env('URL_PUBLIC')?>css/loader.css" rel="stylesheet" type="text/css" />
<script src="<?=env('URL_PUBLIC')?>assets/js/loader.js"></script>

<!--Datatables-->
<link href="../../../assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" href="<?=env('URL_PUBLIC')?>assets/demo/default/media/img/logo/favicon.ico" />
