@extends('layouts.app')

@include('layouts.meta', [
    'title' => 'Blog',
    'description' => 'description',
    'keywords' => 'keywords'
])

@section('content')
    <input type="hidden" id="user_name" value="{{ Auth::user() }}">
    <chat></chat>
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                {{--<div class="panel panel-default">--}}
                    {{--Chats--}}
                {{--</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<chat-messages :messages="messages"></chat-messages>--}}
                {{--</div>--}}
                {{--<div class="panel-footer">--}}
                    {{--<chat-form--}}
                    {{--v-on:messagesent="addMessage"--}}
                    {{--:user="{{ Auth::user() }}"--}}
                    {{--></chat-form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection()
