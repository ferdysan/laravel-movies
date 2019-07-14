<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  // definisco nei due model genre e movie la relazioni tra i due
  // in questo caso un genere ha molti film associati
    public function movies(){
      return $this->hasMany('App\Movie');

    }
}
