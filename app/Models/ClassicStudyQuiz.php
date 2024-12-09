<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassicStudyQuiz extends Model
{
    use HasFactory;

    protected $table = 'classic_study_quizzes';

    protected $fillable = [
        'topic_id', 'question', 'choice_1', 'choice_2', 'choice_3', 'choice_4', 'correct_choice'
    ];
}
