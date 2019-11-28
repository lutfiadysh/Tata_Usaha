<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->bigInteger('rayon_id')->unsigned();
            $table->string('rombel');
            $table->string('name');
            $table->BigInteger('nis')->unsigned();
            $table->string('role');
            $table->string('email')->unique();
            $table->string('tahun_pelajaran');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->primary('nis');

            $table->foreign('rayon_id')
                ->references('id')->on('rayon')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
