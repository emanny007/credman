<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_enreg')->nullable();
            $table->string('login')->nullable();
            $table->string('sujet')->nullable();
            $table->string('contenu')->nullable();
            $table->string('mail_expediteur')->nullable();
            $table->string('mail_destinataire')->nullable();
            $table->date('date_exp')->nullable();
            $table->unsignedBigInteger('employe_id');
            $table->foreign('employe_id')->references('id')->on('employes')->onDelete('cascade');
            $table->unsignedBigInteger('dossiercredit_id');
            $table->foreign('dossiercredit_id')->references('id')->on('dossiercredits')->onDelete('cascade');

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
        Schema::dropIfExists('messages');
    }
}
