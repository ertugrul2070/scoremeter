<?php

use App\Participants;
use Illuminate\Support\Facades\DB;

$participants4 = Participants::select('participants.score')
    ->join('groups', 'participants.group_id', '=', 'groups.id')
    ->whereIn('groups.group_name', ['Ravenclaw'])
    ->get();
$totalr = 0;
foreach ($participants4 as $data)
{
    $totalr = $totalr + $data->score;
}

echo $totalr;

?>