<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
        var auto_refresh1 = setInterval(
            function () {
                $('#total').load('<?php echo url('/totaldata');?>').fadeIn("slow");
            },100);

        var auto_refresh2 = setInterval(
            function () {
                $('#total1').load('<?php echo url('/totalsly');?>').fadeIn("slow");
            },100);

        var auto_refresh3 = setInterval(
            function () {
                $('#total2').load('<?php echo url('/totalhuff');?>').fadeIn("slow");
            },100);

        var auto_refresh4 = setInterval(
            function () {
                $('#total3').load('<?php echo url('/totalra');?>').fadeIn("slow");
            },100);

        auto_refresh1();
        auto_refresh2();
        auto_refresh3();
        auto_refresh4();
    </script>
</head>
@extends('layouts.total')

@section('content')
    <div class="container">
        <div class="row ">
            <form class="" action="{{url ('/players')}}" method="post">
                {{ csrf_field() }}
                <div class="team-wrapper">
                <div class="section1">
                <div class="col">
                    <div id="Gryffindor1">
                        <h2 id="teamName">Gryffindor</h2>
                        <img src="https://trello-attachments.s3.amazonaws.com/5ba38b137a90a55a3c4955e1/5bd7748a56a98b0ba36f6bbd/9349e53ad34d2b97164ba4db99cd7569/gryffindor.png">
                        <div id="total">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div id="Slytherin2">
                        <h2 id="teamName">Slytherin</h2>
                        <img src="https://trello-attachments.s3.amazonaws.com/5ba38b137a90a55a3c4955e1/5bd77494c273ed0ca7a8ffcf/584264f7e2bc24c062758c2dbbfb0be0/slytherin.png">
                        <div id="total1">
                        </div>
                    </div>
                </div>
            </div>

            <div class="section2">
                <div class="col">
                    <div id="Hufflepuff3">
                        <h2 id="teamName">Hufflepuff</h2>
                        <img src="https://trello-attachments.s3.amazonaws.com/5ba38b137a90a55a3c4955e1/5bd7749cfd202140c323514f/a0a07137f5171211bd6a1bffdb45a218/hufflepuff.png">
                        <div id="total2">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div id="Ravenclaw4">
                        <h2 id="teamName">Ravenclaw</h2>
                        <img src="https://trello-attachments.s3.amazonaws.com/5ba38b137a90a55a3c4955e1/5bd774a35eff9f34536e0d7b/dd34438282516d5bd2ef6df0e2db5599/ravenclaw.png">
                                <div id="total3">
                                </div>
                    </div>
                </div>
            </div>
        </div>
            </form>
        </div>
    </div>

    <script src="{{mix('js/app.js')}}"></script>

@endsection
