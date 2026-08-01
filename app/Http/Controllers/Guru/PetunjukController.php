<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;

class PetunjukController extends Controller
{
    public function index()
    {
        return view('guru.petunjuk');
    }
}