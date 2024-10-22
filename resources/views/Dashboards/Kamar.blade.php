@extends('AdminLayout')

@section('title', 'Kamar')

@section('content')
<style>
	.table {
		border-collapse: separate;
		border-spacing: 0 15px;
		margin-bottom: 0;
	}
</style>
<div class="">
	<div class="container-fluid">

		<div class="card" style="height:80vh;">
			<div class="card-body p-4">
				<div class="d-flex justify-content-between">
					<div class="d-flex align-items-center">
						<h5 class="card-title h2">Kamar</h5>
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

				<table class=" table w-100 text-center">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Lantai</th>
							<th scope="col">Status</th>
							<th scope="col">Jenis</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody class="table-group-divider">
						@foreach($Kamar as $on)
						<tr class="mt-5 shadow">
							<td>{{$on['id']}}</td>
							<td>{{$on['Lantai']}}</td>
							<td>{{$on['Status']}}</td>
							<td>{{$on['IdJenis']}}</td>
							<td>
								<div class="dropdown">
									<a class="btn dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="fa-solid fa-ellipsis-vertical"></i>
									</a>

									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#modalUpdate" data-bs-toggle="modal" data-bs-target="#modalUpdate">Update</a></li>
										<li><a class="dropdown-item text-danger" href="#modalDelete" data-bs-toggle="modal" data-bs-target="#modalDelete">Delete</a></li>
									</ul>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
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


	<!-- Modal insertq -->
	<div class="modal fade" id="modalInsert" tabindex="-1" aria-labelledby="modalInsertLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="modalInsertLabel">Insert Data</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="">
					<div class="modal-body">
						<div class="mb-3">
							<select class="form-select" aria-label="Kamar">
								<option selected hidden>Select Kamar</option>
								<option value="1">12</option>
								<option value="2">41</option>
								<option value="3">51</option>
							</select>
						</div>
						<div class="mb-3">
							<select class="form-select" aria-label="Kamar">
								<option selected hidden>Select Status</option>
								<option value="1">Booked</option>
								<option value="2">Free</option>
								<option value="3">Maintenence</option>
							</select>
						</div>
						<div class="mb-3">
							<label for="ID" class="form-label">No Kamar / ID</label>
							<input type="text" class="form-control" id="ID" placeholder="input ID">
						</div>
						<div class="mb-3">
							<label for="text" class="form-label">Lantai</label>
							<input type="text" class="form-control" id="Lantai" placeholder="input Lantai">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-info text-white">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Modal Update -->
	<div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="modalUpdateLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="modalUpdateLabel">Update Data</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="">
				<div class="modal-body">
						<div class="mb-3">
							<select class="form-select" aria-label="Kamar">
								<option selected hidden>Select Kamar</option>
								<option value="1">12</option>
								<option value="2">41</option>
								<option value="3">51</option>
							</select>
						</div>
						<div class="mb-3">
							<select class="form-select" aria-label="Kamar">
								<option selected hidden>Select Status</option>
								<option value="1">Booked</option>
								<option value="2">Free</option>
								<option value="3">Maintenence</option>
							</select>
						</div>
						<div class="mb-3">
							<label for="ID" class="form-label">No Kamar / ID</label>
							<input type="text" class="form-control" id="ID" placeholder="input ID">
						</div>
						<div class="mb-3">
							<label for="text" class="form-label">Lantai</label>
							<input type="text" class="form-control" id="Lantai" placeholder="input Lantai">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-info text-white">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Delete -->
	<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="modalDeleteLabel">Update Data</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="">
					<div class="modal-body">
						<input type="hidden" class="form-control" id="id" value="12">
						<h6>Apakah Anda Yakin Ingin Menghapus ID 12?</h6>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
						<button type="submit" class="btn btn-info text-white">Ya</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection