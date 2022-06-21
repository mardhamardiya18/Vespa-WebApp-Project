<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specifications', function (Blueprint $table) {
            $table->id();
            $table->integer('products_id');
            $table->string('engine');
            $table->string('displacement');
            $table->string('maxPower');
            $table->string('maxTorque');
            $table->string('coolingSystem');
            $table->string('transmission');
            $table->string('brakeSystem');
            $table->string('frontTire');
            $table->string('rearTire');
            $table->string('fuelCapacity');

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
        Schema::dropIfExists('specifications');
    }
}