<div class="languages">
    <div>Eng</div>
    <div class="drop">
        <a href="#">Geo</a>
    </div>
</div>

<a href="{{locale_route('home.index')}}" class="logo">
    <img src="/client/img/logo/1.png" alt="" />
</a>
@yield('social_media')
<div class="navbar flex center">
    <a href="{{locale_route('home.index')}}" class="nav_item active">@lang('client.news')</a>
    <a href="{{locale_route('client.project.index')}}" class="nav_item">@lang('client.projects')</a>
    <a href="{{locale_route('client.about')}}" class="nav_item">@lang('client.about')</a>
    <a href="{{locale_route('client.contact')}}" class="nav_item">@lang('client.contact')</a>
</div>
