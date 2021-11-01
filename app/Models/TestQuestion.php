<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'min_age',
        'max_age',
        'text',
        'img_path',
        'view_path'
    ];
    
    public function possible_answers() {
        return $this->hasMany(QuestionPossibleAnswer::class);
    }
}
