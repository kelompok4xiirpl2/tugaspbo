<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ekskul;
class EkskulController extends Controller
{
    public function index()
    {
    	$tampil = Ekskul::all();
    	return view('daftar-ekskul', compact('tampil'));
    }
}
