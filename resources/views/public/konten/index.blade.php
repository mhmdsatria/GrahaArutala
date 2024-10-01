@extends('layouts.front')
@section('main')
    <div class="relative container">
        <div class="container mt-20 md:mt-28">
            <!----------------------------    FILTER    ---------------------------->
            <div class="border rounded-lg md:w-[150px] w-[120px] flex justify-between items-center mt-10">
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
        </div>

        <!-- CONTENT SECTION -->
        @foreach ($articles as $article)
            <div class="gap-8 items-center py-8 px-4 mx-auto xl:gap-16 flex flex-col md:flex-row sm:py-8 lg:px-6 mt-10">
                <div class="md:w-1/2">
                    <div class=" flex " >

                        <div class= " flex-1 bg-blue-700 text-white rounded inline-block px-4">
                            {{ \Carbon\Carbon::parse($article->date)->format('j F Y') }}
                        </div>
                        <div class=" flex-1"></div>
                    </div>

                    <h2 class="mb-4 text-2xl md:text-3xl font-bold text-gray-900">
                        {{ $article->title }}
                    </h2>
                    <p class="mb-6 font-light text-gray-500 md:text-lg ">
                        {{ Str::limit(strip_tags(htmlspecialchars_decode($article->content, 200))) }}
                    </p>
                    <!-- BTN KONTEN -->
                    <button
                        class="block md:w-auto text-gray-600 text-2xs bg-yellow-400 hover:bg-primary hover:text-white duration-500 font-medium rounded-full md:text-sm md:px-10 md:py-2 px-3 py-1 text-center"
                        type="button" data-modal-toggle="defaultModal{{ $article->id }}">
                        Selengkapnya<i class="fa-solid fa-chevron-right pl-3"></i>
                    </button>
                </div>
                <!-- Cover Konten -->
                <div class="md:w-1/2 order-first md:order-last">
                    <img class="object-cover h-[270px] w-[680px] rounded-lg"
                        src="{{ asset('storage/' . $article->thumbnail) }}" alt="dashboard image" />
                </div>
            </div>

            <!-- Main Content -->
            <div id="defaultModal{{ $article->id }}" tabindex="-1" aria-hidden="true"
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
                                data-modal-toggle="defaultModal{{ $article->id }}">
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
                                    src="{{ asset('storage/' . $article->thumbnail) }}"
                                    alt="image description">
                            </a>
                            <div class="bg-blue-700 text-white rounded inline-block px-4">
                                {{ \Carbon\Carbon::parse($article->date)->format('j F Y') }}
                            </div>
                            <div class=" font-bold sm:sm">
                                {{ $article->title }}
                            </div>
                            {!! $article->content !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="mb-10">
            {{ $articles->links("pagination.custom") }}
        </div>
    </div>
@endsection
