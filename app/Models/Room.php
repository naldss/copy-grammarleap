<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $primaryKey = 'room_id'; // Primary key column
    protected $fillable = [
        'creator_id',
        'room_name',
        'room_description',
        'passcode'
    ];

    // Relationship with users through users_on_rooms
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_on_rooms', 'room_id', 'user_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id', 'id'); // Use 'id' as the primary key for users
    }

    // Relationship with quizzes through quiz_on_rooms
    public function quizzes()
    {
        return $this->hasMany(QuizOnRoom::class, 'room_id', 'room_id');
    }
}
