<!DOCTYPE html>
<html ng-app="tsv3">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login || Teamskeet.com</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		
		<link rel="stylesheet" type="text/css" href="app/assets/css/bootstrap.min.css" />	
		<link rel="stylesheet" type="text/css" href="app/assets/css/font-awesome.min.css" />
		
		<!-- Regular CSS styles -->
		<!--<link rel="stylesheet" href="css/styles.css" />-->

		<!-- Testing LESS styles -->
		<link rel="stylesheet/less" type="text/css" href="css/styles.less" />

		<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
		<link rel="stylesheet" type="text/css" href="app/assets/css/fancy-checkbox.css" />
		<link rel="stylesheet" type="text/css" href="app/assets/css/QapTcha.jquery.css" media="screen" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	   	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	   	<!--[if lt IE 9]>
	   		<link rel="stylesheet" href="app/assets/css/ie8specs.css" />
	   		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	   		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	   	<![endif]-->
		
		<!-- LESS server-side compiling script -->
	   	<script type="text/javascript" src="app/assets/js/less.min.js" ></script>
	</head>

	<body>
		<!-- Support ticket transparent black fader div -->
		<div class="support-ticket-fader"></div>

		<!-- Support ticket popup box -->
		<div class="support-ticket-box col-xs-12 col-sm-8 col-md-6 col-lg-4">
			<div class="support-ticket-container">

				<i class="fa fa-times-circle fa-2x close-support-ticket hidden-xs"></i>

				<div class="support-ticket-head row form-step-1">
					<h3><center>Sorry you are having issues logging in. Make a ticket and we will solve the problem as soon as possible. :)</center></h3>
				</div>
				<!-- end of .form-step-1 -->
				<div class="support-ticket-head row form-step-2">
					<h3><center><span class="thank-user">&nbsp;</span>We received your ticket.</center></h3>
				</div>
				<!-- end of .form-step-2 .support-ticket-head -->

				<div class="support-ticket-body col-xs-12 form-step-1">

					<br />

					<form id="ticket-form" action="" method="POST" role="form">
						<div class="form-group">
				        	<div class="input-group">
				          		<div class="input-group-addon">
				          			<i class="fa fa-envelope fa-2x"></i>
				          		</div>
				          		<input type="text" class="form-control input-lg" name="email" placeholder="E-mail">
				        	</div>
							<!-- end of .input-group -->

				        	<div class="input-group">
				          		<div class="input-group-addon">
				          			<i class="fa fa-user fa-2x"></i>
				          		</div>				          	
    							<input type="text" class="form-control input-lg" name="user" placeholder="Username">
				        	</div>
							<!-- end of .input-group -->

				        	<div class="input-group">
				          		<div class="input-group-addon">
				          			<i class="fa fa-question-circle fa-2x"></i>
				          		</div>
								<select class="form-control input-lg" name="subject">
									<option selected="selected" disabled>Subject</option>
									<option>Billing</option>
									<option>Videos and/or Pics are not working</option>
									<option>Other</option>
								</select>
				        	</div>
							<!-- end of .input-group -->

				        	<div class="input-group bottom-border">
				          		<div class="input-group-addon">
				          			<i class="fa fa-comment fa-2x"></i>
				          		</div>
    							<textarea class="form-control input-lg" name="message" placeholder="Messsage"></textarea>
				        	</div>
							<!-- end of .input-group -->
							
							<br />

							<div class="form-group ticket-submit-line captcha-line">
								<div class="input-group pull-left col-xs-12 col-sm-7 bottom-border">
						          	<div class="input-group-addon">
						          		<i class="fa fa-lock fa-2x"></i>
						          	</div>				          	
						          	<div class="form-control input-lg QapTcha"></div>
					        	</div>

								<button id="submit-ticket" type="submit" class="btn btn-primary btn-lg pull-right col-xs-12 col-sm-3" name="submit" disabled >SUBMIT</button>
								<button class="btn btn-default close-support-ticket col-xs-12 visible-xs">Close</button>
							</div>
							<!-- end of .form-group -->

				      	</div>
						<!-- end of .form-group -->
					</form>

				</div>
				<!-- end of .form-step-1 -->
				<div class="support-ticket-body col-xs-12 form-step-2">
					<br />
					<br />
					<center>
						<p>We will email you with a solution as soon as possible.</p>
						<p>If you do not receive an email, please contact us at <a href="mailto:help@teamskeet.com">help@teamskeet.com</a>.</p>
						<p>Thank you.</p>
					</center>
				</div>
				<!-- end of .form-step-2 .support-ticket-body -->
			</div>
			<!-- end of .support-ticket-container -->
		</div>
		<!-- end of .support-ticket-box -->

		<!-- .navbar for bigger screens -->
		<nav class="navbar navbar-default navbar-fixed-top hidden-xs" role="navigation">
			<div class="container">
		   	<div class="col-sm-7 navbar-left"><span class="green">Team</span>Skeet.com: We Play Dirty...</div>
		   	<div class="col-sm-5 navbar-right">
				<button type="button" class="btn pull-right btn-default support-ticket-trigger">Create a Support Ticket</button>
				<button type="button" class="btn pull-right btn-link">Help</button>
		   	</div>
			</div>
		</nav>
		
		<!-- .navbar for smaller screens -->
		<nav class="navbar navbar-default navbar-fixed-top visible-xs" role="navigation">
			<div class="container">
		   	<div class="col-xs-8 navbar-left"><span class="green">Team</span>Skeet.com</div>
		   	<div class="col-xs-4 navbar-right">
				<a href="https://www.geckoboard.com/" type="button" class="btn pull-right btn-success" id="topJoinButton" >JOIN NOW!</a>
		   	</div>
			</div>
		</nav>



		<div class="container" ng-view>
			
		</div>
		<!-- end of .container -->



		<!-- AngularJS file structure -->
		<!--<script src="{{ URL::to('/') }}/assets/angular/angular.js"></script>-->
		<script src="app/assets/js/angular.js"></script>
		<script src="app/assets/js/angular-route.js"></script>
		<!--<script src="app/assets/js/angular-animate.js"></script>-->
		<script src="app/app.js"></script>
		<script src="app/controllers/homeController.js"></script>
		<script src="app/controllers/loginController.js"></script>

		<!-- start of jQuery, Bootstrap and other JS scripts -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    	<script type="text/javascript" src="app/assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
		<script type="text/javascript" src="app/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" src="app/assets/js/jquery.cookie.js"></script>
		<script type="text/javascript" src="app/assets/js/QapTcha.jquery.js"></script>
		<script type="text/javascript" src="app/assets/js/script.js"></script>
		<script type="text/javascript" src="app/assets/js/validation.js"></script>
		<script type="text/javascript" src="app/assets/js/tracking.js"></script>

		<script type="text/javascript">
		  $(document).ready(function(){
		    $('.QapTcha').QapTcha({disabledSubmit:true,autoRevert:true,autoSubmit:false});
		  });
		</script>
		<!-- end of jQuery, Bootstrap and other JS scripts -->
	</body>
</html>