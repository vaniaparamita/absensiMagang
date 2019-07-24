<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelIzin extends Model
{
    protected $table = "model_izins";

    protected $fillable = [
        'nama',  'id_user', 'tanggal_mulai', 'tanggal_selesai','keterangan', 'alasan', 'status','file'
    ];

    public function izin(){
    	return $this->belongsTo('App\User', 'id_user');
    }

}
