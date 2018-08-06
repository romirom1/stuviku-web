<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_service')->unsigned();
            $table->foreign('id_service')->references('id')->on('services')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_costumer')->unsigned();
            $table->foreign('id_costumer')->references('id')->on('costumers')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tanggal request');
            $table->string('status request',10);
            $table->string('tempat foto',40);
            $table->date('tanggal foto');
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
        Schema::dropIfExists('requests');
    }
}
