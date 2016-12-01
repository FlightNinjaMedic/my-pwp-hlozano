<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

			<!-- google recaptcha -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<title>The Medical Cannabis Advocate Site</title>


		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<link type="text/css" href="css/boxmodel.css" rel="stylesheet"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- custom jquery validate -->
		<script src="js/jquery-validate.js" type="text/javascript"></script>


		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>


	</head>

	<body>
		<div id="outerBox">
			<div id="middleBox">
				<div id="innerBox">
					<div class="container-fluid">
						<div class="jumbotron">
							<div class="row">
								<div class="col-md-6">
									<img src="images/medcan.jpg" alt="medcan">
								</div>
								<div class="col-md-6">
									<h3>
										The Medical Cannabis Advocate site comes to life with the purpose to educate and raise
										public awareness on the benefits of medical cannabis and how succesful it is in treating
										life changing conditions such as PTSD, HIV/AIDS and epilepsy specifically a condition
										called Dravet Syndrome which is a rare genetic epileptic encephalopathy (dysfunction of
										the brain). It begins in the first year of life in an otherwise healthy infant. The above
										being only three of twenty qualifying conditons in the New Mexico Medical Cannabis
										program. As a former NAVY corpsman veteran suffering from PTSD, and a current and very
										active user of medical cannabis, I can positively testify to how medical cannabis has
										improved my quality of life.
								</div>
							</div>
						</div>
						<h1 class="marquee"><span>The Medical Cannabis Advocate Site</span></h1><br><br>
					</div>
					<fieldset>
						<legend>Stories From Around New Mexico</legend>
						<div class="container">
							<div class="row">
								<div class="col-md-3">
									<p>
										An Albuquerque baby girl with a unique type of epilepsy has gotten a medical cannabis
										card.
										Amylea Nunez is now eight months old, but just two days after bringing her home from the
										hospital,
										the Nunez family had their first scare. She has seizures, and now gets treatment in
										Aurora, Colorado
										using a cannabis oil known to treat epilepsy in kids. Her mother says she is the youngest
										patient in
										New Mexico to be cleared for medicinal marijuana use.
									</p>
								</div>
								<div class="col-md-3">
									<img src="images/8monthAmylea1.jpg" alt="8monthAmylea1" class="picture">
								</div>
								<div class="col-md-3">
									<img src="images/rambohm1.jpg" alt="rambohm1">
								</div>
								<div class="col-md-3">
									Local Albuquerque resident, medical cannabis card holder and developer of The Medical
									Cannabis Advocate Site, Hector Lozano, is now in his third year using medical cannabis
									products to treat PTSD. Mr Lozano is a 51 year old former navy corpsman with two deployments
									in support of Operation Iraqi Freedom and Operation Enduring Freedom. Mr Lozano also enjoyed
									a rewarding and sucessful career as a field paramedic, emergency room paramedic and crirical
									care flight paramedic
								</div>
							</div>
							<br><br>
					</fieldset>
					<fieldset>
						<legend>Stories From Around The Nation</legend>
						<div class="row">
							<div class="col-md-6">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="//www.youtube.com/embed/USi1_3Fdjyw"
											  frameborder="0" allowfullscreen
									"></iframe>
								</div>
							</div>
						</div>
						<br><br>
					</fieldset>
					<div class="row">
						<div class="col-md-6">
							Do you have any questions or comments?<br>
							Would you like to be added to our mailing list?<br>
							Please provide us with your information and one of our associates will contact you within 24 hrs!
						</div>
						<div class="col-md-6">
							<form>
								<!--Begin Contact Form-->
								<form id="contact-form" action="php/mailer.php" method="post">
									<div class="form-group">
										<label for="name">Name <span class="text-danger">*</span></label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-user" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="name" name="name" placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="email">Email <span class="text-danger">*</span></label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
											<input type="email" class="form-control" id="email" name="email" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label for="subject">Subject</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-pencil" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="subject" name="subject"
													 placeholder="Subject">
										</div>
									</div>
									<div class="form-group">
										<label for="message">Message <span class="text-danger">*</span></label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-comment" aria-hidden="true"></i>
											</div>
											<textarea class="form-control" rows="5" id="message" name="message"
														 placeholder="Message (2000 characters max)"></textarea>
										</div>
									</div>

									<!-- reCAPTCHA -->
									<div class="g-recaptcha" data-sitekey="--YOUR RECAPTCHA SITE KEY--"></div>

									<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
									<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
								</form>

								<!--empty area for form error/success output-->
								<div class="row">
									<div class="col-xs-12">
										<div id="output-area"></div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<footer class="footer" style="background: lightgreen; height:50px">
						<div class="container text-center">
							<p class="text-muted">
								Copyright 2016 Yadohkya-Coders.com
							</p>
						</div>
					</footer>
				</div>
			</div>
		</div>
	</body>
</html>
