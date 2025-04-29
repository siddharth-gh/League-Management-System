<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    use HasFactory;

    // Define the fillable fields for mass assignment
    protected $fillable = ['team_id', 'played', 'won', 'lost', 'points'];

    // Define the relationship with the Team model
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
