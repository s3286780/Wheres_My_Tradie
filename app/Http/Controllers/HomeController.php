<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Advertisement;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        //$user = Advertisement::find($user_id);
        //$ads = Advertisement::all();
        $ads = Advertisement::where('user','=',auth()->user()->id)->get();
        return view('home')->with('ads', $ads);

        /*$user = auth()->user()->id;
        $ads = User::find($user);
        return view('home')->with('ads', $ads->advertisements);*/

    }
}
