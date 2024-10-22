@extends('AdminLayout')

@section('title', 'Fasilitas')

@section('content')

<div class="">
	<div class="container-fluid">

		<div class="card" style="height:80vh;">
			<div class="card-body p-4">
				<div class="d-flex justify-content-between">
					<div class="d-flex align-items-center">
						<h5 class="card-title h2">Fasilitas</h5>
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
							<th scope="col">nama</th>
							<th scope="col">nama icon</th>
							<th scope="col">deskripsi</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody class="table-group-divider">
						@foreach($Fasilitas as $on)
						<tr class="mt-5 shadow">
							<td>{{$on['id']}}</td>
							<td>{{$on['nama']}}</td>
							<td>{{$on['namaicon']}}</td>
							<td>
								<div class="dropdown-center">
									<a class="btn dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										{{mb_strimwidth($on['Deskripsi'], 0, 10, "...");}}
									</a>
									<ul class="dropdown-menu">
										<div class="d-flex flex-wrap">
											<li class="px-2">{{$on['Deskripsi']}},</li>
										</div>
									</ul>
								</div>
							</td>
							
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
						<input type="hidden" class="form-control" id="id" value="12">
						<div class="mb-3">
							<label for="Username" class="form-label">Nama</label>
							<input type="text" class="form-control" id="Nama" placeholder="input Nama">
						</div>
						<div class="mb-3">
							<label for="icon" class="form-label">Nama Icon</label>
							<input type="text" class="form-control" id="icon" placeholder="input Nama Icon">
						</div>
						<div class="mb-3">
							<div class="form-floating">
								<textarea class="form-control" placeholder="Leave a Deskripsi" id="Deskripsi"></textarea>
								<label for="Deskripsi">Deskripsi</label>
							</div>
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
						<input type="hidden" class="form-control" id="id" value="12">
						<div class="mb-3">
							<label for="Nama" class="form-label">Nama</label>
							<input type="text" class="form-control" id="Nama" placeholder="input Nama">
						</div>
						<div class="mb-3">
							<label for="icon" class="form-label">Nama Icon</label>
							<input type="text" class="form-control" id="icon" placeholder="input Nama Icon">
						</div>
						<div class="mb-3">
							<div class="form-floating">
								<textarea class="form-control" placeholder="Leave a Deskripsi" id="Deskripsi"></textarea>
								<label for="Deskripsi">Deskripsi</label>
							</div>
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