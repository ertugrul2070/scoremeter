<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Participants;

class SettingsController extends Controller
{


    public function index()
    {

    }

    public function saveScore()
    {
        $gryf = Participants::select('participants.score')
            ->join('groups', 'participants.group_id', '=', 'groups.id')
            ->whereIn('groups.group_name', ['Gryffindor'])
            ->get();

        $slyth = Participants::select('participants.score')
            ->join('groups', 'participants.group_id', '=', 'groups.id')
            ->whereIn('groups.group_name', ['Slytherin'])
            ->get();

        $huffle = Participants::select('participants.score')
            ->join('groups', 'participants.group_id', '=', 'groups.id')
            ->whereIn('groups.group_name', ['Hufflepuff'])
            ->get();

        $raven = Participants::select('participants.score')
            ->join('groups', 'participants.group_id', '=', 'groups.id')
            ->whereIn('groups.group_name', ['Ravenclaw'])
            ->get();

        $totalGryf = 0;
        $totalSlyth = 0;
        $totalHuffle = 0;
        $totalRaven = 0;

        foreach ($gryf as $key => $gr)
        {
            $totalGryf = $totalGryf + $gr->score;
        }

        foreach ($slyth as $key => $sl)
        {
            $totalSlyth = $totalSlyth + $sl->score;
        }

        foreach ($huffle as $key => $hu)
        {
            $totalHuffle = $totalHuffle + $hu->score;
        }

        foreach ($raven as $key => $ra)
        {
            $totalRaven = $totalRaven + $ra->score;
        }

       DB::table('totalscore')->insert([
            ['total_gryf' => $totalGryf,
                'total_slyth' => $totalSlyth,
                'total_huffle' => $totalHuffle,
                'total_raven' => $totalRaven,
                'date' => Carbon::now(),
                'created_at' => Carbon::now()],
        ]);

        DB::table('participants')->update(['score' => 0]);

        return redirect('/settings');

    }
}
