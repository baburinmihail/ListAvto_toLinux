<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListGsmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_gsms', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('speedometer_end');
            $table->string('gsm_end');
            $table->string('car_name');

            $table->string('state_number');
            $table->string('consumption_rate');
            $table->string('mileage');
            $table->string('received_gsm_initially');

            $table->string('gsm_consumption');
            $table->string('economy');
            $table->string('remainder_gsm_end');

            $table->string('added_at');
            $table->string('drivers_fio');
            $table->string('season');
            $table->string('fact');

            $table->unsignedBigInteger('category_id');

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
        Schema::dropIfExists('list_gsms');
    }
}
