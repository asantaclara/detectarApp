<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionPossibleAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_possible_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_question_id')->foreign('question_id')->references('id')->on('test_questions');
            $table->foreignId('health_condition_id')->foreign('health_condition_id')->references('id')->on('health_conditions');
            $table->text('min_value');
            $table->text('max_value');
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
        Schema::dropIfExists('question_possible_answers');
    }
}
