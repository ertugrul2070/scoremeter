<?php

use App\Participants;


$participants = Participants::select('participants.score')
    ->join('groups', 'participants.group_id', '=', 'groups.id')
    ->whereIn('groups.group_name', ['Gryffindor'])
    ->get();
$totalg = 0;

foreach ($participants as $data)
{
    $totalg = $totalg + $data->score;
}

echo $totalg;
        ?>