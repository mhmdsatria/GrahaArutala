@extends('layouts.front')
@section('main')
    <section class="container">
        <div id="berita" role="tabpanel" aria-labelledby="berita-tab">
            <div class="pt-10">
                <!----------------------------    FILTER    ---------------------------->
                <div class="border rounded-lg md:w-[150px] w-[120px] flex justify-between items-center mt-10">
                    <span class="ml-3 md:pr-5 pr-3 font-medium md:text-sm text-2xs border-r-2">Tahun</span>
                    <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                        class="inline-flex items-center font-medium text-2xs md:text-sm px-3 py-1.5" type="button">
                        <span class="mx-3 sr-only">Action button</span>
                        <span class="flex items-center">2022
                            <i class="pl-2 text-yellow-500 font-extrabold fa-solid fa-chevron-down"></i>
                        </span>
                    </button>
                    <div id="dropdownAction" class="hidden z-50 bg-white rounded divide-y divide-gray-100 shadow">
                        <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownActionButton">
                            <li>
                                <a href="#" class="block py-2 px-4 hover:bg-primary hover:text-white">2022</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 hover:bg-primary hover:text-white">2021</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 hover:bg-primary hover:text-white">2020</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 hover:bg-primary hover:text-white">2019</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            @if ($latestNews)
                <div class="items-center py-10 mb-10">
                    <div class="relative transition-all duration-300">
                        <a href="#">
                            <img class="object-cover rounded-lg shadow-md brightness-60 brightness-50 md:brightness-100 h-[550px] w-full"
                                src="{{ asset('storage/' . $latestNews->thumbnail) }}" alt="image description" />
                        </a>

                        <div class="absolute  w-auto h-auto px-2 text-white md:bottom-10 md:px-14 bottom-2">
                            <h1 class="text-base font-bold md:text-3xl">
                                {{ $latestNews->title }}
                            </h1>
                            <p class="my-2 font-light md:text-base text-2xs md:my-3">
                                {{ Str::limit(strip_tags(htmlspecialchars_decode($latestNews->content)), 400) }}
                            </p>
                            <button
                                class="block md:w-auto text-gray-600 text-2xs bg-yellow-400 hover:bg-primary hover:text-white  duration-500 font-medium rounded-full md:text-sm md:px-100 md:py-2 px-3 py-1 text-center"
                                type="button" data-modal-toggle="defaultModal{{ $latestNews->id }}">
                                Selengkapnya<i class="fa-solid fa-chevron-right pl-3"></i>
                            </button>


                            {{-- <div id="extralarge-modal" tabindex="-1"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                <div class="relative w-full h-full max-w-7xl md:h-auto">

                                </div>
                            </div> --}}
                            <div id="defaultModal{{ $latestNews->id }}" tabindex="-1" aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-hidden overflow-y-auto md:inset-0 h-screen">
                                <div
                                    class="relative w-full h-full max-w-7xl md:h-auto text-black flex items-center justify-center">
                                    <!-- Modal content -->
                                    <div
                                        class="  relative bg-white rounded-lg shadow  overflow-y-auto max-h-[90vh] md:w-[70%] sm:w-[90%] mx-auto">
                                        <!-- Modal header -->
                                        <div
                                            class="  flex items-start justify-between p-0 border-b rounded-t dark:border-gray-600">
                                            <button type="button"
                                                class="  text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-toggle="defaultModal{{ $latestNews->id }}">
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
                                                    src="{{ asset('storage/' . $latestNews->thumbnail) }}"
                                                    alt="image description">
                                            </a>
                                            <div class="bg-blue-700 text-white rounded inline-block px-4">
                                                {{ \Carbon\Carbon::parse($latestNews->date)->format('j F Y') }}
                                            </div>
                                            <div class=" font-bold sm:sm">
                                                {{ $latestNews->title }}
                                            </div>
                                            {!! $latestNews->content !!}
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 py-5 mb-10">
                <!-- CARD 1 -->
                @foreach ($articles as $news)
                    <figure class="relative duration-300 hover:shadow-xl ">
                        <a href="#" class="flex-shrink-0">
                            <img class="object-cover w-full h-[367px] rounded-lg transition-all duration-200 brightness-50"
                                src="{{ asset('storage/' . $news->thumbnail) }}" alt="image description">
                        </a>
                        <figcaption class="absolute md:bottom-5 md:px-5 bottom-2 px-2  text-white w-full">
                            <h1 class="font-bold md:text-xl text-base">
                                {{ Str::limit($news->title, 50) }}
                            </h1>
                            <div class=" flex">

                                <p class=" flex-grow-1 w-4/5 md:text-base text-2xs font-light mb-4">
                                    {{ Str::limit(strip_tags(htmlspecialchars_decode($news->content)), 100) }}
                                </p>
                                <button
                                    class="  text-sm sm:text-sm h-3/6 px-2 py-3 bg-yellow-400 text-black rounded-full hover:bg-primary hover:text-white duration-500 font-medium "
                                    type="button" data-modal-toggle="defaultModal{{ $news->id }}">
                                    Selengkapnya </i>
                                </button>

                            </div>
                        </figcaption>

                            <div id="defaultModal{{ $news->id }}" tabindex="-1" aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-hidden overflow-y-auto md:inset-0 h-screen">
                                <div
                                    class="relative w-full h-full max-w-7xl md:h-auto text-black flex items-center justify-center">
                                    <!-- Modal content -->
                                    <div
                                        class="  relative bg-white rounded-lg shadow  overflow-y-auto max-h-[90vh] md:w-[70%] sm:w-[90%] mx-auto">
                                        <!-- Modal header -->
                                        <div
                                            class="  flex items-start justify-between p-0 border-b rounded-t dark:border-gray-600">
                                            <button type="button"
                                                class="  text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-toggle="defaultModal{{ $news->id }}">
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
                                                    src="{{ asset('storage/' . $news->thumbnail) }}"
                                                    alt="image description">
                                            </a>
                                            <div class="bg-blue-700 text-white rounded inline-block px-4">
                                                {{ \Carbon\Carbon::parse($news->date)->format('j F Y') }}
                                            </div>
                                            <div class=" font-bold sm:sm">
                                                {{ $news->title }}
                                            </div>

                                            {!! $news->content !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </figure>
                @endforeach
            </div>
            <div class="mb-8">
                {{ $articles->links("pagination.custom") }}
            </div>
        </div>
    </section>
@endsection
