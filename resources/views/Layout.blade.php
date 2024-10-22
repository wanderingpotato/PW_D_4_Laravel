<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AtmaHotel - @yield('title')</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" crossorigin="anonymous">
	<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<style>
	.btn-info {
		background-color: #1EB7AF;
	}

	.divider {
		width: 10%;
		height: 2.5px;
		opacity: 50%;
		border-radius: 20px;
		background-color: #1EB7AF;
	}

	.container-image {
		position: relative;
		width: 65%;
		/* Adjust as needed */
		height: 30rem;
		/* Adjust as needed */
	}
	

	.container-image::before {
		content: '';
		position: absolute;
		width: 50%;
		height: 35%;
		border-bottom: 10px solid #1EB7AF;
		border-right: 10px solid #1EB7AF;
		bottom: -20px;
		right: -20px;
		z-index: 10;
	}

	.container-image::after {
		content: '';
		position: absolute;
		width: 50%;
		height: 35%;
		border-top: 10px solid #1EB7AF;
		border-left: 10px solid #1EB7AF;
		top: -20px;
		left: -20px;
	}

	.images {
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
	}

	.scrolled {
		background-color: #333;
		/* Change to your desired color */
		color: black;
		transition: background-color 200ms linear;
	}
	.active>.page-link{
		background-color: #1EB7AF;
		color: white!important;
	}
</style>

<body>
	<nav id="navbar" class="navbar navbar-expand-lg py-3 fixed-top bg-body-transparent text-white navbar-dark">
		<div class="container-fluid px-5">
			<a class="navbar-brand mb-0 h1" href="#">
				<img src="{{asset('Logo.svg')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
				AtmaHotel
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto nav-underline">
					<li class="nav-item">
						<a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}"   href="{{url('/')}}">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ (request()->is('Rooms')) ? 'active' : '' }}" href="{{url('Rooms')}}">Rooms</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ (request()->is('Service')) ? 'active' : '' }}" href="{{url('Service')}}">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ (request()->is('About')) ? 'active' : '' }}" href="{{url('About')}}">About</a>
					</li>
				</ul>
				<div class="">
					<a href="{{url('Login')}}" class=""><button class="btn btn-outline-light px-5 py-2">Login</button></a>
				</div>
			</div>
		</div>
	</nav>

	<div class="w-100 h-100">
		@yield('content')
	</div>

	<footer class="text-center text-lg-start bg-body-tertiary text-muted">
		<section class="">
			<div class="container text-center text-md-start mt-5">
				<div class="row mt-3">
					<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
						<h6 class="fs-5 fw-bold mb-4">
						<img src="{{asset('Logo.svg')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">AtmaHotel
						</h6>
						<p>
							Here you can use rows and columns to organize your footer content. Lorem ipsum
							dolor sit amet, consectetur adipisicing elit.
						</p>
						<div class="">
							<div>
								<a data-mdb-ripple-init class="btn btn-outline btn-floating m-1 rounded-circle shadow " href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
								<a data-mdb-ripple-init class="btn btn-outline btn-floating m-1 rounded-circle shadow " href="#!" role="button"><i class="fab fa-twitter"></i></a>
								<a data-mdb-ripple-init class="btn btn-outline btn-floating m-1 rounded-circle shadow " href="#!" role="button"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
						<h6 class=" fw-bold mb-4 fs-5 ">
							Useful links
						</h6>
						<p>
							<a href="#!" class="text-reset text-decoration-none">Rooms</a>
						</p>
						<p>
							<a href="#!" class="text-reset text-decoration-none">Service</a>
						</p>
						<p>
							<a href="#!" class="text-reset text-decoration-none">About Us</a>
						</p>
						<p>
							<a href="#!" class="text-reset text-decoration-none">Login</a>
						</p>
					</div>
					<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
						<h6 class=" fw-bold mb-4 fs-5 ">Contact</h6>
						<p><i class="fa-solid fa-location-pin me-3"></i>Jl. Babarsari No.43, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
						<p>
							<i class="fas fa-envelope me-3"></i>
							AtmaHotel@gmail.com
						</p>
						<p><i class="fas fa-phone me-3"></i>+62 812-6806-5625</p>
					</div>
				</div>
			</div>
		</section>
		<div class="text-center p-4">
			Copyright ©2024 All right reverved to kelompok 4
		</div>
	</footer>
	<script>
		const navbar = document.getElementById('navbar');

		window.addEventListener('scroll', () => {
			if (window.scrollY > 50) { // Adjust this value based on when you want the color to change
				navbar.classList.add('scrolled');
			} else {
				navbar.classList.remove('scrolled');
			}
		});
	</script>
</body>

</html>