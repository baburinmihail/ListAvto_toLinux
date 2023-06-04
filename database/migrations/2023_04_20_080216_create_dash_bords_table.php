<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashBordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dash_bords', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->double('speedometer_end', 8, 2);
            $table->double('gsm_end', 8, 2);
            $table->string('car_name');
            $table->string('state_number');
            $table->double('consumption_rate', 8, 2);
            $table->double('mileage', 8, 2);
            $table->double('received_gsm_initially', 8, 2);
            $table->double('gsm_consumption', 8, 2);
            $table->double('economy', 8, 2);
            $table->double('remainder_gsm_end', 8, 2);
            $table->timestampTz('added_at', $precision = 0);
            $table->string('drivers_name');
            $table->string('drivers_surname');
            $table->string('drivers_patronymic');
            $table->string('season');

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
        Schema::dropIfExists('dash_bords');
    }
}
