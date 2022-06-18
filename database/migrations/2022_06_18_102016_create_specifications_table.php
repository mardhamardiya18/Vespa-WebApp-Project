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
            $table->string('max-power');
            $table->string('max-torque');
            $table->string('cooling-system');
            $table->string('transmission');
            $table->string('brake-system');
            $table->string('front-tire');
            $table->string('rear-tire');
            $table->string('fuel-capacity');

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
