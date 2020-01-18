<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    public function Alumnos(){
        return $this->hasMany('App\Alumno','universidad');        

    }

 
}
