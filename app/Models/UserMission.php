<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMission extends Model
{
    use HasFactory;

    protected $table = 'user_missions';

    protected $fillable = ['user_id', 'mission_id', 'completed', 'date', 'claimed'];

    public function mission()
    {
        return $this->belongsTo(Mission::class);
    }
}
