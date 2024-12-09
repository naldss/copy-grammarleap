<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SentenceSorterSentence extends Model
{
    use HasFactory;

    protected $table = 'sentence_sorter_sentences';

    protected $fillable = [
        'sentence', 'type', 'difficulty',
    ];
}
