<style>
    #btn{
        margin-left: 45%;
        margin-top: 5%;
    }

    #table{
        margin-left: 30%;
        margin-top: 10%;
        font-size: 25px;
        font-family: 'Montserrat', sans-serif;
    }
</style>
@extends('layouts.Welcome')
@section('content')
    <div class="container">
        <div class="row ">
            <form class="save" action="{{url ('/settings')}}" method="post">
                {{ csrf_field() }}
                <div class="col">
                    <div id="btn">
                        <input type="submit" value="save & reset data" id="save" name="save">
                    </div>
                    <div>
                        @foreach($totalscore as $key => $data)
                            <table id="table" style="width: 50%">
                                <tbody>
                                <tr style="font-weight: bolder">
                                    <td>Datum</td>
                                    <td>Gryffindor</td>
                                    <td>Slytherin</td>
                                    <td>Hufflepuff</td>
                                    <td>Ravenclaw</td>
                                </tr>
                                <tr>
                                    <td>{{$data->date}}</td>
                                    <td>{{$data->total_gryf}}</td>
                                    <td>{{$data->total_slyth}}</td>
                                    <td>{{$data->total_huffle}}</td>
                                    <td>{{$data->total_raven}}</td>
                                </tr>
                                </tbody>
                            </table>
                            @endforeach
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection