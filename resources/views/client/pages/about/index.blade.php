@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.about_us_meta_title')</title>
    <meta name="description"
          content="@lang('client.about_us_meta_description')">
@endsection

@section('wrapper')
    <section class="every_showcase about">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">Home - About</div>
                <div class="title">About us</div>
            </div>
        </div>
    </section>

    <div class="about_us">
        <section class="learn_more wrapper flex">
            <div class="img">
                <img src="img/about/1.png" alt="">
                <div class="circle roboto">Founded <br> in 1998</div>
            </div>
            <div class="right">
                <div class="all_titles">
                    <div class="s">@lang('client.learn_more_about')</div>
                    <div class="l">@lang('client.Get_to_Know_About')</div>
                </div>
                <div class="experience">@lang('client.We_have_23+_years_of_experiences')</div>
                <p class="para">@lang('client.about_us_description')</p>
            </div>
        </section>
        <section class="company_history wrapper">
            <div class="all_titles">
                <div class="s">@lang('client.company_history')</div>
                <div class="l">@lang('client.timeline')</div>
            </div>

            <div class="history_slide">
                <div class="history_line">
                    <div class="dashed">
                        <div class="year_pin upsidedown a">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">
                                @lang('client.timeline_1_date')
                            </div>
                            <div class="texts event">
                                @lang('client.timeline_1_title')
                            </div>
                        </div>
                        <div class="year_pin b">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">
                                @lang('client.timeline_2_date')
                            </div>
                            <div class="texts event">
                                @lang('client.timeline_2_title')
                            </div>
                        </div>
                        <div class="year_pin upsidedown c">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">
                                @lang('client.timeline_3_date')
                            </div>
                            <div class="texts event">
                                @lang('client.timeline_3_title')
                            </div>
                        </div>
                        <div class="year_pin d">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">
                                @lang('client.timeline_4_date')
                            </div>
                            <div class="texts event">
                                @lang('client.timeline_4_title')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history_line">
                    <div class="dashed">
                        <div class="year_pin upsidedown a">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">
                                @lang('client.timeline_5_date')
                            </div>
                            <div class="texts event">
                                @lang('client.timeline_5_title')
                            </div>
                        </div>
                        <div class="year_pin b">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">
                                @lang('client.timeline_6_date')
                            </div>
                            <div class="texts event">
                                @lang('client.timeline_6_title')
                            </div>
                        </div>
                        <div class="year_pin upsidedown c">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">
                                @lang('client.timeline_7_date')
                            </div>
                            <div class="texts event">
                                @lang('client.timeline_7_title')
                            </div>
                        </div>
                        <div class="year_pin d">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">
                                @lang('client.timeline_8_date')
                            </div>
                            <div class="texts event">
                                @lang('client.timeline_8_title')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history_line">
                    <div class="dashed">
                        <div class="year_pin upsidedown a">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">
                                @lang('client.timeline_9_date')
                            </div>
                            <div class="texts event">
                                @lang('client.timeline_9_title')
                            </div>
                        </div>
                        <div class="year_pin b">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">
                                @lang('client.timeline_10_date')
                            </div>
                            <div class="texts event">
                                @lang('client.timeline_10_title')
                            </div>
                        </div>
                        <div class="year_pin upsidedown c">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">
                                @lang('client.timeline_11_date')
                            </div>
                            <div class="texts event">
                                @lang('client.timeline_11_title')
                            </div>
                        </div>
                        <div class="year_pin d">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">
                                @lang('client.timeline_12_date')
                            </div>
                            <div class="texts event">
                                @lang('client.timeline_12_title')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <img src="/client/img/about/p1.png" alt="" class="pattern1">
        <img src="/client/img/about/p2.png" alt="" class="pattern2">
    </div>

    <section class="company_certificate wrapper">
        <div class="flex">
            <div class="all_titles">
                <div class="s">@lang('client.learn_more_about')</div>
                <div class="l">@lang('client.Get_to_Know_About')</div>
            </div>
            <a href="{{locale_route('client.certificate.index')}}" class="see_more">@lang('client.see_more')</a>
        </div>
        <div class="slide">
            <button id="prev_certify"><img src="/client/img/icons/slide/prev.png" alt=""></button>
            @foreach($certificates as $certificate)
            <div class="company_certificate_slide">
                <div class="certify">
                    <img src="{{url(count($certificate->files)? $certificate->files[0]->path.'/'.$certificate->files[0]->title : '')}}" alt="">
                    <div class="cap roboto">
                        {{$certificate->language(app()->getLocale())? $certificate->language(app()->getLocale())->title: $certificate->language()->title}}
                    </div>
                </div>

            </div>
            @endforeach
            <button id="next_certify"><img src="/client/img/icons/slide/next.png" alt=""></button>
        </div>
    </section>

@endsection