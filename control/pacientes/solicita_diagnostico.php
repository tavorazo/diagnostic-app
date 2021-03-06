<!DOCTYPE html>
<html>
<head>
	<title>DiagnosticApp | Diagnostico</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="../../assets/css/main.css" />
	<link rel="stylesheet" href="../../assets/css/extra.css" />
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
	$(function(){
		$('#solicitar').click(function(){
			var url = '../Back/b_solicita_diagnostico.php';
			$.ajax({
				type: "POST",
				url : url,
				data: $('#diagnostico_form').serialize(),
				success: function(data){
					$('#alerta').css({
						width: '100%',
						background: '#01DFA5',
						height: '50px',
						position: 'static',
						color: 'white'
					}).text('Enviado correctamente');
				}
			});
			return false;
		});
	});

	</script>
</head>
<body id="bg-panel">
	<div id="menu">
	    <!--h6>Nombre Usuario | <a href=""><strong>Cerrar sesión</strong></a> </h6-->
	    <a href="../panel.php"><img src="../../images/logo.png"></img> Diagnostic<strong>App</strong></a>
	</div>
	<div id="alerta"></div>
	<div id="main" style="padding:0 10px">
		<form action="" id="diagnostico_form">
			<label for="tipo_archivo">Tipo de archivo a subir</label>
			<select name="tipo_archivo" id="tipo_archivo">
				<option value="">- Categoria -</option>
				<option value="1"> Mamografía</option>
				<option value="2"> Otro documento </option>
			</select>
			<br><br>
			<label for="descripcion-archivo">Descripción del(o los) archivo(s) a subir</label>
			<textarea name="descripcion-archivo" id="descripcion-archivo" cols="30" rows="10" placeholder="Escribe tu descripción del archivo aqui..." required ></textarea>
			<br><br>
			<input name="file" id="file" type="file" required>
			<br><br><br>
			<input value="Enviar archivo" type="submit" class="alt" id="solicitar">
		</form>
	</div>	
</body>
</html>