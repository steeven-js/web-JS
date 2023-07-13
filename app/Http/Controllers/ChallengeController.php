<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function show($slug)
    {
        $challenge = Challenge::where('slug', $slug)->first();

        if (!$challenge) {
            abort(404); // Gérer le cas où le challenge n'est pas trouvé
        }

        $viewCode = $challenge->view_code;

        return view('challenges.'.$viewCode, compact('challenge'));
    }
}
