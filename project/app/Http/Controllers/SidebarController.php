<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.student');
    }


    public function google_map()
    {
        return view('google_map');
    }
}
