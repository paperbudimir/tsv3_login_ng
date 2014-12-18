$(document).ready(function(){

	// SUPPORT TICKET SCRIPTS
	$(".support-ticket-trigger").click(function(e){
		e.preventDefault();
		$("div.support-ticket-fader, div.support-ticket-box").fadeIn();
	});

	$(".close-support-ticket").click(function(e){
		e.preventDefault();
		$("div.support-ticket-fader, div.support-ticket-box").fadeOut();
	});

	$("#submit-ticket").click(function(e){
		e.preventDefault();
		
		$(this).html('<i class="fa fa-refresh fa-spin"></i>');

		// TEMPORARELY ADDED TO SIMULATE LOADING TIME 
		setTimeout(function(){
			$(".form-step-1").slideUp(200);
			setTimeout(function(){
				$(".form-step-2").slideDown(200);
			}, 200);

			// TEMPORARELY ADDED TO SIMULATE THANKS MESSAGE 
			var form = $("#ticket-form");
			var user = $("[name='user']", form).val();
			if(user.length > 0) {
				$("span.thank-user").html("Thank you " + user + ". ");
			}			
		}, 3000);
	});

	// CAPTCHA TOGGLER
	if($.cookie('captchaSlided')) {
		$('.captcha-line').hide();
		$('#login-submit').removeAttr('disabled');
	}

	// DROPDOWN SELECTOR STYLE FIX
	$("select.form-control").change(function(){
		$(this).css("color","#555");
	});
	
	
});