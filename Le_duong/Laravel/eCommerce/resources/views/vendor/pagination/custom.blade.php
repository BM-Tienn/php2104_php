<div class="pagination_rounded">
    @if($paginator->hasPages())
    <ul>
        @if ($paginator->onFirstPage())
            <li class="visible-xs">
                <a href="{{ $paginator->previousPageUrl() }}" class="prev" rel="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i> Prev
                </a>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" class="prev" rel="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i> Prev
                </a>
            </li>
        @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="visible-xs"><span>{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="hidden-xs active"><a href="{{ $url }}">{{$page}}</a></li>
                        @else
                            <li class="hidden-xs"><a href="{{ $url }}">{{$page}}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" class="next" rel="next"> Next <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </li>
        @else
            <li class="visible-xs">
                <a href="#" class="next"> Next <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </li>
        @endif
    </ul>
    @endif
</div>
