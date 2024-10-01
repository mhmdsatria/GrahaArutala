@extends('layouts.front')
@section('main')
    <div class="" id="berita" role="tabpanel" aria-labelledby="berita-tab">
        <div class="container pt-10">
            <!----------------------------    FILTER    ---------------------------->
            <div class="border rounded-lg md:w-[150px] w-[120px] flex justify-between items-center mt-10 md:mt-16">
                <span class="pr-3 ml-3 font-medium border-r-2 md:pr-5 md:text-sm text-2xs">Filter</span>
                <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                    class="inline-flex items-center font-medium text-2xs md:text-sm px-6 py-1.5" type="button">
                    <span class="sr-only">Action button</span>
                    <span class="flex items-center">All
                        <i class="pl-2 font-extrabold text-yellow-500 fa-solid fa-chevron-down"></i>
                    </span>
                </button>
                <div id="dropdownAction" class="z-50 hidden bg-white divide-y divide-gray-100 rounded shadow">
                    <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownActionButton">
                        <li>
                            <a href="#" class="block px-4 py-2 font-bold hover:bg-primary hover:text-white">All</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Programming</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Design</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Social</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Other</a>
                        </li>
                    </ul>
                </div>
            </div>

            @foreach ($articles as $item)
                <div class="flex mt-14 mb-10">
                    <div class="mr-10 max-w-[500px] w-full">
                        <img class="rounded-lg " src="{{ asset('storage/' . $item->thumbnail) }}"
                            style="height: 250px; width: 100%; object-fit: cover;" alt="">
                    </div>
                    <div class="relative w-[500px] flex flex-col gap-4 justify-center">
                        {{-- <a class="absolute top-0 px-3 mx-2 text-sm italic text-white bg-blue-500 rounded-full -left-3">
                    21 September 2022
                </a> --}}
                <div class="flex">
                    <h5 class="flex-1 text-2xl font-bold text-gray-900 top-6">
                        {{ Str::title($item->title) }}
                    </h5>
                    <div class=" flex-1" >
                        <div class="bg-blue-700 text-white rounded inline-block px-4">
                            {{ \Carbon\Carbon::parse($item->date)->format('j F Y') }}
                        </div>

                    </div>
                </div>


                        <p class=" text-sm mt-3 text-slate-400">
                            {{ Str::limit(strip_tags(htmlspecialchars_decode($item->content, 200))) }}
                        </p>
                        <button
                            class="bottom-0 absolute w-[180px] flex items-center justify-center gap-2 bg-yellow-400 px-4 py-1.5 rounded-full text-gray-600 hover:bg-primary hover:text-white duration-300 "
                            data-modal-toggle="defaultModal{{ $item->id }}">
                            Selengkapnya<i class="pl-1 fa-solid fa-chevron-right"></i>
                        </button>
                    </div>

                    <div id="defaultModal{{ $item->id }}" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-hidden overflow-y-auto md:inset-0 h-screen">
                        <div class="relative w-full h-full max-w-7xl md:h-auto text-black flex items-center justify-center">
                            <!-- Modal content -->
                            <div
                                class="  relative bg-white rounded-lg shadow  overflow-y-auto max-h-[90vh] w-[70%] mx-auto">
                                <!-- Modal header -->
                                <div class="  flex items-start justify-between p-0 border-b rounded-t dark:border-gray-600">
                                    <button type="button"
                                        class="  text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="defaultModal{{ $item->id }}">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
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
                                            src="{{ asset('storage/' . $item->thumbnail) }}" alt="image description">
                                    </a>
                                    <div class="bg-blue-700 text-white rounded inline-block px-4">
                                        {{ \Carbon\Carbon::parse($item->date)->format('j  F Y') }}
                                    </div>

                                    <div class=" font-bold sm:sm">
                                        {{ $item->title }}
                                    </div>
                                    {!! $item->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="mb-8">
                {{ $articles->links("pagination.custom") }}
            </div>
        </div>
    @endsection
