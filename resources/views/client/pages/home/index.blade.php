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
    <div class="news_page">
        <button class="arr" id="prev_news">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="23.616"
                height="13.503"
                viewBox="0 0 23.616 13.503"
            >
                <path
                    id="dsssss"
                    d="M18,15.317l8.93,8.937a1.681,1.681,0,0,0,2.384,0,1.7,1.7,0,0,0,0-2.391L19.2,11.738a1.685,1.685,0,0,0-2.327-.049L6.68,21.856a1.688,1.688,0,0,0,2.384,2.391Z"
                    transform="translate(-6.188 -11.246)"
                />
            </svg>
        </button>
        <div class="news_vertical_slider flex center">
            @foreach($news as $key=>$singleNews)
                <div class="slide">
                    <div class="img">
                        @if(count($singleNews->files)>0)
                            <img src="{{url($singleNews->files[0]->path . '/'.$singleNews->files[0]->title)}}" alt=""/>
                        @else
                            <img src="/noimage.png" alt=""/>
                        @endif
                    </div>
                    <a class="title" style="outline: none" href="{{locale_route('news.details',$singleNews->id)}}">
                        {{$singleNews->language(app()->getLocale())? $singleNews->language(app()->getLocale())->title: $singleNews->language()->title}}
                    </a>
                    <div class="paragraph">
                        {{$singleNews->language(app()->getLocale())? $singleNews->language(app()->getLocale())->description: $singleNews->language()->description}}
                    </div>
                    @if($key==count($news)-1)
                        <a href="{{locale_route('client.news.index')}}" class="see_all">See all</a>
                    @else
                        <a href="{{locale_route('client.news.index')}}" class="see_all" style="opacity: 0">See all</a>
                    @endif
                </div>
            @endforeach
        </div>
        <button class="arr" id="next_news">
            <svg
                style="transform: rotate(180deg); transform-origin: center"
                xmlns="http://www.w3.org/2000/svg"
                width="23.616"
                height="13.503"
                viewBox="0 0 23.616 13.503"
            >
                <path
                    id="dsssss"
                    d="M18,15.317l8.93,8.937a1.681,1.681,0,0,0,2.384,0,1.7,1.7,0,0,0,0-2.391L19.2,11.738a1.685,1.685,0,0,0-2.327-.049L6.68,21.856a1.688,1.688,0,0,0,2.384,2.391Z"
                    transform="translate(-6.188 -11.246)"
                />
            </svg>
        </button>
    </div>
@endsection
