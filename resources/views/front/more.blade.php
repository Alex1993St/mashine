@extends('layouts.app')
@section('content')
    <div class="container-wrap">
        <div id="fh5co-about">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center heading-section">
                    <h3>{{ $blog[0]['title'] }}</h3>
                    <p>{{ $blog[0]['short_text'] }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center animate-box">
                    <p><img src="/uploads/{{ $blog[0]['img'] }}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
                </div>
                <div class="col-md-8 col-md-offset-2 text-center animate-box">
                    <div class="about-desc">
                        {{ $blog[0]['description'] }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
