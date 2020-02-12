<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entites extends Model
{
  protected $fillable = ['entite','ville','pays'];


  public function agences()
  {
    return $this->hasMany('App/Agence');
  }

}
