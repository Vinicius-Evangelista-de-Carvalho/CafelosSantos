<?php
    session_start();
    //Se verifica si no existe la variable '$_SESSION' con el identificador 'Nombre'
    if (!isset($_SESSION['Nombre'])) {
        //Si es asi entonces se redirecciona al usuario al formulario de inicio de sesion
        header('location: ../login.php');
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Página de Administración de la Cafetería</title>
		<link rel="icon" href="../../img/favicon.ico">
	    <meta name="description" content="Página de Administración de la Cafetería">
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
	    rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../../css/styleMenuAdmin.css" type="text/css">
	    <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../../js/jquery.min.js"></script>
        <script type="text/javascript" src="../../js/fileinput.min.js"></script>
        <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../js/fileinput_locale_es.js"></script>
        <link href="../../css/fileinput.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../../js/scriptTextarea.js"></script>
	</head>
    <body>
    	<div class="section">
            <div class="container">
                <div class="row" id="titulo">
                    <p id="header">Los Santos Café</p>
                    <p id="subheader">Panel de Administración de los productos</p>                   
                </div>
                <div class="row">
                    <div class="col-md-2">                        
                    </div>
                    <div class="col-md-8 panel panel-default" id="panel">
                        <div class="panel-body">
                            <?php
                                if (isset($_GET['error'])) {
                                  $error=$_GET["error"];
                                    echo '<div class="alert alert-danger alert-dismissible" role="alert" id="mensaje">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span></button>
                                          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                          <span class="sr-only">Error:</span>'.$error.'</div>';
                                } elseif (isset($_GET['mensaje'])){
                                    $mensaje=$_GET['mensaje'];
                                    echo '<div class="alert alert-success alert-dismissible" role="alert" id="mensaje">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span></button>
                                          <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                          <span class="sr-only">Correcto:</span>'.$mensaje.'</div>';
                                  }             
                              ?>
                            <form action="../uploadProducto.php" method="post" enctype="multipart/form-data">
                                <div>
                                	<label class="control-label">Seleccione la imagen que desea subir:</label>                                    
                                    <input id="input-21" type="file" accept="image/*" name="fileToUpload" required>
                                    <script>
                                    /* Initialize your widget via javascript as follows */
                                    $("#input-21").fileinput({
                                        'showUpload':false,
                                        previewFileType: "image",
                                        browseClass: "btn btn-success",
                                        browseLabel: "&nbsp;&nbsp;Buscar imagen",
                                        browseIcon: '<i class="glyphicon glyphicon-picture"></i>',
                                        removeClass: "btn btn-danger",
                                        removeLabel: "&nbsp;&nbsp;Cancelar",
                                        removeIcon: '<i class="glyphicon glyphicon-trash"></i>',
                                    });
                                    </script>
                                </div>
                                <div>
                                    <label class="control-label" id="label">Ingrese un nombre para el producto:</label>  
                                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                                </div>
                                <div>                                	
                                	<label class="control-label" id="label">Ingrese una descripción del producto:</label>
	                        		<textarea class="form-control resizable" rows="3" name="descripcion" id="descripcion" maxlength="100" required></textarea>
	                            	<div id"contador"></div>
                                </div>
                                </br>
                                <div class="text-center" >
                                    <input type="button" value="Atrás" name="atras" onClick="location.href='../index.php'" class="btn btn-back">
                                    <input type="submit" value="Aceptar" name="submit" class="btn btn-success">
                                </div>
                            </form>
                        </div>                        
                    </div>
                    <div class="col-md-2">                        
                    </div>                    
                </div>
            </div>
        </div>        
    </body>
</html>