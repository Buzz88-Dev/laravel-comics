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
                    <p>{{ $film['description'] }}</p>
                </div>

                <div class="image">
                    <img src="{{ asset('img/adv.jpg')}}" alt="">
                </div>

            </div>
        </div>

    </div>

@endsection
