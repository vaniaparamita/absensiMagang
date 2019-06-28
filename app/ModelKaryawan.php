<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKaryawan extends Model
{
    protected $table = "data_pegawai";

    protected $fillable = [
        'nik', 'nama','alamat','jenis_kelamin','tempat_lahir','tanggal_lahir', 
        'telepon','jabatan','department'
    ];
}
