<?php include ('inc/header.php'); ?>
	<section class="header-image about-inner">
		<div class="container">
			<div class="row">
				<h1>Contact Us</h1>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
	<section class="about-us">
		<div class="container">
			<div class="row">
				<div class="breadcrum contact-breadcrum">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item"><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
						<li class="breadcrumb-item active">Contact Us</li>
					</ol>
				</div>
				<div class="inner-content contact">
					<div class="col-md-7">
							<div class="about">
								<h1>Get in Touch</h1>
								<span class="red-line"></span>
								<h5>Fill this out so we can learn more about you and your needs</h5>
								<form>
									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="FULL NAME">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="EMAIL ADDRESS">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="CONTACT NUMBER">
										</div>
									</div><div class="col-sm-6">
										<div class="form-group">
											<input type="text" placeholder="LOCATION" class="form-control">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="YOUR MESSAGE"></textarea>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<button class="btn btn-default book send" type="button">SUBMIT</button>
										</div>
									</div>
								</form>
							</div>
					</div>
					<div class="col-md-5" style="background: #C91C22">
						<div class="appoint appoint-form red-box">
							<h4>Our Clinic Address</h4>
							<div class="address">
								<div class="icon">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="icon-address">
									<p>#19, TMA Tower,1st floor,<br>Dr. Thirumurthy nagar main road,<br>Thirumurthy nagar, (near ispahani centre)<br>Nungampakkam,Chennai - 600034</p>
								</div>
							</div>
							<div class="address">
								<div class="icon">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="icon-address">
									<p>+91 98888 22233</p>
								</div>
							</div>
							<div class="address">
								<div class="icon">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="icon-address">
									<p><a style="color:#fff;" href="mailto:info@hairclinic.com" target="_top">info@websitename.com</a></p>
								</div>
							</div>
							<hr>
							<h4>follow us on</h4>
							<div class="social-icon">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.6224308876376!2d80.24033321431517!3d13.05968851647394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526667e81a2715%3A0xae6e193e1780e1de!2sDr.+Ariganesh+Chandrasegaran!5e0!3m2!1sen!2sin!4v1502340929796" width="100%" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="clearfix"></div>
	<section class="make-appoint">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<h1>Make an appointment with us</h1>
					<h3>We care your hair! Book through online!</h3>
				</div>
				<div class="col-sm-3">
					<button type="submit" class="btn btn-default white" type="button" data-toggle="modal" data-target="#myModal2">book now</button>
				</div>
			</div>
		</div>
	</section>
	<!-- Modal -->
	<div class="modal fade" id="myModal2" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Make AN APPOINTMENT</h4>
				</div>
				<div class="modal-body">
					<div class="appoint">
					<form>
						<div class="col-sm-6 form-group">
							<input placeholder="FULL NAME" class="form-control" type="text">
						</div>
						<div class="col-sm-6 form-group">
							<input placeholder="Contact Number" class="form-control" type="text">
						</div>
						<div class="col-sm-6 form-group">
							<input placeholder="Email Id" class="form-control" type="text">
						</div>
						<div class="col-sm-6 form-group">
							<input placeholder="Date" id="datepicker1" class="form-control hasDatepicker" type="text"><i class="fa fa-calendar" aria-hidden="true"></i>
						</div>
						<div class="col-sm-6 form-group">
							<div class="form-group">
								<select id="basic" class="selectpicker show-tick form-control">
									<option>DEPARTMENT</option>
									<option>bull</option>
									<option class="get-class" disabled>ox</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6 form-group">
							<button class="btn btn-default book" type="submit">book now</button>
						</div>
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<?php include ('inc/footer.php'); ?>