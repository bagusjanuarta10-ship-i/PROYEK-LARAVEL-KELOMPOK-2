<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisnuController extends Controller
{
    public function index()
    {
        return view('wisnu');
    }
}