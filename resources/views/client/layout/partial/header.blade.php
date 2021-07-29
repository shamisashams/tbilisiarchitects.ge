<div class="languages">
    <div>{{$localizations['current']['title']}}</div>
    <div class="drop">
        @foreach($localizations['data'] as $localization)
            <a href="{{$localization['url']}}">{{$localization['title']}}</a>
        @endforeach
    </div>
</div>
<a href="{{locale_route('home.index')}}" class="logo">
    <img src="/client/img/logo/1.png" alt=""/>
</a>
@yield('social_media')
<div class="navbar flex center">
    <a href="{{locale_route('home.index')}}" class="nav_item {{request()->path() =="" || request()->path()==\App\Models\Language::getLocaleById(app()->getLocale())||str_contains(request()->path(),substr(parse_url(locale_route('client.news.index'), PHP_URL_PATH), 1))?"active":""}}">@lang('client.news')</a>
    <a href="{{locale_route('client.project.index')}}" class="nav_item {{str_contains(request()->path(),substr(parse_url(locale_route('client.project.index'), PHP_URL_PATH), 1))?"active":""}}">@lang('client.projects')</a>
    <a href="{{locale_route('client.about')}}" class="nav_item {{str_contains(request()->path(),substr(parse_url(locale_route('client.about'), PHP_URL_PATH), 1))?"active":""}}">@lang('client.about')</a>
    <a href="{{locale_route('client.contact')}}" class="nav_item {{str_contains(request()->path(),substr(parse_url(locale_route('client.contact'), PHP_URL_PATH), 1))?"active":""}}">@lang('client.contact')</a>
</div>
