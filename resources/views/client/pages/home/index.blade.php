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
                    <!-- <a href="{{locale_route('client.news.index')}}" class="see_all">{{__('client.see_all')}}</a> -->
                @else
                    <!-- <a href="{{locale_route('client.news.index')}}" class="see_all" style="opacity: 0">{{__('client.see_all')}}</a> -->
                    @endif
                </div>
            @endforeach
        </div>
        {{ $news->appends(request()->input())->links('client.pagination') }}

{{--        <div class="pagination_arrow">--}}
{{--            <div class=" arrows">--}}
{{--                <button>--}}
{{--                    <img src="/client/img/icons/arrows/1.png" alt=""/>--}}
{{--                </button>--}}
{{--                <button>--}}
{{--                    <img src="/client/img/icons/arrows/2.png" alt=""/>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="pagination_frac">--}}
{{--            <span>01</span>/<span>10</span>--}}
{{--        </div>--}}
    </div>
@endsection
