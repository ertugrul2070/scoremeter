<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\DB;
use App\Participants;

Route::get('/', function () {
    return view('home');
});

Route::group(['middleware' => ['auth']], function() {

    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::get('/total', function () {
        $participants = Participants::select('participants.score')
            ->join('groups', 'participants.group_id', '=', 'groups.id')
            ->whereIn('groups.group_name', ['Gryffindor'])
            ->get();
        $totalg = 0;
        foreach ($participants as $data)
        {
            $totalg = $totalg + $data->score;
        }

        $participants2 = Participants::select('participants.score')
            ->join('groups', 'participants.group_id', '=', 'groups.id')
            ->whereIn('groups.group_name', ['Slytherin'])
            ->get();
        $totals = 0;
        foreach ($participants2 as $data)
        {
            $totals = $totals + $data->score;
        }

        $participants3 = Participants::select('participants.score')
            ->join('groups', 'participants.group_id', '=', 'groups.id')
            ->whereIn('groups.group_name', ['Hufflepuff'])
            ->get();
        $totalh = 0;
        foreach ($participants3 as $data)
        {
            $totalh = $totalh + $data->score;
        }

        $participants4 = Participants::select('participants.score')
            ->join('groups', 'participants.group_id', '=', 'groups.id')
            ->whereIn('groups.group_name', ['Ravenclaw'])
            ->get();
        $totalr = 0;
        foreach ($participants4 as $data)
        {
            $totalr = $totalr + $data->score;
        }


        return view('total', compact('totalg', 'totals', 'totalh', 'totalr'));
    });


    Route::get('/settings', function (){
        return view('settings');
    });

    Route::get('/players', function () {
        $participants = Participants::select('participants.*', 'groups.group_name')
            ->join('groups', 'participants.group_id', '=', 'groups.id')
            ->whereIn('groups.group_name', ['Gryffindor'])
            ->get();

        $participants2 = Participants::select('participants.*', 'groups.group_name')
            ->join('groups', 'participants.group_id', '=', 'groups.id')
            ->whereIn('groups.group_name', ['Slytherin'])
            ->get();

        $participants3 = Participants::select('participants.*', 'groups.group_name')
            ->join('groups', 'participants.group_id', '=', 'groups.id')
            ->whereIn('groups.group_name', ['Hufflepuff'])
            ->get();

        $participants4 = Participants::select('participants.*', 'groups.group_name')
            ->join('groups', 'participants.group_id', '=', 'groups.id')
            ->whereIn('groups.group_name', ['Ravenclaw'])
            ->get();

        return view('players', compact('participants', 'participants2', 'participants3', 'participants4'));
    });

    Route::get('/home', 'HomeController@index')->name('home');

    Route::post('/settings', 'SettingsController@saveScore');
});



Auth::routes();