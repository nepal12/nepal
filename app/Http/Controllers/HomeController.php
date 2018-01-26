<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaraFlash;

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
        LaraFlash::snackbar("Click to Continue");
        LaraFlash::add()->content('Info Message')->priority(6)->type('Info');
        LaraFlash::success("Success Message");
        LaraFlash::danger("Danger Message");
        return view('home');
    }
}
