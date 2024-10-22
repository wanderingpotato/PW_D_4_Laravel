<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AtmaHotel- Dashboard - @yield('title')</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" crossorigin="anonymous">
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
<body style="height:100vh;" class="overflow-x-hidden">
	<nav id="navbar" class="d-md-block d-none navbar navbar-expand-lg bg-white shadow  py-3 fixed-top z-1">
		<div class="container-fluid gx-5 px-5">
			<a class="navbar-brand mb-0 h1 col-5" href="#">
				<img src="{{asset('Logo.svg')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
				AtmaHotel
			</a>
			<div class="row col-5 justify-content-end" id="navbarText">
				<div class="col-9">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				</div>
				<div class="col-3">
					<button type="button" class="btn btn-info text-white px-4 py-2" data-bs-toggle="modal" data-bs-target="#modalInsert">Input Data</button>
				</div>
			</div>
		</div>
	</nav>
	<div class="row vh-100 align-items-center">
		<div class="col-2">
			<header class="h-100 fixed-top z-0 ">
				<div class="d-flex flex-column flex-shrink-0 p-3 text-black h-100 bg-white shadow" style="width: 280px;">
					<ul class="nav nav-pills flex-column mb-auto" style="margin-top: 5rem;">
						<li class="nav-item">
							<a href="{{url('/Dashboard')}}" class="nav-link  shadow mt-3  border {{ (request()->is('Dashboard')) ? 'active border-white' : '  border-info text-black' }}" aria-current="page">
							<i class="fa-solid fa-house me-3"></i>Dashboard
							</a>
						</li>
						<li>
							<a href="{{url('/User')}}" class="nav-link shadow mt-3  border {{ (request()->is('User'))? 'active border-white' : '  border-info text-black'}}">
							<i class="fa-solid fa-user me-3"></i>User
							</a>
						</li>
						<li>
							<a href="{{url('/Pemesanan')}}" class="nav-link shadow mt-3  border {{ (request()->is('Pemesanan'))? 'active border-white' : '  border-info text-black'}}">
							<i class="fa-solid fa-note-sticky me-3"></i>Pemesanan
							</a>
						</li>
						<li>
							<a href="{{url('/BookingDashboard')}}" class="nav-link shadow mt-3  border {{ (request()->is('Booking'))? 'active border-white' : '  border-info text-black'}}">
							<i class="fa-solid fa-money-bill me-3"></i>Booking
							</a>
						</li>
						<li>
							<a href="{{url('/Kamar')}}" class="nav-link shadow mt-3  border {{ (request()->is('Kamar'))? 'active border-white' : '  border-info text-black'}}">
							<i class="fa-solid fa-door-open me-3"></i>Kamar
							</a>
						</li>
						<li>
							<a href="{{url('/JenisKamar')}}" class="nav-link shadow mt-3  border {{ (request()->is('JenisKamar'))? 'active border-white' : '  border-info text-black'}}">
							<i class="fa-solid fa-door-closed me-3"></i>Jenis Kamar
							</a>
						</li>
						<li>
							<a href="{{url('/ServiceDashboard')}}" class="nav-link shadow mt-3  border {{ (request()->is('Service'))? 'active border-white' : '  border-info text-black'}}">
							<i class="fa-solid fa-bell-concierge me-3"></i>Service
							</a>
						</li>
						<li>
							<a href="{{url('/Fasilitas')}}" class="nav-link shadow mt-3  border {{ (request()->is('Fasilitas'))? 'active border-white' : '  border-info text-black'}}">
							<i class="fa-solid fa-layer-group me-3"></i>Fasilitas
							</a>
						</li>
						<li>
							<a href="{{url('/Gallery')}}" class="nav-link shadow mt-3  border {{ (request()->is('Gallery'))? 'active border-white' : '  border-info text-black'}}">
							<i class="fa-regular fa-image me-3"></i>Gallery
							</a>
						</li>
					</ul>
					<hr>
					<div class="d-flex justify-content-between">
						<div class="">
							<img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
							<strong>mdo</strong>
						</div>

						<a class=" text-end text-black" href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
					</div>
				</div>
			</header>
		</div>
		<div class="col-10 ">
			<div class="container-fluid ">
				@yield('content')
			</div>
		</div>
	</div>


	<footer class="text-center text-lg-start bg-body-tertiary text-muted fixed-bottom" style="z-index: -1;">
		<div class="text-center p-4">
			Copyright ©2024 All right reverved to kelompok 4
		</div>
	</footer>
</body>

</html>