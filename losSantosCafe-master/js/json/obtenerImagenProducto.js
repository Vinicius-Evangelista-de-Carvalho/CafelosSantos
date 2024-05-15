var datos = {
	init : function(){
		datos.jsonData();
	},
	jsonData : function() {		
		$.getJSON('../jsonProductos.php', function(data) {			
			if (data) {
				if(data.length>0){
					for (var i = 0; i < data.length; i++) {
						$('#cafes').append('<div class="col-md-4 img-responsive"><a class="lightview" data-lightview-title="'+
						data[i].nombre+'"data-lightview-caption="' 
							+ data[i].descripcion +'"href="' 
							+ data[i].ruta +'"><img src="' 
							+ data[i].ruta +'" alt="" class="img-responsive"></a><h3 id="nombre">' 
							+ data[i].nombre +'</h3><p>'
							+ data[i].descripcion +'</p></div>').fadeIn("slow");
					};
				}else{
					$('#cafes').append('<div class="col-md-4"><img src="../img/menu/notFound.png" class="img-responsive"><h3>No hay cafés registradas en la base de datos</h3></div>');
				};				
			} else{
				$('#cafes').append('<div class="col-md-4"><img src="../img/menu/notFound.png" class="img-responsive"><h3>No hay cafés registradas en la base de datos</h3></div>');
			};
			$('#pagination').append('<ul id="listStuffPager" class="pager"></ul><script type="text/javascript" src="../js/scriptPagination.js"></script>');
		});
	}
};

$(document).ready(
	function () {
		datos.init();
	}
);