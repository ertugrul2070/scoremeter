@extends('layouts.header')

@foreach($groups as $key => $data)
    <p>{{$data->group_name}}</p>
@endforeach