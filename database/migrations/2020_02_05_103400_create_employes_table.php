<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('login')->nullable();
            $table->string('password')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('role')->nullable();
            $table->string('service')->nullable();
            $table->date('date_naiss')->nullable();
            $table->string('statut')->nullable();
            $table->string('adresse')->nullable();
            $table->string('photo')->nullable();
            $table->string('agence')->nullable();
            $table->string('biographie')->nullable();
            $table->string('entite')->nullable();
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
        Schema::dropIfExists('employes');
    }
}
