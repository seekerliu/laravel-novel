<?php

namespace App\Http\Controllers;

use App\Novel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $novel;

    /**
     * Create a new controller instance.
     *
     * @param Novel $novel
     * @return void
     */
    public function __construct(Novel $novel)
    {
        $this->novel = $novel;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recommended = $this->novel->recommended();

        return view('home')->with(compact('recommended'));
    }
}
