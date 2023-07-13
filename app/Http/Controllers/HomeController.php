<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Newbie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::All();

        // dd($users);

        $newbies = Newbie::where('is_visible', 1)->get();

        return view('pages.home', compact('users', 'newbies'));
    }

}
