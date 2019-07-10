@extends('layouts.app')

@include('layouts.meta', [
    'title' => 'Blog',
    'description' => 'description',
    'keywords' => 'keywords'
])

@section('content')
    <input type="hidden" id="user_name" value="{{ Auth::user() }}">
    <chat></chat>
@endsection()
