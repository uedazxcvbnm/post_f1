@extends('layouts.layout')

@section('title', 'Users Page')

@section('contents')
    @foreach ($users as $user)
        {{ $user }}
        <br>
    @endforeach
@endsection