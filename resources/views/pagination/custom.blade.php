<!-- PAGINATION -->
<nav class="flex justify-center py-10">
    <ul class="inline-flex font-bold items-center -space-x-px">
        @if ($paginator->currentPage() > 1)
            <li>
                <a href="{{ $paginator->url($paginator->currentPage() - 1) }}" class="block px-3 py-2 ml-0">
                    <span class="sr-only">Previous</span>
                    <i class="fa-solid fa-chevron-left"></i>
                </a>
            </li>
        @else
            <li class="hidden"></li>
        @endif

        @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
            <li>
                <a href="{{ $url }}"
                   class="px-3 py-2 leading-tight {{ $page == $paginator->currentPage() ? 'text-black' : 'text-gray-300' }}">
                    {{ $page }}
                </a>
            </li>
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="text-blue-500">
                <a href="{{ $paginator->url($paginator->currentPage() + 1) }}"
                   class="block px-3 py-2 leading-tight rounded-r-lg">
                    <span class="sr-only">Next</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </li>
        @endif
    </ul>
</nav>
