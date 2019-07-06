<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKaryawan extends Model
{
    protected $table = "model_karyawans";

    protected $fillable = [
        'nik', 'nama', 'jenis_kelamin','tempat_lahir','tanggal_lahir','telepon',
        'jabatan', 'departement'
    ];

}