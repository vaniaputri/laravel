@extends('layouts.master')
@section('content')
<div class="row"  style="margin:30px 0px 30px 0px;">
	<div class="col-6">
		<h1>Data Kartu Keluarga</h1>
	</div>
	<div class="col-6" >
		<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" style="margin-left:100px">
			Tambah Data
		</button>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data KK</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="/data_kk/create" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label for="nama_kepala_keluarga">Nama Kepala Keluarga</label>
							<input type="nama_kepala_keluarga" class="form-control" id="nama_kepala_keluarga" name="nama_kepala_keluarga" placeholder="Nama Kepala Keluarga">
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<input type="alamat" class="form-control" id="alamat" name="alamat"placeholder="Alamat">
						</div>
						<div class="form-group">
							<label for="rt_rw">RT/RW</label>
							<input type="rt_rw" class="form-control" id="rt_rw" name="rt_rw" placeholder="RT/RW">
						</div>
						<div class="form-group">
							<label for="desa_kelurahan">Desa/Kelurahan</label>
							<input type="desa_kelurahan" class="form-control" id="desa_kelurahan" name="desa_kelurahan" placeholder="Desa/Kelurahan">
						</div>
						<div class="form-group">
							<label for="kecamatan">Kecamatan</label>
							<input type="kecamatan" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan">
						</div>
						<div class="form-group">
							<label for="kabupaten_kota">Kabupaten/Kota</label>
							<input type="kabupaten_kota" class="form-control" id="kabupaten_kota" name="kabupaten_kota" placeholder="Kabupaten/Kota">
						</div>
						<div class="form-group">
							<label for="kode_pos">Kode Pos</label>
							<input type="kode_pos" class="form-control" id="kode_pos" name="kode_pos" placeholder="Kode Pos">
						</div>
						<div class="form-group">
							<label for="provinsi">Provinsi</label>
							<input type="provinsi" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
		{{session('sukses')}}
	</div>
	@endif
	<div style="margin:30px 0px 30px 0px;">
		<table class="table table-hover">
			<tr>
				<th>No</th>
				<th>Nama Kepala Keluarga</th>
				<th>Alamat</th>
				<th>RT/RW</th>
				<th>Desa/ Kelurahan</th>
				<th>Kecamatan</th>
				<th>Kabupaten/ Kota</th>
				<th>Kode Pos</th>
				<th>Provinsi</th>
				<th>Edit</th>
				<th>Delete</th>
				<th>Add Detail</th>
				<th>View Detail</th>
			</tr>
			@foreach($data_all_kk as $kk)
			<tr>
				<td>{{$kk->id}}</td>
				<td>{{$kk->nama_kepala_keluarga}}</td>
				<td>{{$kk->alamat}}</td>
				<td>{{$kk->rt_rw}}</td>
				<td>{{$kk->desa_kelurahan}}</td>
				<td>{{$kk->kecamatan}}</td>
				<td>{{$kk->kabupaten_kota}}</td>
				<td>{{$kk->kode_pos}}</td>
				<td>{{$kk->provinsi}}</td>
				<td><a href="/data_kk/{{$kk->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
				<td><a href="/data_kk/{{$kk->id}}/delete" class="btn btn-danger btn-sm">Delete</a></td>
				<td><a href="/data_kk/{{$kk->id}}/insert" class="btn btn-primary btn-sm">Add Detail</a></td>
				<td><a href="/data_kk/{{$kk->id}}/detail_kk" class="btn btn btn-success btn-sm">View Detail</a></td>
			</tr>
			@endforeach
		</table>
	</div>
</div>
@endsection
