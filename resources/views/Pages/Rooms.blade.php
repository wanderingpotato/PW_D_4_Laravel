@extends('Layout')

@section('title', 'Room')

@section('content')
<div class="">
	<div class="position-relative">
		<img src="{{asset('images/images.jpg')}}" alt="" class=" object-fit-cover d-none d-lg-block img-fluid " style="width: 100%; height: 70vh; filter: brightness(50%)">
		<div class="container position-absolute top-50 start-50 translate-middle text-white text-center">
			<h2 class="display-4 fw-bold">Rooms and Suite</h2>
			<p class="mt-2">Find your most liked room.</p>
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
	<div class="container mb-5 text-center" style="margin-top:10rem;">
		<h2 class="display-6 fw-semibold mb-3">AtmaHotel’s Room and Suite</h2>
		<div class="divider mx-auto"></div>
		<p class="mt-3 fs-6 w-50 mx-auto">Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus,</p>
	</div>
	<div class="container mb-5">
		<div class="row">
			@foreach ($Room as $Rooms)
			<div class="col-md-4 mb-3">
				<div class="card shadow rounded-5">
					<img src="{{asset('images/images.jpg')}}" class="card-img-top img-fluid" alt="...">
					<div class="card-body px-4">
						<div class="row mb-3">
							<div class="col-6">
								<p class="card-text">{{$Rooms["Tipe"]}}</p>
							</div>
							<div class="col-6">
								<p class="card-text text-end"><i class="fa-solid fa-user me-2"></i>{{$Rooms["Kapasitas"]}} Adult</p>
							</div>
						</div>
						<h5 class="card-title">{{$Rooms['Nama']}}</h5>
						<p class="card-text">{{$Rooms['Fasilitas'][0]['nama']}}</p>
					</div>
					<div class="card-footer px-4 bg-white">
						<small class="">IDR {{number_format($Rooms['harga'],0,'','.')}} / Malam</small>
					</div>
					<a href="{{route('DetailRooms',['RoomId'=>$Rooms['Id']])}}" class=" stretched-link"></a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div class="d-flex mt-5 overflow-x-hidden">
		<img src="{{asset('images/images.jpg')}}" class="card-img-top img-fluid" alt="...">
		<img src="{{asset('images/images.jpg')}}" class="card-img-top img-fluid" alt="...">
		<img src="{{asset('images/images.jpg')}}" class="card-img-top img-fluid" alt="...">
		<img src="{{asset('images/images.jpg')}}" class="card-img-top img-fluid" alt="...">
		<img src="{{asset('images/images.jpg')}}" class="card-img-top img-fluid" alt="...">
	</div>
</div>
@endsection