@extends('Layout')

@section('title', 'Detail-Service')

@section('content')
<div class="">
	<div class="position-relative">
		<img src="{{asset('images/images.jpg')}}" alt="" class=" object-fit-cover d-none d-lg-block img-fluid " style="width: 100%; height: 55vh; filter: brightness(50%)">
		<div class="d-none d-md-flex  container mx-auto bg-white position-absolute z-3 rounded row g-3 align-items-center justify-content-center px-5 shadow" style="   position: absolute; right: 0;bottom: -5rem; height:10rem ;left: 0; ">
			<div class="col-md-5 mt-0">
				<label for="inputEmail4" class="form-label">Select Date</label>
				<input type="date" class="form-control" id="inputEmail4">
			</div>
			<div class="col-md-5 mt-0">
				<label for="inputPassword4" class="form-label">Number of room</label>
				<input type="Text" class="form-control" id="inputPassword4">
			</div>
			<div class="col-md-2 mt-0">
				<button type="button" class="mt-2 px-5 text-white py-2 btn btn-info">Book Now</button>
			</div>
		</div>

		<div class="d-block d-md-none">
			<button type="button" class="mt-2 px-5 text-white py-2 btn btn-info">Book Now</button>
		</div>
	</div>
	<div class="container mb-5 text-center" style="margin-top:10rem;">
		<h2 class="display-6 fw-semibold mb-3">Pick Your Rooms</h2>
		<div class="divider mx-auto"></div>
		<p class="mt-3 fs-6 w-50 mx-auto">Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus,</p>
	</div>
	<div class="container" style="margin-bottom: 5rem;">
		<div class="row">
			<div class="col-9">
				<div class="row align-items-center justify-content-center mx-auto">
					<div class="col-md-9 mt-0">
						<input type="text" class="form-control" id="text" placeholder="Search">
					</div>
					<div class="col-md-3 mt-0">
						<a href="">
							<button type="button" class="px-5 text-white py-2 btn btn-info"><i class="fa-solid fa-filter me-3"></i>Filter</button>
						</a>
					</div>
				</div>
				<div class="mt-5">
					@foreach ($Room as $Rooms)
					<div class="card mb-3 w-100">
						<div class="row g-0 align-items-center">
							<div class="col-md-4">
								<div class="" style="height:40vh; width: 100%;">
									<img src="{{asset('images/alev-takil-lw3Lqe2K7xc-unsplash.jpg')}}" class="object-fit-cover img-fluid w-100 h-100 rounded-start" alt="...">
								</div>
							</div>
							<div class="col-md-8">
								<div class="card-body px-5">
									<div class="d-flex align-items-center justify-content-between">
										<p class=" mb-0">{{$Rooms['Tipe']}}</p>
										<p class=" mb-0"><i class="fa-solid fa-user me-3"></i>{{$Rooms['Kapasitas']}} Adult</p>
									</div>
									<h5 class="card-title h2 mb-3 mt-0">{{$Rooms['Nama']}}</h5>
									<div class="d-flex align-items-center justify-content-between">
										<p>IDR {{number_format($Rooms['harga'],0,'','.')}}/Malam</p>
										<p>{{$Rooms['Fasilitas'][0]['nama']}}</p>
									</div>
									<p class="card-text " style="font-size: 0.8rem;">{{$Rooms['Deskripsi']}}</p>
									<div class="row align-items-end">
										<div class="col-8">
											<p class="card-text mt-4"><small class="text-body-secondary  d-flex flex-wrap">
													<ul class="ps-0" style="list-style-type: none; ">
														@foreach($Rooms['Fasilitas'] as $fasilitas)
														@if ($loop->iteration != 1)
														<li class="mt-2 me-4"><i class="fa-solid {{$fasilitas['namaIcon']}} me-3"></i>{{$fasilitas['nama']}}</li>
														@endif
														@endforeach
													</ul>
												</small>
											</p>
										</div>
										<div class="col-4">
											<a href="#" class="btn btn-info text-white fw-medium float-end px-5 py-2">Select</a>
										</div>
									</div>


								</div>
							</div>
						</div>
					</div>
					@if (($loop->iteration % 5) == 0)
					@break
					@endif
					@endforeach
					<nav aria-label="Page" class=" mt-5">
						<ul class="pagination  justify-content-center">
							<li class="page-item rounded shadow me-3 border-0">
								<a class="page-link rounded text-black fw-bold border-0" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								</a>
							</li>
							<li class="page-item rounded shadow me-3 border-0 active"><a class="page-link rounded text-black fw-bold border-0" href="#">1</a></li>
							<li class="page-item rounded shadow me-3 border-0"><a class="page-link rounded text-black fw-bold border-0" href="#">2</a></li>
							<li class="page-item rounded shadow me-3 border-0"><a class="page-link rounded text-black fw-bold border-0" href="#">3</a></li>
							<li class="page-item rounded shadow me-3 border-0"><a class="page-link rounded text-black fw-bold border-0" href="#"><i class="fa-solid fa-ellipsis"></i></a></li>
							<li class="page-item rounded shadow me-3 border-0">
								<a class="page-link rounded text-black fw-bold border-0" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="col-3">
				<div class="card fixed-bottom sticky-md-top w-100" style=" top: 5rem;">
					<div class="card-body px-4 py-5">
						<h5 class="card-title">IDR 1.105.000 Total</h5>
						<div class="d-flex justify-content-between border-bottom ">
							<h6 class="card-subtitle  text-body-secondary pb-2">2 Kamar</h6>
							<h6 class="card-subtitle  text-body-secondary pb-2">1 Night</h6>
						</div>
						<div class="border-bottom mt-3">
							<div class="row">
								<div class="col-10">
									<p class="card-text">Luxury Room - Ruang Kamar Mukti Laksono </p>
								</div>
								<div class="col-2">
									<p class="card-text text-end"><i class="fa-solid fa-trash"></i></p>
								</div>
							</div>
							<div class="row  mt-4 ">
								<div class="col-6">
									<p class=" text-body-secondary y fw-light">1 Night</p>
								</div>
								<div class="col-6">
									<p class="  text-body-secondary fw-light text-end">IDR 500.000</p>
								</div>
							</div>
						</div>
						<div class="border-bottom mt-3">
							<div class="row">
								<div class="col-10">
									<p class="card-text">Luxury Room - Ruang Kamar Mukti Laksono </p>
								</div>
								<div class="col-2">
									<p class="card-text text-end"><i class="fa-solid fa-trash"></i></p>
								</div>
							</div>
							<div class="row  mt-4 ">
								<div class="col-6">
									<p class=" text-body-secondary y fw-light">1 Night</p>
								</div>
								<div class="col-6">
									<p class="  text-body-secondary fw-light text-end">IDR 500.000</p>
								</div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-5">
								<p class="fw-bold mb-0">Total</p>
								<p class="mt-0 pb-2">2 Kamar</p>
							</div>
							<div class="col-7">
								<h5 class="fs-5 fw-bold text-end">IDR 1.105.000</h5>
							</div>
						</div>
						<div class=" text-center mb-4">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
								<label class="form-check-label" for="inlineRadio1">Credit/Debit</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								<label class="form-check-label" for="inlineRadio2">E-Wallet</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
								<label class="form-check-label" for="inlineRadio3">Cash</label>
							</div>
						</div>
						<a href="#" class="card-link w-100 btn btn-info text-white">Reserve</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection