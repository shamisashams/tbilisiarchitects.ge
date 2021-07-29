@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.news_meta_title')</title>
    <meta name="description"
          content="@lang('client.news_meta_description')">
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

<div class="project_page">
    <div class="project_grid">
        @foreach($news as $singleNews)
            <a href="{{locale_route('news.details',$singleNews->id)}}" class="item">
                <div class="img">
                    @if(count($singleNews->files)>0)
                        <img src="{{url($singleNews->files[0]->path . '/'.$singleNews->files[0]->title)}}" alt=""/>
                    @else
                        <img src="/noimage.png" alt=""/>
                    @endif
                </div>
                <div
                    class="title">{{$singleNews->language(app()->getLocale())? $singleNews->language(app()->getLocale())->title: $singleNews->language()->title}}</div>
                <div class="paragraph">
                    {!!$singleNews->language(app()->getLocale())? $singleNews->language(app()->getLocale())->title: $singleNews->language()->title!!}
                </div>
            </a>
        @endforeach
    </div>

    {{$news->links('vendor.pagination.custom')}}
    {{--        <div class="pagination_arrows flex center">--}}
    {{--            <button><img src="/client/img/icons/arrows/1.png" alt=""/></button>--}}
    {{--            <button><img src="/client/img/icons/arrows/2.png" alt=""/></button>--}}
    {{--        </div>--}}
    {{--        <div class="pagination">--}}
    {{--            <span class="current">1</span> / <span class="total">10</span>--}}
    {{--        </div>--}}
</div>


@endsection

