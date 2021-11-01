<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestQuestionPossibleAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_question_possible_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_id')->foreign('test_id')->references('id')->on('tests');
            $table->foreignId('question_possible_answer_id')->foreign('question_possible_answer_id')->references('id')->on('question_possible_answers');
            $table->text('answer');
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
        Schema::dropIfExists('test_question_possible_answers');
    }
}
