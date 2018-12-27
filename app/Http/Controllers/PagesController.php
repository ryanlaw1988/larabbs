<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function root()
    {
        // dd(\Auth::user()->hasVerifiedEmail());
        return view('pages.root');
    }
}
