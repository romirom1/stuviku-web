<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_region')->unsigned();
            $table->foreign('id_region')->references('id')->on('regions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('username',12)->unique();
            $table->string('password',40);
            $table->string('nama',20);
            $table->string('email',20)->unique();
            $table->string('no hp',12);
            $table->string('foto profil');
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
        Schema::dropIfExists('admins');
    }
}