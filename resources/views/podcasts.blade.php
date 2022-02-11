@extends('layouts.template')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/podcasts.css') }}">
    <div class="podcasts">
        <h1>PODCASTS</h1>
        <div class="separadorBlanco"></div>
        <div class="podcast">
                <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
                <div>
                    <div>
                        <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                    </div>
                    <audio controls="controls">
                        <source src="#" type="audio/mpeg" />
                        Your browser does not support the audio element.
                    </audio>
                </div>
        </div>
        <div class="podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
            <div>
                <div>
                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                </div>
                <audio controls="controls">
                    <source src="#" type="audio/mpeg" />
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
            <div>
                <div>
                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                </div>
                <audio controls="controls">
                    <source src="#" type="audio/mpeg" />
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="podcast">
            <img src="{{ asset('images/provisional-desarrollo/podcast.jpg') }}" alt="">
            <div>
                <div>
                    <h2>PODCAST 1 <span>TEMA PODCAST</span></h2>
                </div>
                <audio controls="controls">
                    <source src="#" type="audio/mpeg" />
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
    </div>
    <div class="controls">
        <button><</button>
        <button>></button>
    </div>
@endsection
