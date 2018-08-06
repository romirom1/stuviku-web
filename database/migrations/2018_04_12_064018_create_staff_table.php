<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_region')->unsigned();
            $table->foreign('id_region')->references('id')->on('regions')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_job')->unsigned();
            $table->foreign('id_job')->references('id')->on('job_positions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama',20);
            $table->string('no hp',12);
            $table->string('email',20);
            $table->string('jenis kelamin',1);
            $table->string('foto');
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
        Schema::dropIfExists('staffs');
    }
}
