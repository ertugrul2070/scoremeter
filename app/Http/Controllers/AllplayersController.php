<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participants;
use Illuminate\Support\Facades\DB;

class AllplayersController extends Controller
{
    public function index()
    {

        $participants = Participants::all()->toArray();
        return view('/players', compact('participants'));
    }

    public function getParticipants()
    {
        Participants::select('participants.name', 'participants.lastname', 'groups.group_name', 'participants.score')
            ->join('groups', 'participants.group_id', '=', 'groups.id')
            ->get();
    }

    public function score(Request $request)
    {
        $id = $request->input('plus');
        $score = Participants::select('*')
            ->where('id', '=' , $id)
            ->get();
        dd($score);
        $count = ++$score;

        Participants::where('participants.id',$id)
            ->update(['score' => $count]);
    }
}