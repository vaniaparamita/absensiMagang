<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'id_departemen', 'name', 'email', 'role', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *w
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user(){
    	return $this->hasMany('App\ModelCuti')->belongsTo('App\Departemen');
    }

    public function data()
    {
    	return $this->hasOne('App\ModelKaryawan', 'nik');
    }
}
