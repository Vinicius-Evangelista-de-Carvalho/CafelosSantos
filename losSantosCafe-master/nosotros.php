 <?php
    $titulo="Página de la información de la cafetería";
    $inicio="";
    $menu="";
    $productos="";
    $acerca="active";
    $contacto="";
    include("header.php");
  ?>   
<div class="container frontside">             
  <div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <br>    
            <a class="lightview"
              data-lightview-title="Barista Principal" 
              data-lightview-caption="Maria Isable Mora Camacho"
              href="img/madre.jpg">                         
            <img src="img/madre.jpg" alt="" class="img-responsive img-rounded" alt="Responsive image"></a> 
            </div>
            <br>                            
            <div class="col-md-6"> 
              <div id class = "MisionArriba">
                <p><b>Misión:</b> Brindar a nuestros clientes la satisfacción de degustar productos elaborados a base de uno de los mejores cafés del mundo, en un ambiente agradable y con un buen servicio.</p>                               
              </div> 
              <div id class = "VisionAbajo">   
                <p><b>Visión:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in velit id neque varius condimentum. Nam egestas mattis laoreet. Sed mi leo, faucibus eu porttitor eu, dapibus ut libero.</p>
              </div>
              <a class="lightview"
                  data-lightview-title="Logo 2015" 
                  data-lightview-caption="Los Santos Café"
                  href="img/logo.jpg">                         
                <img src="img/logo.jpg" alt="" class="img-circle center-block logo">
              </a>                                
            </div>
        </div>
    </div>
  </div>      
<?php include("footer.php");  ?>

  

