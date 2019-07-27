<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IzinDepartemen extends Model
{
    protected $table = "izin_departemens";


    protected $fillable = [
        'nama',  'id_user', 'tanggal_mulai', 'tanggal_selesai','keterangan', 'alasan', 'status','file'
    ];

    
}
