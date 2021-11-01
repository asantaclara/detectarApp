<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestQuestionPossibleAnswer extends Model
{
    use HasFactory;


    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'test_id',
        'question_possible_answer_id',
        'answer'
    ];
}
