@extends('layouts.players')

@section('content')
<div class="container">
        <div class="row ">
            <div class="col">
                <div id="Gryffindor"></div>
            </div>
            <div class="col">
                <div id="Slytherin"></div>
            </div>
            <div class="col">
               <div id="Hufflepuff"></div>
            </div>
            <div class="col">
              <div id="Ravenclaw"></div>
            </div>
        </div>
    </div>



<script src="{{mix('js/app.js')}}"></script>
@endsection