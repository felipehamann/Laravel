<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public function Carreras(){
        return $this->belongTo('App\Carrera','nombre_carrera');        

    }
    public function Universidades(){
        return $this->belongTo('App\Universidad','nombre_universidad');        

    }


}
