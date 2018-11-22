<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scoremeter</title>

    <!-- Fonts -->
    <link href="{{asset ('css/nav.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset ('css/main.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset ('css/teamsbgs.css')}}" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react-dom.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<?php
/*        use Carbon\Carbon;
        use App\Participants;
        use Illuminate\Support\Facades\DB;

        $now = Carbon::now();
        $hour = $now->toDateTimeString()[11] . $now->toDateTimeString()[12];

        $created = DB::table('totalscore')->select('created_at')->get();
        echo $created;

        if ($hour >= "15")
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
            }

        echo $now;
*/?>