@if ($paginator->hasPages())
    <div class="gdlr-core-pagination  gdlr-core-style-circle gdlr-core-left-align gdlr-core-item-pdlr">
            @if ($paginator->onFirstPage())

            @else
                <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev"></a>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="disabled">{{ $element }}</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span aria-current='page' class='page-numbers current'>{{ $page }}</span>
                        @else
                            <span class="page-numbers"><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></span>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next"></a>
            @else

            @endif
    </div>
@endif