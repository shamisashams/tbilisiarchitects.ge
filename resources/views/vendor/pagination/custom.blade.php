<div class="pagination_arrows flex center">
    @if($paginator->hasPages())
        @if ($paginator->onFirstPage())
            <a style="margin-right: 40px" href="" onclick="return false"><img src="/client/img/icons/arrows/1.png" alt=""/></a>
        @else
            <a style="margin-right: 40px" href="{{ $paginator->previousPageUrl() }}"><img src="/client/img/icons/arrows/1.png" alt=""/></a>
        @endif

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"><img src="/client/img/icons/arrows/2.png" alt=""/></a>
        @else
            <a href="" onclick="return false"><img src="/client/img/icons/arrows/2.png" alt=""/></a>
        @endif
        <div class="pagination">
            <span class="current">{{$paginator->currentPage()}}</span> / <span class="total">{{$paginator->lastPage()}}</span>
        </div>
    @endif
</div>
