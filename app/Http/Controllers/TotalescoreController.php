<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TotalescoreController extends Controller
{
    public function index()
    {
        return view('/total');
    }
}
