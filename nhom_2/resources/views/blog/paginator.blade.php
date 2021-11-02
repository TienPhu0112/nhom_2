@if ($paginator->hasPages())
    <div class="pagination flex-l-m flex-w m-l--6 p-t-25">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled">{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">{{ $page }}</a>
                        @else
                            <a href="{{ $url }}" class="item-pagination flex-c-m trans-0-4">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
@endif
