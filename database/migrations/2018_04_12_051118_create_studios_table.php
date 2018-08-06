<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade');
            $table->string('username',12)->unique();
            $table->string('password',40);
            $table->string('email',20)->unique();
            $table->string('nama studio',20);
            $table->string('alamat studio',40);
            $table->string('deskripsi',255);
            $table->string('nama pemilik',20);
            $table->string('logo studio');
            $table->string('motto',25);
            $table->string('rating',2);
            $table->string('status',10);
            $table->rememberToken();
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
        Schema::dropIfExists('studios');
    }
}
