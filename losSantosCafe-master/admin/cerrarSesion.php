<?php
//Se retoma la sesion actual
session_start();
//Se destruye la sesion actual
session_destroy();
//Se redirecciona al usuario a la pagina de inicio de sesion
header("Location: login.php");
?>