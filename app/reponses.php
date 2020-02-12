<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reponses extends Model
{
  protected $fillable = ['libelle','question_id'];


  public function questions()
  {
    return $this->belongsTo('App/Question);
  }
}
