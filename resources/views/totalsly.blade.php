<?php

use App\Participants;
use Illuminate\Support\Facades\DB;

$participants2 = Participants::select('participants.score')
    ->join('groups', 'participants.group_id', '=', 'groups.id')
    ->whereIn('groups.group_name', ['Slytherin'])
    ->get();
$totals = 0;
foreach ($participants2 as $data)
{
    $totals = $totals + $data->score;
}
echo $totals;
        ?>