<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>FindUrTalentZ - Introduction</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta content="" name="keywords" />
		<meta content="" name="description" />

		<!-- Favicon -->
		<link href="img/favicon.ico" rel="icon" />

		<!-- Google Web Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet" />

		<!-- Icon Font Stylesheet -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

		<!-- Libraries Stylesheet -->
		<link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet" />
		<link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

		<!-- Customized Bootstrap Stylesheet -->
		<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Template Stylesheet -->
		<link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" />
	</head>

	<body>
		<!-- Spinner Start -->
	
		<!-- Spinner End -->

		<!-- Navbar Start -->
		<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
			<a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
				<img class="w-25" src="<?= base_url(); ?>assets/img/Logo.png" />
			</a>
			<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto p-4 p-lg-0">
					<a href="<?= base_url(); ?>" class="nav-item nav-link">Home</a>
					<a href="introduction.html" class="nav-item nav-link active">Introduction</a>
			         <a href="<?= base_url(); ?>home/blog" class="nav-item nav-link">Blogs</a>
					<a href="<?= base_url(); ?>home/contact" class="nav-item nav-link">Contact</a>
			    </div>
				<a href="<?= base_url(); ?>authentication" class="btn btn-primary p-md-4 py-5 px-lg-5 d-none d-lg-block">Take a Test<i class="fa fa-arrow-right ms-3"></i></a>
			</div>
		</nav>
		<!-- Navbar End -->

		<!-- Header Start -->
		<div class="container-fluid bg-primary py-5 mb-5 page-header">
			<div class="container py-5">
				<div class="row justify-content-center">
					<div class="col-lg-10 text-center">
						<h1 class="display-3 text-white animated slideInDown">Introduction</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb justify-content-center">
								<li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
								<li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
								<li class="breadcrumb-item text-white active" aria-current="page">Introduction</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- Header End -->

		<!-- Team Start -->
		<div class="container-xxl py-5">
			<div class="container">
				<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
					<h6 class="section-title bg-white text-center text-primary px-3">PRESENT</h6>
					<h1 class="mb-5">The Developer</h1>
				</div>
				<div class="row g-4">
					<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="team-item bg-light">
							<div class="overflow-hidden">
								<img class="img-fluid" src="<?= base_url(); ?>assets/img/team-1.jpg" alt="" />
							</div>
							<div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
								<div class="bg-light d-flex justify-content-center pt-2 px-1">
		
									<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
								</div>
							</div>
							<div class="text-center p-4">
								<h5 class="mb-0">Aureal A</h5>
								<small>J0304201006</small>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="team-item bg-light">
							<div class="overflow-hidden">
								<img class="img-fluid" src="<?= base_url(); ?>assets/img/team-2.jpg" alt="" />
							</div>
							<div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
								<div class="bg-light d-flex justify-content-center pt-2 px-1">
									
									<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
								</div>
							</div>
							<div class="text-center p-4">
								<h5 class="mb-0">Geiska A</h5>
								<small>J0304201051</small>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
						<div class="team-item bg-light">
							<div class="overflow-hidden">
								<img class="img-fluid" src="<?= base_url(); ?>assets/img/team-3.jpg" alt="" />
							</div>
							<div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
								<div class="bg-light d-flex justify-content-center pt-2 px-1">
									
									<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
								</div>
							</div>
							<div class="text-center p-4">
								<h5 class="mb-0">Mochammad Bintang</h5>
								<small>J0304202152</small>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
						<div class="team-item bg-light">
							<div class="overflow-hidden">
								<img class="img-fluid" src="<?= base_url(); ?>assets/img/team-4.jpg" alt="" />
							</div>
							<div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
								<div class="bg-light d-flex justify-content-center pt-2 px-1">
									
									<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
								</div>
							</div>
							<div class="text-center p-4">
								<h5 class="mb-0">Zaid Hamdy</h5>
								<small>J0304201111</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Team End -->

		<!-- Footer Start -->
		<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
			<div class="container">
				<div class="row g-5">
					<div class="col-lg-3 col-md-6">
						<h4 class="text-white mb-3">Contact</h4>
						<p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Sekolah Vokasi IPB</p>
						<p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62891919191</p>
						<p class="mb-2"><i class="fa fa-envelope me-3"></i>info@findurtalentz.com</p>
						
					</div>
				</div>
			</div>
			<div class="container">
				<div class="copyright">
					<div class="row">
						<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">&copy; <a class="border-bottom" href="#">FindUrTalentZ</a>, All Right Reserved.</div>
						<div class="col-md-6 text-center text-md-end">
			
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer End -->

		<!-- Back to Top -->
		<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

		<!-- JavaScript Libraries -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
		<script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
		<script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
		<script src="<?= base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
		<script src="<?= base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>

		<!-- Template Javascript -->
		<script src="<?= base_url(); ?>assets/js/main.js"></script>
	</body>
</html>

