@extends('user')
@section('title')
    laravel
@endsection
@section('content')
    @foreach($_POST as $key=>$value)
        @if($loop->first)
            <p class="text">text1</p>
        @endif
        @if($loop->last)
            <p class="text">text2</p>
        @endif
        <h1>{{$_POST[$key]}}</h1>
    @endforeach
@endsection
