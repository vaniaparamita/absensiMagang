<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCuti extends Model
{
    protected $table = "model_cutis";

    protected $fillable = [
        'nama', 'id_user', 'tanggal_mulai', 'tanggal_selesai', 'total', 'keterangan', 'status',
         'tanggung_jawab', 'telepon', 'file', 'alasan',
    ];

    public function cuti(){
    	return $this->belongsTo('App\User', 'id_user');
    }

}
