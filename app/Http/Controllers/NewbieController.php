<?php

namespace App\Http\Controllers;

use App\Models\Newbie;
use Illuminate\Http\Request;

class NewbieController extends Controller
{
    public function index()
    {
        // Vérifier si view_code est null, sinon attribuer 'newbie' + id
        $newbie = Newbie::whereNull('view_code')->firstOrFail();
        if ($newbie) {
            $newbie->view_code = 'newbie' - $newbie->id;
            $newbie->save();
        }

        return view('newbie.index');
    }

    public function show($slug)
    {
        return view('newbie.show', [
            'slug' => $slug
        ]);
    }
}
