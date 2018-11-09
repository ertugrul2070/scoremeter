@extends('layouts.players')

@section('content')
<div class="container">
        <div class="row ">
            <form class="" action="{{url ('/players')}}" method="post">
                {{ csrf_field() }}
            <div class="col">
                <div id="Gryffindor1"></div>
                <h2>Gryffindor</h2>


                @foreach($participants as $key => $data)
                    {{$data->name}}
                    {{$data->lastname}}
                    {{$data->score}}
                    <input type="submit" value="{{$data->id}}" name="plus"/><br>
                @endforeach



            </div>
            <div class="col">
                <div id="Slytherin2"></div>
                <h2>Slytherin</h2>

                @foreach($participants2 as $key => $data)
                    {{$data->name}}
                    {{$data->lastname}}
                    {{$data->score}}
                    <input type="submit" id="minus" name="minus" value="-">
                    <input type="submit" id="plus" name="plus" value="+"><br>
                @endforeach

            </div>
            <div class="col">
               <div id="Hufflepuff3"></div>
                <h2>Hufflepuff</h2>

                @foreach($participants3 as $key => $data)
                    {{$data->name}}
                    {{$data->lastname}}
                    {{$data->score}}
                    <input type="submit" id="minus" name="minus" value="-">
                    <input type="submit" id="plus" name="plus" value="+"><br>
                @endforeach

            </div>
            <div class="col">
              <div id="Ravenclaw4"></div>
                <h2>Ravenclaw</h2>

                @foreach($participants4 as $key => $data)
                    {{$data->name}}
                    {{$data->lastname}}
                    {{$data->score}}
                    <input type="submit" id="minus" name="minus" value="-">
                    <input type="submit" id="plus" name="plus" value="+"><br>
                @endforeach

            </div>
            </form>
        </div>
    </div>



<script src="{{mix('js/app.js')}}"></script>
@endsection