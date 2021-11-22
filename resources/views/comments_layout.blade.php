@extends('layouts.layout')

@section('title', 'Comments Page')

@section('contents')
    @foreach ($comments as $comment)
        {{ $comment }}
        <br>
    @endforeach
    
@endsection