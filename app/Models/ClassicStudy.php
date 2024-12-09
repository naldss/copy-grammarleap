<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassicStudy extends Model
{
    use HasFactory;

    protected $table = 'classic_study';

    protected $fillable = [
        'topic_level',
        'sequence_num',
        'topic_title',
        'definition',
        'image_description',
        'image',
    ];
}
