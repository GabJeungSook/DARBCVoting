<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function member()
    {
        return $this->hasOne(Member::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
