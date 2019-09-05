<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckInOutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_in_out', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('checkin');
            $table->time('early_checkin');
            $table->time('checkout');
            $table->time('late_checkout');
            $table->integer('reserve_time'); // teggang waktu jika ingin reservasi (ex. 12 jam sebelum checkin)
            $table->integer('E/D'); // teggang waktu jika ingin memperpanjang waktu (ex. 12 jam sebelum waktu checkout)
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
        Schema::dropIfExists('check_in_out');
    }
}
