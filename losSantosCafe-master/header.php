<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="img/favicon.ico">
        <meta name="description" content="Página de Inicio de la Cafetería">
        <title><?php echo $titulo; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/scriptTopPage.js"></script>
        <link rel="stylesheet" type="text/css" href="css/slicebox.css" />
        <script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
        <script type="text/javascript" src="js/jquery.slicebox.js"></script> 
        <script type="text/javascript" src="js/lightview/spinners.min.js"></script>
        <script type="text/javascript" src="js/lightview/lightview.js"></script>
        <link rel="stylesheet" type="text/css" href="css/lightview/lightview.css" />


        <script type="text/javascript" src="js/scriptRedesSociales.js"></script>        
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js' type='text/javascript'/></script>
    </head>
    <body>
    <div class="section background ">
        <div class="container" style="padding:0px">
            <nav class="navbar navbar-default navbar-static-top" role= "navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <span><img src="img/favicon.ico"></span>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li <?php echo" class=\"$inicio\""; ?>>
                                <a href="index.php">Inicio</a>
                            </li>
                            <li <?php echo" class=\"$menu\""; ?> >
                                <a href="menu/expressos.php">Menú</a>
                            </li>
                            <li <?php echo" class=\"$productos\""; ?>>
                                <a href="productos/cafes.php">Productos</a>
                            </li>
                            <li <?php echo" class=\"$acerca\""; ?>>
                                <a href="nosotros.php">Acerca de Nosotros</a>
                            </li>
                            <li <?php echo" class=\"$contacto\""; ?>>
                                <a href="contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class='botones-sociales derecha hidden-phone hidden-tablet hidden-xs'>
            <a class='itemsocial' href='https://es-es.facebook.com/pages/Los-Santos-Caf%C3%A9/180401445311962' id='facebook-btn' target='_blank'><span class='social'><span class='texto'>Síguenos via Facebook</span></span></a>
            <a class='itemsocial' href='url de twitter'id='twitter-btn' target='_blank'><span class='social'><span class='texto'>Síguenos via Twitter</span></span></a>
            <a class='itemsocial' href='url de google+' id='google-btn' target='_blank'><span class='social'><span class='texto'>Síguenos via Google</span></span></a>
            <a class='itemsocial'href='url de pinterest 'id='pinterest-btn' target='_blank'><span class='social'><span class='texto'>Síguenos via Pinterest</span></span></a>
        </div>