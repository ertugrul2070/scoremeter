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
                    <table>
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->lastname}}</td>
                            <td>{{$data->score}}</td>
                        </tr>
                    </table>
                @endforeach


            </div>
            <div class="col">
                <div id="Slytherin2"></div>
                <h2>Slytherin</h2>

                @foreach($participants2 as $key => $data)
                    <table>
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->lastname}}</td>
                            <td>{{$data->score}}</td>
                        </tr>
                    </table>@endforeach

            </div>
            <div class="col">
               <div id="Hufflepuff3"></div>
                <h2>Hufflepuff</h2>

                @foreach($participants3 as $key => $data)
                    <table>
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->lastname}}</td>
                            <td>{{$data->score}}</td>
                        </tr>
                    </table>
                @endforeach

            </div>
            <div class="col">
              <div id="Ravenclaw4"></div>
                <h2>Ravenclaw</h2>

                @foreach($participants4 as $key => $data)
                    <table>
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->lastname}}</td>
                            <td>{{$data->score}}</td>
                        </tr>
                    </table>
                @endforeach

            </div>
            </form>
        </div>
    </div>



<script src="{{mix('js/app.js')}}"></script>
@endsection