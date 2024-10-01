@extends('layouts.front')
@section('main')
<div class="container">
		<!-- Filter Search Start -->
        {{-- <section class="mt-32">
		<form class="flex justify-center items-center w-[300px] md:w-[800px] mx-auto mt-10">
			<label for="simple-search" class="sr-only">Search</label>
			<div class="relative w-full">
				<input type="text" id="simple-search"
					class="bg-gray-50 border border-gray-300 text-gray-900 rounded-full block w-full pl-7"
					placeholder="Search" required />
				<div class="absolute inset-y-0 right-4 flex items-center pl-3 pointer-events-none">
					<svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor"
						viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
							clip-rule="evenodd"></path>
					</svg>
				</div>
			</div>
		</form>
        </section> --}}

		<!-- Filter Search End -->
	<!-- Card End -->
	<!-- Body End -->

    <!-- Card Start -->
    <div class="container w-full mx-auto mt-20 md:grid md:grid-cols-3 lg:gap-8">
        @foreach ($articles as $item)
            <a href="{{ route('internship.show', $item->id) }}"
            class="relative flex items-center justify-center mx-auto duration-300 bg-white bg-center bg-cover drop-shadow-md my-14 rounded-3xl md:flex-row md:max-w-xl  hover:-translate-y-3">
            <img class="w-full h-full max-w-96 hover:brightness-100 hover:drop-shadow-xl brightness-90 duration-300" src="{{ asset('storage/'.$item->thumbnail) }}" alt="image content" style="max-height: 742px">
                <div
                    class="w-[350px] p-5 bg-white rounded-3xl absolute left-1\2 bottom-5 flex justify-between items-center drop-shadow-sm">
                    <div class="leading-normal">
                        <div class="text-xl font-bold">{{  Str::title($item->title) }}</div>
                        <div class="text-sm text-slate-500">{{ Str::limit(strip_tags(htmlspecialchars_decode($item->content)), 30) }}</div>
                    </div>
                    <button type="button"
                        class="px-5 py-3 mb-2 mr-2 text-4xl font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 drop-shadow-xl focus:outline-none">
                        <img src="/assets/arrow-right.svg" alt="arrow-right" />
                    </button>
                </div>
            </a>
        @endforeach     
    </div>
    
    <div class="mb-10">
        {{ $articles->links("pagination.custom") }}
    </div>
</div>
@endsection
