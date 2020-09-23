<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Design;
use App\DImage;

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
    public function index(Request $request)
    {

        $designs = Design::all();
        return view('home',compact('designs'));
        
    }
}
