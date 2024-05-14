<?php
    $titulo="Página del menú de los Batidos";
    $menuProductos="active";
    $menuApicolas="";
    
    include("../navProductos.php");  
?> 
<div class="section">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <h1 class="text-center">Cafés</h1>
          </div>
      </div>
      <div id="listStuff">
        <div class="row" id="cafes">
          
        </div>
        <div class="row" id="pagination">
        
        </div>
      </div> 
  </div>
</div>
<?php include("../footer.php");  ?>