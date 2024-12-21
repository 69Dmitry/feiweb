@if ($paginator->hasPages())
    <ul class="pagination">
        @if (!$paginator->onFirstPage())
            <li class="pagination__item">
                <a class="pagination__item-arrow pagination__item-link" href="{{ $paginator->previousPageUrl() }}">
                    Пред.</a>
            </li>
        @endif
        @foreach ($elements as $element)
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="pagination__item pagination__item_active">
                        <a href="{{ $url }}" class="pagination__item-link">{{ $page }}</a>
                    </li>
                @else
                    <li class="pagination__item">
                        <a href="{{ $url }}" class="pagination__item-link">{{ $page }}</a>
                    </li>
                @endif
            @endforeach
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="pagination__item">
                <a href="{{ $paginator->nextPageUrl() }}" class="pagination__item-arrow pagination__item-link">
                   След.
                </a>
            </li>
        @endif
    </ul>
@endif
