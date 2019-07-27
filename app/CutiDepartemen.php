<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CutiDepartemen extends Model
{
    protected $table = "cuti_departemens";

    protected $fillable = [
        'nama', 'id_user', 'tanggal_mulai', 'tanggal_selesai', 'total', 'keterangan', 'status',
         'tanggung_jawab', 'telepon', 'file', 'alasan',
    ];

}
