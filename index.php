<?php

if (isset($_POST['btnsubmit'])) {
    // $user_email = "2013n0128@gmail.com";
    $name         = $_POST['name'];
    $email          = $_POST['email'];
    $phone        = $_POST['phone'];
    $time      = $_POST['time'];
    $date      = $_POST['date'];
    $course      = $_POST['course'];
    $car  = $_POST['car'];
    $messemail     = '';
    $messemail    .= "Name = " . $name ." %0DEmail: " . $email . " %0DPhone Number = ". $phone ." %0Dtime = ". $time ." %0Ddate = ".$date." %0DCourse = ".$course." %0DCar = ".$car;
    
    $wp_num       = "923057575146";
    header("location:https://api.whatsapp.com/send?phone=$wp_num&text=%20$messemail");
} 

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Xpert Driving Instructor</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="p:domain_verify" content="1d14bafd514d9e8500b1cbbd9e8f2e1b"/>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<!-- Fonts -->
	<link href="fonts/lato/lato.css" rel="stylesheet">
	<!-- CSS -->
	<!-- Bootstrap CSS
	============================================ -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Icon Font CSS
	============================================ -->
	<link rel="stylesheet" href="css/icofont.css">
	<!-- Plugins CSS
	============================================ -->
	<link rel="stylesheet" href="css/plugins.css">
	<!-- ShortCodes CSS
	============================================ -->
	<link rel="stylesheet" href="css/shortcode/shortcodes.css">
	<!-- Style CSS
	============================================ -->
	<link rel="stylesheet" href="style.css">
	<!-- Responsive CSS
	============================================ -->
	<link rel="stylesheet" href="css/responsive.css">
    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="css/style-customizer.css">
    <link href="#" data-style="styles" rel="stylesheet">
	<!-- Modernizer JS
	============================================ -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!-- Pre Loader
============================================ -->
<div class="preloader">
	<div class="loading-center">
		<div class="loading-center-absolute">
			<div class="object object_one"></div>
			<div class="object object_two"></div>
			<div class="object object_three"></div>
		</div>
	</div>
</div>
<!-- Body main wrapper start -->
<div class="wrapper fix">
<!-- Header 1
============================================ -->
<div class="header-area header-absolute header-transparent">
	<div class="header-top d-none d-md-block">
		<div class="container">
			<!-- Header Top -->
			<div class="header-top-wrapper row">
				<div class="header-top-left text-left col-md-6 col-12">
					
				</div>
				<div class="header-top-right text-right col-md-6 col-12">
					<p><i class="icofont icofont-envelope"></i><span>info@example.com</span></p>
					<p><i class="icofont icofont-ui-call"></i><span>+1 (647) 832-4903</span></p>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom sticky">
		<div class="container">
			<div class="navbar navbar-expand-md justify-content-between">
				<div class="navbar-header d-flex flex-wrap justify-content-between">
					<a href="onepage.html" class="logo navbar-brand"><img id="logo_img" src="img/logo/color-1.png" alt="logo" /></a>
					<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-menu">
						<i class="icofont icofont-navigation-menu menu-open"></i>
						<i class="icofont icofont-close menu-close"></i>
					</button>
				</div>

				<div class="main-menu onepage-nav collapse navbar-collapse col-auto" id="main-menu">
					<nav>
						<ul>
							<li class="active"><a href="#hero-area">home</a></li>
							<li><a href="#feature-area">features</a></li>
							<li><a href="#course-area">services</a></li>
							<li><a href="#gallery-area">gallery</a></li>
							<li><a href="#instructor-area">instructors</a></li>
							<li><a href="#pricing-area">pricing</a></li>
							<li><a href="#contact-area">contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Hero Slide Area
============================================ -->
<div id="hero-area" class="hero-slider-area">
	<div id="hero-slider" class="nivoSlider slider-image">
		<img src="img/slider/1.jpg" alt="main slider" title="#htmlcaption1"/>
		<img src="img/slider/4.jpg" alt="main slider" title="#htmlcaption2"/>
		<img src="img/slider/3.jpg" alt="main slider" title="#htmlcaption3"/>
	</div>
	<div id="htmlcaption1" class="nivo-html-caption">			
		<div class="slide-table container">
			<div class="table-cell">
				<div class="hero-slide-content float-right text-right">
					<h3 class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s">welcome to drive on</h3>
					<h1 class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="1.2s">the best <span>safety</span> measures</h1>
					<p class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="1.6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, minim veniamsed sed do <br />eiusmod tempor maksu rez ut labore  magna do eiusmod</p>
					<div class="button-group">
						<a href="#" class="btn transparent wow fadeInLeft" data-wow-duration=".9s" data-wow-delay="2.4s">book lesson</a>
						<a href="#" class="btn color wow fadeInLeft" data-wow-duration=".9s" data-wow-delay="2s">learn more</a>
					</div>
				</div>
				<div class="find-course-form float-left text-left wow fadeInUp" data-wow-duration=".9s" data-wow-delay="3s">
					<h5><span>find your course</span><i class="icofont icofont-police-car"></i></h5>
					<form method="POST">
						<div class="course-input"><i class="icofont icofont-user-alt-3"></i> <input type="text" name="name" placeholder="Your Name" /></div>
						<div class="course-input"><i class="icofont icofont-envelope"></i> <input type="email" name="email" placeholder="Your E-mail" /></div>
						<div class="course-input"><i class="icofont icofont-phone"></i> <input type="text" name="phone" placeholder="Phone" /></div>
						<div class="course-select"><i class="icofont icofont-clock-time"></i>
							<select name="time" class="cusselect">
								<option>Time</option>
								<option>9:00 AM</option>
								<option>12:00 PM</option>
								<option>03:00 PM</option>
								<option>06:00 PM</option>
							</select>
						</div>
						<div class="course-select course-date"><i class="icofont icofont-calendar"></i><input class="date-picker" name="date" type="text" placeholder="Date"></div>
						<div class="course-select"><i class="icofont icofont-copy-alt"></i>
							<select name="course" class="cusselect">
								<option>Course</option>
								<option>Course 1</option>
								<option>Course 2</option>
								<option>Course 3</option>
								<option>Course 4</option>
							</select>
						</div>
						<div class="course-select"><i class="icofont icofont-car-alt-4"></i>
							<select name="car" class="cusselect">
								<option>Car Type</option>
								<option>Car Type 1</option>
								<option>Car Type 2</option>
								<option>Car Type 3</option>
								<option>Car Type 4</option>
							</select>
						</div>
						<div class="course-submit"><input type="submit" name="btnsubmit" value="Send us" /></div>
					</form>
				</div>
			</div>										
		</div>
	</div>
	<div id="htmlcaption2" class="nivo-html-caption">			
		<div class="slide-table container">
			<div class="table-cell">
				<div class="hero-slide-content float-left text-left">
					<h3 class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s">welcome to drive on</h3>
					<h1 class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="1.2s">the best <span>safety</span> measures</h1>
					<p class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="1.6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, minim veniamsed sed do <br />eiusmod tempor maksu rez ut labore  magna do eiusmod</p>
					<div class="button-group">
						<a href="#" class="btn transparent wow fadeInRight" data-wow-duration=".9s" data-wow-delay="2s">book lesson</a>
						<a href="#" class="btn color wow fadeInRight" data-wow-duration=".9s" data-wow-delay="2.4s">learn more</a>
					</div>
				</div>
				<div class="find-course-form float-right text-left wow fadeInUp" data-wow-duration=".9s" data-wow-delay="3s">
					<h5><span>find your course</span><i class="icofont icofont-police-car"></i></h5>
					<form method="POST">
						<div class="course-input"><i class="icofont icofont-user-alt-3"></i> <input type="text" name="name" placeholder="Your Name" /></div>
						<div class="course-input"><i class="icofont icofont-envelope"></i> <input type="email" name="email" placeholder="Your E-mail" /></div>
						<div class="course-input"><i class="icofont icofont-phone"></i> <input type="text" name="phone" placeholder="Phone" /></div>
						<div class="course-select"><i class="icofont icofont-clock-time"></i>
							<select name="time" class="cusselect">
								<option>Time</option>
								<option>9:00 AM</option>
								<option>12:00 PM</option>
								<option>03:00 PM</option>
								<option>06:00 PM</option>
							</select>
						</div>
						<div class="course-select course-date"><i class="icofont icofont-calendar"></i><input class="date-picker" name="date" type="text" placeholder="Date"></div>
						<div class="course-select"><i class="icofont icofont-copy-alt"></i>
							<select name="course" class="cusselect">
								<option>Course</option>
								<option>Course 1</option>
								<option>Course 2</option>
								<option>Course 3</option>
								<option>Course 4</option>
							</select>
						</div>
						<div class="course-select"><i class="icofont icofont-car-alt-4"></i>
							<select name="car" class="cusselect">
								<option>Car Type</option>
								<option>Car Type 1</option>
								<option>Car Type 2</option>
								<option>Car Type 3</option>
								<option>Car Type 4</option>
							</select>
						</div>
						<div class="course-submit"><input type="submit" name="btnsubmit" value="Send us" /></div>
					</form>
				</div>
			</div>										
		</div>
	</div>
	<div id="htmlcaption3" class="nivo-html-caption">			
		<div class="slide-table container">
			<div class="table-cell">
				<div class="hero-slide-content text-center">
					<h3 class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s">welcome to drive on</h3>
					<h1 class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="1.2s">the best <span>safety</span> measures</h1>
					<p class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="1.6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, minim veniamsed sed do <br />eiusmod tempor maksu rez ut labore  magna do eiusmod</p>
					<div class="button-group">
						<a href="#" class="btn transparent wow fadeInLeft" data-wow-duration=".9s" data-wow-delay="2s">book lesson</a>
						<a href="#" class="btn color wow fadeInRight" data-wow-duration=".9s" data-wow-delay="2s">learn more</a>
					</div>
				</div>
			</div>										
		</div>
	</div>
</div>
<!-- Feature Area
============================================ -->
<div id="feature-area" class="feature-area bg-gray pt-90 pb-90">
	<div class="container">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-12 mb-45">
				<h3 class="heading">our features</h3>
				<div class="excerpt">
					<p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<div class="row">
			<!-- Left Feature -->
			<div class="feature-wrapper feature-left text-right col-lg-4 col-12">
				<div class="single-feature">
					<div class="icon"><i class="icofont icofont-file-spreadsheet"></i></div>
					<div class="text fix">
						<h4>BEST SAFETY MEASURES</h4>
						<p>Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road.</p>
					</div>
				</div>
				<div class="single-feature">
					<div class="icon"><i class="icofont icofont-car-alt-4"></i></div>
					<div class="text fix">
						<h4>EXPERIENCED INSTRUCTORS</h4>
						<p>All our Instructors are DMV Licensed, mentally and physically fit and have decade or more of Instruction History.</p>
					</div>
				</div>
				<div class="single-feature">
					<div class="icon"><i class="icofont icofont-video-alt"></i></div>
					<div class="text fix">
						<h4>PERFECT TIMING</h4>
						<p>Now is the perfect time to start your In Class, Online or Behind The Wheel Training.</p>
					</div>
				</div>
			</div>
			<!-- Feature Image -->
			<div class="feature-image text-center col-lg-4 col-12">
				<img src="img/feature.png" alt="feature" />
			</div>
			<!-- Right Feature -->
			<div class="feature-wrapper feature-right text-left col-lg-4 col-12">
				<div class="single-feature">
					<div class="icon"><i class="icofont icofont-man-in-glasses"></i></div>
					<div class="text fix">
						<h4>AFFORDABLE FEE</h4>
						<p>We know this process can be expensive. So we constantly monitor our competitions pricing.</p>
					</div>
				</div>
				<div class="single-feature">
					<div class="icon"><i class="icofont icofont-clock-time"></i></div>
					<div class="text fix">
						<h4>CLASS FORMATS</h4>
						<p>We offer In Classroom Drivers Education as well as Online Drivers Education.</p>
					</div>
				</div>
				<div class="single-feature">
					<div class="icon"><i class="icofont icofont-direction-sign"></i></div>
					<div class="text fix">
						<h4>PAYMENT PLANS</h4>
						<p>We allow you to decide when and how you want to pay. We accept all major forms of payments.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Funfact Area
============================================ -->
<div class="funfact-area overlay overlay-white overlay-80 pt-90 pb-60">
	<div class="container">
		<div class="row">
			<div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
				<i class="icofont icofont-hat-alt"></i>
				<h1 class="counter plus">6500</h1>
				<p>graduted from here</p>
			</div>
			<div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
				<i class="icofont icofont-user-suited"></i>
				<h1 class="counter">56</h1>
				<p>teachers number</p>
			</div>
			<div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
				<i class="icofont icofont-history"></i>
				<h1 class="counter">11</h1>
				<p>years on market</p>
			</div>
			<div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
				<i class="icofont icofont-users-social"></i>
				<h1 class="counter plus">550</h1>
				<p>present students</p>
			</div>
		</div>
	</div>
</div>
<!-- Course Area
============================================ -->
<div id="course-area" class="course-area bg-gray pt-90 pb-60">
	<div class="container">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-12 mb-45">
				<h3 class="heading">course category</h3>
				<div class="excerpt">
					<p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<!-- Course Wrapper -->
		<div class="course-wrapper row">
			<div class="col-lg-3 col-md-6 col-12 mb-30 fix">
				<div class="course-item text-center">
					<i class="icofont icofont-car-alt-4"></i>
					<h4>normal driving</h4>
					<p>There are many variations of items passag LoIpsum available the majority ratomised </p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-12 mb-30 fix">
				<div class="course-item text-center">
					<i class="icofont icofont-ambulance-cross"></i>
					<h4>defensive</h4>
					<p>There are many variations of items passag LoIpsum available the majority ratomised </p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-12 mb-30 fix">
				<div class="course-item text-center">
					<i class="icofont icofont-fast-delivery"></i>
					<h4>power booster</h4>
					<p>There are many variations of items passag LoIpsum available the majority ratomised </p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-12 mb-30 fix">
				<div class="course-item text-center">
					<i class="icofont icofont-rocket-alt-2"></i>
					<h4>crash level</h4>
					<p>There are many variations of items passag LoIpsum available the majority ratomised </p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="gallery-area" class="gallery-area bg-gray pt-90 pb-60">
	<div class="container">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-12 mb-45">
				<h3 class="heading">golden gallery</h3>
				<div class="excerpt">
					<p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<!-- Gallery Filter -->
		<div class="gallery-filter text-center">
			<button class="active" data-filter="*">all</button>
			<button data-filter=".cars">cars</button>
			<button data-filter=".students">students</button>
			<button data-filter=".classroom">classroom</button>
			<button data-filter=".exam">exam</button>
		</div>
		<!-- Gallery Grid -->
		<div class="gallery-grid row">
			<div class="gallery-item cars col-lg-3 col-md-4 col-12">
				<a href="img/gallery/1.jpg" class="gallery-image image-popup">
					<img src="img/gallery/1.jpg" alt="" />
					<div class="content">
						<i class="icofont icofont-search"></i>
						<h4>Class Test</h4>
					</div>
				</a>
			</div>
			<div class="gallery-item cars exam col-lg-3 col-md-4 col-12">
				<a href="img/gallery/2.jpg" class="gallery-image image-popup">
					<img src="img/gallery/2.jpg" alt="" />
					<div class="content">
						<i class="icofont icofont-search"></i>
						<h4>Class Test</h4>
					</div>
				</a>
			</div>
			<div class="gallery-item classroom col-lg-3 col-md-4 col-12">
				<a href="img/gallery/3.jpg" class="gallery-image image-popup">
					<img src="img/gallery/3.jpg" alt="" />
					<div class="content">
						<i class="icofont icofont-search"></i>
						<h4>Class Test</h4>
					</div>
				</a>
			</div>
			<div class="gallery-item cars students exam col-lg-3 col-md-4 col-12">
				<a href="img/gallery/4.jpg" class="gallery-image image-popup">
					<img src="img/gallery/4.jpg" alt="" />
					<div class="content">
						<i class="icofont icofont-search"></i>
						<h4>Class Test</h4>
					</div>
				</a>
			</div>
			<div class="gallery-item cars students col-lg-3 col-md-4 col-12">
				<a href="img/gallery/5.jpg" class="gallery-image image-popup">
					<img src="img/gallery/5.jpg" alt="" />
					<div class="content">
						<i class="icofont icofont-search"></i>
						<h4>Class Test</h4>
					</div>
				</a>
			</div>
			<div class="gallery-item students classroom col-lg-3 col-md-4 col-12">
				<a href="img/gallery/6.jpg" class="gallery-image image-popup">
					<img src="img/gallery/6.jpg" alt="" />
					<div class="content">
						<i class="icofont icofont-search"></i>
						<h4>Class Test</h4>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- Testimonial Area
============================================ -->
<div id="testimonial-area" class="testimonial-area overlay overlay-white overlay-80 text-center pt-90 pb-90">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12 mx-auto">
				<!-- Testimonial Image Slider -->
				<div class="ti-slider mb-40">
					<div class="single-slide"><div class="image fix"><img src="img/testimonial/1.jpg" alt="" /></div></div>
					<div class="single-slide"><div class="image fix"><img src="img/testimonial/2.jpg" alt="" /></div></div>
					<div class="single-slide"><div class="image fix"><img src="img/testimonial/3.jpg" alt="" /></div></div>
					<div class="single-slide"><div class="image fix"><img src="img/testimonial/4.jpg" alt="" /></div></div>
				</div>
				<!-- Testimonial Content Slider -->
				<div class="tc-slider">
					<div class="single-slide">
						<p>There are many many variations of passages of Lorem Ipsum available, but the majority have suffered   alteration in some form, by hum domised words which is don't look believable.</p>
						<h5>momen bhuiyan</h5>
						<span>Graphic Designer</span>
					</div>
					<div class="single-slide">
						<p>There are many many variations of passages of Lorem Ipsum available, but the majority have suffered   alteration in some form, by hum domised words which is don't look believable.</p>
						<h5>Tasnim Akter</h5>
						<span>Graphic Designer</span>
					</div>
					<div class="single-slide">
						<p>There are many many variations of passages of Lorem Ipsum available, but the majority have suffered   alteration in some form, by hum domised words which is don't look believable.</p>
						<h5>momen bhuiyan</h5>
						<span>Graphic Designer</span>
					</div>
					<div class="single-slide">
						<p>There are many many variations of passages of Lorem Ipsum available, but the majority have suffered   alteration in some form, by hum domised words which is don't look believable.</p>
						<h5>Tasnim Akter</h5>
						<span>Graphic Designer</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Slider Arrows -->
	<button class="ts-arrows ts-prev"><i class="icofont icofont-caret-left"></i></button>
	<button class="ts-arrows ts-next"><i class="icofont icofont-caret-right"></i></button>
</div>
<!-- Instructor Area
============================================ -->
<div id="instructor-area" class="instructor-area bg-gray pt-90 pb-60">
	<div class="container">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-12 mb-45">
				<h3 class="heading">Instructor</h3>
				<div class="excerpt">
					<p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 col-12 mx-auto">
				<!-- Instructor Tab Content -->
				<div class="tab-content">
					<div class="tab-pane fade show active" id="instructor-1">
						<div class="row">
							<div class="instructor-details text-left col-lg-7 col-12">
								<h4 class="instructor-name">jonathon joe</h4>
								<h5 class="instructor-title">Instructor</h5>
								<p>There are many many variations of passages of Lorem Ipsum available, but the majority have suffered   alteration in some form, by hum domised words which is don't look even slightly believable.There are many many variations of passages of Lorem Ipsum available,but the on majority have suffered   alteration in some form, by hum maksu rez words which is don't look even slightly believable.</p>
								<div class="instructor-social fix">
									<a href="#"><i class="icofont icofont-social-facebook"></i></a>
									<a href="#"><i class="icofont icofont-social-pinterest"></i></a>
									<a href="#"><i class="icofont icofont-social-twitter"></i></a>
									<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
								</div>
							</div>
							<div class="instructor-image col-lg-5 col-md-6 col-12">
								<img src="img/instructor/big-1.jpg" alt="" />
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="instructor-2">
						<div class="row">
							<div class="instructor-details text-left col-lg-7 col-12">
								<h4 class="instructor-name">Martin Adam</h4>
								<h5 class="instructor-title">Instructor</h5>
								<p>There are many many variations of passages of Lorem Ipsum available, but the majority have suffered   alteration in some form, by hum domised words which is don't look even slightly believable.There are many many variations of passages of Lorem Ipsum available,but the on majority have suffered   alteration in some form, by hum maksu rez words which is don't look even slightly believable.</p>
								<div class="instructor-social fix">
									<a href="#"><i class="icofont icofont-social-facebook"></i></a>
									<a href="#"><i class="icofont icofont-social-pinterest"></i></a>
									<a href="#"><i class="icofont icofont-social-twitter"></i></a>
									<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
								</div>
							</div>
							<div class="instructor-image col-lg-5 col-md-6 col-12">
								<img src="img/instructor/big-2.jpg" alt="" />
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="instructor-3">
						<div class="row">
							<div class="instructor-details text-left col-lg-7 col-12">
								<h4 class="instructor-name">Gabriel Stan</h4>
								<h5 class="instructor-title">Instructor</h5>
								<p>There are many many variations of passages of Lorem Ipsum available, but the majority have suffered   alteration in some form, by hum domised words which is don't look even slightly believable.There are many many variations of passages of Lorem Ipsum available,but the on majority have suffered   alteration in some form, by hum maksu rez words which is don't look even slightly believable.</p>
								<div class="instructor-social fix">
									<a href="#"><i class="icofont icofont-social-facebook"></i></a>
									<a href="#"><i class="icofont icofont-social-pinterest"></i></a>
									<a href="#"><i class="icofont icofont-social-twitter"></i></a>
									<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
								</div>
							</div>
							<div class="instructor-image col-lg-5 col-md-6 col-12">
								<img src="img/instructor/big-3.jpg" alt="" />
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="instructor-4">
						<div class="row">
							<div class="instructor-details text-left col-lg-7 col-12">
								<h4 class="instructor-name">Thomas Smith</h4>
								<h5 class="instructor-title">Instructor</h5>
								<p>There are many many variations of passages of Lorem Ipsum available, but the majority have suffered   alteration in some form, by hum domised words which is don't look even slightly believable.There are many many variations of passages of Lorem Ipsum available,but the on majority have suffered   alteration in some form, by hum maksu rez words which is don't look even slightly believable.</p>
								<div class="instructor-social fix">
									<a href="#"><i class="icofont icofont-social-facebook"></i></a>
									<a href="#"><i class="icofont icofont-social-pinterest"></i></a>
									<a href="#"><i class="icofont icofont-social-twitter"></i></a>
									<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
								</div>
							</div>
							<div class="instructor-image col-lg-5 col-md-6 col-12">
								<img src="img/instructor/big-4.jpg" alt="" />
							</div>
						</div>
					</div>
				</div>
				<!-- Instructor Tab List -->
				<ul class="nav instructor-tab-list fix">
					<li class="active"><a href="#instructor-1" data-toggle="tab"><img src="img/instructor/1.jpg" alt="" /></a></li>
					<li><a href="#instructor-2" data-toggle="tab"><img src="img/instructor/2.jpg" alt="" /></a></li>
					<li><a href="#instructor-3" data-toggle="tab"><img src="img/instructor/3.jpg" alt="" /></a></li>
					<li><a href="#instructor-4" data-toggle="tab"><img src="img/instructor/4.jpg" alt="" /></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Pricing Area
============================================ -->
<div id="pricing-area" class="pricing-area overlay overlay-black overlay-40 pt-90 pb-60">
	<div class="container">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title title-white text-center col-12 mb-45">
				<h3 class="heading">your pricing plan</h3>
				<div class="excerpt">
					<p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-12 mb-30">
				<div class="single-pricing text-center">
					<div class="pricing-head">
						<h4>basic</h4>
					</div>
					<div class="pricing-price">
						<h2><span>$</span>200</h2>
					</div>
					<ul class="pricing-details">
						<li>2 Month Course</li>
						<li>3 Hours Per Day</li>
						<li>Weekly 1 Test</li>
						<li>20 Video Classes</li>
						<li>Driving Licence</li>
					</ul>
					<a href="#" class="pricing-action">choose plan</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-12 mb-30">
				<div class="single-pricing text-center">
					<div class="pricing-head">
						<h4>upgrade</h4>
					</div>
					<div class="pricing-price">
						<h2><span>$</span>300</h2>
					</div>
					<ul class="pricing-details">
						<li>3 Month Course</li>
						<li>4 Hours Per Day</li>
						<li>Weekly 2 Test</li>
						<li>25 Video Classes</li>
						<li>Driving Licence</li>
					</ul>
					<a href="#" class="pricing-action">choose plan</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-12 mb-30">
				<div class="single-pricing active text-center">
					<div class="pricing-head">
						<h4>smart</h4>
					</div>
					<div class="pricing-price">
						<h2><span>$</span>400</h2>
					</div>
					<ul class="pricing-details">
						<li>4 Month Course</li>
						<li>5 Hours Per Day</li>
						<li>Weekly 2 Test</li>
						<li>30 Video Classes</li>
						<li>Driving Licence</li>
					</ul>
					<a href="#" class="pricing-action">choose plan</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-12 mb-30">
				<div class="single-pricing text-center">
					<div class="pricing-head">
						<h4>over smart</h4>
					</div>
					<div class="pricing-price">
						<h2><span>$</span>500</h2>
					</div>
					<ul class="pricing-details">
						<li>6 Month Course</li>
						<li>5 Hours Per Day</li>
						<li>Weekly 3 Test</li>
						<li>35 Video Classes</li>
						<li>Driving Licence</li>
					</ul>
					<a href="#" class="pricing-action">choose plan</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- FAQ Area
============================================ -->
<div id="faq-area" class="faq-area bg-white pt-90 pb-60">
	<div class="container">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-12 mb-45">
				<h3 class="heading">Frequently asked questions</h3>
				<div class="excerpt">
					<p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-12">
				<div class="panel-group" id="faq">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a data-toggle="collapse" aria-expanded="true" href="#faq-1">There are many variations of passages of Lorem Ipsum?</a></h4>
						</div>
						<div id="faq-1" class="panel-collapse collapse show" data-parent="#faq">
							<div class="panel-body">
								<p>It is a long established fact that a reader will be distracted by the readaible is an content of  the page when looking at its layout. The point of using Lorem Ipsum is that it has a more less normal.</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false" href="#faq-2">There are many variations of passages of Lorem Ipsum?</a></h4>
						</div>
						<div id="faq-2" class="panel-collapse collapse" data-parent="#faq">
							<div class="panel-body">
								<p>It is a long established fact that a reader will be distracted by the readaible is an content of  the page when looking at its layout. The point of using Lorem Ipsum is that it has a more less normal.</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false" href="#faq-3">There are many variations of passages of Lorem Ipsum?</a></h4>
						</div>
						<div id="faq-3" class="panel-collapse collapse" data-parent="#faq">
							<div class="panel-body">
								<p>It is a long established fact that a reader will be distracted by the readaible is an content of  the page when looking at its layout. The point of using Lorem Ipsum is that it has a more less normal.</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false" href="#faq-4">There are many variations of passages of Lorem Ipsum?</a></h4>
						</div>
						<div id="faq-4" class="panel-collapse collapse" data-parent="#faq">
							<div class="panel-body">
								<p>It is a long established fact that a reader will be distracted by the readaible is an content of  the page when looking at its layout. The point of using Lorem Ipsum is that it has a more less normal.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="faq-image col-lg-6 col-12">
				<img src="img/faq.png" alt="" />
			</div>
		</div>
	</div>
</div>
<!-- Contatc Area
============================================ -->
<div id="contact-area" class="contact-area bg-gray">
	<div class="container pb-90 pt-90">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-12 mb-45">
				<h3 class="heading">touch in driveon</h3>
				<div class="excerpt">
					<p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<div class="row">
			<!-- Contact Info -->
			<div class="contact-info col-lg-4 col-md-5 col-12">
				<div class="single-info text-left fix">
					<div class="icon"><i class="icofont icofont-phone"></i></div>
					<div class="content fix">
						<h5>call us</h5>
						<p>+1 (647) 832-4903<br />
						<!-- +1 (647) 832-4903 -->
					</p>
					</div>
				</div>
				<div class="single-info text-left fix">
					<div class="icon"><i class="icofont icofont-envelope"></i></div>
					<div class="content fix">
						<h5>your message</h5>
						<p><a href="#">info@alfresco.com</a><a href="#">admin@alfresco.com</a></p>
					</div>
				</div>
				<div class="single-info text-left fix">
					<div class="icon"><i class="icofont icofont-location-pin"></i></div>
					<div class="content fix">
						<h5>our location</h5>
						<p>3756 Melrose place, <br />CA 87031, Australia</p>
					</div>
				</div>
			</div>
			<!-- Contact Form -->
			<div class="contact-form form text-left col-lg-8 col-md-7 col-12">
				<form id="contact-form" action="https://preview.hasthemes.com/driveon-preview-v1/driveon-light/mail.php" method="post">
					<div class="input-2">
						<div class="input"><input type="text" name="name" placeholder="Name" /></div>
						<div class="input"><input type="email" name="email" placeholder="E-mail" /></div>
					</div>
					<div class="input"><input type="text" name="subject" placeholder="Subject" /></div>
					<div class="input textarea"><textarea name="message" placeholder="Message"></textarea></div>
					<div class="input input-submit"><input type="submit" value="send message" /></div>
				</form>
				<p class="form-messege"></p>
			</div>
		</div>
	</div>
</div>
<!-- CTA Area
============================================ -->
<div class="cta-area pb-40 pt-40">
	<div class="container">
		<div class="row">
			<div class="call-to-action text-left col-lg-10 col-12 mx-auto">
				<h3>try to get our amazing free lesson today</h3>
				<a href="#" class="btn transparent ">get  lesson</a>
			</div>
		</div>
	</div>
</div>
<!-- Footer Area
============================================ -->
<div class="footer-area overlay overlay-black overlay-70 pt-90">
	<div class="container">
		<div class="row">
			<div class="footer-widget text-left col-lg-4 col-md-6 col-12">
				<h4 class="widget-title">about drive on</h4>
				<div class="about-widget">
					<p>It is a long established fact that is a reader will be distracted by the readable content of page when looking at its layout. it’s the more fact that is reader will be by the readable looking its layout.</p>
					<div class="widget-social fix">
						<a href="#"><i class="icofont icofont-social-facebook"></i></a>
						<a href="#"><i class="icofont icofont-social-pinterest"></i></a>
						<a href="#"><i class="icofont icofont-social-twitter"></i></a>
						<a href="#"><i class="icofont icofont-social-rss"></i></a>
					</div>
				</div>
			</div>
			<div class="footer-widget text-left col-lg-4 col-md-6 col-12">
				<h4 class="widget-title">quick contact</h4>
				<div class="contact-widget">
					<h5>address:</h5>
					<p>Flor. 4,  House. 15,  Block-C. <br />Banasree Main Road,  Dhaka.</p>
					<h5>phone:</h5>
					<p>+1 (647) 832-4903 <br />
					
				</p>
					<h5>e-mail</h5>
					<p>
						<a href="#">driveonskill@email.com</a>
						
					</p>
				</div>
			</div>
			
			<div class="footer-widget text-left col-lg-4 col-md-6 col-12">
				<h4 class="widget-title">instagram gallary</h4>
				<div class="instagram-widget">
					<div class="instagram-item"><a href="#"><img src="img/instagram/1.jpg" alt="" /></a></div>
					<div class="instagram-item"><a href="#"><img src="img/instagram/2.jpg" alt="" /></a></div>
					<div class="instagram-item"><a href="#"><img src="img/instagram/3.jpg" alt="" /></a></div>
					<div class="instagram-item"><a href="#"><img src="img/instagram/4.jpg" alt="" /></a></div>
					<div class="instagram-item"><a href="#"><img src="img/instagram/5.jpg" alt="" /></a></div>
					<div class="instagram-item"><a href="#"><img src="img/instagram/6.jpg" alt="" /></a></div>
					<div class="instagram-item"><a href="#"><img src="img/instagram/7.jpg" alt="" /></a></div>
					<div class="instagram-item"><a href="#"><img src="img/instagram/8.jpg" alt="" /></a></div>
					<div class="instagram-item"><a href="#"><img src="img/instagram/9.jpg" alt="" /></a></div>
				</div>
			</div>
		</div>
		<div class="footer-bottom text-center col-12">
			<p class="copyright">Copyright &copy; <a href="#">Driveon</a> ALL Right Reserved</p>
		</div>
	</div>
</div>

</div>
<!-- Body main wrapper end -->



<!-- jQuery JS
============================================ -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap JS
============================================ -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Plugins JS
============================================ -->
<script src="js/plugins.js"></script>
<!-- Ajax Mail JS
============================================ -->
<script src="js/ajax-mail.js"></script>
<!-- WOW JS
============================================ -->
<script src="js/wow.min.js"></script>
<!-- Google Map APi
============================================ -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
<script src="js/map.js"></script>
<!-- Style Customizer JS
============================================ -->
<script src="js/style-customizer.js"></script>
<!-- Main JS
============================================ -->
<script src="js/main.js"></script>

</body>
</html>
