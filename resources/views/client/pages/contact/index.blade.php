@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.contact_us_meta_title')</title>
    <meta name="description"
          content="@lang('client.contact_us_meta_description')">
@endsection

@section('wrapper')
    <section class="every_showcase contact">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">@lang('client.home') - @lang('client.contact_us')</div>
                <div class="title">
                    @lang('client.contact_us')
                </div>
            </div>
        </div>
    </section>
    {!! Form::open(['url' => locale_route('contact.index'),'method' =>'post',]) !!}

    <section class="contact_section flex wrapper">
        <div class="left">
            <div class="all_titles">
                <div class="s">@lang('client.contact_with_us')</div>
                <div class="l">@lang('client.drop_us_a_message')</div>
            </div>
            <p class="para">@lang('client.its_at_contact_paragraph')</p>
        </div>
        <div class="form flex">
            <div>
                <input name="full_name" type="text" placeholder="@lang('client.Full_name')">
                <input name="email" type="text" placeholder="@lang('client.email_address')">
                <input name="phone" type="text" placeholder="@lang('client.phone_number')">
                <input name="subject" type="text" placeholder="@lang('client.subjects')">
            </div>
            <div>
                <textarea name="message" placeholder="@lang('client.write_a_language')"></textarea>
                <button type="submit" class="send">@lang('client.send_message')</button>
            </div>
        </div>

    </section>
    {!! Form::close() !!}
    <section class="map_city wrapper flex">
        <div class="offices">
            <div class="title">@lang('client.the_office')</div>
            <a href="{{$gaddress->language(app()->getLocale())? $gaddress->language(app()->getLocale())->value: $gaddress->language()->value}}"
               class="address flex">
                <img src="/client/img/icons/info/1.png" alt="">
                <div>
                    {{$gaddress->language(app()->getLocale())? $gaddress->language(app()->getLocale())->value: $gaddress->language()->value}}
                </div>
            </a>
            <a href="{{$gphone->language(app()->getLocale())? $gphone->language(app()->getLocale())->value: $gphone->language()->value}}"
               class="address flex">
                <img src="/client/img/icons/info/2.png" alt="">
                <div>
                    {{$gphone->language(app()->getLocale())? $gphone->language(app()->getLocale())->value: $gphone->language()->value}}
                </div>
            </a>
            <a href="{{$gphone->language(app()->getLocale())? $gphone->language(app()->getLocale())->value: $gphone->language()->value}}"
               class="address flex">
                <img src="/client/img/icons/info/3.png" alt="">
                <div>
                    {{$gemail->language(app()->getLocale())? $gemail->language(app()->getLocale())->value: $gemail->language()->value}}
                </div>
            </a>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.5709183071485!2d44.78158521575435!3d41.729776982661456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472c45d46f385%3A0xe483c8175396f7b1!2z4YOb4YOQ4YOm4YOQ4YOW4YOY4YOQIE4xMCwg4YOh4YOQ4YOV4YOQ4YOt4YOg4YOdIOGDquGDlOGDnOGDouGDoOGDmCDhg5vhg5Thg5Lhg5Dhg5rhg5Dhg5jhg5zhg5g!5e0!3m2!1sen!2sge!4v1624444949826!5m2!1sen!2sge" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="offices">
            <div class="title">@lang('client.the_office')</div>
            <a href="{{$gaddress2->language(app()->getLocale())? $gaddress2->language(app()->getLocale())->value: $gaddress2->language()->value}}" class="address flex">
                <img src="/client/img/icons/info/1.png" alt="">
                <div>
                    {{$gaddress2->language(app()->getLocale())? $gaddress2->language(app()->getLocale())->value: $gaddress2->language()->value}}
                </div>
            </a>
            <a href="{{$gphone2->language(app()->getLocale())? $gphone2->language(app()->getLocale())->value: $gphone2->language()->value}}" class="address flex">
                <img src="/client/img/icons/info/2.png" alt="">
                <div>
                    {{$gphone2->language(app()->getLocale())? $gphone2->language(app()->getLocale())->value: $gphone2->language()->value}}
                </div>
            </a>
            <a href="{{$gemail2->language(app()->getLocale())? $gemail2->language(app()->getLocale())->value: $gemail2->language()->value}}" class="address flex">
                <img src="/client/img/icons/info/3.png" alt="">
                <div>
                    {{$gemail2->language(app()->getLocale())? $gemail2->language(app()->getLocale())->value: $gemail2->language()->value}}
                </div>
            </a>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2976.544979807585!2d44.779345815754965!3d41.75190648128019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472869b84ff19%3A0x1955af56cfb527!2s1%20Tornike%20Eristavi%20St%2C%20T&#39;bilisi!5e0!3m2!1sen!2sge!4v1624445006471!5m2!1sen!2sge" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="offices">
            <div class="title">@lang('client.the_office')</div>
            <a href="{{$gaddress3->language(app()->getLocale())? $gaddress3->language(app()->getLocale())->value: $gaddress3->language()->value}}"
               class="address flex">
                <img src="/client/img/icons/info/1.png" alt="">
                <div>
                    {{$gaddress3->language(app()->getLocale())? $gaddress3->language(app()->getLocale())->value: $gaddress3->language()->value}}
                </div>
            </a>
            <a href="{{$gphone3->language(app()->getLocale())? $gphone3->language(app()->getLocale())->value: $gphone3->language()->value}}"
               class="address flex">
                <img src="/client/img/icons/info/2.png" alt="">
                <div>
                    {{$gphone3->language(app()->getLocale())? $gphone3->language(app()->getLocale())->value: $gphone3->language()->value}}
                </div>
            </a>
            <a href="{{$gemail3->language(app()->getLocale())? $gemail3->language(app()->getLocale())->value: $gemail3->language()->value}}"
               class="address flex">
                <img src="/client/img/icons/info/3.png" alt="">
                <div>
                    {{$gemail3->language(app()->getLocale())? $gemail3->language(app()->getLocale())->value: $gemail3->language()->value}}
                </div>
            </a>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d745.3913551886286!2d41.64078027372467!3d41.64352406722804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40678617a675f503%3A0x7a96726aab6c6836!2sBatumi%20Bazaar%2C%2037%20Pushkin%20St%2C%20Batumi%2C%20Georgia!5e0!3m2!1sen!2sus!4v1624445248554!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            </div>
        </div>
    </section>
@endsection