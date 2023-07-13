<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Challenge;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::All();

        $challenges = Challenge::join('challenge_levels', 'challenges.challenge_level_id', '=', 'challenge_levels.id')
            ->orderBy('challenge_levels.position', 'asc')
            ->orderBy('challenges.position', 'asc')
            ->select('challenges.*')
            ->get();

        // dd($challenges);

        return view('pages.home', compact('users', 'challenges'));
    }

}
