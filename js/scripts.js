$(document).ready(function(){
	$('#section2').hide();
	$('#next1l').click(function(){
		if ($("#content-pass").hasClass("quitar")) {
			$("#content-pass").removeClass("quitar");
		}
		$('#section2').show(1000);
	});
$('#next1').click(function(){    		 	
   		//$('#datos-pers').css('opacity','0.8');	
   }); 

});