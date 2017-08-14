<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PAgesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }
}
