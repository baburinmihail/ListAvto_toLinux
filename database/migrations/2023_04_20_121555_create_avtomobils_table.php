<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvtomobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avtomobils', function (Blueprint $table) {
            $table->id();

            $table->string('mark');
            $table->string('gosnomer');
            $table->string('normatopliva_summer');
            $table->string('normatopliva_winter');
            $table->string('gsm_end_new_day');
            $table->string('speedometer_new_day');
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
        Schema::dropIfExists('avtomobils');
    }
}
