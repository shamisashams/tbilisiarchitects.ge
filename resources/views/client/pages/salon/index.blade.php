@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.principle_meta_title')</title>
    <meta name="description"
          content="@lang('client.principle_meta_description')">
@endsection

@section('wrapper')
    <section class="every_showcase salons">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">@lang('client.home') - @lang('client.salons')</div>
                <div class="title">@lang('client.salons')</div>
            </div>
        </div>
    </section>

    <section class="salons_content wrapper">
        <div class="all_titles">
            <div class="s">@lang('client.salons')</div>
            <div class="l">@lang('client.derufa_showrooms_and_dealerships')</div>
        </div>
        <p class="para">@lang("client.derufa_products_can_be_purchased_from_one_of_the_company's_partners.")</p>
        <div class="map">@lang('client.maps')</div>
    </section>

    <section class="map_city wrapper">
        <div class="all_titles">
            <div class="l">@lang('client.salons')</div>
        </div>
        <div class="map_city_flex flex">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.5459583573206!2d44.76741831567833!3d41.7303154826281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472e79d397513%3A0xa743c3c5de72322d!2s40%20Zhiuli%20Shartava%20St%2C%20T&#39;bilisi!5e0!3m2!1sen!2sge!4v1622613082989!5m2!1sen!2sge" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="all_cities">
                <select name="All Cities" id="" class="select line">
                    <option value="cities">All Cities</option>
                    <option value="cities">Georgia, Tbilisi</option>
                    <option value="cities">Georgia, Batumi</option>
                    <option value="cities">Russia, Moscow</option>
                    <option value="cities">Russia, St. Petersburg</option>
                    <option value="cities">Russia, whatev</option>
                </select>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
            </div>
        </div>
    </section>
@endsection