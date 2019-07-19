<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCuti extends Model
{
    protected $table = "model_cutis";

    protected $fillable = [
        'nama', 'id_user', 'tanggal_mulai', 'tanggal_selesai','keterangan','status','file'
    ];

    public function cuti(){
    	return $this->belongsTo('App\User', 'id_user');
    }

}
