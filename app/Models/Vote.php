<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function voter()
    {
        return $this->belongsTo(Voter::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
