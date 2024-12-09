<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class POSHunter extends Model
{
    protected $table = 'pos_hunter_table';
    protected $fillable = [
        'sentence',
        'difficulty',
    ];
}
