<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\ChallengeLevel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'challenge_level_id',
        'title',
        'slug',
        'position',
        'image',
        'hosted_url',
        'github_url',
    ];

    public function challengeLevel()
    {
        return $this->belongsTo(ChallengeLevel::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->title);
        });
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}
