<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_studio')->unsigned();
            $table->foreign('id_studio')->references('id')->on('studios')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_category')->unsigned();
            $table->foreign('id_category')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama',20);
            $table->string('deskripsi',255);
            $table->float('harga',8,2);
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
        Schema::dropIfExists('services');
    }
}
