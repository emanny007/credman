<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
  protected $fillable = ['date_enreg','login','sujet','contenu','mail_expediteur','mail_destinataire','employe_id','dossiercredit_id','date_exp'];

  public function employes()
  {
    return $this->belongsTo('App/Employe');
  }

  public function dossiercredits()
  {
    return $this->belongsTo('App/Dossiercredit');
  }

}
