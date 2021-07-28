@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.project_meta_title')</title>
    <meta name="description"
          content="@lang('client.project_meta_description')">
@endsection
@section('wrapper')

    <div class="project_details">
        <div class="project_details_slider">
            <div class="slide">
                <div class="title">{{$project->language(app()->getLocale())? $project->language(app()->getLocale())->title: $project->language()->title}}</div>
                <div class="paragraph">
                    {!!$project->language(app()->getLocale())? $project->language(app()->getLocale())->content: $project->language()->content!!}
                </div>
            </div>
            @foreach($project->files as $file)
                <div class="slide">
                    <div class="img">
                        <img src="{{url($file->path . '/'.$file->title)}}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
        <div class="arrows">
            <button id="prev_content">
                <img src="/client/img/icons/arrows/1.png" alt=""/>
            </button>
            <button id="next_content">
                <img src="/client/img/icons/arrows/2.png" alt=""/>
            </button>
        </div>
        <div class="pagination">
            <span class="current">1</span> / <span class="total">10</span>
        </div>
    </div>

@endsection
