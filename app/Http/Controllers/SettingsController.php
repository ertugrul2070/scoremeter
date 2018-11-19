<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{

    public function index()
    {

    }

    public function saveScore()
    {
        $time = Carbon::now();
        $hour = $time->toDateTimeString()[11] . $time->toDateTimeString()[12];
        $HMS = $time->toDateTimeString()[11] . $time->toDateTimeString()[12] . $time->toDateTimeString()[13] . $time->toDateTimeString()[14] .
            $time->toDateTimeString()[15] . $time->toDateTimeString()[16] . $time->toDateTimeString()[17] . $time->toDateTimeString()[18];
        $day = $time->toDateTimeString()[8] . $time->toDateTimeString()[9];

       DB::table('totalscore')->insert([
            ['total_gryf' => 25,
                'total_slyth' => 20,
                'total_huffle' => 50,
                'total_raven' => 40,
                'date' => $time,
                'created_at' => $time],
        ]);
    }
}
