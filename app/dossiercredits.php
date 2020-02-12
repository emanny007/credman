<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dossiercredits extends Model
{

  protected $fillable = ['date_enreg','date_demande','raison_sociale','numero_compte','montant','duree','type_credit','charge_pret','secteur_activite','entite','agence','decision','date_decision','statut','commentaire','etat','date_partage','fichier1','fichier2','fichier3','fichier4','employe_id'];


  public function employes()
  {
    return $this->belongsToMany('App/Employe');
  }


}
