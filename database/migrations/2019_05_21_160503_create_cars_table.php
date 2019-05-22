<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('model');
            $table->integer('displacement');
            $table->integer('max_speed');
            $table->timestamps();
        });

        DB::table('cars')->insert([
          "brand" => "ford",
          "model" => "fiesta",
          "displacement" => 1400,
          "max_speed" => 220
        ]);
        DB::table('cars')->insert([
          "brand" => "fiat",
          "model" => "panda",
          "displacement" => 1000,
          "max_speed" => 180
        ]);
        DB::table('cars')->insert([
          "brand" => "ferrari",
          "model" => "maranello",
          "displacement" => 2000,
          "max_speed" => 300
        ]);
        DB::table('cars')->insert([
          "brand" => "ford",
          "model" => "fiesta",
          "displacement" => 1400,
          "max_speed" => 220
        ]);
        DB::table('cars')->insert([
          "brand" => "ford",
          "model" => "fiesta",
          "displacement" => 1400,
          "max_speed" => 220
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
