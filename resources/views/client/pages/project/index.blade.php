@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.project_meta_title')</title>
    <meta name="description"
          content="@lang('client.project_meta_description')">
@endsection
@section('wrapper')
    <section class="every_showcase projects">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">@lang('client.home') - @lang('client.project')</div>
                <div class="title">@lang('client.projects')</div>
            </div>
        </div>
    </section>
    <section class="projects_page wrapper flex">
        <div class="filters">
            <div class="city">@lang('client.city')</div>
            <button onclick="location.href = '{{locale_route('client.project.index')}}'"
                    class="project_filter {{Request::get('city') ? '' : 'active'}}">@lang('client.all')</button>
            @foreach($cities as $city)
                <button onclick="location.href = '{{locale_route('client.project.index')}}?city={{$city->id}}'"
                        class="project_filter {{Request::get('city') == $city->id ? 'active' : ''}}">
                    {{$city->language(app()->getLocale())? $city->language(app()->getLocale())->title: $city->language()->title}}
                </button>
            @endforeach
        </div>
        <div class="pgdiv">
            <div class="title">@lang('client.projects')</div>
            <div class="project_grid_tab active">
                @foreach($projects as $project)
                    <div class="project_view_pp">
                        <img src="{{url(count($project->files) ? $project->files[0]->path . '/'.$project->files[0]->title : '')}}"
                             alt="">
                        <div class="cap">
                            <span>
                            {{$project->city->language(app()->getLocale())? $project->city->language(app()->getLocale())->title: $project->city->language()->title}}
                            </span>
                            {{$project->language(app()->getLocale())? $project->language(app()->getLocale())->title: $project->language()->title}}
                        </div>
                    </div>
                @endforeach


            </div>
            {{ $projects->appends(request()->input())->links('client.pagination') }}
        </div>
    </section>

    @foreach($projects as $project)
        <div class="project_popup">
            <button class="close_popup">
                <img src="/client/img/icons/other/close.svg" alt="">
            </button>
            <div class="main_img_placeholder">
                @foreach($project->files as $key => $file)
                    <div class="popup_main_img {{$key === 0 ? 'active' : ''}}">
                        <img src="{{url($file->path . '/'.$file->title)}}" alt="">
                        <div class="caption flex">
                            {{$project->language(app()->getLocale())? $project->language(app()->getLocale())->title: $project->language()->title}}
                        </div>
                    </div>
                @endforeach
            </div>
            <div>
                @foreach($project->files as $key => $file)
                    <div class="img_options {{$key === 0 ? 'active' : ''}}">
                        <img src="{{url($file->path . '/'.$file->title)}}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection