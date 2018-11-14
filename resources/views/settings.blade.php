@extends('layouts.Welcome')
@section('content')
    <div class="container">
        <div class="row ">
            <form class="save" action="{{url ('/settings')}}" method="post">
                {{ csrf_field() }}
                <div class="col">
                    <div id="">
                        <input type="submit" value="save & reset data" id="save">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(".save".on("submit", function () {
            return confirm("Are you sure");
        }))
    </script>
@endsection