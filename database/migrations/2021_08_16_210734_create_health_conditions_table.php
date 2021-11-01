<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_conditions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('health_condition_type_id')->foreign('health_condition_type_id')->references('id')->on('health_condition_types');
            $table->boolean('healthy');
            $table->text('name');
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
        Schema::dropIfExists('health_conditions');
    }
}
