<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllplayersController extends Controller
{
    public function index() {
        return view('/players');
    }
}
