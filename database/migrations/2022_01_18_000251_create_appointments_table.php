<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string("user_nom")->nullable();
            $table->string("user_prenom")->nullable();
            $table->bigInteger("user_id")->nullable();
            $table->string("user_email")->nullable();
            $table->integer("user_tel")->nullable();
            $table->dateTime("date")->nullable();
            $table->string("message")->nullable();
            $table->string("medecin")->nullable();
            $table->string("status")->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
