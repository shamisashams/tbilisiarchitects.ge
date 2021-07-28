@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.certificate_meta_title')</title>
    <meta name="description"
          content="@lang('client.certificate_meta_description')">
@endsection

@section('wrapper')

    <section class="every_showcase certificates">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">@lang('client.home') - @lang('client.certificates')</div>
                <div class="title">@lang('client.certificates')</div>
            </div>
        </div>
    </section>

    <section class="certificate_body wrapper">
        <div class="all_titles">
            <div class="s">@lang('client.certificates')</div>
            <div class="l">@lang('client.certificates')</div>
        </div>
        <div class="main_certificates">
            @foreach($certificates as $certificate)
                <div class="cert_doc">
                    <img src="{{url(count($certificate->files)? $certificate->files[0]->path.'/'.$certificate->files[0]->title : '')}}" alt="">
                    <a href="{{url(count($certificate->files)? $certificate->files[0]->path.'/'.$certificate->files[0]->title : '')}}"><button class="pdf"><img src="/client/img/icons/other/pdf.png" alt=""></button></a>
                    <a href="{{url(count($certificate->files)? $certificate->files[0]->path.'/'.$certificate->files[0]->title : '')}}" class="magnify"><img src="/client/img/icons/other/zoom.png" alt=""></a>
                    <div class="cap roboto">
                        {{$certificate->language(app()->getLocale())? $certificate->language(app()->getLocale())->title: $certificate->language()->title}}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="all_titles">
            <div class="l">@lang('client.Fire_certificates')</div>
        </div>
        <div class="main_certificates fire_certificates">
            @foreach($fireCertificates as $certificate)
                <div class="cert_doc">
                    <img src="{{url(count($certificate->files)? $certificate->files[0]->path.'/'.$certificate->files[0]->title : '')}}" alt="">
                    <a href="{{url(count($certificate->files)? $certificate->files[0]->path.'/'.$certificate->files[0]->title : '')}}"><button class="pdf"><img src="/client/img/icons/other/pdf.png" alt=""></button></a>
                    <a href="{{url(count($certificate->files)? $certificate->files[0]->path.'/'.$certificate->files[0]->title : '')}}" class="magnify"><img src="/client/img/icons/other/zoom.png" alt=""></a>
                    <div class="cap roboto">
                        {{$certificate->language(app()->getLocale())? $certificate->language(app()->getLocale())->title: $certificate->language()->title}}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection