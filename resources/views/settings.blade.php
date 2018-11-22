@extends('layouts.Welcome')
@section('content')
    <div class="container">
        <div class="row ">
            <form class="save" action="{{url ('/settings')}}" method="post">
                {{ csrf_field() }}
                <div class="col">
                    <div id="">
                        <input type="submit" value="save & reset data" id="save" name="save">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection