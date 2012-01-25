jQuery(document).ready(function($) {	
		
	$('#referalForm').submit(function(e) {
		
		$.ajax({
			type: "POST",
			url: 'send.php',
			data: $('form#referalForm').serialize(),
			dataType: 'json',
			success: function(response) {
				
				if(response.status == 'success') {
					var elLeft = $('#referalForm').parent().offset().left;
					var elTop = $('#referalForm').parent().offset().top;
					
					console.log(Math.floor(elTop));
					console.log(elLeft);
					elTop = Math.floor(elTop);
					
					console.log(elTop);
					$('.referal_pop').show().offset({ top: 10, left: 10});
					$('#referalForm').parent().hide();
					$('.referal_pop').html(response.message).show();
				/*	$('#referalForm')[0].reset();*/
				}
				else {
					$('.referal_pop').hide().fadeIn('slow').html(response.message);
				}
			}
		});
		return false;
	});	
});