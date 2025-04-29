<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory; // Corrected 'use' statement

    // Allow mass assignment for these fields
    protected $fillable = [
        'team1_id',     // Add team1_id here
        'team2_id',     // Add team2_id here
        'match_date',
        'match_time',
        'venue',
    ];

    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }

    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }
}
