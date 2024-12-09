<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SentenceBuilder extends Model
{
    use HasFactory;

    protected $table = 'sentence_builder';
    protected $fillable = ['sentence', 'difficulty'];

    public function getShuffledWords()
    {
        $words = explode(' ', $this->sentence);
        shuffle($words);
        return $words;
    }
}
