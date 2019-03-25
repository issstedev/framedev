<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8" />
		<title>
			<?=env('APP_NAME')?>
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
		      WebFont.load({
		        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
		        active: function() {
		            sessionStorage.fonts = true;
		        }
		      });
		</script>
		<link href="<?=env('APP_URL')?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=env('APP_URL')?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="<?=env('APP_URL')?>assets/demo/default/media/img/logo/favicon.ico" />
	</head>
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--singin" id="m_login">
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" style="background-image: url(<?=env('APP_URL')?>assets/app/media/img//bg/bg-4.jpg)">
						<div class="m-grid__item m-grid__item--middle">
								<h3 class="m-login__welcome">
										<?=env('APP_NAME')?>
								</h3>
								<p class="m-login__msg">
										<?=env('SLOGAN_NAME')?>
								</p>
						</div>
				</div>
			</div>
		</div>
	</body>

</html>
