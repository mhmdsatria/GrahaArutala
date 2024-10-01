    @extends('layouts.front')
    @section('main')
    <!-- CAROUSEL START -->
    <section>
        <div class="container">
        @if ($latestNews)
            <div class="slides w-full relative z-10 pt-16 md:pt-24">
                {{-- <div class="slide relative hidden duration-700 ease-in-out">
            <img class="w-full" src="img/img-slide-1.jpg" alt="" />
            <div class="flex justify-center text-2xl">
                <h1 class="absolute bottom-14 uppercase font-bold text-white">Musyawarah Besar 2021</h1>
            </div>
        </div> --}}
                <div class=" items-center  mb-5  ">
                    <img class="object-cover rounded-lg      h-[550px] w-full"
                        src="{{ asset('storage/' . $latestNews->thumbnail) }}" alt="image description" />
                </div>
                <div class="absolute w-full px-2 text-white md:bottom-10 md:px-14 bottom-2">
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
                </div>


            </div>
        @endif
    </section>

    <!-- GALLERY -->
    {{-- filter year --}}

    <section>
    <div class="container mx-auto py-10">
    {{-- <form action="" method="GET">
        <div class="flex w-1">
            <label for="year">Year</label>
            <select class="flex-1" name="year" id="year"> <!-- Ubah ID menjadi "year" -->

                <option value="2023" selected>2023</option>

            </select>
            <button class="flex-1" type="submit">Submit</button>
        </div>
    </form> --}}

    <form action="" method="GET">
    <div class="border rounded-lg md:w-[150px] w-[120px] flex justify-between items-center ">
        <span class="ml-3 md:pr-5 pr-3 font-medium md:text-sm text-2xs border-r-2">Year</span>
        <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
            class="inline-flex items-center font-medium text-2xs md:text-sm px-6 py-1.5" type="button">
            <span class="sr-only">Action button</span>
            <span class="flex items-center">2023
                <i class="pl-2 text-yellow-500 font-extrabold fa-solid fa-chevron-down"></i>
            </span>
        </button>
        <div id="dropdownAction" class="hidden z-50 bg-white rounded divide-y divide-gray-100 shadow">
            <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownActionButton">
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-primary hover:text-white font-bold">2023</a>
                </li>
            </ul>
        </div>
        <button class="flex-1 hover:bg-yellow-400 bg-blue-800 rounded-lg ml-3 md:px-10 px-5 py-3 text-white" type="submit">Submit</button>
    </div>
</form>
   
    



    {{-- KONTEN --}}
    <div class="grid md:grid-cols-2 grid-row-4 md:grid-row-2 gap-7 relative pt-8">
        @foreach ($articles as $article)
            <div class="text-white relative">
                <div class="hover:top rounded-xl hover:-translate-y-2 duration-300 relative flex">
                    <img class="object-cover w-full h-[367px] rounded-xl shadow-2xl hover:shadow-none hover:brightness-100 hover:drop-shadow-xl brightness-50 duration-300"
                        src="{{ asset('storage/' . $article->thumbnail) }}" alt="">
                    <h3 class=" font-bold md:text-xl left-5 absolute bottom-5 cursor-default">
                        {{ $article->title }}
                    </h3>
                    <a class="absolute py-1 px-6 right-5 md:right-10 bottom-5 text-sm bg-[#FFD900] text-gray-600 rounded-full"
                        href="{{ url('/galery/' . $article->id) }}">Selengkapnya
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    {{-- END KONTEN --}}
    </div>
    </section>

    <!-- PAGINATION -->
    <nav class="flex justify-center py-10">
        <div class="mb-10">
            {{ $articles->links('pagination.custom') }}
        </div>
    </nav>
    @endsection
