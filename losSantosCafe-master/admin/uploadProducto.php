<?php
    session_start();
    //Se verifica si no existe la variable '$_SESSION' con el identificador 'Nombre'
    if (!isset($_SESSION['Nombre'])) {
        //Si es asi entonces se redirecciona al usuario al formulario de inicio de sesion
        header('location: login.php');
    }

$target_dir = "../img/productos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Se verifica si el archivo recibido es una imagen o no
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $error= "El archivo no es una imagen.";
        $uploadOk = 0;
    }
}
// Se verifica si el archivo ya existe en el servidor
if (file_exists($target_file)) {
    $error= "Error, la imagen ya existe en el servidor.";
    $uploadOk = 0;
}
// Se verifica el tamaño del archivo
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    $error= "Error, el archivo es demasiado grande.";
    $uploadOk = 0;
}
// Se verifica que el arhivo sea un .png, .jpg o un .gif
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $error= "Error, solo se aceptan imagenes con los formatos JPG, JPEG, PNG & GIF.";
    $uploadOk = 0;
}
// Se verifica si ocurrio un error
if ($uploadOk == 0) {
$location="Location: productos/agregarProducto.php?error=".$error;
// Sí no existe ningún error, entonces se procede a subir la imagen y a registrarla en la base
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //Sí se logro mover la imagen al server, entonces se ejecuta el insert a la base
        include('connection.php');
        $con = new connection();       
        $descripcion = $_POST["descripcion"];
        $nombre=$_POST["nombre"];
        $ruta=$target_file;
        $result= $con->addProducto ($nombre, $ruta, $descripcion);
        //sí la función del insert devuelve un valor entonces se cumplio el registro en la base
        if (count($result) > 0) {
            $mensaje= "La imagen ". basename( $_FILES["fileToUpload"]["name"]). " se ha subido correctamente.";
            $location="Location: productos/agregarProducto.php?mensaje=".$mensaje;
        } else {
            $error= "Error, ocurrio un problema al insertar en la base de datos, por favor vuelva a intentarlo.";
            $location="Location: productos/agregarProducto.php?error=".$error;
        }
    } else {
        $error= "Error, ocurrio un problema al subir el archivo al servidor.";
        $location="Location: productos/agregarProducto.php?error=".$error;        
    }
}
header($location);
?>