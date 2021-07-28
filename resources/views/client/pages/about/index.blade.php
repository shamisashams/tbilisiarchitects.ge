@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.about_us_meta_title')</title>
    <meta name="description"
          content="@lang('client.about_us_meta_description')">
@endsection

@section('wrapper')
    <div class="about_content">
        <p> @lang('client.about_page')</p>
    </div

@endsection
