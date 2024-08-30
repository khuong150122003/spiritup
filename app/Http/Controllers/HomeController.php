<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('clients/index');
    }

    public function courses()
    {
        return view('clients/courses');
    }

    public function coaching()
    {
        return view('clients/coaching');
    }

    public function advice_board()
    {
        return view('clients/advise-board');
    }
}
