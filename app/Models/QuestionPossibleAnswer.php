<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionPossibleAnswer extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'test_question_id',
        'health_condition_id',
        'min_value',
        'max_value',
        'img_path'
    ];

    public function healthyAnswer()
    {
        return $this->healthCondition->healthy;
    }

    public function healthCondition() {
        return $this->belongsTo(HealthCondition::class);
    }
}
