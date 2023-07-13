<?php

namespace App\Http\Controllers;

use App\Models\Newbie;
use Illuminate\Http\Request;

class NewbieController extends Controller
{
    public function index()
    {
        //Récupérer tous les newbie de la base de données is_visible = 1
        $newbies = Newbie::where('is_visible', 1)->get();

        return view('pages.newbie.index', compact('newbies'));
    }

    public function show($slug)
    {
        return view('newbie.show', [
            'slug' => $slug
        ]);
    }
}
