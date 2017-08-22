<?php include ('inc/header.php'); ?>
	<section class="header-image about-inner">
		<div class="container">
			<div class="row">
				<h1>Our Team</h1>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
	<section class="about-us">
		<div class="container">
			<div class="row">
				<div class="breadcrum">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item"><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
						<li class="breadcrumb-item"><a href="about.php">About Us</a></li>
						<li class="breadcrumb-item"><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
						<li class="breadcrumb-item active">Our Team</li>
					</ol>
				</div>
				<div class="inner-content our-doctor">
					<div class="col-md-12">
						<div class="about">
							<h1>Our Team</h1>
							<span class="red-line"></span>
							<h5>Neque porro quisquam est qui dolor sit amet consectetur non numquam eius</h5>
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<div class="doctor">
										<img src="images/doctor/1.jpg">
										<h3>Dr. Amrendra Kumar</h3>
										<h4>MD in Dermatology </h4>
										<p>MISHRS(USA)</p>
										<ul class="social text-center">
											<li><a href="https://www.facebook.com/Dr.AmrendraKumarDermatologist/" target="_blank"><i class="fa fa-facebook"></i></a></li>
											<li><a href="https://twitter.com/dramrendrak" target="_blank"><i class="fa fa-twitter"></i></a></li>
											<li><a href="https://plus.google.com/115257685200773775193" target="_blank"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="https://in.linkedin.com/in/dr-amrendra-kumar-813ab2aa" target="_blank"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="https://www.instagram.com/dermaclinix/" target="_blank"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</section>
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