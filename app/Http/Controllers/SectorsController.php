<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectorsController extends Controller
{
    public function index()
    {
        return view('pages/sectors');
    }
}
