@extends('layouts.layout')

@section('title', 'Posts Page')

@section('contents')
    @foreach ($posts as $post)
        {{ $post }}
        <br>
    @endforeach
@endsection