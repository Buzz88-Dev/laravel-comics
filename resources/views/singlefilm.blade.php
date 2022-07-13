@extends('templates_base.base')

@section('pageTitle', $pageTitle)

@section('contentMain')

    <div>
        <div class="single_film">
            <div class="current-film">
                <img src="{{ $film['thumb'] }}"}>
            </div>

            <div class="container">

                <div class="text">
                    <h3>{{ $film['title'] }}</h3>
                    <p class="long_text">{{ $film['description'] }}</p>
                </div>

                <div class="image">
                    <img src="{{ asset('img/adv.jpg')}}" alt="">
                </div>

            </div>
        </div>
    </div>

    <div class="grey">
        <div class="text_blue">

            <div class="text_blue_left">
                <h5>Talent</h5>
                <hr>
                <div class="artist">
                    <p class="artist_title">Art by:</p>
                    <p class="artist_name">
                        @foreach ($film['artists'] as $artist)
                            {{ $artist }},
                        @endforeach
                    </p>
                </div>
                <hr>
                <div class="writers">
                    <p class="writers_title">Arty by:</p>
                    <p class="writers_name">
                        @foreach ($film['writers'] as $writer)
                            {{ $writer }},
                        @endforeach
                    </p>
                </div>

            </div>

            <div class="text_blue_right">
                <h5>Specs</h5>
                <hr>
                <div class="series">
                    <p class="first">Series:</p>
                    <p class="second">{{ $film['series'] }}</p>
                </div>

                <hr>
                <div class="price">
                    <p class="first">U.S. Price:</p>
                    <p class="second">{{ $film['price'] }}</p>
                </div>

                <hr>
                <div class="sale_date">
                    <p class="first">On Sale Date:</p>
                    <p class="second">{{ $film['sale_date'] }}</p>
                </div>
            </div>

        </div>
    </div>

@endsection
