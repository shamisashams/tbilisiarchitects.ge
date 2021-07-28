@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.principle_meta_title')</title>
    <meta name="description"
          content="@lang('client.principle_meta_description')">
@endsection

@section('wrapper')
    <section class="every_showcase principle">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">@lang('client.home') - @lang('client.principle')</div>
                <div class="title">@lang('client.principle')</div>
            </div>
        </div>
    </section>

    <section class="principle_section wrapper flex">
        <img src="/client/img/other/2.png" alt="">
        <div class="right">
            <div class="all_titles">
                <div class="s">@lang('client.principles')</div>
                <div class="l">@lang('client.our_principles')</div>
            </div>
            <p class="para">@lang('client.principle_section_1')</p>
            <p class="para">@lang('client.principle_section_2')
            </p>
            <p class="para">@lang('client.principle_section_3')
            </p>
            <p class="para">@lang('client.principle_section_4')</p>
        </div>
    </section>
@endsection