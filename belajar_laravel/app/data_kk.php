<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_kk extends Model
{
   	protected $table='data_kk';
   	protected $fillable=['nama_kepala_keluarga','alamat','rt_rw','desa_kelurahan','kecamatan','kabupaten_kota','kode_pos','provinsi'];

   	public function data_detail_kk(){
   		return $this->belongsToMany(data_detail_kk::class);
   	}
   	
}
