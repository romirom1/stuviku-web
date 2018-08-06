<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',12)->unique();
            $table->string('password',40);
            $table->string('nama lengkap',40);
            $table->string('no hp',12);
            $table->string('jenis kelamin',1);
            $table->string('alamat',40);
            $table->string('foto profil');
            $table->string('email',20)->unique();
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
        Schema::dropIfExists('costumers');
    }
}
