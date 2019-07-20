<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $table = "departemens";


    public function departemen(){
    	return $this->hasMany('App\User');
    }
}
