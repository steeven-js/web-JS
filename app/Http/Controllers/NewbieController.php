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

        // dd($newbies);

        return view('pages.newbie.index', compact('newbies'));
    }

    public function show($slug)
    {
        $newbie = Newbie::where('slug', $slug)
            ->where('is_visible', true)
            ->first();

        if (!$newbie) {
            abort(404);
        }

        $previousNewbie = Newbie::where('position', '<', $newbie->position)
            ->where('is_visible', true)
            ->orderBy('position', 'desc')
            ->first();

        $nextNewbie = Newbie::where('position', '>', $newbie->position)
            ->where('is_visible', true)
            ->orderBy('position', 'asc')
            ->first();

        $viewPath = 'pages.newbie.show.' . $newbie->view_code;

        return view($viewPath, compact('newbie', 'previousNewbie', 'nextNewbie'));
    }

}
