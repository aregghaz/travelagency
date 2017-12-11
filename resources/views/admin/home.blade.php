@extends('page.app')

@section('title')
    {{$title}}
@endsection

@section('content')

    <a href="{{ url('/tours') }}">Add tours</a>
    <a href="{{ url('/excursion') }}">Add excursion</a>
@endsection