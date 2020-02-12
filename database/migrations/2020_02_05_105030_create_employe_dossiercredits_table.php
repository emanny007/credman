<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeDossiercreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_dossiercredits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employe_id');
            $table->foreign('employe_id')->references('id')->on('employes')->onDelete('cascade');
            $table->unsignedBigInteger('dossiercredit_id');
            $table->foreign('dossiercredit_id')->references('id')->on('dossiercredits')->onDelete('cascade');
            $table->string('date_imputation')->nullable();
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
        Schema::dropIfExists('employe_dossiercredits');
    }
}
