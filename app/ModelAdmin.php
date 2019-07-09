<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelAdmin extends Model
{
    use Notifiable;
    

    protected $fillable = [
        'name','email','password',
    ];

    protected $hidden = [
      'password','remember_token',
    ];
}
