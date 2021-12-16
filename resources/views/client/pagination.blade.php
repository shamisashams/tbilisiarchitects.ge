{{--@dd($paginator)--}}
@if($paginator->hasPages())

    <div class="pagination_frac">
        <span>{{$paginator->currentPage()}}</span>/<span>{{$paginator->lastPage()}}</span>
    </div>
    <div class="pagination_arrow">
        <div class=" arrows">
            @if ($paginator->onFirstPage())
                <button>
                    <img src="/client/img/icons/arrows/1.png" onclick="return false;" alt=""/>
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}">
                    <button>
                        <img src="/client/img/icons/arrows/1.png" alt=""/>
                    </button>
                </a>
                {{--                <button class="flex center arrows">--}}
                {{--                    <img src="/img/icons/pagination/2.png" alt=""/>--}}
                {{--                </button>--}}
            @endif
            {{--             Pagination Elements--}}
            @foreach ($elements as $element)
                {{--                 Array Of Links--}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <button class=" num active"><a href="" onclick="return false;">{{$page}}</a></button>

                        @else
                            <button class="num"><a href="{{$url}}">{{$page}}</a></button>

                        @endif
                    @endforeach
                @endif
            @endforeach
            {{--             Next Page Link--}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}">
                    <button>
                        <img src="/client/img/icons/arrows/2.png" alt=""/>
                    </button>
                </a>
            @else
                <a href="" onclick="return false;">
                    <button>
                        <img src="/client/img/icons/arrows/2.png" onclick="return false;" alt=""/>
                    </button>

                </a>
            @endif
        </div>

    </div>

@else
    <div class="pagination_arrow">
        <div class=" arrows">
            <button>
                <img src="/client/img/icons/arrows/1.png" onclick="return false;" alt=""/>
            </button>
            <button>
                <img src="/client/img/icons/arrows/2.png" onclick="return false;" alt=""/>
            </button>
        </div>
    </div>
    <div class="pagination_frac">
        <span>{{$paginator->currentPage()}}</span>/<span>{{$paginator->lastPage()}}</span>
    </div>
@endif
