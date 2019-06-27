<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelIzin extends Model
{
    protected $table = "model_izins";

    protected $fillable = [
        'nama', 'tanggal_mulai', 'tanggal_selesai','keterangan','file'
    ];
}
