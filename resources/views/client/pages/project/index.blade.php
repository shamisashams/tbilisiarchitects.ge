@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.project_meta_title')</title>
    <meta name="description"
          content="@lang('client.project_meta_description')">
@endsection
@section('wrapper')
    <div class="project_page">
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
                        {!!$project->language(app()->getLocale())? $project->language(app()->getLocale())->title: $project->language()->title!!}
                    </div>
                </a>
            @endforeach
        </div>

        {{$projects->links('vendor.pagination.custom')}}
{{--        <div class="pagination_arrows flex center">--}}
{{--            <button><img src="/client/img/icons/arrows/1.png" alt=""/></button>--}}
{{--            <button><img src="/client/img/icons/arrows/2.png" alt=""/></button>--}}
{{--        </div>--}}
{{--        <div class="pagination">--}}
{{--            <span class="current">1</span> / <span class="total">10</span>--}}
{{--        </div>--}}
    </div>
@endsection
