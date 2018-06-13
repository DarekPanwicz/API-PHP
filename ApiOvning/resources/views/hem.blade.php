<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>API :)</title>


	<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/plugins/select_option1.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/plugins/flexslider.css" type="text/css" media="screen" />

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/plugins/animate.css">
	<link rel="stylesheet" href="css/plugins/magnific-popup.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/colors/default.css" id="option_color">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<div class="main_wrapper">

	<div class="topbar clearfix">
		<div class="container">
			<ul class="topbar-left">
				<li class="phoneNo"><i class="fa fa-phone"></i>0737628741</li>
				<li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelope"></i>
					<a href="mailto:darek@webbyraistockholm.nu">darek@webbyraistockholm.nu</a>
				</li>
			</ul>
			<ul class="topbar-right">
				<li class="hidden-xs"><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li class="hidden-xs"><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li class="hidden-xs"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
				<li class="hidden-xs"><a href="#"><i class="fa fa-rss"></i></a></li>
				<li class="dropdown top-search list-inline">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-search"></i>
					</a>
					<ul class="dropdown-menu">
						<form action="courses.html" method="post">
							<input type="text" placeholder="Course Name" id="exampleInputEmail1" class="form-control">
							<button class="btn btn-default commonBtn" type="submit">Search</button>
						</form>
					</ul>
				</li>
				<li class="dropdown language">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-globe"></i>EN
						<i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li class="active">
							<a href="#">English </a>
						</li>
						<li><a href="#">Spanish</a></li>
						<li><a href="#">Russian</a></li>
						<li><a href="#">German</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

	<div class="header clearfix">
		<nav class="navbar navbar-main navbar-default">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="header_inner">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand logo clearfix" href="index.html"><img src="img/logo.png" alt="" class="img-responsive" /></a>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="main-nav">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="index.html">Home</a></li>
									<li class="dropdown list-inline">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses Grid View</a>
												<ul class="dropdown-menu">
													<li><a href="course-grid-3col.html">3 Columns</a></li>
													<li><a href="course-grid-4col.html">4 Columns</a></li>
													<li><a href="course-grid-sidebar-right.html">Sidebar Right</a></li>
													<li><a href="course-grid-sidebar-left.html">Sidebar Left</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses List View</a>
												<ul  class="dropdown-menu">
													<li><a href="course-right-sidebar.html">Sidebar Right</a></li>
													<li><a href="course-left-sidebar.html">Sidebar Left</a></li>
													<li class="active"><a href="course-fullwidth.html">Fullwidth</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Single Course</a>
												<ul class="dropdown-menu">
													<li><a href="single-course-right-sidebar.html">Sidebar Right</a></li>
													<li><a href="single-course-left-sidebar.html">Sidebar Left</a></li>
													<li><a href="single-course-fullwidth.html">Fullwidth</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buy Course</a>
												<ul class="dropdown-menu">
													<li><a href="buying-steps.html">Payment</a></li>
													<li><a href="buying-confirmation.html">Confirmation </a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGES</a>
										<ul class="dropdown-menu">
											<li><a href="about.html">About College</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Photo Gallery</a>
												<ul class="dropdown-menu">
													<li><a href="photo-gallery3col.html">Gallery 3 Columns</a></li>
													<li><a href="photo-gallery4col.html">Gallery 4 Columns</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Apply Now</a>
												<ul class="dropdown-menu">
													<li><a href="buying-steps.html">Apply For Addmission</a></li>
													<li><a href="buying-confirmation.html">Confirmation</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prices Table</a>
												<ul class="dropdown-menu">
													<li><a href="price-table-3col.html">Prices 3 column</a></li>
													<li><a href="price-table-4col.html">Prices 4 column</a></li>
												</ul>
											</li>
											<li><a href="campus.html">Our Campus</a></li>
											<li><a href="stuff.html">Stuff</a></li>
											<li><a href="international_students.html">International Students</a></li>
											<li><a href="contact-us.html">Contact Us</a></li>
											<li><a href="privacy-policy.html">Privacy Policy</a></li>
											<li><a href="404-error.html">404 Not Found</a></li>
											<li><a href="coming-soon-dark.html" target="_blank">Coming Soon</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BLOG</a>
										<ul class="dropdown-menu">
											<li><a href="blog-right-sidebar.html">Blog Sidebar Right</a></li>
											<li><a href="blog-left-sidebar.html">Blog Sidebar Left</a></li>
											<li><a href="single-post-right-sidebar.html">Single Post Sidebar Right</a></li>
											<li><a href="single-post-left-sidebar.html">Single Post Sidebar Left</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events</a>
										<ul class="dropdown-menu">
											<li><a href="events-3col.html">Events 3 Columns</a></li>
											<li><a href="events-right-sidebar.html">Events Sidebar Right</a></li>
											<li><a href="events-left-sidebar.html">Events Sidebar Left</a></li>
											<li><a href="single-events.html">Single Event</a></li>
											<li><a href="events-calendar.html">Events Callender</a></li>
										</ul>
									</li>
									<li class="apply_now"><a href="buying-steps.html">Apply Now</a></li>
								</ul>
							</div><!-- navbar-collapse -->
						</div>
					</div>
				</div>
			</div><!-- /.container -->
		</nav><!-- navbar -->
	</div>

	<div class="courses_section courses-fullwidth">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 courses_right">
					<div class="courses_right_inner">

						<div class="search_section">
							<form action="#" method="post">
								<ul>
									<li>
										<input type="text" name="course-name" class="form-control" placeholder="Course Name">
									</li>
									<li>
										<div class="selectBox clearfix">
											<select name="guiest_id2" id="guiest_id2">
												<option value="0">Level</option>
												<option value="1">Level_1</option>
												<option value="2">Level_2</option>
												<option value="3">Level_3</option>
											</select>
										</div><!-- selectBox -->
									</li>
									<li class="search_button">
										<button class="btn btn-default btn-block commonBtn" type="submit">Search</button>
									</li>
								</ul>
							</form>
						</div><!--End search_section-->

						<div class="courses">
							<table class="table table-bordered table-striped">
								<thead>
								<tr>
									<th>Program Name</th>
									<th>Area Of Interest</th>
									<th>Duration</th>
									<th>Type</th>
									<th>Campus</th>

								</tr>
								</thead>
								<tbody>
								<tr class="option">
									<td>A</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>
										<ul>
											<li class="active">
												<a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Computers and Engineering</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Continuing Education</a>
											</li>
										</ul>
									</td>
									<td>Engineering &amp; Architecture <br/>(Fulltime on campus)</td>
									<td>Fulltime <br/>on campus <br/>2 Years</td>
									<td>Ontario College<br/> Of Diploma</td>
									<td>Ottawa</td>
								</tr>
								<tr>
									<td>
										<ul>
											<li class="active">
												<a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Computers and Engineering</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Continuing Education</a>
											</li>
										</ul>
									</td>
									<td>Engineering &amp; Architecture <br/>(Fulltime on campus)</td>
									<td>Fulltime <br/>on campus <br/>2 Years</td>
									<td>Ontario College<br/> Of Diploma</td>
									<td>Ottawa</td>
								</tr>
								<tr>
									<td>
										<ul>
											<li class="active">
												<a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Computers and Engineering</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Continuing Education</a>
											</li>
										</ul>
									</td>
									<td>Engineering &amp; Architecture <br/>(Fulltime on campus)</td>
									<td>Fulltime <br/>on campus <br/>2 Years</td>
									<td>Ontario College<br/> Of Diploma</td>
									<td>Ottawa</td>
								</tr>
								<tr>
									<td>
										<ul>
											<li class="active">
												<a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Computers and Engineering</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Continuing Education</a>
											</li>
										</ul>
									</td>
									<td>Engineering &amp; Architecture <br/>(Fulltime on campus)</td>
									<td>Fulltime <br/>on campus <br/>2 Years</td>
									<td>Ontario College<br/> Of Diploma</td>
									<td>Ottawa</td>
								</tr>
								<tr>
									<td>
										<ul>
											<li class="active">
												<a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Computers and Engineering</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Continuing Education</a>
											</li>
										</ul>
									</td>
									<td>Engineering &amp; Architecture <br/>(Fulltime on campus)</td>
									<td>Fulltime <br/>on campus <br/>2 Years</td>
									<td>Ontario College<br/> Of Diploma</td>
									<td>Ottawa</td>
								</tr>
								<tr>
									<td>
										<ul>
											<li class="active">
												<a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Computers and Engineering</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Continuing Education</a>
											</li>
										</ul>
									</td>
									<td>Engineering &amp; Architecture <br/>(Fulltime on campus)</td>
									<td>Fulltime <br/>on campus <br/>2 Years</td>
									<td>Ontario College<br/> Of Diploma</td>
									<td>Ottawa</td>
								</tr>
								<tr>
									<td>
										<ul>
											<li class="active">
												<a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Computers and Engineering</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Continuing Education</a>
											</li>
										</ul>
									</td>
									<td>Engineering &amp; Architecture <br/>(Fulltime on campus)</td>
									<td>Fulltime <br/>on campus <br/>2 Years</td>
									<td>Ontario College<br/> Of Diploma</td>
									<td>Ottawa</td>
								</tr>
								<tr>
									<td>
										<ul>
											<li class="active">
												<a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Computers and Engineering</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Continuing Education</a>
											</li>
										</ul>
									</td>
									<td>Engineering &amp; Architecture <br/>(Fulltime on campus)</td>
									<td>Fulltime <br/>on campus <br/>2 Years</td>
									<td>Ontario College<br/> Of Diploma</td>
									<td>Ottawa</td>
								</tr>
								<tr>
									<td>
										<ul>
											<li class="active">
												<a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Computers and Engineering</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Continuing Education</a>
											</li>
										</ul>
									</td>
									<td>Engineering &amp; Architecture <br/>(Fulltime on campus)</td>
									<td>Fulltime <br/>on campus <br/>2 Years</td>
									<td>Ontario College<br/> Of Diploma</td>
									<td>Ottawa</td>
								</tr>
								<tr>
									<td>
										<ul>
											<li class="active">
												<a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Computers and Engineering</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Continuing Education</a>
											</li>
										</ul>
									</td>
									<td>Engineering &amp; Architecture <br/>(Fulltime on campus)</td>
									<td>Fulltime <br/>on campus <br/>2 Years</td>
									<td>Ontario College<br/> Of Diploma</td>
									<td>Ottawa</td>
								</tr>
								<tr>
									<td>
										<ul>
											<li class="active">
												<a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Computers and Engineering</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Continuing Education</a>
											</li>
										</ul>
									</td>
									<td>Engineering &amp; Architecture <br/>(Fulltime on campus)</td>
									<td>Fulltime <br/>on campus <br/>2 Years</td>
									<td>Ontario College<br/> Of Diploma</td>
									<td>Ottawa</td>
								</tr>
								<tr>
									<td>
										<ul>
											<li class="active">
												<a href="single-course-right-sidebar.html">Architectural Technician (Weekend)</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Computers and Engineering</a>
											</li>
											<li>
												<a href="single-course-right-sidebar.html">Continuing Education</a>
											</li>
										</ul>
									</td>
									<td>Engineering &amp; Architecture <br/>(Fulltime on campus)</td>
									<td>Fulltime <br/>on campus <br/>2 Years</td>
									<td>Ontario College<br/> Of Diploma</td>
									<td>Ottawa</td>
								</tr>
								</tbody>
							</table>
						</div><!--End courses-->

						<ul class="pagination">
							<li>
								<a aria-label="Previous" href="#">
									<span aria-hidden="true">Previous</span>
								</a>
							</li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">38</a></li>
							<li>
								<a aria-label="Next" href="#">
									<span aria-hidden="true">Next</span>
								</a>
							</li>
						</ul>

					</div><!-- end courses_right_inner -->
				</div><!-- end courses_right -->

			</div><!-- end row -->
		</div><!-- end container -->
	</div><!--end post section-->

	<div class="menuFooter clearfix">
		<div class="container">
			<div class="row clearfix">

				<div class="col-sm-3 col-xs-6">
					<ul class="menuLink clearfix">
						<li><a href="about.html">About Royal College</a></li>
						<li><a href="campus.html">About Campus</a></li>
						<li><a href="stuff.html">Staff Members</a></li>
						<li><a href="about.html">Why Choose Us?</a></li>
					</ul>
				</div><!-- col-sm-3 col-xs-6 -->

				<div class="col-sm-3 col-xs-6 borderLeft clearfix">
					<ul class="menuLink clearfix">
						<li><a href="course-fullwidth.html">All Courses</a></li>
						<li><a href="buying-steps.html">Admission</a></li>
						<li><a href="photo-gallery3col.html">Photo Gallery</a></li>
						<li><a href="international_students.html">International Students</a></li>
					</ul>
				</div><!-- col-sm-3 col-xs-6 -->

				<div class="col-sm-3 col-xs-6 borderLeft clearfix">
					<div class="footer-address">
						<h5>Location:</h5>
						<address>
							Royal College<br>
							1727 Lombard St.<br>
							San Francisco
						</address>
						<a href="contact-us.html"><span class="place"><i class="fa fa-map-marker"></i>Main Campus</span></a>
					</div>
				</div><!-- col-sm-3 col-xs-6 -->

				<div class="col-sm-3 col-xs-6 borderLeft clearfix">
					<div class="socialArea clearfix">
						<h5>Find us on:</h5>
						<ul class="list-inline ">
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a href="#"><i class="fa fa-flickr"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
						</ul>
					</div><!-- social -->
					<div class="contactNo clearfix">
						<h5>Call us on:</h5>
						<h3>012-3434-456768</h3>
					</div><!-- contactNo -->
				</div><!-- col-sm-3 col-xs-6 -->

			</div><!-- row clearfix -->
		</div><!-- container -->
	</div><!-- menuFooter -->

	<div class="footer clearfix">
		<div class="container">
			<div class="row clearfix">
				<div class="col-sm-6 col-xs-12 copyRight">
					<p>© 2018 Darek Panwicz </p>
				</div><!-- col-sm-6 col-xs-12 -->
				<div class="col-sm-6 col-xs-12 privacy_policy">
					<a href="contact-us.html">Contact us</a>
					<a href="privacy-policy.html">Privacy Policy</a>
				</div><!-- col-sm-6 col-xs-12 -->
			</div><!-- row clearfix -->
		</div><!-- container -->
	</div><!-- footer -->
</div>

<!-- JQUERY SCRIPTS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins/jquery.flexslider.js"></script>
<script src="js/plugins/jquery.selectbox-0.1.3.min.js"></script>
<script src="js/plugins/jquery.magnific-popup.js"></script>
<script src="js/plugins/waypoints.min.js"></script>
<script src="js/plugins/jquery.counterup.js"></script>
<script src="js/plugins/wow.min.js"></script>
<script src="js/plugins/navbar.js"></script>
<script src="js/plugins/moment.min.js"></script>
<script src="js/plugins/fullcalendar.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>