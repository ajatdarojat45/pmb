<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
    	$peraturan = Kelas::where('id', 0)->first();
    	return view('publics.index', compact('peraturan'));
    }

    public function form()
    {
    	return view('public.form');
    }
}
