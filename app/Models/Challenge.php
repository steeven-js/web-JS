<?php

namespace App\Models;

use App\Models\ChallengeLevel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'hosted_url',
        'github_url',
        'challenge_level_id',
    ];

    public function challengeLevel()
    {
        return $this->belongsTo(ChallengeLevel::class);
    }
}
