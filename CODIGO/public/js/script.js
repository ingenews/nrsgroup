$(document).ready(function() { 

	  /*****************************/
	  /* Evento AJAX borra usuario */
	  /*****************************/
      $(".dltUsuario").click(function(){
	      	if (confirm("Desea borrar el usuario?")) {
			    $.post( "/delusuario", { id: $(this).attr("id_usuario") })
				  .done(function( data ) {
				    location.href="/usuarios";
				  });
			}
      });
      /******************************/

      /***********************/
      /* Seleccion la butaca */
      /***********************/
      $(".butaca").click(function(){
      	if ($(this).hasClass("estado1")){
      		alert("Butaca no disponible!");
      	}else{
	      	if ($(this).hasClass("selbutaca"))
	      		$(this).removeClass("selbutaca");
	      	else
	      		$(this).addClass("selbutaca");
	    }
      });
      /***********************/

      /***********************************************/
      /* Cuando se selecciona un usuario en reservas */
      /***********************************************/
      $("#id_usuario").change(function(){
      	if ($(this).val()=="")
      		location.href="/reservas";
      	else	
      		location.href="/reservas?id_usuario="+$(this).val();
      });
      /***********************************************/

      /******************************/
      /* Evento AJAX guarda reserva */
      /******************************/
      $(".guardaReserva").click(function(){
      	var ids="0";
      	$( ".selbutaca" ).each(function( index ) {
		  ids=ids+','+$(this).attr("id");
		});
		$.post( "/guardareserva", { 'ids': ids, "id_usuario": $("#id_usuario").val() })
		  .done(function( data ) {
		    location.href="/reservas?id_usuario="+$("#id_usuario").val();
		  });
      });
      /******************************/

      /*******************************/
      /* Evento AJAX elimina reserva */
      /*******************************/
      $(".elimres").click(function(){
      	if (confirm("Desea cancelar esta reserva?")) {
			    $.post( "/delreserva", { id: $(this).attr("id_res") })
				  .done(function( data ) {
				    location.href="/reservas?id_usuario="+$("#id_usuario").val();
				  });
			}
      });
      /*******************************/
});