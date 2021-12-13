@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.home_meta_title')</title>
    <meta name="description"
          content="@lang('client.home_meta_description')">
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
    <div class="project_details">
        <div class="project_details_slider">
            <div class="slide">
                <div
                    class="title">{{$news->language(app()->getLocale())? $news->language(app()->getLocale())->title: $news->language()->title}}</div>
                <div class="paragraph">
                    {!!$news->language(app()->getLocale())? $news->language(app()->getLocale())->content: $news->language()->content!!}
                </div>
            </div>
            @foreach($news->files as $file)
                <div class="slide">
                    <div class="img">
                        <img src="{{url($file->path . '/'.$file->title)}}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
       
    </div>
    <div class="slider_arrows arrows">
        <button id="prev_content">
            <img src="/client/img/icons/arrows/1.png" alt=""/>
        </button>
        <button id="next_content">
            <img src="/client/img/icons/arrows/2.png" alt=""/>
        </button>
    </div>
@endsection
