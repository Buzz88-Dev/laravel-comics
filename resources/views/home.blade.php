@extends('templates_base.base')

@section('pageTitle', $pageTitle)

@section('contentMain')
    <div class="main_home">

        <div class="current-series">CURRENT SERIES</div>

        <ul class="title">
            @foreach ($arrFilms as $link)
            {{-- @dd($arrFilms); --}}
            <li class="container_serie">
                {{-- ANALIZZARE href --}}
                <a href="/{{ $link['id'] }}">
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
