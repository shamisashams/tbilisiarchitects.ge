@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.contact_us_meta_title')</title>
    <meta name="description"
          content="@lang('client.contact_us_meta_description')">
@endsection

@section('wrapper')
    <div class="contact_content flex center">
        <p> {{$gcontactTitle->language(app()->getLocale())? $gcontactTitle->language(app()->getLocale())->value: $gcontactTitle->language()->value}}</p>
        <a href="#">{{$gaddress->language(app()->getLocale())? $gaddress->language(app()->getLocale())->value: $gaddress->language()->value}}</a>
        <a href="#">{{$gphone->language(app()->getLocale())? $gphone->language(app()->getLocale())->value: $gphone->language()->value}}</a>
        <a href="#"> {{$gemail->language(app()->getLocale())? $gemail->language(app()->getLocale())->value: $gemail->language()->value}}</a>
        <div class="flex center">
            <a href="#"><img src="/client/img/icons/sm/1.png" alt="" /></a>
            <a href="#"><img src="/client/img/icons/sm/2.png" alt="" /></a>
            <a href="#"><img src="/client/img/icons/sm/3.png" alt="" /></a>
        </div>
    </div>
@endsection
