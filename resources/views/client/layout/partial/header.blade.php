<div class="languages">
    <div>Eng</div>
    <div class="drop">
        <a href="#">Geo</a>
    </div>
</div>

<a href="{{locale_route('home.index')}}" class="logo">
    <img src="/client/img/logo/1.png" alt="" />
</a>
<div class="social_media flex">
    <a href="https://{{$facebook->language(app()->getLocale())? $facebook->language(app()->getLocale())->value: $facebook->language()->value}}">
        <img src="/client/img/icons/sm/1.png" alt="" />
    </a>
    <a href="https://{{$twitter->language(app()->getLocale())? $twitter->language(app()->getLocale())->value: $twitter->language()->value}}">
        <img src="/client/img/icons/sm/2.png" alt="" />
    </a>
    <a href="https://{{$instagram->language(app()->getLocale())? $instagram->language(app()->getLocale())->value: $instagram->language()->value}}">
        <img src="/client/img/icons/sm/3.png" alt="" />
    </a>
</div>
<div class="navbar flex center">
    <a href="{{locale_route('home.index')}}" class="nav_item active">News</a>
    <a href="{{locale_route('client.project.index')}}" class="nav_item">Projects</a>
    <a href="{{locale_route('client.about')}}" class="nav_item">About</a>
    <a href="{{locale_route('client.contact')}}" class="nav_item">Contact</a>
</div>
