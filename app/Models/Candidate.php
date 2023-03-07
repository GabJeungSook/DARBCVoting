<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function candidateInformation()
    {
        return $this->belongsTo(CandidateInformation::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
