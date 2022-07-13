@extends('templates_base.base')

@section('pageTitle', $pageTitle)

@section('contentMain')
    <div class="main_home">

        <div class="current-series">CURRENT SERIES</div>

        <ul class="title">
            @foreach ($arrComics as $link)
            <li class="container_serie">
                <a href="/film">
                    <img src="{{ $link['thumb'] }}">
                    <span>{{ $link['series']}}</span>
                </a>
            </li>
            @endforeach
        </ul>

        <div class="load-more">
            <a href="#">LOAD MORE</a>
        </div>
    </div>
@endsection
