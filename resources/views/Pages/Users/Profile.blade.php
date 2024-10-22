@extends('Userlayout')

@section('title', 'Profile')

@section('contentUser')
<style>
	.table {
		border-collapse: separate;
		border-spacing: 0 15px;
		margin-bottom: 0;
	}
</style>
<div class="container">
	<div class="col-12">
		<div class="card mb-3 w-100 px-5 py-3">
			<div class="row g-0 align-items-center">
				<div class="col-md-2">
					<img src="{{asset('images/c320f3ab-f77e-418d-bc07-93a0205ea67b.jpg')}}" class="img-fluid rounded-circle object-fit-cover" style="height:10rem; width:10rem;">
				</div>
				<div class="col-md-10">
					<div class="card-body">
						<div class="d-flex justify-content-between">
							<h5 class="card-title h1">{{$username}}</h5>
							<a href="{{url('Edit')}}" class=" text-center btn btn-info text-white px-4 py-2" ><i class="fa-solid fa-pen-to-square me-2"></i>Edit</a>	
						</div>
						<div class="d-flex flex-wrap" style="width: 25rem;">
							<p class="card-text mb-0 mt-2 me-4"><i class="fa-solid fa-envelope me-3"></i>{{$email}}</p>
							<p class="card-text mb-0 mt-2 me-4"><i class="fa-solid fa-lock me-2"></i>{{$Password}}</p>
							<p class="card-text mb-0 mt-2 me-4"><i class="fa-solid fa-phone me-2"></i>{{$NoTelp}}</p>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-12 border border-danger rounded px-4 py-3 mt-4">
				<p><i class="fa-solid fa-circle-exclamation me-3 mt-3"></i>Jl. Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec Norem ipsum dolor sit amet</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-3">
			<div class="card w-100 rounded-4">
				<div class="card-body p-5">
					<div class="d-flex justify-content-between">
						<h5 class="card-title">Booked Rooms</h5>
						<h5 class="card-title"><i class="fa-solid fa-door-open"></i></h5>
					</div>
					<h3 class="mb-2 h1  mt-3">{{$Booking}}</h3>
					<p class="card-text text-body-secondary mt-3">Lorem Ipsum Dor adawa</p>
				</div>
			</div>
		</div>
		<div class="col-3">
			<div class="card w-100 rounded-4">
				<div class="card-body p-5">
					<div class="d-flex justify-content-between">
						<h5 class="card-title">Reserved Service</h5>
						<h5 class="card-title"><i class="fa-solid fa-bell-concierge"></i></h5>
					</div>
					<h3 class="mb-2 h1  mt-3">{{$Reservation}}</h3>
					<p class="card-text text-body-secondary mt-3">Lorem Ipsum Dor adawa</p>
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="card w-100">
				<div class="card-body p-5">
					<div class="d-flex justify-content-between">
						<h5 class="card-title">On Going Orders</h5>
						<h5 class="card-title"><i class="fa-solid fa-arrows-rotate"></i></h5>
					</div>
					<table class=" table w-100">
						<thead>
							<tr>
								<th scope="col">User</th>
								<th scope="col">Tipe</th>
								<th scope="col">Date</th>
								<th scope="col">Status</th>
								<th scope="col">Total Harga</th>
							</tr>
						</thead>
						<tbody class="table-group-divider">
							@foreach($OnGoing as $on)
							<tr class="mt-5 shadow">
								<td>{{$on['user']}}</td>
								<td>{{$on['tipe']}}</td>
								<td>{{$on['date']}}</td>
								<td>{{$on['status']}}</td>
								<td>{{$on['totalharga']}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection