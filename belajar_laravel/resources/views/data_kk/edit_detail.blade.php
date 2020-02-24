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
		<form action="/data_kk/{{$data_detail_kk->id}}/update_detail" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<!--1-->
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label for="data_kk_id">ID KK</label>
						<input type="data_kk_id" class="form-control" id="data_kk_id" name="data_kk_id" placeholder="id_kk" value="{{$data_detail_kk->data_kk_id}}">
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="nomor">No</label>
						<input type="nomor" class="form-control" id="nomor" name="nomor" placeholder="No" value="{{$data_detail_kk->nomor}}">
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="nama_lengkap">Nama Lengkap</label>
						<input type="nama_lengkap" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="{{$data_detail_kk->nama_lengkap}}">
					</div>
				</div>

			</div>
			<!--2-->
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label for="nik">NIK</label>
						<input type="nik" class="form-control" id="nik" name="nik" placeholder="NIK" value="{{$data_detail_kk->nik}}">
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="jenis_kel">Jenis Kelamin</label>
						<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
							<option value="Laki-laki" @if($data_detail_kk->jenis_kelamin=='Laki-laki') selected @endif>Laki-laki</option>
							<option value="Perempuan" @if($data_detail_kk->jenis_kelamin=='Perempuan') selected @endif>Perempuan</option>
						</select>
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="tempat_lahir">Tempat Lahir</label>
						<input type="tempat_lahir" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="{{$data_detail_kk->tempat_lahir}}">
					</div>
				</div>
				
			</div>
			<!--3-->
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label for="tgl_lahir">Tanggal Lahir</label>
						<input placeholder="Tanggal Lahir" type="text" id="datepicker" class="form-control datepicker" name="datepicker" value="{{$data_detail_kk->datepicker}}">
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="agama">Agama</label>
						<select class="form-control" id="agama" name="agama">
							<option value="Kristen" @if($data_detail_kk->agama=='Kristen') selected @endif>Kristen</option>
							<option value="Katolik" @if($data_detail_kk->agama=='Katolik') selected @endif>Katolik</option>
							<option value="Islam" @if($data_detail_kk->agama=='Islam') selected @endif>Islam</option>
							<option value="Budha" @if($data_detail_kk->agama=='Budha') selected @endif>Budha</option>
							<option value="Hindu" @if($data_detail_kk->agama=='Hindu') selected @endif>Hindu</option>
							<option value="Konghucu" @if($data_detail_kk->agama=='Konghucu') selected @endif>Konghucu</option>
						</select>
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="pendidikan">Pendidikan</label>
						<select class="form-control" id="pendidikan" name="pendidikan">
							<option value="SD" @if($data_detail_kk->pendidikan=='SD') selected @endif>SD</option>
							<option value="SMP" @if($data_detail_kk->pendidikan=='SMP') selected @endif>SMP</option>
							<option value="SMA" @if($data_detail_kk->pendidikan=='SMA') selected @endif>SMA</option>
							<option value="Strata 1" @if($data_detail_kk->pendidikan=='Strata 1') selected @endif>Strata 1</option>
							<option value="Strata 2" @if($data_detail_kk->pendidikan=='Strata 2') selected @endif>Strata 2</option>
							<option value="Strata 3" @if($data_detail_kk->pendidikan=='Strata 3') selected @endif>Strata 3</option>
						</select>
					</div>
				</div>
				
			</div>

			<!--4-->
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label for="jenis_pekerjaan">Jenis Pekerjaan</label>
						<input type="jenis_pekerjaan" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan" placeholder="Jenis Pekerjaan" value="{{$data_detail_kk->jenis_pekerjaan}}">
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="status_pernikahan">Status Pernikahan</label>
						<select class="form-control" id="status_pernikahan" name="status_pernikahan">
							<option value="Menikah" @if($data_detail_kk->status_pernikahan=='Menikah') selected @endif>Menikah</option>
							<option value="Tidak Menikah" @if($data_detail_kk->status_pernikahan=='Tidak Menikah') selected @endif>Tidak Menikah</option>
							<option value="Duda" @if($data_detail_kk->status_pernikahan=='Duda') selected @endif>Duda</option>
							<option value="Janda" @if($data_detail_kk->status_pernikahan=='Janda') selected @endif>Janda</option>
						</select>
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="status_dlm_keluarga">Status Hubungan Dalam Keluarga</label>
						<input type="status_dlm_keluarga" class="form-control" id="status_dlm_keluarga" name="status_dlm_keluarga" placeholder="Status Hubungan Dalam Keluarga" value="{{$data_detail_kk->status_dlm_keluarga}}">
					</div>
				</div>
				
			</div>
			<!--5-->
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label for="kewarganegaraan">Kewarganegaraan</label>
						<input type="kewarganegaraan" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Kewarganegaraan" value="{{$data_detail_kk->kewarganegaraan}}">
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="paspor">Dokumen Imigrasi(No Paspor)</label>
						<input type="paspor" class="form-control" id="paspor" name="paspor" placeholder="No Paspor" value="{{$data_detail_kk->paspor}}">
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="kitas">Dokumen Imigrasi(No KITAS/KITAP)</label>
						<input type="kitas" class="form-control" id="kitas" name="kitas" placeholder="No KITAS" value="{{$data_detail_kk->kitas}}">
					</div>
				</div>
				
			</div>
			<!--6-->
			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<label for="nama_ayah">Nama Ayah</label>
						<input type="nama_ayah" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah" value="{{$data_detail_kk->nama_ayah}}">
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="nama_ibu">Nama Ibu</label>
						<input type="nama_ibu" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu" value="{{$data_detail_kk->nama_ibu}}">
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary" id="update">Update Detail Data</button>	
		</div>
	</div>
</form>
</div>
</div>
@endsection
