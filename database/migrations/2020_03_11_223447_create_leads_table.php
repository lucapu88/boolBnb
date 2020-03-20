<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('apartment_id');
          $table->string('nome');
          $table->string('email_mittente');
          $table->string('oggetto');
          $table->text('messaggio');
          $table->foreign('apartment_id')->references('id')->on('apartments');
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
        Schema::dropIfExists('leads');
    }
}
