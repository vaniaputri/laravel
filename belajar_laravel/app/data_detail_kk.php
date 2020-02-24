<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_detail_kk extends Model
{
    protected $table='data_detail_kk';
   	protected $fillable=['data_kk_id','nomor','nama_lengkap','nik','jenis_kelamin','tempat_lahir','datepicker','agama','pendidikan','jenis_pekerjaan','status_pernikahan','status_dlm_keluarga','kewarganegaraan','paspor','kitas','nama_ayah','nama_ibu'];
    
   	// public function data_kk(){
   	// 	return $this->belongsToMany(data_kk::class);
   	// }
}
