<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather', function (Blueprint $table) {
            $table->id();
            $table->string('city_name');
            $table->string('description');
            $table->string('lon');
            $table->string('lat');
            $table->string('wind_speed');
            $table->string('humidity');
            $table->string('pressure');
            $table->string('temp');
            $table->string('temp_max');
            $table->string('temp_min');
            $table->string('status');
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
        Schema::dropIfExists('weather');
    }
}
