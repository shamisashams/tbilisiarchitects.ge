@extends('client.layout.main')

@section('head')
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="/client/style.css" />
    <title>Tbilisi Architect</title>
    @yield('subhead')
@endsection

@section('content')
    @include('client.layout.partial.header')

    @yield('wrapper')

    <script
            type="text/javascript"
            src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
            type="text/javascript"
            src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
            type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="{{asset('client/general.js')}}"></script>
    <script src="{{asset('client/slide.js')}}"></script>
    <script src="{{asset('client/heroslide.js')}}"></script>
@endsection

