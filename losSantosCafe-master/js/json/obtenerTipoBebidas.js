var datos = {
	init : function(){
		datos.jsonData();
	},
	jsonData : function() {		
		$.getJSON('../../jsonTipoBebidas.php', function(data) {			
			if (data) {
				for (var i = 0; i < data.length; i++) {
					$('#tipoBebidas').append('<OPTION VALUE="'+
					data[i].tipoBebida+'">' 
						+ data[i].tipoBebida +'</OPTION>').fadeIn("slow");
				};				
			};
		});
	}
};
$(document).ready(
	function () {
		datos.init();
	}
);