@extends('Userlayout')

@section('title', 'Setting')

@section('contentUser')

<div class="container">
	<div class="col-12">
		<div class="card mb-3 w-100 p-5">
			<form class="mt-2 mx-5">
				<div class="mb-3">
					<label for="formGroupExampleInput" class="form-label fw-bold fs-5 ">Username</label>
					<input type="text" class="form-control p-3 border-info rounded-3 shadow" id="formGroupExampleInput" placeholder="Input Your Username.....">
				</div>
				<div class="mb-3">
					<label for="formGroupExampleInput" class="form-label fw-bold fs-5 ">Phone Number</label>
					<input type="text" class="form-control p-3 border-info rounded-3 shadow" id="formGroupExampleInput" placeholder="Input Your Phone Number.....">
				</div>
				<div class="mb-3">
					<label for="formGroupExampleInput" class="form-label fw-bold fs-5 ">Email</label>
					<input type="Email" class="form-control p-3 border-info rounded-3 shadow" id="formGroupExampleInput" placeholder="Input Your Email.....">
				</div>
				<div class="mb-3">
					<label for="formGroupExampleInput2" class="form-label fw-bold fs-5 ">Password</label>
					<input type="text" class="form-control p-3 border-info rounded-3 shadow" id="formGroupExampleInput2" placeholder="Input Your Password.....">
				</div>
				<div class="mb-3">
					<label for="formFile" class="form-label fw-bold fs-5">Foto</label>
					<input class="form-control p-3 border-info rounded-3 shadow" type="file" id="Foto">
				</div>
				<button type="submit" class="btn btn-info text-white py-2 px-5 mt-4">Save</button>
			</form>

		</div>
	</div>
</div>
@endsection