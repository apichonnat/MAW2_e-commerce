<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class home extends Controller
{
    public function homegarde()
    {
        return view('homegarde');
    }

    public function index()
    {
        return view('home');
    }
}
