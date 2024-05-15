<!DOCTYPE html>
<html lang='es'>
	<head>
        <link rel="icon" href="../img/favicon.ico">
	    <meta charset="UTF-8" /> 
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>
	        Acceso al panel de Administración
	    </title>
	    <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
	    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
	    <link rel="stylesheet" type="text/css" href="../css/styleLogin.css" />
	</head>
	<body>		
		<div class="container">
		    <div class="row">
		        <div class="col-xs-12 col-md-4 col-md-offset-4">
		            <h1 class="text-center login-title">Acceso al panel de Administración</h1>
		            <?php
		                if (isset($_POST['Aceptar'])) {
							include('connection.php');
							$con = new connection();
							$user = $_POST["nombreUsuario"];
							$pass = $_POST["passwordUsuario"];
							$result= $con->getUser($user,$pass);
							if (count($result) > 0) {
								session_start();
								$nombreUsuario = $result['nombre'];
								$_SESSION["Nombre"] = $nombreUsuario;
								header('Location: index.php');
							} else {
								echo '<div class="alert alert-danger" role="alert" id="mensaje">
										  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
										  <span class="sr-only">Error:</span>
										  Usuario o Contraseña incorrectos
									   </div>';
							}
						}							
					?>
		            <div class="account-wall">
		                <img class="profile-img" src="../img/logo.jpg" height="612" width="612" alt="">
		                <form class="form-signin" method="POST" name="Aceptar" action="login.php">
		                  <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" placeholder="Usuario" required autofocus>
		                  <input type="password" name="passwordUsuario" id="passwordUsuario" class="form-control" placeholder="Contraseña" required>
		                  <input class="btn btn-lg btn-primary btn-block" type="submit" name="Aceptar" value="Aceptar">
		                  <input type="button" class="btn btn-lg btn-primary btn-block" name="Volver" value="Volver" onClick="location.href='../index.php'">
		                </form>
		            </div>
		        </div>
		    </div>
		</div>
	</body>
</html>
