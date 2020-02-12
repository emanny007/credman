<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date_question')->nullable();
            $table->string('login_question')->nullable();
            $table->string('question')->nullable();
            $table->string('date_reponse')->nullable();
            $table->string('login_reponse')->nullable();
            $table->string('reponse')->nullable();
            $table->string('commentaire')->nullable();
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
        Schema::dropIfExists('questions');
    }
}
