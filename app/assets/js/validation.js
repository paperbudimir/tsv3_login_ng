// DEFINING REGEX TEST VARIABLES
var wrongCharString = " can contain a-z, A-Z, 0-9, -, ., @, _ and must begin with either a letter, number or underscore. No spaces, please.";
var fieldContentTest = /^[a-zA-Z0-9-_.@]+/g;

$('.has-feedback .form-control').blur(function(){
	var parent = $(this).parent('.has-feedback');
	parent.find('.input-group-addon, .input-group-addon i').css("backgroundColor", "#f5f5f5");
	var fieldname;
	fieldname = $(this).data('value');

	if(!fieldname) var fieldname = "Field";

	var fieldPlaceholder = $(this).data('value');
	var fieldValue = $(this).val();

	if (fieldValue.length == 0 || fieldValue == fieldPlaceholder) {
		// field empty
		parent.removeClass('has-success').addClass('has-error');
		$("#error-message").html(fieldname + " can't be blank!");
		$(this).val(fieldPlaceholder);

		if($(this).hasClass('login-password')) {
			$(this).attr('type', 'text');
		}

	} else if (fieldValue.length < 6) {
		// field has les than 6 chars
		parent.removeClass('has-success').addClass('has-error');
		$("#error-message").html(fieldname + " must have minimum 6 characters!");
	} else {
		// validation positive
		parent.addClass('has-success').removeClass('has-error');
		$("#error-message").html("");
	}
});

$('.has-feedback .form-control').focus(function(e){
	e.stopPropagation();
	var parent = $(this).parent('.has-feedback');
	parent.removeClass('has-error has-success');
	parent.find('.input-group-addon, .input-group-addon i').css("backgroundColor", "#fff");

	var fieldPlaceholder = $(this).data('value');
	var fieldValue = $(this).val();
	if(fieldValue == fieldPlaceholder) {
		$(this).val("");
	}

	if($(this).hasClass('login-password')) {
		if($(this).attr('type', 'text')) {
			$(this).attr('type', 'password');
		}
	}
});

// REGEX VALIDATION OF INSERTED VALUES | temporarely disabled
/*
$('.has-feedback .form-control').keyup(function(e){
	e.stopPropagation();
	var enteredInput = $(this).val();
	var parent = $(this).parent('.has-feedback');
	var fieldname = "Field";
	fieldname = $(this).data('value');

	function CheckRegEx(toBeRegTested){
		var RegTest = /^[a-zA-Z0-9-_.@]+/g;
		return RegTest.test(toBeRegTested);
	}

	var testRegExp = CheckRegEx(enteredInput);
	console.log(testRegExp);

	if(testRegExp && (enteredInput != '')) {
		parent.removeClass('has-error');
		$("#error-message").html('');
	} else {
		parent.addClass('has-error');
		$("#error-message").html(fieldname + wrongCharString);
	}
});
*/

function shakeForm() {
	var p = [5, 10, 5, 0, -5, -10, -5, 0];
	var x = $('.shake').offset().left;
	var speed = 12;
	for(var i = 0; i < 2; i++) {
		$.each(p, function() {
			$('.shake').animate({'left': this }, speed);
		});
	}
}

$('#login-submit').click(function(e){
	e.preventDefault();
	if($(this).attr('disabled', 'false')) {

		var buttonLabel = $(this).text();
		$(this).html('<i class="fa fa-refresh fa-spin"></i>');

		$('#error-message').text('');
		var form = $('#login-form');
		var rememberme;
		($('#myonoffswitch').is(":checked")) ? rememberme = 1 :	rememberme = 0;

		data = {
			username : $("[name='username']", form).val(),
			password : $("[name='password']", form).val(),
			rememberme : rememberme,
		}
		
		$.ajax({
			type: 'POST',
			url: 'http://31.192.124.222/login',
			data: data,
			error: function(){
				$('#error-message').html("Server doesn't respond. Please try again.");
				shakeForm();
				$('#login-submit').removeAttr('disabled');
				$('#login-submit, #submit-ticket').html(buttonLabel);

				// FOLLOWING 3 LINES ADDED TEMPORARELY FOR LOCAL TESTING
				$('.captcha-line').show();
				$('#login-submit').attr('disabled', 'disabled');
				$.removeCookie('captchaSlided');
			},
			success: function(data){
				if(data == 1){
					location.reload();
				}else{
					$('.has-feedback').removeClass('has-success').addClass('has-error');
					$('#error-message').html(data);
					$('#login-submit').removeAttr('disabled');
					shakeForm();
					$(this).html(buttonLabel);

					if($.cookie('captchaSlided')) {
						$('.captcha-line').show();
						$('#login-submit, #submit-ticket').attr('disabled', 'disabled');
					}

					$.removeCookie('captchaSlided');
				}
				
			}
		});

		}
	});