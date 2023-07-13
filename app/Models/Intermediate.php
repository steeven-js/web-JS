<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intermediate extends Model
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

    public static function boot() // Méthode boot qui est appelée automatiquement par Laravel
    {
        parent::boot(); // Appelle la méthode boot de la classe parente

        // Événement "creating" qui est déclenché avant la création d'un nouvel objet
        static::creating(function ($newbie) { // $newbie est l'objet qui est en train d'être créé
            // Vérifiez si view_code n'est pas déjà défini
            if (empty($newbie->view_code)) { // Si view_code est vide
                $lastId = self::max('id'); // Récupère l'id le plus élevé
                $newbie->view_code = 'intermediate-' . ($lastId + 1); // Attribue à view_code la valeur 'newbie-' + l'id le plus élevé + 1
            }
            // Vérifiez si la position n'est pas déjà défini
            if (empty($newbie->position)) { // Si position est vide
                $lastPosition = self::max('position'); // Récupère la position la plus élevée
                $newbie->position = $lastPosition + 1;
            }
        });
    }
}
