<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizOnRoom extends Model
{
    use HasFactory;

    protected $primaryKey = 'quiz_id'; // Primary key column
    protected $fillable = [
        'room_id',
        'question',
        'choice1',
        'choice2',
        'choice3',
        'choice4',
        'answer'
    ];

    // Relationship with Room
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'room_id');
    }
}
