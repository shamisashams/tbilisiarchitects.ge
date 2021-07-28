@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.about_us_meta_title')</title>
    <meta name="description"
          content="@lang('client.about_us_meta_description')">
@endsection
@section('social_media')
    <div class="social_media flex">
        <a href="https://{{$facebook->language(app()->getLocale())? $facebook->language(app()->getLocale())->value: $facebook->language()->value}}">
            <img src="/client/img/icons/sm/1.png" alt=""/>
        </a>
        <a href="https://{{$twitter->language(app()->getLocale())? $twitter->language(app()->getLocale())->value: $twitter->language()->value}}">
            <img src="/client/img/icons/sm/2.png" alt=""/>
        </a>
        <a href="https://{{$instagram->language(app()->getLocale())? $instagram->language(app()->getLocale())->value: $instagram->language()->value}}">
            <img src="/client/img/icons/sm/3.png" alt=""/>
        </a>
    </div>
@endsection

@section('wrapper')
    <div class="about_content">
        <p> @lang('client.about_page')</p>
    </div

@endsection
