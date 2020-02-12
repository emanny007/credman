<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
  protected $fillable = ['date_question','login_question','question','date_reponse','login_reponse','reponse','commentaire','employe_id','dossiercredit_id'];

  public function employes()
  {
    return $this->belongsTo('App/Employe');
  }

  public function dossiercredits()
  {
    return $this->belongsTo('App/Dossiercredit');
  }

  public function reponses()
  {
    return $this->hasMany('App/Reponse');
  }


}
