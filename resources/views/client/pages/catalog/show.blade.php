@extends('client.layout.site')
@section('subhead')
    <title>{{$product->language(app()->getLocale())? $product->language(app()->getLocale())->meta_title: $product->language()->meta_title}}</title>
    <meta name="description"
          content="{{$product->language(app()->getLocale())? $product->language(app()->getLocale())->meta_description: $product->language()->meta_description}}">
@endsection

@section('wrapper')
    <section class="every_showcase product_title">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">@lang('client.home') - @lang('client.catalog')
                    - {{$product->language(app()->getLocale())? $product->language(app()->getLocale())->title: $product->language()->title}}
                </div>
                <div class="title">
                    {{$product->language(app()->getLocale())? $product->language(app()->getLocale())->title: $product->language()->title}}
                </div>
            </div>
        </div>
    </section>

    <section class="product_title_section">
        <div class="flex">
            <div class="img">
                <img src="{{url(count($product->files)? $product->files[0]->path.'/'.$product->files[0]->title : '')}}" alt="">
            </div>
            <div class="info">
                <div class="title">{{$product->language(app()->getLocale())? $product->language(app()->getLocale())->title: $product->language()->title}}</div>
                <div class="title">{{number_format($product->price/100)}}</div>
                @foreach($product->features as $feature)
                    <p class="p"><b>
                            {{$feature->feature->language(app()->getLocale())? $feature->feature->language(app()->getLocale())->title: $feature->feature->language()->title}}

                        </b>
                        @foreach($feature->answers()->get() as $key => $answer)
                            @if($key > 0)
                                ,
                            @endif
                        {{$answer->language(app()->getLocale())? $answer->language(app()->getLocale())->title: $answer->language()->title}}
                        @endforeach
                    </p>
                @endforeach
            </div>
        </div>
        <div class="description">
            <div class="title">@lang('client.description')</div>
            <p class="p">{{$product->language(app()->getLocale())? $product->language(app()->getLocale())->description: $product->language()->description}}</p>
        </div>
    </section>
@endsection