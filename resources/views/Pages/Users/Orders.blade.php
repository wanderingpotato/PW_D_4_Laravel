@extends('Userlayout')

@section('title', 'Orders')

@section('contentUser')
<div class="container">
	<div class="col-12">
		<div class="card mb-3 w-100 px-5 py-3">
			<div class="d-flex justify-content-between mb-4">
				<div class="d-flex align-items-center">
					<h5 class="card-title h2">Your Orders</h5>
					<div class="dropdown ms-3">
						<button class="btn btn-outline-info text-black dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
							10
						</button>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item " href="#">5</a></li>
							<li><a class="dropdown-item active" href="#">10</a></li>
							<li><a class="dropdown-item" href="#">20</a></li>
						</ul>
					</div>
				</div>
				<a href="">
					<button type="button" class="px-4 text-white py-2 btn btn-info"><i class="fa-solid fa-filter me-3"></i>Filter</button>
				</a>
			</div>
			@foreach($order as $on)
			<div class="card mb-3 w-100">
				<div class="row g-0">
					<div class="col-md-2">
						<img src="{{asset('images/images.jpg')}}" class="img-fluid rounded-start" style="height:20vh;" alt="...">
					</div>
					<div class="col-md-10">
						<div class="card-body w-100 px-5">

							<div class="d-flex justify-content-between">
								<div class="">
									<p class="card-text mb-0"><small class="text-body-secondary">{{$on['tipe']}} -</small> {{$on['Status']}}</p>
									<h5 class="h1 card-title mb-0">{{$on['Tgl']}}</h5>
								</div>
								<p class="card-text text-end"><i class="fa-solid fa-trash"></i></p>
							</div>
							<p class="card-text">IDR {{$on['TotalHarga']}} {{$on['tipe']=='Fasilitas'? '/ Jam' : '/ Malam'}}</p>
							<div class="d-flex flex-wrap" style="width: 50%;">
								@foreach($on['Pilihan'] as $item)
								<p class="card-text mb-0 mt-2 me-4"><i class="fa-solid {{$on['tipe']=='Fasilitas'? 'fa-bell-concierge' : 'fa-door-open'}} me-3"></i>{{$item}}</p>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
			@if (($loop->iteration % 3) == 0)
			@break
			@endif
			@endforeach

			<nav aria-label="Page" class=" mt-5">
				<ul class="pagination  justify-content-end">
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
</div>

@endsection