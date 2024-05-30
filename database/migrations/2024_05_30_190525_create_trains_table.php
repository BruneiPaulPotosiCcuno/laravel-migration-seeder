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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);
            $table->string('start_station');
            $table->string('finish_station');
            $table->dateTime('departure_timedate');
            $table->dateTime('arrival_timedate');
            $table->string('train_code', 10);
            $table->tinyInteger('wagons_number')->nullValue();
            $table->boolean('time_on')->default(true);
            $table->boolean('time_off')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
