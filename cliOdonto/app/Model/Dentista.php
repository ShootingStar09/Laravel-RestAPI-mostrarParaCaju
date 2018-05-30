<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Dentista extends Model
{
  public function consulta(){
    return $this->hasMany(consulta::class);
  }

  public function dentista(){
       return $this->morphMany(User::class, 'userable');
  }
}
