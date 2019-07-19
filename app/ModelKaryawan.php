<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKaryawan extends Model
{

    protected $primaryKey = 'nik';
    protected $table = "model_karyawans";
    protected $fillable = [
        'nik', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'telepon',
         'jabatan', 'department', 'id_departemen',
    ];

  

}
