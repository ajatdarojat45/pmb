<?php

namespace App\Http\Controllers;

use App\Bank;
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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('publics.index');
    }

    public function daftar()
    {
        $banks = Bank::orderBy('name', 'asc')->get();

        return view('publics.form', compact('banks'));
    }
}
