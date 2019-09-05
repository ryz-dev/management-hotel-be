<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomSetupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_setup', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('room_number', 50);
            $table->unsignedBigInteger('floor_id');
            $table->foreign('floor_id')
                ->references('id')->on('floor')
                ->onDelete('cascade');
            $table->unsignedBigInteger('room_type_id');
            $table->foreign('room_type_id')
                ->references('id')->on('room_type')
                ->onDelete('cascade');
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
        Schema::dropIfExists('room_setup');
    }
}
