<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCuti extends Model
{
    protected $table = "model_cutis";

    protected $fillable = [
        'nama', 'tanggal_mulai', 'tanggal_selesai','keterangan','file'
    ];

}
