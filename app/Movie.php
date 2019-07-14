<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

  protected $fillable = ['title', 'plot', 'release'];
  // definisco nei due model genre e movie la relazioni tra i due
   public function genre(){
     return $this->belongsTo('App\Genre');
   }
}
