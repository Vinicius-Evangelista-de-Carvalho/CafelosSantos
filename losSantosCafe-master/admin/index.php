<?php
	session_start();
	//Se verifica si no existe la variable '$_SESSION' con el identificador 'Nombre'
	if (!isset($_SESSION['Nombre'])) {
	    //Si es asi entonces se redirecciona al usuario al formulario de inicio de sesion
	    header('location: login.php');
	}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Página de Administración de la Cafetería</title>
		<link rel="icon" href="../img/favicon.ico">
	    <meta name="description" content="Página de Administración de la Cafetería">
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
	    rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../css/styleMenuAdmin.css" type="text/css">
	    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
	</head>
	<body>	
		<div class="section">
			<div class="container">
				<div class="row" id="titulo">
					<p id="header">Los Santos Café</p>
					<p id="subheader">Panel de Administración</p>					
				</div>
				<div class="row">
					<a class="btn" href="../index.php" role="button">
						<div class="opcion col-md-2" id="uno">
							<img class="icon" src="../img/admin/icon1.png">
							<p class="texto">Inicio</p>
						</div>
					</a>
					<a class="btn" href="menus/agregarMenu.php" role="button">
						<div class="opcion col-md-2" id="dos">
							<img class="icon" src="../img/admin/icon2.png">
							<p class="texto">Menús</p>
						</div>
					</a>
					<a class="btn" href="productos/agregarProducto.php" role="button">
						<div class="opcion col-md-2" id="tres">
							<img class="icon" src="../img/admin/icon3.png">
							<p class="texto">Productos</p>
						</div>
					</a>
					<a class="btn" href="https://www.facebook.com/pages/Los-Santos-Caf%C3%A9/180401445311962" role="button">
						<div class="opcion col-md-2" id="cuatro">
							<img class="icon" src="../img/admin/icon4.png">
							<p class="texto">Facebook</p>
						</div>
					</a>
					<a class="btn" href="https://mail.google.com/mail/u/0/?tab=wm#inbox" role="button">
						<div class="opcion col-md-2" id="cinco">
							<img class="icon" src="../img/admin/icon5.png">
							<p class="texto">correo</p>
						</div>
					</a>
					<a class="btn" href="cerrarSesion.php" role="button">
						<div class="opcion col-md-2" id="seis">
							<img class="icon" src="../img/admin/icon6.png">
							<p class="texto">Cerrar sesión</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</body>
</html>