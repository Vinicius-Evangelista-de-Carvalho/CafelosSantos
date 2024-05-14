<?php
  $titulo="Página de Contacto de la Cafetería";
  $inicio="";
  $menu="";
  $productos="";
  $acerca="";
  $contacto="active";
  include("header.php");  
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false">
</script>
<script> 
  function init_map() {
    var var_location = new google.maps.LatLng(9.659702, -84.020042);
    var var_mapoptions = {
      center: var_location,
      zoom: 16
    };

    var var_marker = new google.maps.Marker({
      position: var_location,
      map: var_map,
      title:"Los Santos Café"
    });

    var var_map = new google.maps.Map(
      document.getElementById("map-container"),
      var_mapoptions
    );

    var_marker.setMap(var_map); 
  } 
  google.maps.event.addDomListener(window, 'load', init_map); 
</script>
<div id="fb-root"></div>
<script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<div class="section background">
  <div class="container frontside">
    <h1></h1>
    <div class="section">
      <div class="container-fluid">
          <div id="map-outer" class="row">
            <div class="col-md-4">
              <div id="address" class="col-md-12">
                <h2>Nuestra Ubicación</h2>
                <address>
                <strong>Cafetería Los Santos Café</strong><br>
                    San Marcos De Tarrazú<br>
                    San José<br>
                    Costa Rica<br>
                    <abbr>Teléfono:</abbr> +506 2546 78 81
               </address>
              </div>
              <div id="facebookPage" class="col-md-12 hidden-xs">
                <div class="fb-page" data-href="https://www.facebook.com/pages/Los-Santos-Caf%C3%A9/180401445311962" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
                  <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/pages/Los-Santos-Caf%C3%A9/180401445311962">
                      <a href="https://www.facebook.com/pages/Los-Santos-Caf%C3%A9/180401445311962">Los Santos Café</a>
                    </blockquote>
                  </div>
                </div>
              </div>                        
            </div>
            <div id="map-container" class="col-md-8">
            </div>
          </div><!-- /map-outer -->
      </div><!-- /container -->
    </div><!-- /section -->
    <div class="section">
      <div class="container-fluid">
        <div class="row">
          <?php
            if (isset($_POST['submit'])) {
              $nombre=$_POST["nombre"];
              $email=$_POST["email"];
              $apellidos=$_POST["apellidos"];
              $comentario=$_POST["comentario"];
              include('correo.php');
              if ($result == 0) {
                echo '<div class="alert alert-danger alert-dismissible" role="alert" id="mensaje">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      <span class="sr-only">Error:</span>
                      Error al enviar el correo, por favor verifique la dirección de correo ingresada.
                     </div>';
              } else {
                echo '<div class="alert alert-success alert-dismissible" role="alert" id="mensaje">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                      <span class="sr-only">Correcto:</span>
                      El correo se ha enviado correctamente, gracias por los comentarios!
                     </div>';
              }
            }             
          ?>
          <form class="form-horizontal" method="POST" name="correo" action="contacto.php">
            <div class="form-group">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required/>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required/>
                </div>
                <div class="col-md-4 input-group">
                <span class="input-group-addon">@</span>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" required/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <textarea rows="6" class="form-control" id="comentario" name="comentario" placeholder="Digite sus preguntas o comentarios aquí" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12<">
                    <button type="submit" value="Submit" name="submit" class="btn btn-success center-block">Enviar</button>
                </div>
            </div>
          </form>
        </div><!-- /row -->
      </div><!-- /container -->
    </div><!-- /section -->
<?php include("footer.php");  ?>
