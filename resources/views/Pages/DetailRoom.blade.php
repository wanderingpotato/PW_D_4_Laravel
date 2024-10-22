@extends('Layout')

@section('title', 'Detail-Service')

@section('content')


@foreach($Room as $Rooms)
@if($Rooms['Id']==$RoomId)
<div class="">
	<div class="position-relative">
		<img src="{{asset('images/images.jpg')}}" alt="" class=" object-fit-cover d-none d-lg-block img-fluid " style="width: 100%; height: 70vh; filter: brightness(50%)">
		<div class="container position-absolute top-50 start-50 translate-middle text-white text-center">
			<h2 class="display-4 fw-bold">Rooms and Suite</h2>
			<p class="mt-2">The Details Of a Rooms</p>
		</div>
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
				<a href="{{url('Booking')}}">
					<button type="button" class="mt-2 px-5 text-white py-2 btn btn-info">Book Now</button>
				</a>
			</div>
		</div>

		<div class="d-block d-md-none">
			<a href="{{url('Booking')}}">
				<button type="button" class="mt-2 px-5 text-white py-2 btn btn-info">Book Now</button>
			</a>
		</div>
	</div>

	<div class="container" style="margin-top: 10rem;">
		<div class="row align-items-center">
			<div class="d-none d-md-block col-md-6">
				<div class="container-image2  mx-auto">
					<img src="{{asset('images/images.jpg')}}" alt="" class="w-100 h-100 object-fit-cover d-block img-fluid ">
				</div>
			</div>
			<div class="col-12 col-md-6 ps-5">
				<p class="mb-0" style="opacity: 60%;">{{$Rooms['Tipe']}}</p>
				<h2 class="display-4 fw-bold">{{$Rooms['Nama']}}</h2>
				<div class="divider"></div>
				<p class="mt-2 fs-6 fw-bold">IDR {{number_format($Rooms['harga'],0,'','.')}} / Malam</p>
				<p class="mt-2 fs-6">{{$Rooms['Deskripsi']}} </p>
				<p class="mt-2 fs-6">{{$Rooms['Deskripsi']}}</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mt-5">
			<div class="col-3">
				<h2 class="display-5 fw-bold">Addition</h2>
				<ul class="ps-0" style="list-style-type: none; ">
					@foreach($Rooms['Fasilitas'] as $Fasilitas)
					<li class="mt-4"><i class="fa-solid me-3 {{$Fasilitas['namaIcon']}}"></i>{{$Fasilitas['nama']}}</li>
					@endforeach
				</ul>
			</div>
			<div class="col-9">
				<div class="mb-5">
					<h2 class="display-5 fw-bold">Room Overview</h2>
					<p class="mt-2 fs-6">{{$Rooms['Deskripsi']}} {{$Rooms['Deskripsi']}} </p>
					<p class="mt-2 fs-6">{{$Rooms['Deskripsi']}} {{$Rooms['Deskripsi']}} </p>
				</div>
				<div class="mb-5">
					<h2 class="display-5 fw-bold">House Rules</h2>
					<p class="mt-2 fs-6">{{$Rooms['Deskripsi']}} {{$Rooms['Deskripsi']}} </p>
				</div>
				<div class="mt-3">
					<h2 class="display-5 fw-bold">Children And Extra Beds</h2>
					<p class="mt-2 fs-6">{{$Rooms['Deskripsi']}} {{$Rooms['Deskripsi']}} </p>
				</div>
			</div>
		</div>
	</div>
	<div class="d-flex overflow-x-hidden" style="margin-top: 10rem;">
		<img src="{{asset('images/images.jpg')}}" class="card-img-top img-fluid" alt="...">
		<img src="{{asset('images/images.jpg')}}" class="card-img-top img-fluid" alt="...">
		<img src="{{asset('images/images.jpg')}}" class="card-img-top img-fluid" alt="...">
		<img src="{{asset('images/images.jpg')}}" class="card-img-top img-fluid" alt="...">
		<img src="{{asset('images/images.jpg')}}" class="card-img-top img-fluid" alt="...">
	</div>
</div>
@endif
@endforeach
@endsection