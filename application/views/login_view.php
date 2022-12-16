<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>FindUrTalentZ - Home</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta content="" name="keywords" />
		<meta content="" name="description" />

		<!-- Favicon -->
		<link href="<?= base_url(); ?>assets/img/favicon.ico" rel="icon" />

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
		<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
			<div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Spinner End -->

		<!-- Navbar Start -->
		<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
			<a href="index.html" class="navbar-brand d-flex align-items-center px-5 px-lg-5">
				<img class="w-25" src="<?= base_url(); ?>assets/img/Logo.png" />
			</a>
			<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto p-4 p-lg-0">
					<a href="<?= base_url(); ?>" class="nav-item nav-link home">Home</a>
					<a href="<?= base_url(); ?>home/introduction" class="nav-item nav-link">Introduction</a>
					<a href="<?= base_url(); ?>home/blog" class="nav-item nav-link">Blogs</a>
					<a href="<?= base_url(); ?>home/contact" class="nav-item nav-link">Contact</a>
				</div>
				
			</div>
		</nav>
		<!-- Navbar End -->

        <!-- Register-->

	<div class="container-xxl py-5">
			<div class="container">
				<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
					<h6 class="section-title bg-white text-center text-primary px-3">Login</h6>
					<h1 class="mb-5">To Your Account</h1>
				</div>
				<div class="row g-4 justify-content-center">

					<?php if ($this->session->flashdata('message')) { ?>
						<?= $this->session->flashdata('message'); ?>
					<?php } ?>

					<div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
						<form action="<?= base_url(); ?>authentication/login_process" method="post">
							<div class="row g-3">
								<div class="col-12">
									<div class="form-floating">
										<input type="text" class="form-control" name="name" id="name" placeholder="Name" />
										<label for="name">Name</label>
									</div>
								</div>
								<div class="col-12">
									<div class="form-floating">
										<input type="email" class="form-control" name="email_address" id="email-address" placeholder="Your Email" />
										<label for="email-address">Email</label>
									</div>
								</div>
								<div class="col-12">
									<button class="btn btn-primary w-100 py-3" name="submit" type="submit">Login</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
         <!-- Register End-->

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
