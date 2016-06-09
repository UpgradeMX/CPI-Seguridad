// JavaScript Document


$(document).ready(function() {
    
	/*$('.prueba').click(function(e) {
       
	    var texto = $(this).html();
		$(this).css('background-color','#000');
		
		$(this).css('margin-top','100px');
		//alert(texto);
    });*/
	

});

//Cambio de tamaño en la vetana
function thisResize() {
	
}

var resizeTimer; $(window).resize(function () { if (resizeTimer) { clearTimeout(resizeTimer); } resizeTimer = setTimeout(function() { resizeTimer = null; thisResize(); }, 500);});