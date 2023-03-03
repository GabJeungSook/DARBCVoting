<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function candidate()
    {
        return $this->hasMany(Candidate::class);
    }

    public function voter()
    {
        return $this->hasMany(Voter::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
