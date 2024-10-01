@extends('layouts.front')
@section('main')
<div class="" id="berita" role="tabpanel" aria-labelledby="berita-tab">
	<!-- Body Start -->
		<div class="pt-10 container">
			<!----------------------------    FILTER    ---------------------------->
			<div class="border rounded-lg md:w-[150px] w-[120px] flex justify-between items-center mt-14 md:mt-24">
				<span class="ml-3 md:pr-5 pr-3 font-medium md:text-sm text-2xs border-r-2">Filter</span>
				<button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
					class="inline-flex items-center font-medium text-2xs md:text-sm px-6 py-1.5" type="button">
					<span class="sr-only">Action button</span>
					<span class="flex items-center">All
						<i class="pl-2 text-yellow-500 font-extrabold fa-solid fa-chevron-down"></i>
					</span>
				</button>
				<div id="dropdownAction" class="hidden z-50 bg-white rounded divide-y divide-gray-100 shadow">
					<ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownActionButton">
						<li>
							<a href="#" class="block py-2 px-4 hover:bg-primary hover:text-white font-bold">All</a>
						</li>
						<li>
							<a href="#" class="block py-2 px-4 hover:bg-primary hover:text-white">Programming</a>
						</li>
						<li>
							<a href="#" class="block py-2 px-4 hover:bg-primary hover:text-white">Design</a>
						</li>
						<li>
							<a href="#" class="block py-2 px-4 hover:bg-primary hover:text-white">Social</a>
						</li>
						<li>
							<a href="#" class="block py-2 px-4 hover:bg-primary hover:text-white">Other</a>
						</li>
					</ul>
				</div>
			</div>
		<!-- Body End -->

        <!---------------------------  Card Start --------------------------->
        <!---------------------------  CARD 1 --------------------------->
        @foreach ($articles as $item)
		<div class="container flex flex-col md:flex-row mt-14 mb-14">
			<div class="md:mr-10">
				<img class="rounded-lg object-cover h-[250px] w-[500px] mb-5 md:mb-0" src="{{ asset('storage/'.$item->thumbnail) }}" alt="" style="object-fit: cover;">
			</div>

			<div class="md:relative md:w-[500px] md:flex md:flex-col md:gap-4 md:justify-center">
                <div class=" flex"> <div class=" flex-1 bg-blue-700 text-white rounded inline-block px-4">
                    {{ \Carbon\Carbon::parse($item->date)->format('j F Y') }}
                </div>

                <div class=" flex-1"></div>

            </div>

				<h5 class="top- my-1 md:mt-1 md:my-0 text-2xl font-bold text-gray-900">
					{{ Str::limit($item->title, 50) }}
				</h5>
				<p class="md:absolute top-20  text-gray-700 text-sm">
					{{ Str::limit(strip_tags(htmlspecialchars_decode($item->content, 10))) }}
				</p>
				<div class="py-0 md:py-[85px]">
					<button class="block md:w-auto text-gray-600 text-2xs bg-yellow-400 hover:bg-primary hover:text-white duration-500 font-medium rounded-full md:text-sm md:px-10 md:py-2 px-3 py-1 text-center" type="button" data-modal-toggle="defaultModal{{$item->id}}">
						Selengkapnya<i class="fa-solid fa-chevron-right pl-3"></i>
					</button>
				</div>
			</div>
		</div>

		<!-- Pop-up Menu Start -->
        <div id="defaultModal{{ $item->id }}" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-hidden overflow-y-auto md:inset-0 h-screen">
            <div
                class="relative w-full h-full max-w-7xl md:h-auto text-black flex items-center justify-center">
                <!-- Modal content -->
                <div
                    class="  relative bg-white rounded-lg shadow  overflow-y-auto max-h-[90vh] w-[70%] mx-auto">
                    <!-- Modal header -->
                    <div
                        class="  flex items-start justify-between p-0 border-b rounded-t dark:border-gray-600">
                        <button type="button"
                            class="  text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="defaultModal{{ $item->id }}">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <a href="#">
                            <img class=" mx-auto  rounded-lg cursor-pointer"
                                src="{{ asset('storage/' . $item->thumbnail) }}"
                                alt="image description">
                        </a>
                        <div class="bg-blue-700 text-white rounded inline-block px-4">
                            {{ \Carbon\Carbon::parse($item->date)->format('j F Y') }}
                        </div>

                        <div class=" font-bold sm:sm">
                            {{ $item->title }}
                        </div>
                        {!! $item->content !!}
                    </div>
                </div>
            </div>
        </div>

		<!-- Pop-up Menu End -->
        @endforeach
        <!---------------------------  CARD 2 --------------------------->

        <!-- Card End -->

        <!-- Pop-up Menu Start -->
		<div class="container mb-10">
        	{{ $articles->links("pagination.custom") }}
    	</div>

    </div>
@endsection
