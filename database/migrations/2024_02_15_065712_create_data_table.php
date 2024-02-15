<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("device_id");
            $table->foreign("device_id")->on("devices")->references("id")->onDelete("cascade");
            $table->time("time");
            $table->text("data");
            $table->unsignedBigInteger("event_id");
            $table->foreign("event_id")->on("events")->references("id")->onDelete("cascade");
            $table->float("W_Temp1");
            $table->float("W_Temp2");
            $table->float("W_Temp3");
            $table->float("W_Temp4");
            $table->float("W_Temp5");
            $table->float("W_Temp6");
            $table->float("B_Temp1");
            $table->float("B_Temp2");
            $table->float("Vib1");
            $table->float("Vib2");
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
        Schema::dropIfExists('data');
    }
};
