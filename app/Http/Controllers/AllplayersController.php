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

    public function score(Participants $participants)
    {
        $participant = $participants;

        $addscore = $participant->score + 10;

        $participant->score = $addscore;

        $participant->save();

        return view('/players');
    }


    public function minscore(Participants $participants)
    {
        $participant = $participants;

        $addscore = $participant->score - 10;

        $participant->score = $addscore;

        $participant->save();

        redirect('/players');
    }
}