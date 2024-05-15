var limite = 140;
			$(document).ready(function()
			{
			    // cada vez que se deja de presionar una tecla
			    $("#ingredientes").keyup(function(e)
			    {
			        // obtenemos el texto que está escrito en el textarea
			        var box = $(this).val();

			        // obtenemos cuántos caracteres quedan
			        var resta = limite - box.length;

			        // si aún no se llegó al límite
			        if(box.length <= limite)
			        {
			            // modificamos el texto que muestra la cantidad de caracteres que restan
			            console.log(resta);
			            $('#contador').html(resta);
			        }
			        else // si se llegó al límite no permitimos ingresar más caracteres
			        {
			            // evitamos que ingrese más caracteres
			            e.preventDefault();
			        }               
			    });
			});