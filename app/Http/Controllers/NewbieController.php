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
        $newbie = Newbie::where('slug', $slug)->first();

        if (!$newbie) {
            abort(404);
        }

        $viewPath = 'pages.newbie.show.' . $newbie->view_code;

        // dd($viewPath);

        return view($viewPath, compact('newbie'));
    }
}
