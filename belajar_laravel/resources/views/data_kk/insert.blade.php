@extends('layouts.master')
@section('content')
<div class="row" style="margin:30px 0px 30px 0px;">
	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
		{{session('sukses')}}
	</div>
	@endif
	<div class="container">
		<h1>Insert Data Detail Kartu Keluarga</h1>
		<form action="/data_kk/{{$data_kk->id}}/insert_detail" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<!--Data KK-->
			<div class="alert alert-danger" role="alert">
				<h4 class="font-weight-bold">Data Kartu Keluarga</h4>
				<div class="row">
					<div class="col-6">
						<p class="font-weight-bold">Nama Kepala Keluarga: {{$data_kk->nama_kepala_keluarga}}</p>
					</div>
					<div class="col-6">
						<p class="font-weight-bold">Alamat:  {{$data_kk->alamat}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<p class="font-weight-bold">RT/RW: {{$data_kk->rt_rw}}</p>
					</div>
					<div class="col-6">
						<p class="font-weight-bold">Desa/Kelurahan: {{$data_kk->desa_kelurahan}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<p class="font-weight-bold">Kecamatan: {{$data_kk->kecamatan}}</p>
					</div>
					<div class="col-6">
						<p class="font-weight-bold">Kabupaten/Kota: {{$data_kk->kabupaten_kota}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<p class="font-weight-bold">Kode Pos: {{$data_kk->kode_pos}}</p>
					</div>
					<div class="col-6">
						<p class="font-weight-bold">Provinsi: {{$data_kk->provinsi}}</p>
					</div>
				</div>
			</div>
			<!--1-->
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label for="data_kk_id">ID KK</label>
						<input type="data_kk_id" class="form-control" id="data_kk_id" name="data_kk_id" placeholder="id_kk" value="{{$data_kk->id}}">
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="nomor">No</label>
						<input type="nomor" class="form-control" id="nomor" name="nomor" placeholder="No">
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="nama_lengkap">Nama Lengkap</label>
						<input type="nama_lengkap" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
					</div>
				</div>

			</div>
			<!--2-->
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label for="nik">NIK</label>
						<input type="nik" class="form-control" id="nik" name="nik" placeholder="NIK">
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="jenis_kel">Jenis Kelamin</label>
						<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
							<option>Laki-laki</option>
							<option>Perempuan</option>
						</select>
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="tempat_lahir">Tempat Lahir</label>
						<input type="tempat_lahir" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
					</div>
				</div>
				
			</div>
			<!--3-->
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label for="tgl_lahir">Tanggal Lahir</label>
						<input placeholder="Tanggal Lahir" type="text" id="datepicker" class="form-control datepicker" name="datepicker">
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="agama">Agama</label>
						<select class="form-control" id="agama" name="agama">
							<option>Kristen</option>
							<option>Katolik</option>
							<option>Islam</option>
							<option>Budha</option>
							<option>Hindu</option>
							<option>Konghucu</option>
						</select>
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="pendidikan">Pendidikan</label>
						<select class="form-control" id="pendidikan" name="pendidikan">
							<option>SD</option>
							<option>SMP</option>
							<option>SMA</option>
							<option>Strata 1</option>
							<option>Strata 2</option>
							<option>Strata 3</option>
						</select>
					</div>
				</div>
				
			</div>

			<!--4-->
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label for="jenis_pekerjaan">Jenis Pekerjaan</label>
						<input type="jenis_pekerjaan" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan" placeholder="Jenis Pekerjaan">
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="status_pernikahan">Status Pernikahan</label>
						<select class="form-control" id="status_pernikahan" name="status_pernikahan">
							<option>Menikah</option>
							<option>Tidak Menikah</option>
							<option>Duda</option>
							<option>Janda</option>
						</select>
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="status_dlm_keluarga">Status Hubungan Dalam Keluarga</label>
						<input type="status_dlm_keluarga" class="form-control" id="status_dlm_keluarga" name="status_dlm_keluarga" placeholder="Status Hubungan Dalam Keluarga">
					</div>
				</div>
				
			</div>
			<!--5-->
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label for="kewarganegaraan">Kewarganegaraan</label>
						<input type="kewarganegaraan" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Kewarganegaraan">
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="paspor">Dokumen Imigrasi(No Paspor)</label>
						<input type="paspor" class="form-control" id="paspor" name="paspor" placeholder="No Paspor">
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="kitas">Dokumen Imigrasi(No KITAS/KITAP)</label>
						<input type="kitas" class="form-control" id="kitas" name="kitas" placeholder="No KITAS">
					</div>
				</div>
				
			</div>
			<!--6-->
			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<label for="nama_ayah">Nama Ayah</label>
						<input type="nama_ayah" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah">
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="nama_ibu">Nama Ibu</label>
						<input type="nama_ibu" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu">
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary" id="insert">Add Detail Data</button>	
		</div>
	</div>
</form>
</div>
</div>
@endsection
