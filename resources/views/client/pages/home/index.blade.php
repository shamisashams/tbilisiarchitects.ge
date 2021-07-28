@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.home_meta_title')</title>
    <meta name="description"
          content="@lang('client.home_meta_description')">
@endsection
@section('wrapper')
    @if(count($sliders))
        <section class="hero_section" id="slider_on_hero">
            @foreach($sliders as $key =>$slider)
                <div class="slides hero_slide {{$key === 0 ? 'current' : ''}} {{!isset($sliders[$key+1]) ? 'last' : ''}}"
                     style="{{$slider->file ? 'background: url('. $slider->file->path.'/'.$slider->file->title.')': 'background: url()'}}"
                >
                    <div class="slide_content wrapper">
                        <div class="title roboto">
                            {{$slider->language(app()->getLocale())? $slider->language(app()->getLocale())->title: $slider->language()->title}}
                        </div>
                        <p class="paragraph">
                            {{$slider->language(app()->getLocale())? $slider->language(app()->getLocale())->description: $slider->language()->description}}
                        </p>
                    </div>
                </div>

            @endforeach
            <button class="arr" id="prev_slide">
                <img src="/client/img/icons/slide/prev.png" alt=""/>
            </button>
            <button class="arr" id="next_slide">
                <img src="/client/img/icons/slide/next.png" alt=""/>
            </button>
            <div class="dots" id="dot_on_sliders">
                @foreach($sliders as $key => $slider)
                    <button class="hero_dot {{$key === 0 ? 'clicked' : ''}}"></button>
                @endforeach
            </div>
        </section>
    @endif
    @if(count($categories))
        <section class="secsec_grid">
            <div class="wrapper grid">
                @foreach($categories as $category)
                    <div class="item_img">
                        <img src="{{url(isset($category->files[0])? $category->files[0]->path.'/'.$category->files[0]->title : '')}}"
                             alt=""/>
                        <div class="the_frame"></div>
                        <div class="box_shadow"></div>
                        <div class="item_content">
                            <div class="color">
                                {{$category->language(app()->getLocale())? $category->language(app()->getLocale())->title: $category->language()->title}}
                            </div>
                            <a href="{{locale_route('catalog.index',$category->slug)}}">
                                <button class="main_btn">
                                    @lang('client.see_all_collection')
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    <section class="finished_projects wrapper flex">
        <div class="left">
            <div class="head roboto">@lang('client.finished') <span>@lang('client.projects')</span></div>
            <div class="view_all">
                <img src="/client/img/projetcs/5.png" alt=""/>
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <button onclick="location.href = '{{locale_route('client.project.index')}}'"
                        class="main_btn">@lang('client.view_all')</button>
            </div>
        </div>
        @if(count($projects))
            <div class="grid">

                @foreach($projects as $project)
                    <div class="finished_grid">
                        <img src="{{count($project->files) ? $project->files[0]->path . '/'. $project->files[0]->title : ''}}"
                             alt=""/>
                        <div class="the_frame"></div>
                        <div class="box_shadow"></div>
                        <button class="main_btn large"
                                onclick="location.href = '{{locale_route('client.project.index')}}?city={{$project->city_id}}'">
                            {{$project->city->language(app()->getLocale())? $project->city->language(app()->getLocale())->title: $project->city->language()->title}}
                        </button>
                    </div>
                @endforeach
            </div>
        @endif

    </section>
@endsection
