@extends('AdminLayout')

@section('title', 'Dashboard')

@section('content')
<style>
	.table {
		border-collapse: separate;
		border-spacing: 0 15px;
		margin-bottom: 0;
	}
</style>
<div class="">
	<div class="row ">
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
					<div class="row mt-4 align-items-center">
						<div class="col-md-4">
							<canvas id="DonutUserView"></canvas>
						</div>
						<div class="col-md-8">
							<h5 class="card-title ">Users</h5>
							<h3 class="mb-2 h1 ">{{$Pengguna}}</h3>
							<p class="card-text text-body-secondary ">Since Last Week</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-6">
			<div class="card w-100">
			<div class="card-body p-5">
					<h5 class="card-title">Room And Service Popularity</h5>
					<canvas id="BarRoomService"></canvas>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
<script>
	var colors = ['#1EB7AF', '#BEA690', '#333333'];
	var BarRoomService = document.getElementById("BarRoomService");
	if (BarRoomService) {
		new Chart(BarRoomService, {
			type: 'bar',
			data: {
				labels: ["Kamar 1", "Kamar 1", "Kamar 1", "Kamar 1", "Kamar 1", "Kamar 1", "Kamar 1"],
				datasets: [{
						label: 'Online Perception',
						data: [589, 445, 483, 503, 689, 692, 634],
						backgroundColor: colors[0]
					},
					{
						label: 'Offline Perception',
						data: [639, 465, 493, 478, 589, 632, 674],
						backgroundColor: colors[1],
					}
				]
			},
			options: {
				legend: {
					position: 'bottom',
					padding: 5,
					labels: {
						pointStyle: 'circle',
						usePointStyle: true
					}
				},
				scales: {
					xAxes: [{
						barPercentage: 0.4,
						categoryPercentage: 0.5
					}]
				},
			}
		});
	}
	var donutOptions = {
		cutoutPercentage: 85,
		legend: false
	};

	var DonutUser = {
		labels: ['New', 'Active', 'Inactive'],
		datasets: [{
			backgroundColor: colors.slice(0, 3),
			borderWidth: 0,
			data: [40, 45, 30]
		}]
	};
	var DonutUserView = document.getElementById("DonutUserView");
	if (DonutUserView) {
		new Chart(DonutUserView, {
			type: 'pie',
			data: DonutUser,
			options: donutOptions
		});
	}
</script>
@endsection