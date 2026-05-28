<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseControllers;

class LandingController extends BaseControllers
{
    public function index()
    {
        return view('landing');
    }
}