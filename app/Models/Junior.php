<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Junior extends Model
{
    use HasFactory; // Utilise le trait HasFactory

    protected $fillable = [ // Liste des champs autorisés à être remplis
        'title',
        'slug',
        'view_code',
        'position',
        'image',
        'hosted_url',
        'github_url',
        'view_code'
    ];
}
