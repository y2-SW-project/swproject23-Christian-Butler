<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $home = 'home';

        if($user->hasRole('admin')){
            $home = 'admin.events.index';
        }
        else if($user->hasRole('user')){
            $home = 'user.events.index';
        }
        return redirect()->route($home);
    }
}


