@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.sitemap_meta_title')</title>
    <meta name="description"
          content="@lang('client.sitemap_meta_description')">
@endsection

@section('wrapper')
    <section class="every_showcase sitemap">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">@lang('client.home') - @lang('client.sitemap')</div>
                <div class="title">@lang('client.sitemap')</div>
            </div>
        </div>
    </section>

    <section class="sitemap_section wrapper">
        <div class="all_titles">
            <div class="s">@lang('client.sitemap')</div>
            <div class="l">@lang('client.our_sitemap')</div>
        </div>
        <div class="mapss flex">
            <div class="columns">
                <a href="#" class="cat">Category</a>
                <a href="#" class="sub_cat">Category</a>
                <div class="items">
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                </div>
            </div>
            <div class="border"></div>
            <div class="columns">
                <a href="#" class="cat">Category</a>
                <a href="#" class="sub_cat">Category</a>
                <div class="items">
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                </div>
            </div>
            <div class="border"></div>
            <div class="columns">
                <a href="#" class="cat">Category</a>
                <a href="#" class="sub_cat">Category</a>
                <div class="items">
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                    <a href="#">Category</a>
                </div>
            </div>
            <div class="border"></div>
        </div>
    </section>
@endsection