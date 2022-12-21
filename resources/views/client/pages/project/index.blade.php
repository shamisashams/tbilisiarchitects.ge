@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.project_meta_title')</title>
    <meta name="description"
          content="@lang('client.project_meta_description')">
@endsection

@section('wrapper')
    <div class="project_page">
        <button class="filterBtn">
           <img style="margin-bottom: -5px;" width="22px" src="/client/img/icons/filter.png" alt=""> @lang('client.filter')
        </button>
        <div class="projectTabs ">
        <button class="closeProjectTabs">
        <img width="10px" src="/client/img/icons/close.png" alt="">
        </button>
            {{--<button class="projectTabBtn active">Current projects</button>
            <button class="projectTabBtn">Apartment buildings</button>
            <button class="projectTabBtn">Individual residental houses</button>--}}
            @foreach($categories as $_category)
                <a href="{{locale_route('client.project.index',$_category->slug)}}" class="projectTabBtn {{$category->id == $_category->id?'active':''}}">{{$_category->language(app()->getLocale())->title}}</a>
            @endforeach
            <!-- <button class="projectTabBtn">Competitions</button>
            <button class="projectTabBtn">Public projects</button>
            <button class="projectTabBtn">Public projects</button>
            <button class="projectTabBtn">Interiors</button> -->
        </div>

        <div class="projectContent active">
            {{--<div class="head">
                {{$category->language()->title}}
            </div>--}}
             <div class="project_grid">
            @foreach($projects as $project)
                <a href="{{locale_route('client.project.details',$project->id)}}" class="item">
                    <div class="img">
                        @if(count($project->files)>0)
                            <img src="{{url($project->files[0]->path . '/'.$project->files[0]->title)}}" alt=""/>
                        @else
                            <img src="/noimage.png" alt=""/>
                        @endif
                    </div>
                    <div class="title">{{$project->language(app()->getLocale())? $project->language(app()->getLocale())->title: $project->language()->title}}</div>
                    <div class="paragraph">
                        {{$project->language(app()->getLocale())? $project->language(app()->getLocale())->description: $project->language()->description}}
                    </div>
                </a>
            @endforeach
        </div>
        </div>
        {{--<div class="projectContent">
            <div class="head">
            Apartment buildings
            </div>
             <div class="project_grid">
            @foreach($projects as $project)
                <a href="{{locale_route('client.project.details',$project->id)}}" class="item">
                    <div class="img">
                        @if(count($project->files)>0)
                            <img src="{{url($project->files[0]->path . '/'.$project->files[0]->title)}}" alt=""/>
                        @else
                            <img src="/noimage.png" alt=""/>
                        @endif
                    </div>
                    <div class="title">{{$project->language(app()->getLocale())? $project->language(app()->getLocale())->title: $project->language()->title}}</div>
                    <div class="paragraph">
                        {{$project->language(app()->getLocale())? $project->language(app()->getLocale())->description: $project->language()->description}}
                    </div>
                </a>
            @endforeach
        </div>
        </div>
        <div class="projectContent">
            <div class="head">
            Individual residental houses
            </div>
             <div class="project_grid">
            @foreach($projects as $project)
                <a href="{{locale_route('client.project.details',$project->id)}}" class="item">
                    <div class="img">
                        @if(count($project->files)>0)
                            <img src="{{url($project->files[0]->path . '/'.$project->files[0]->title)}}" alt=""/>
                        @else
                            <img src="/noimage.png" alt=""/>
                        @endif
                    </div>
                    <div class="title">{{$project->language(app()->getLocale())? $project->language(app()->getLocale())->title: $project->language()->title}}</div>
                    <div class="paragraph">
                        {{$project->language(app()->getLocale())? $project->language(app()->getLocale())->description: $project->language()->description}}
                    </div>
                </a>
            @endforeach
        </div>--}}
        </div>


        {{$projects->links('vendor.pagination.custom')}}
        <div class="social_media flex">
        <a href="https://{{$facebook->language(app()->getLocale())? $facebook->language(app()->getLocale())->value: $facebook->language()->value}}">
            <img src="/client/img/icons/sm/1.png" alt=""/>
        </a>
        <a href="https://{{$twitter->language(app()->getLocale())? $twitter->language(app()->getLocale())->value: $twitter->language()->value}}">
            <img src="/client/img/icons/sm/2.png" alt=""/>
        </a>
        <a href="https://{{$instagram->language(app()->getLocale())? $instagram->language(app()->getLocale())->value: $instagram->language()->value}}">
            <img src="/client/img/icons/sm/3.png" alt=""/>
        </a>
    </div>
{{--        <div class="pagination_arrows flex center">--}}
{{--            <button><img src="/client/img/icons/arrows/1.png" alt=""/></button>--}}
{{--            <button><img src="/client/img/icons/arrows/2.png" alt=""/></button>--}}
{{--        </div>--}}
{{--        <div class="pagination">--}}
{{--            <span class="current">1</span> / <span class="total">10</span>--}}
{{--        </div>--}}
    </div>
@endsection
