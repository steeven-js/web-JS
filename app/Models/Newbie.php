<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newbie extends Model
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
                $lastNewbie = self::orderBy('id', 'desc')->first(); // Récupère le dernier enregistrement
                $newbieCount = self::count(); // Compte le nombre total d'enregistrements

                if ($lastNewbie && $newbieCount > 0) {
                    $viewCodeParts = explode('-', $lastNewbie->view_code); // Sépare la partie "newbie" de l'ancien view_code
                    $lastCodeNumber = intval(end($viewCodeParts)); // Récupère la dernière partie numérique de l'ancien view_code
                    $newCodeNumber = $lastCodeNumber + 1; // Incrémente la dernière partie numérique
                } else {
                    $newCodeNumber = 1; // Si c'est la première création, commence à 1
                }

                $newbie->view_code = 'newbie-' . $newCodeNumber; // Attribue à view_code la valeur 'newbie-' + le nouveau numéro
            }

            // Vérifiez si la position n'est pas déjà défini
            if (empty($newbie->position)) { // Si position est vide
                $lastPosition = self::max('position'); // Récupère la position la plus élevée
                $newbie->position = $lastPosition + 1;
            }

            $YOUR_DOMAIN = env('APP_URL');

            // Vérifiez si hosted_url n'est pas déjà défini
            if (empty($newbie->hosted_url)) {
                $newbie->hosted_url = $YOUR_DOMAIN . '/newbie/' . $newbie->slug;
            }
        });
    }
}
