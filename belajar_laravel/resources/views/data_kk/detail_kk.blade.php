@extends('layouts.master')
@section('content')
<div class="row"  style="margin:30px 0px 30px 0px;">
	<div class="col-6">
		<h1>Data Detail Kartu Keluarga</h1>
	</div>
	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
		{{session('sukses')}}
	</div>
	@endif
	<div class="table-responsive text-nowrap"  style="margin:30px 0px 30px 0px;">
		<table class="table table-hover">
			<tr>
				<th>ID Detail</th>
				<th>ID KK</th>
				<th>Nomor</th>
				<th>Nama Lengkap</th>
				<th>NIK</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Agama</th>
				<th>Pendidikan</th>
				<th>Jenis Pekerjaan</th>
				<th>Status Pernikahan</th>
				<th>Status Hubungan Dalam Keluarga</th>
				<th>Kewarganegaraan</th>
				<th>Dokumen Imigrasi(No Paspor)</th>
				<th>Dokumen Imigrasi(No KITAS/KITAP)</th>
				<th>Nama Ayah</th>
				<th>Nama Ibu</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			@foreach($data_detail_kk as $detail_kk)
			<tr>
				<td>{{$detail_kk->id}}</td>
				<td>{{$detail_kk->data_kk_id}}</td>
				<td>{{$detail_kk->nomor}}</td>
				<td>{{$detail_kk->nama_lengkap}}</td>
				<td>{{$detail_kk->nik}}</td>
				<td>{{$detail_kk->jenis_kelamin}}</td>
				<td>{{$detail_kk->tempat_lahir}}</td>
				<td>{{$detail_kk->datepicker}}</td>
				<td>{{$detail_kk->agama}}</td>
				<td>{{$detail_kk->pendidikan}}</td>
				<td>{{$detail_kk->jenis_pekerjaan}}</td>
				<td>{{$detail_kk->status_pernikahan}}</td>
				<td>{{$detail_kk->status_dlm_keluarga}}</td>
				<td>{{$detail_kk->kewarganegaraan}}</td>
				<td>{{$detail_kk->paspor}}</td>
				<td>{{$detail_kk->kitas}}</td>
				<td>{{$detail_kk->nama_ayah}}</td>
				<td>{{$detail_kk->nama_ibu}}</td>
				<td><a href="/data_kk/{{$detail_kk->id}}/edit_detail" class="btn btn-warning btn-sm">Edit</a></td>
				<td><a href="/data_kk/{{$detail_kk->id}}/delete_detail" class="btn btn-danger btn-sm">Delete</a></td>
			</tr>
			@endforeach
		</table>
	</div>
</div>
@endsection
