$("body").on("click", "#est_js_fn_01", function(){alerta('Alerta!','Esta funcion aún no esta implementada EST-01');});

$("body").on("click", "#est_js_fn_02", function(){alerta('Alerta!','Esta funcion aún no esta implementada EST-02');});

$("body").on("click", "#est_js_fn_03", function(){
  var msj_error="";

	if( $('#nombre').get(0).value == "" )	msj_error+='Olvidó ingresar Nombre.<br />';
  if( $('#cargo').get(0).value == "" )	msj_error+='Olvidó ingresar Cargo.<br />';

	if( $('#correo').get(0).value == "" )	msj_error+='Olvidó ingresar Correo.<br />';
  var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
  if (!regex.test($('#correo').val().trim())){ msj_error+='El correo tiene un formato inválido.<br />';}

	if( !msj_error == "" ){
		alerta('Faltan datos', msj_error);
		return false;
	}

		$.ajax({
			headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: app_url + 'estadistica/add_contacto',
			type: 'POST',
			data: $("#contacto_contacto").serialize(),
			dataType: 'json',
			success: function(resp_success){
				if (resp_success['resp'] == true) {
          $("#contact_table_3").css("display", "table");
          var id = $('#contact_table_3 > tbody > tr:last').find("td:first-child").text();
          count = parseInt(id) + parseInt(1);
          if(isNaN(count)){count = 1;}
          $('#contact_table_3').append('<tr><td>'+count+'</td><td>'+$('#nombre').val()+'</td><td>'+$('#cargo').val()+'</td><td>'+$('#correo').val()+'</td></tr>');
          $('#contacto_contacto').trigger("reset");
        }else{
					alerta('Alerta!', resp_success['mensaje']);
				}
			},
			error: function(respuesta){ alerta('Alerta!','Error de conectividad de red EST-03');}
		});

});

$("body").on("click", "#est_js_fn_04", function(){
  var msj_error="";

	if( $('#descripcion1').get(0).value == "" )	msj_error+='Olvidó selecionar la descripción.<br />';
  if( $('#cantidad1').get(0).value == "" )	msj_error+='Olvidó ingresar la cantidad.<br />';

	if( !msj_error == "" ){
		alerta('Faltan datos', msj_error);
		return false;
	}

		$.ajax({
			headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: app_url + 'estadistica/add_consultorio',
			type: 'POST',
			data: $("#areas_consultorios").serialize(),
			dataType: 'json',
			success: function(resp_success){
				if (resp_success['resp'] == true) {
          $("#areas_table_1").css("display", "table");
          var id = $('#areas_table_1 > tbody > tr:last').find("td:first-child").text();
          var select = $('#descripcion1 option:selected').text();
          count = parseInt(id) + parseInt(1);
          if(isNaN(count)){count = 1;}
          $('#areas_table_1').append('<tr><td>'+count+'</td><td>'+select.toUpperCase()+'</td><td>'+$('#cantidad1').val()+'</td></tr>');
          $('#areas_consultorios').trigger("reset");
        }else{
					alerta('Alerta!', resp_success['mensaje']);
				}
			},
			error: function(respuesta){ alerta('Alerta!','Error de conectividad de red EST-04');}
		});

});

$("body").on("click", "#est_js_fn_05", function(){
  var msj_error="";

	if( $('#descripcion2').get(0).value == "" )	msj_error+='Olvidó selecionar la descripción.<br />';
  if( $('#cantidad2').get(0).value == "" )	msj_error+='Olvidó ingresar la cantidad.<br />';

	if( !msj_error == "" ){
		alerta('Faltan datos', msj_error);
		return false;
	}

		$.ajax({
			headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: app_url + 'estadistica/add_camas',
			type: 'POST',
			data: $("#areas_camas").serialize(),
			dataType: 'json',
			success: function(resp_success){
				if (resp_success['resp'] == true) {
          $("#areas_table_2").css("display", "table");
          var id = $('#areas_table_2 > tbody > tr:last').find("td:first-child").text();
          var select = $('#descripcion2 option:selected').text();
          count = parseInt(id) + parseInt(1);
          if(isNaN(count)){count = 1;}
          $('#areas_table_2').append('<tr><td>'+count+'</td><td>'+select.toUpperCase()+'</td><td>'+$('#cantidad2').val()+'</td></tr>');
          $('#areas_camas').trigger("reset");
        }else{
					alerta('Alerta!', resp_success['mensaje']);
				}
			},
			error: function(respuesta){ alerta('Alerta!','Error de conectividad de red EST-05');}
		});

});

$("body").on("click", "#est_js_fn_06", function(){
  var msj_error="";

	if( $('#descripcion3').get(0).value == "" )	msj_error+='Olvidó selecionar la descripción.<br />';
  if( $('#cantidad3').get(0).value == "" )	msj_error+='Olvidó ingresar la cantidad.<br />';

	if( !msj_error == "" ){
		alerta('Faltan datos', msj_error);
		return false;
	}

		$.ajax({
			headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: app_url + 'estadistica/add_camasno',
			type: 'POST',
			data: $("#areas_camasno").serialize(),
			dataType: 'json',
			success: function(resp_success){
				if (resp_success['resp'] == true) {
          $("#areas_table_3").css("display", "table");
          var id = $('#areas_table_3 > tbody > tr:last').find("td:first-child").text();
          var select = $('#descripcion3 option:selected').text();
          count = parseInt(id) + parseInt(1);
          if(isNaN(count)){count = 1;}
          $('#areas_table_3').append('<tr><td>'+count+'</td><td>'+select.toUpperCase()+'</td><td>'+$('#cantidad3').val()+'</td></tr>');
          $('#areas_camasno').trigger("reset");
        }else{
					alerta('Alerta!', resp_success['mensaje']);
				}
			},
			error: function(respuesta){ alerta('Alerta!','Error de conectividad de red EST-06');}
		});

});

$("body").on("click", "#est_js_fn_07", function(){
  var msj_error="";

	if( $('#descripcion4').get(0).value == "" )	msj_error+='Olvidó selecionar la descripción.<br />';
  if( $('#cantidad4').get(0).value == "" )	msj_error+='Olvidó ingresar la cantidad.<br />';

	if( !msj_error == "" ){
		alerta('Faltan datos', msj_error);
		return false;
	}

		$.ajax({
			headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: app_url + 'estadistica/add_instalaciones',
			type: 'POST',
			data: $("#areas_instalaciones").serialize(),
			dataType: 'json',
			success: function(resp_success){
				if (resp_success['resp'] == true) {
          $("#areas_table_4").css("display", "table");
          var id = $('#areas_table_4 > tbody > tr:last').find("td:first-child").text();
          var select = $('#descripcion4 option:selected').text();
          count = parseInt(id) + parseInt(1);
          if(isNaN(count)){count = 1;}
          $('#areas_table_4').append('<tr><td>'+count+'</td><td>'+select.toUpperCase()+'</td><td>'+$('#cantidad4').val()+'</td></tr>');
          $('#areas_instalaciones').trigger("reset");
        }else{
					alerta('Alerta!', resp_success['mensaje']);
				}
			},
			error: function(respuesta){ alerta('Alerta!','Error de conectividad de red EST-07');}
		});

});

$("body").on("click", "#est_js_fn_08", function(){
  var msj_error="";

	if( $('#descripcion1').get(0).value == "" )	msj_error+='Olvidó selecionar la descripción.<br />';
  if( $('#cantidad1').get(0).value == "" )	msj_error+='Olvidó ingresar la cantidad.<br />';

	if( !msj_error == "" ){
		alerta('Faltan datos', msj_error);
		return false;
	}

		$.ajax({
			headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: app_url + 'estadistica/add_medicos',
			type: 'POST',
			data: $("#rrhh_medicos").serialize(),
			dataType: 'json',
			success: function(resp_success){
				if (resp_success['resp'] == true) {
          $("#rrhh_table_1").css("display", "table");
          var id = $('#rrhh_table_1 > tbody > tr:last').find("td:first-child").text();
          var select = $('#descripcion1 option:selected').text();
          count = parseInt(id) + parseInt(1);
          if(isNaN(count)){count = 1;}
          $('#rrhh_table_1').append('<tr><td>'+count+'</td><td>'+select.toUpperCase()+'</td><td>'+$('#cantidad1').val()+'</td></tr>');
          $('#rrhh_medicos').trigger("reset");
        }else{
					alerta('Alerta!', resp_success['mensaje']);
				}
			},
			error: function(respuesta){ alerta('Alerta!','Error de conectividad de red EST-08');}
		});

});

$("body").on("click", "#est_js_fn_09", function(){
  var msj_error="";

	if( $('#descripcion2').get(0).value == "" )	msj_error+='Olvidó selecionar la descripción.<br />';
  if( $('#cantidad2').get(0).value == "" )	msj_error+='Olvidó ingresar la cantidad.<br />';

	if( !msj_error == "" ){
		alerta('Faltan datos', msj_error);
		return false;
	}

		$.ajax({
			headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: app_url + 'estadistica/add_servicios',
			type: 'POST',
			data: $("#rrhh_servicios").serialize(),
			dataType: 'json',
			success: function(resp_success){
				if (resp_success['resp'] == true) {
          $("#rrhh_table_2").css("display", "table");
          var id = $('#rrhh_table_2 > tbody > tr:last').find("td:first-child").text();
          var select = $('#descripcion2 option:selected').text();
          count = parseInt(id) + parseInt(1);
          if(isNaN(count)){count = 1;}
          $('#rrhh_table_2').append('<tr><td>'+count+'</td><td>'+select.toUpperCase()+'</td><td>'+$('#cantidad2').val()+'</td></tr>');
          $('#rrhh_servicios').trigger("reset");
        }else{
					alerta('Alerta!', resp_success['mensaje']);
				}
			},
			error: function(respuesta){ alerta('Alerta!','Error de conectividad de red EST-09');}
		});

});

$("body").on("click", "#est_js_fn_10", function(){
  var msj_error="";

	if( $('#descripcion3').get(0).value == "" )	msj_error+='Olvidó selecionar la descripción.<br />';
  if( $('#cantidad3').get(0).value == "" )	msj_error+='Olvidó ingresar la cantidad.<br />';

	if( !msj_error == "" ){
		alerta('Faltan datos', msj_error);
		return false;
	}

		$.ajax({
			headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: app_url + 'estadistica/add_otras_profesiones',
			type: 'POST',
			data: $("#rrhh_otras_profesiones").serialize(),
			dataType: 'json',
			success: function(resp_success){
				if (resp_success['resp'] == true) {
          $("#rrhh_table_3").css("display", "table");
          var id = $('#rrhh_table_3 > tbody > tr:last').find("td:first-child").text();
          var select = $('#descripcion3 option:selected').text();
          count = parseInt(id) + parseInt(1);
          if(isNaN(count)){count = 1;}
          $('#rrhh_table_3').append('<tr><td>'+count+'</td><td>'+select.toUpperCase()+'</td><td>'+$('#cantidad3').val()+'</td></tr>');
          $('#rrhh_otras_profesiones').trigger("reset");
        }else{
					alerta('Alerta!', resp_success['mensaje']);
				}
			},
			error: function(respuesta){ alerta('Alerta!','Error de conectividad de red EST-10');}
		});

});

$("body").on("click", "#est_js_fn_11", function(){
  var msj_error="";

	if( $('#descripcion4').get(0).value == "" )	msj_error+='Olvidó selecionar la descripción.<br />';
  if( $('#cantidad4').get(0).value == "" )	msj_error+='Olvidó ingresar la cantidad.<br />';

	if( !msj_error == "" ){
		alerta('Faltan datos', msj_error);
		return false;
	}

		$.ajax({
			headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: app_url + 'estadistica/add_administrativo',
			type: 'POST',
			data: $("#rrhh_administrativo").serialize(),
			dataType: 'json',
			success: function(resp_success){
				if (resp_success['resp'] == true) {
          $("#rrhh_table_4").css("display", "table");
          var id = $('#rrhh_table_4 > tbody > tr:last').find("td:first-child").text();
          var select = $('#descripcion4 option:selected').text();
          count = parseInt(id) + parseInt(1);
          if(isNaN(count)){count = 1;}
          $('#rrhh_table_4').append('<tr><td>'+count+'</td><td>'+select.toUpperCase()+'</td><td>'+$('#cantidad4').val()+'</td></tr>');
          $('#rrhh_administrativo').trigger("reset");
        }else{
					alerta('Alerta!', resp_success['mensaje']);
				}
			},
			error: function(respuesta){ alerta('Alerta!','Error de conectividad de red EST-11');}
		});

});

$("body").on("click", "#est_js_fn_12", function(){
  var msj_error="";

	if( $('#descripcion5').get(0).value == "" )	msj_error+='Olvidó selecionar la descripción.<br />';
  if( $('#cantidad5').get(0).value == "" )	msj_error+='Olvidó ingresar la cantidad.<br />';

	if( !msj_error == "" ){
		alerta('Faltan datos', msj_error);
		return false;
	}

		$.ajax({
			headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: app_url + 'estadistica/add_otro_personal',
			type: 'POST',
			data: $("#rrhh_otros").serialize(),
			dataType: 'json',
			success: function(resp_success){
				if (resp_success['resp'] == true) {
          $("#rrhh_table_5").css("display", "table");
          var id = $('#rrhh_table_5 > tbody > tr:last').find("td:first-child").text();
          var select = $('#descripcion5 option:selected').text();
          count = parseInt(id) + parseInt(1);
          if(isNaN(count)){count = 1;}
          $('#rrhh_table_5').append('<tr><td>'+count+'</td><td>'+select.toUpperCase()+'</td><td>'+$('#cantidad5').val()+'</td></tr>');
          $('#rrhh_otros').trigger("reset");
        }else{
					alerta('Alerta!', resp_success['mensaje']);
				}
			},
			error: function(respuesta){ alerta('Alerta!','Error de conectividad de red EST-12');}
		});

});

$("body").on("click", "#est_js_fn_13", function(){
  var msj_error="";

	if( $('#descripcion6').get(0).value == "" )	msj_error+='Olvidó selecionar la descripción.<br />';
  if( $('#cantidad6').get(0).value == "" )	msj_error+='Olvidó ingresar la cantidad.<br />';

	if( !msj_error == "" ){
		alerta('Faltan datos', msj_error);
		return false;
	}

		$.ajax({
			headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: app_url + 'estadistica/add_enfermeras',
			type: 'POST',
			data: $("#rrhh_enfermeras").serialize(),
			dataType: 'json',
			success: function(resp_success){
				if (resp_success['resp'] == true) {
          $("#rrhh_table_6").css("display", "table");
          var id = $('#rrhh_table_6 > tbody > tr:last').find("td:first-child").text();
          var select = $('#descripcion6 option:selected').text();
          count = parseInt(id) + parseInt(1);
          if(isNaN(count)){count = 1;}
          $('#rrhh_table_6').append('<tr><td>'+count+'</td><td>'+select.toUpperCase()+'</td><td>'+$('#cantidad6').val()+'</td></tr>');
          $('#rrhh_enfermeras').trigger("reset");
        }else{
					alerta('Alerta!', resp_success['mensaje']);
				}
			},
			error: function(respuesta){ alerta('Alerta!','Error de conectividad de red EST-13');}
		});

});

$("body").on("click", "#est_js_fn_14", function(){
  var msj_error="";

	if( $('#descripcion1').get(0).value == "" )	msj_error+='Olvidó selecionar la descripción.<br />';
  if( $('#cantidad1').get(0).value == "" )	msj_error+='Olvidó ingresar la cantidad.<br />';

	if( !msj_error == "" ){
		alerta('Faltan datos', msj_error);
		return false;
	}

		$.ajax({
			headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: app_url + 'estadistica/add_enlace',
			type: 'POST',
			data: $("#comunicaciones_enlaces").serialize(),
			dataType: 'json',
			success: function(resp_success){
				if (resp_success['resp'] == true) {
          $("#comunicaciones_table_1").css("display", "table");
          var id = $('#comunicaciones_table_1 > tbody > tr:last').find("td:first-child").text();
          var select = $('#descripcion1 option:selected').text();
          count = parseInt(id) + parseInt(1);
          if(isNaN(count)){count = 1;}
          $('#comunicaciones_table_1').append('<tr><td>'+count+'</td><td>'+select.toUpperCase()+'</td><td>'+$('#cantidad1').val()+'</td></tr>');
          $('#comunicaciones_enlaces').trigger("reset");
        }else{
					alerta('Alerta!', resp_success['mensaje']);
				}
			},
			error: function(respuesta){ alerta('Alerta!','Error de conectividad de red EST-14');}
		});

});

$("body").on("click", "#est_js_fn_15", function(){
  var msj_error="";

	if( $('#descripcion2').get(0).value == "" )	msj_error+='Olvidó selecionar la descripción.<br />';
  if( $('#cantidad2').get(0).value == "" )	msj_error+='Olvidó ingresar la cantidad.<br />';

	if( !msj_error == "" ){
		alerta('Faltan datos', msj_error);
		return false;
	}

		$.ajax({
			headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: app_url + 'estadistica/add_server',
			type: 'POST',
			data: $("#comunicaciones_servidores").serialize(),
			dataType: 'json',
			success: function(resp_success){
				if (resp_success['resp'] == true) {
          $("#comunicaciones_table_2").css("display", "table");
          var id = $('#comunicaciones_table_2 > tbody > tr:last').find("td:first-child").text();
          var select = $('#descripcion2 option:selected').text();
          count = parseInt(id) + parseInt(1);
          if(isNaN(count)){count = 1;}
          $('#comunicaciones_table_2').append('<tr><td>'+count+'</td><td>'+select.toUpperCase()+'</td><td>'+$('#cantidad2').val()+'</td></tr>');
          $('#comunicaciones_servidores').trigger("reset");
        }else{
					alerta('Alerta!', resp_success['mensaje']);
				}
			},
			error: function(respuesta){ alerta('Alerta!','Error de conectividad de red EST-15');}
		});

});

$("body").on("click", "#est_js_fn_16", function(){
  var msj_error="";

	if( $('#descripcion3').get(0).value == "" )	msj_error+='Olvidó selecionar la descripción.<br />';
  if( $('#cantidad3').get(0).value == "" )	msj_error+='Olvidó ingresar la cantidad.<br />';
  if( $('#marca').get(0).value == "" )	msj_error+='Olvidó ingresar la marca.<br />';
  if( $('#servicetag').get(0).value == "" )	msj_error+='Olvidó ingresar el servicetag.<br />';

	if( !msj_error == "" ){
		alerta('Faltan datos', msj_error);
		return false;
	}

		$.ajax({
			headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: app_url + 'estadistica/add_computo',
			type: 'POST',
			data: $("#comunicaciones_computo").serialize(),
			dataType: 'json',
			success: function(resp_success){
				if (resp_success['resp'] == true) {
          $("#comunicaciones_table_3").css("display", "table");
          var id = $('#comunicaciones_table_3 > tbody > tr:last').find("td:first-child").text();
          var select = $('#descripcion3 option:selected').text();
          count = parseInt(id) + parseInt(1);
          if(isNaN(count)){count = 1;}
          $('#comunicaciones_table_3').append('<tr><td>'+count+'</td><td>'+select.toUpperCase()+'</td><td>'+$('#marca').val()+'</td><td>'+$('#servicetag').val()+'</td><td>'+$('#cantidad3').val()+'</td></tr>');
          $('#comunicaciones_computo').trigger("reset");
        }else{
					alerta('Alerta!', resp_success['mensaje']);
				}
			},
			error: function(respuesta){ alerta('Alerta!','Error de conectividad de red EST-16');}
		});

});

$("body").on("click", "#est_js_fn_17", function(){
  var msj_error="";

	if( $('#descripcion1').get(0).value == "" )	msj_error+='Olvidó selecionar la descripción.<br />';
  if( $('#cantidad1').get(0).value == "" )	msj_error+='Olvidó ingresar la cantidad.<br />';

	if( !msj_error == "" ){
		alerta('Faltan datos', msj_error);
		return false;
	}

		$.ajax({
			headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: app_url + 'estadistica/add_inventario',
			type: 'POST',
			data: $("#inventario_equipo").serialize(),
			dataType: 'json',
			success: function(resp_success){
				if (resp_success['resp'] == true) {
          $("#inventario_table_1").css("display", "table");
          var id = $('#inventario_table_1 > tbody > tr:last').find("td:first-child").text();
          var select = $('#descripcion1 option:selected').text();
          count = parseInt(id) + parseInt(1);
          if(isNaN(count)){count = 1;}
          $('#inventario_table_1').append('<tr><td>'+count+'</td><td>'+select.toUpperCase()+'</td><td>'+$('#cantidad1').val()+'</td></tr>');
          $('#inventario_equipo').trigger("reset");
        }else{
					alerta('Alerta!', resp_success['mensaje']);
				}
			},
			error: function(respuesta){ alerta('Alerta!','Error de conectividad de red EST-17');}
		});

});
