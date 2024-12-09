<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenseQuestSentence extends Model
{
    use HasFactory;

    protected $table = 'tense_quest_sentences';

    protected $fillable = [
        'sentence', 'difficulty',
    ];

}
