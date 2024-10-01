@if ($paginator->hasPages())
    <nav class="flex items-center justify-between">
        <div class="flex justify-start">
            @if ($paginator->onFirstPage())
                <span class="px-2 py-1 mr-2 bg-gray-300 rounded-lg cursor-not-allowed">Previous</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="px-2 py-1 mr-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Previous</a>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="px-2 py-1 mx-2 bg-gray-300 rounded-lg cursor-not-allowed">{{ $element }}</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="px-2 py-1 mx-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="px-2 py-1 mx-2 bg-gray-300 rounded-lg hover:bg-blue-500 hover:text-white">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-2 py-1 ml-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Next</a>
            @else
                <span class="px-2 py-1 ml-2 bg-gray-300 rounded-lg cursor-not-allowed">Next</span>
            @endif
        </div>
    </nav>
@endif
