<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets-admin/img/favicon.png">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<div class="home-six-style">
		<!-- Header section start -->
		<header class="header-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-5">
						<div class="site-logo">
							<h2><a href="#">Civic</a></h2>
							<p>Enhance your online presence</p>
						</div>
					</div>
					<div class="col-md-7 text-md-right header-buttons">
						<a href="#" class="site-btn">Download CV</a>
						<a href="#" class="site-btn">Discover me</a>
					</div>
				</div>
			</div>
		</header>
		<!-- Header section end -->

		<!-- Hero section start -->
		<section class="hero-section">
			<div class="container-fluid text-center">
				<img src="img/hero-3.jpg" alt="">
				<div class="hero-text">
					<h2>Maria Williams</h2>
					<p>I’m a digital designer in love with photography, painting and<br>discovering new worlds and cultures.</p>
				</div>
				<div class="social-links">
					<a href=""><i class="fa fa-pinterest"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-instagram"></i></a>
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</section>
		<!-- Hero section end -->

		<!-- Info section start -->
		<div class="info-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-8 offset-xl-2 container-warp">
						<div class="row">
							<div class="col-md-6">
								<div class="hero-info mb-4 mb-md-0">
									<ul>
										<li><span>Date of Birth</span>Aug 25, 1988</li>
										<li><span>Address</span>Rosia Road 55, Gibraltar, UK</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="hero-info">
									<ul>
										<li><span>E-mail</span>mariawilliams@company.com</li>
										<li><span>Phone </span>+43 5266 22 345</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Info section end -->

		<!-- portfolio section start -->
		<div class="portfolo-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-lg-3 p-0">
						<div class="portfolio-item mb-0">
							<a href="img/portfolio/1.jpg" class="set-bg port-pic mb-0" data-setbg="img/portfolio/1.jpg"></a>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 p-0">
						<div class="portfolio-item mb-0">
							<a href="img/portfolio/2.jpg" class="set-bg port-pic mb-0" data-setbg="img/portfolio/2.jpg"></a>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 p-0">
						<div class="portfolio-item mb-0">
							<a href="img/portfolio/3.jpg" class="set-bg port-pic mb-0" data-setbg="img/portfolio/3.jpg"></a>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 p-0">
						<div class="portfolio-item mb-0">
							<a href="img/portfolio/4.jpg" class="set-bg port-pic mb-0" data-setbg="img/portfolio/4.jpg"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- portfolio section end -->

		<!-- Resume section start -->
		<section class="resume-section spad">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-10 col-xl-6 offset-lg-1 offset-xl-3 container-warp text-center p-xl-0">
						<div class="section-title">
							<h2>Work Experience</h2>
						</div>
						<ul class="resume-list">
							<li>
								<h2>2016-Present</h2>
								<h3>Web Design Company</h3>
								<h4>Web Designer</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
							</li>
							<li>
								<h2>2014-2016</h2>
								<h3>Web Design Company</h3>
								<h4>Web Designer</h4>
								<p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
							</li>
						</ul>
						<div class="spad">
							<div class="section-title">
								<h2>Education</h2>
							</div>
							<ul class="resume-list">
								<li>
									<h2>2008</h2>
									<h3>Ui/Ux Diploma</h3>
									<h4>Design College California</h4>
									<p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
								</li>
								<li>
									<h2>2006</h2>
									<h3>Web design Diploma</h3>
									<h4>Design College California</h4>
									<p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
								</li>
							</ul>
						</div>
						<div class="section-title">
							<h2>References</h2>
						</div>
						<!-- review slider -->
						<div class="review-slider owl-carousel">
							<div class="single-review">
								<div class="qut">“</div>
								<p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
								<h3>Robert G. Smith</h3>
								<h4>Manager, Company</h4>
							</div>
							<div class="single-review">
								<div class="qut">“</div>
								<p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
								<h3>Robert G. Smith</h3>
								<h4>Manager, Company</h4>
							</div>
							<div class="single-review">
								<div class="qut">“</div>
								<p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
								<h3>Robert G. Smith</h3>
								<h4>Manager, Company</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 container-warp">
						<!-- skill section start -->
						<section class="skill-section spad">
							<div class="section-title text-center">
								<h2>Skills</h2>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="row">
										<div class="col-md-6">
											<div class="fact-box">
												<div class="fact-content">
													<img src="img/icon/1-w.png" alt="">
													<h2>14</h2>
													<p>Years of Experience</p>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="fact-box">
												<div class="fact-content">
													<img src="img/icon/2-w.png" alt="">
													<h2>9</h2>
													<p>Awards Won</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="skills pt-5 pt-lg-0">
										<div class="single-progress-item">
											<div class="progress-bar-style" data-progress="99"></div>
											<p>Design</p>
										</div>
										<div class="single-progress-item">
											<div class="progress-bar-style" data-progress="75"></div>
											<p>Illsutrator</p>
										</div>
										<div class="single-progress-item">
											<div class="progress-bar-style" data-progress="87"></div>
											<p>Photoshop</p>
										</div>
										<div class="single-progress-item">
											<div class="progress-bar-style" data-progress="60"></div>
											<p>HTML</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="circle-progress">
												<div id="progress5" class="prog-circle"></div>
												<div class="progress-info">
													<h2>75%</h2>
												</div>
												<div class="prog-title">
													<h3>Inspiration</h3>
													<p>Etiam nec odio vestibulum est.</p>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="circle-progress">
												<div id="progress6" class="prog-circle"></div>
												<div class="progress-info">
													<h2>83%</h2>
												</div>
												<div class="prog-title">
													<h3>Inspiration</h3>
													<p>Etiam nec odio vestibulum est.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- skill section end -->
						<div class="footer-top-section">
							<div class="row">
								<div class="col-xl-4">
									<div class="section-title">
										<h2>Languages</h2>
									</div>
									<ul class="language-progress">
										<li>English <div class="lan-prog" data-lanprogesss="5"></div></li>
										<li>Spanish <div class="lan-prog" data-lanprogesss="4"></div></li>
										<li>Chinesse <div class="lan-prog" data-lanprogesss="3"></div></li>
									</ul>
								</div>
								<div class="col-xl-8 pt-5 pt-lg-0">
									<div class="section-title">
										<h2>Hobbies</h2>
									</div>
									<div class="icon-box-area">
										<div class="icon-box">
											<i class="flaticon-032-cooking"></i>
											<p>Cooking</p>
										</div>
										<div class="icon-box">
											<i class="flaticon-015-photo-camera"></i>
											<p>Photography</p>
										</div>
										<div class="icon-box">
											<i class="flaticon-013-chess-1"></i>
											<p>Playing Chess</p>
										</div>
										<div class="icon-box">
											<i class="flaticon-001-yoga"></i>
											<p>Yoga</p>
										</div>
										<div class="icon-box">
											<i class="flaticon-035-tent"></i>
											<p>Camping in nature</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- Footer section start -->
	<footer class="footer-section">
		<div class="container text-center">
			<div class="copyright">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://github.com/Mouftakir99" target="_blank">Mouftakir</a> &amp; distirbuted by <a href="https://github.com/Mouftakir99" target="_blank">Mouftakir</a>
            </div>
		</div>
	</footer>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>
	<script src="{{ asset('assets/js/autogrow.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>