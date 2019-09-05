<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('room_type_id');
            $table->foreign('room_type_id')
                ->references('id')->on('room_type')
                ->onDelete('cascade');
            $table->enum('rates_type', ['weekend', 'weekdays']);
            $table->boolean('special_rates');
            $table->unsignedBigInteger('room_plan_id');
            $table->foreign('room_plan_id')
                ->references('id')->on('room_plan')
                ->onDelete('cascade');
            $table->double('price');
            $table->double('charges');
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
        Schema::dropIfExists('room_rates');
    }
}
