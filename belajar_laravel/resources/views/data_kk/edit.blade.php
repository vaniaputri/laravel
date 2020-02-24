@extends('layouts.master')
@section('content')
<div class="container">
<div class="row" style="margin:30px 0px 30px 0px;">
	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
		{{session('sukses')}}
	</div>
	@endif
		<div class="col-lg-12">
			<h1>Edit Data Kartu Keluarga</h1>
			<form action="/data_kk/{{$data_kk->id}}/update" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label for="nama_kepala_keluarga">Nama Kepala Keluarga</label>
							<input type="nama_kepala_keluarga" class="form-control" id="nama_kepala_keluarga" name="nama_kepala_keluarga" placeholder="Nama Kepala Keluarga" value="{{$data_kk->nama_kepala_keluarga}}">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<input type="alamat" class="form-control" id="alamat" name="alamat"placeholder="Alamat" value="{{$data_kk->alamat}}">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label for="rt_rw">RT/RW</label>
							<input type="rt_rw" class="form-control" id="rt_rw" name="rt_rw" placeholder="RT/RW" value="{{$data_kk->rt_rw}}">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="desa_kelurahan">Desa/Kelurahan</label>
							<input type="desa_kelurahan" class="form-control" id="desa_kelurahan" name="desa_kelurahan" placeholder="Desa/Kelurahan" value="{{$data_kk->desa_kelurahan}}">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label for="kecamatan">Kecamatan</label>
							<input type="kecamatan" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" value="{{$data_kk->kecamatan}}">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="kabupaten_kota">Kabupaten/Kota</label>
							<input type="kabupaten_kota" class="form-control" id="kabupaten_kota" name="kabupaten_kota" placeholder="Kabupaten/Kota" value="{{$data_kk->kabupaten_kota}}">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label for="kode_pos">Kode Pos</label>
							<input type="kode_pos" class="form-control" id="kode_pos" name="kode_pos" placeholder="Kode Pos" value="{{$data_kk->kode_pos}}">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="provinsi">Provinsi</label>
							<input type="provinsi" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" value="{{$data_kk->provinsi}}">
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
			</form>	
		</div>
	</div>
</div>
@endsection


