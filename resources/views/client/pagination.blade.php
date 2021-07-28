@if($paginator->hasPages())
    <div class="pagination flex">
        <button class="btn" id="prev_pag">
            @lang('client.previous')
        </button>
        <div class="pagination_slider">
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page === $paginator->currentPage())
                            <a class="page_num active">{{$page}}</a>
                        @else
                           <a href="{{$url}}" class="page_num">{{$page}}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>
        <button class="btn" id="next_pag">@lang('client.next')</button>
    </div>
@endif
