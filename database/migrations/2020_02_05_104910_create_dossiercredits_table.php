<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDossiercreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiercredits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_enreg')->nullable();
            $table->date('date_demande')->nullable();
            $table->string('raison_sociale')->nullable();
            $table->string('numero_compte')->nullable();
            $table->string('montant')->nullable();
            $table->string('duree')->nullable();
            $table->string('type_credit')->nullable();
            $table->string('charge_pret')->nullable();
            $table->string('entite')->nullable();
            $table->string('agence')->nullable();
            $table->string('decision')->nullable();
            $table->date('date_decision')->nullable();
            $table->string('statut')->nullable();
            $table->string('commentaire')->nullable();
            $table->string('etat')->nullable();
            $table->string('date_partage')->nullable();
            $table->string('fichier1')->nullable();
            $table->string('fichier2')->nullable();
            $table->string('fichier3')->nullable();
            $table->string('fichier4')->nullable();
            $table->string('employe_id')->nullable();
            $table->unsignedBigInteger('employe_id');
            $table->foreign('employe_id')->references('id')->on('employes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dossiercredits');
    }
}
