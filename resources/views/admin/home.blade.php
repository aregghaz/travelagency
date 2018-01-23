@extends('page.app')

@section('title')
    {{$title}}
@endsection

@section('content')

    <a  class="btn btn-info" href="{{ url('/tours') }}">Add tours</a>
    <a  class="btn btn-info" href="{{ url('/excursion') }}">Add excursion</a>
@endsection