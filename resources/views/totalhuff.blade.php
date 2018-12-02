<?php

use App\Participants;

$participants3 = Participants::select('participants.score')
    ->join('groups', 'participants.group_id', '=', 'groups.id')
    ->whereIn('groups.group_name', ['Hufflepuff'])
    ->get();
$totalh = 0;
foreach ($participants3 as $data) {
    $totalh = $totalh + $data->score;
}

echo $totalh;
?>