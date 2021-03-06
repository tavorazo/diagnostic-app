<!DOCTYPE html>
<html>
<head>
	<title>DiagnosticApp | Panel</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="../assets/css/main.css" />
	<link rel="stylesheet" href="../assets/css/extra.css" />
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
		$(function(){
			var a = getUrlVars()["contrasena"];
			switch(a){
				case "usuario":
					$("#usuario").show();
					$("#doctor").hide();
					$("#clinica").hide();
					break;
				case "doctor":
					$("#usuario").hide();
					$("#doctor").show();
					$("#clinica").hide();
					break;
				case "clinica":
					$("#usuario").hide();
					$("#doctor").hide();
					$("#clinica").show();
					break;
				default: 
					$("#usuario").hide();
					$("#doctor").hide();
					$("#clinica").hide();
					$('#alerta').css({
						width: '100%',
						background: 'red',
						height: '50px',
						position: 'static',
						color: 'white',
						padding: '15px',
						top: '20px'
					}).text('Usuario incorrecto');
					setTimeout ("redireccionar()", 1000);
			}
		});

		function redireccionar() {
			location.href="login.html"
		} 


		function getUrlVars() {
			var vars = {};
			var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
				vars[key] = value;
			});
			return vars;
		}
	</script>
</head>
<body id="bg-panel">
	<div id="menu">
	    <!--h6>Nombre Usuario | <a href=""><strong>Cerrar sesión</strong></a> </h6-->
	    <a href="../index.php"><img src="../images/logo.png"></img> Diagnostic<strong>App</strong></a>
	</div>
	<div id="alerta"></div>
	<div id="main">
	    
	    <div class="panel" id="usuario" >
		    <center><h1>!Hola <strong>usuario</strong>! Bienvenida de nuevo</h1></center>
		    <br><br>
	        <h1>Panel de control</h1>
	        <div class="option">
	            <div id="img"><img src="../images/2.png" style="width: 81px; margin: 15px 41%;"></div>
	            <a href="pacientes/historial.php"><p> Historial de tus archivos</p></a>
	        </div>
	        <div class="option">
	            <div id="img"><img src="../images/3.png"></div>
	            <a href="pacientes/solicita_diagnostico.php"><p> Solicita diagnostico</p></a>
	        </div>
	        <div class="option">
	           <div id="img"><img src="../images/1.png" style="margin-top: 20px; height: 114px;"></div>
	            <p> Chat con el doctor</p>
	        </div>
	        <div class="option">
	            <div id="img"><img src="../images/4.png" style="margin-top: 50px; width: 110px;"></div>
	            <p> Llamada de emergencia</p>
	        </div>
	    <br><br><br><br>
	    </div>
	    
	    
	    
	    
	    <div class="panel" id="doctor" >
	        <center><h1>!Hola <strong>doctor</strong>! Estos son los trabajos a revisar</h1></center>
	    	<br><br>
	    	<div class="lista">
	       		<h1>Lista de casos para revisar</h1>
	            <div class="td">
	                <div id="img">
	                	<center>
	                		<img src="https://cdn1.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/gender-female-circle-pink-3-48.png">
	                	</center>
	                </div>    
	                <div id="datos">
	                    <p><strong>Nombre:</strong> Usuario apellido apellido<br>
	                    <strong>Tipo de documento:</strong> Radiografía<br>
	                    <strong>Fecha:</strong> 0/00/00 <br> 
	                    <strong>Descripción:</strong> Esta es una descrición del documento subido</p>
	                	<a href="doctores/diagnostico.php" class="button special fit small" style="background:#F190D4; float:left; margin:20px 0; width:100%">Diagnosticar</a>    
	                </div>
	            </div>
	            <br><br>
	        	<div class="td">
	                <div id="img">
	                	<center>
	                		<img src="https://cdn1.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/gender-female-circle-pink-3-48.png">
	                	</center>
	                </div>    
	                <div id="datos">
	                    <p><strong>Nombre:</strong> Usuario apellido apellido<br>
	                    <strong>Tipo de documento:</strong> Radiografía<br>
	                    <strong>Fecha:</strong> 0/00/00 <br> 
	                    <strong>Descripción:</strong> Esta es una descrición del documento subido</p>
	                	<a href="doctores/diagnostico.php" class="button special fit small" style="background:#F190D4; float:left; margin:20px 0; width:100%">Diagnosticar</a>    
	                </div>
	            </div>
	        </div>
	    <br><br><br>
	    </div>
	    
	    
	    
	    <div class="panel" id="clinica" >
	       <center><h1>!Bienvenida <strong>clinica</strong>! Estamos listos para trabajar</h1></center>
	    	<br><br>
	       <div class="lista">
	       		<h1>Panel de control</h1>
	        </div> 
	        <div class="option" style="margin-top:50px">
	            <div id="img"><img src="../images/2.png" style="width: 81px; margin: 15px 41%;"></div>
	            <a href="clinicas/registrar.php"><p> Registra tus doctores</p></a>
	        </div>
	        <div class="option" style="margin-top:50px">
		        <div id="img"><img src="../images/1.png" style="margin-top: 20px; height: 114px;"></div>
	            <a href="clinicas/asignar_medico.php"><p> Asigna diagnosticos a tus doctores</p></a>
	        </div>
	    </div>

	    
	    
	</div>
</body>
</html>