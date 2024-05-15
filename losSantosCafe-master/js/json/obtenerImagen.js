var pathname = window.location.pathname;
var filename = pathname.split('/').pop();
var menu = filename.replace(/\.(php)$/, "");
var datos = {
	init : function(){
		datos.jsonData();
	},
	jsonData : function() {
		
		$.getJSON('../jsonMenu.php',{ menu: escape(menu) }, function(data) {
			
			if (data) {
				if(data.length>0){
					for (var i = 0; i < data.length; i++) {
						$('#bebidas').append('<div class="col-md-4 img-responsive"><a class="lightview" data-lightview-title="'+
						data[i].nombre+'"data-lightview-caption="' 
							+ data[i].ingredientes +'"href="' 
							+ data[i].ruta +'"><img src="' 
							+ data[i].ruta +'" alt="" class="img-responsive"></a><h3 id="nombre">' 
							+ data[i].nombre +'</h3><p>'
							+ data[i].ingredientes +'</p></div>').fadeIn("slow");
					};
				}else{
					$('#bebidas').append('<div class="col-md-4"><img src="../img/menu/notFound.png" class="img-responsive"><h3>No hay bebidas registradas en la base de datos</h3></div>');
				};				
			} else{
				$('#bebidas').append('<div class="col-md-4"><img src="../img/menu/notFound.png" class="img-responsive"><h3>No Hay Bebidas registradas en la base de datos</h3></div>');
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