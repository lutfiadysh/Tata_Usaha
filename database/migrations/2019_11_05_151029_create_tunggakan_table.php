<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTunggakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('tunggakan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('user_nis')->unsigned();
            $table->BigInteger('rayon_id')->unsigned();
            $table->integer('va_jumlah')->nullable();
            $table->integer('va_bulan')->nullable();
            $table->integer('tunai_jumlah')->nullable();
            $table->integer('tunai_bulan')->nullable();
            $table->integer('dsp')->nullable();
            $table->integer('sertifikat')->nullable();
            $table->integer('pondokan')->nullable();
            $table->integer('perpisahan')->nullable();
            $table->integer('dana_ganjil')->nullable();
            $table->integer('dana_genap')->nullable();
            $table->integer('kunjungan_industri')->nullable();
            $table->integer('bpjs')->nullable();
            $table->integer('toeic')->nullable();
            $table->integer('total');

            $table->foreign('user_nis')
                ->references('nis')->on('users')
                ->onDelete('CASCADE');

            $table->foreign('rayon_id')
                ->references('id')->on('rayon')
                ->onDelete('CASCADE');
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
        Schema::dropIfExists('tunggakan');
    }
}
