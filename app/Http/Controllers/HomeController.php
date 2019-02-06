<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\User;
use App\Type;

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
        //$user = User::with('type')->find(1);
        //dd($user->type->name);
        return view('home');
    }

    public function admin(){

    }

    public function gest(){
        
    }
}
