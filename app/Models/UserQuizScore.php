<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuizScore extends Model
{
    use HasFactory;

    protected $table = 'user_quiz_scores';
    protected $fillable = ['user_id', 'cs_topic_id', 'score', 'questions_length'];
}
