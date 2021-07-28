@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.timeline_meta_title')</title>
    <meta name="description"
          content="@lang('client.timeline_meta_description')">
@endsection

@section('wrapper')
    <section class="every_showcase timeline">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">@lang('client.home') - @lang('client.timeline')</div>
                <div class="title">@lang('client.timeline')</div>
            </div>
        </div>
    </section>

    <section class="timeline_section wrapper">
        <section class="company_history">
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
    </section>
@endsection