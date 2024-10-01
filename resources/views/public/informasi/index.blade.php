@extends('layouts.front')
@section('main')
<section class="container">
    <!-- Bagian Tabs -->
    <div class="grid mb-4 text-gray-900 place-content-center">
        <div>
            <ul class="flex flex-wrap gap-5 -mb-px text-center text-gray-900 md:gap-10" id="myTab"
                data-tabs-toggle="#myTabContent" role="tablist">
                <!-- Bagian Berita -->
                <li class="border-[#FFD900]" role="presentation">
                    <button
                        class="inline-block rounded-t-lg border-b-4 border-[#FFD900] hover:text-secondary hover:border-primary"
                        id="berita-tabs" data-tabs-target="#berita" type="button" role="tab" aria-controls="berita"
                        aria-selected="false">
                        Berita
                    </button>
                </li>
                <!-- Bagian Berita -->

                <!-- Bagian kegiatan -->
                <li class="border-[#FFD900]" role="presentation">
                    <button
                        class="inline-block rounded-t-lg border-b-4 border-[#FFD900] hover:text-secondary hover:border-primary"
                        id="kegiatan-tabs" data-tabs-target="#kegiatan" type="button" role="tab"
                        aria-controls="kegiatan" aria-selected="false">
                        Kegiatan
                    </button>
                </li>
                <!-- Bagian kegiatan -->

                <!-- Bagian Lomba -->
                <li class="border-[#FFD900]" role="presentation">
                    <button
                        class="inline-block rounded-t-lg border-b-4 border-[#FFD900] hover:text-secondary hover:border-primary"
                        id="lomba-tabs" data-tabs-target="#lomba" type="button" role="tab" aria-controls="lomba"
                        aria-selected="false">
                        Lomba
                    </button>
                </li>
                <!-- Bagian Lomba -->

                <!-- Bagian Magang -->
                <li class="border-[#FFD900]" role="presentation">
                    <button
                        class="inline-block rounded-t-lg border-b-4 border-[#FFD900] hover:text-secondary hover:border-primary"
                        id="magang-tab" data-tabs-target="#magang" type="button" role="tab" aria-controls="magang"
                        aria-selected="false">
                        Magang
                    </button>
                </li>
                <!-- Bagian Magang -->

                <!-- Bagian Prestasi -->
                <li class="border-[#FFD900]" role="presentation">
                    <button
                        class="inline-block rounded-t-lg border-b-4 border-[#FFD900] hover:text-secondary hover:border-primary"
                        id="prestasi-tab" data-tabs-target="#prestasi" type="button" role="tab"
                        aria-controls="prestasi" aria-selected="false">
                        Prestasi
                    </button>
                </li>
                <!-- Bagian Prestasi -->

                <!-- Bagian Konten -->
                <li role="presentation">
                    <button
                        class="inline-block rounded-t-lg border-b-4 border-[#FFD900] hover:text-secondary hover:border-primary"
                        id="konten-tab" data-tabs-target="#konten" type="button" role="tab" aria-controls="konten"
                        aria-selected="false">
                        Konten
                    </button>
                </li>
                <!-- Bagian Konten -->
            </ul>
        </div>
    </div>
    <!-- Bagian Tabs -->

    <!-- Konten Tabs -->
    <div id="myTabContent">
        <!-- Konten Berita -->
        <div class="hidden" id="berita" role="tabpanel" aria-labelledby="berita-tab">
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <button type="button"
                    class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    Filter
                </button>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdown" type="button"
                    class="flex px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    All
                    <svg class="w-5 h-5 ml-1 text-secondary" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="dropdown"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-22">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div>
            <div class="mb-10">
                <figure class="relative transition-all duration-300 shadow cursor-pointer filter">
                    <a href="#">
                        <img class="rounded-lg" src="/assets/img-slide-1.jpg" alt="image description" />
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <p>
                            Do you want to get notified when a new component is added to
                            Flowbite?
                        </p>
                        <button
                            class="block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="extralarge-modal">
                            Extra large modal
                        </button>

                        <div id="extralarge-modal" tabindex="-1"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-7xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                            Extra Large modal
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="extralarge-modal">
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
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            With less than a month to go before the European Union
                                            enacts new consumer privacy laws for its citizens,
                                            companies around the world are updating their terms of
                                            service agreements to comply.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            The European Union’s General Data Protection
                                            Regulation (G.D.P.R.) goes into effect on May 25 and
                                            is meant to ensure a common set of data rights in the
                                            European Union. It requires organizations to notify
                                            users as soon as possible of high-risk data breaches
                                            that could personally affect them.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            With less than a month to go before the European Union
                                            enacts new consumer privacy laws for its citizens,
                                            companies around the world are updating their terms of
                                            service agreements to comply.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            The European Union’s General Data Protection
                                            Regulation (G.D.P.R.) goes into effect on May 25 and
                                            is meant to ensure a common set of data rights in the
                                            European Union. It requires organizations to notify
                                            users as soon as possible of high-risk data breaches
                                            that could personally affect them.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            With less than a month to go before the European Union
                                            enacts new consumer privacy laws for its citizens,
                                            companies around the world are updating their terms of
                                            service agreements to comply.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            The European Union’s General Data Protection
                                            Regulation (G.D.P.R.) goes into effect on May 25 and
                                            is meant to ensure a common set of data rights in the
                                            European Union. It requires organizations to notify
                                            users as soon as possible of high-risk data breaches
                                            that could personally affect them.
                                        </p>
                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-toggle="extralarge-modal" type="button"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            I accept
                                        </button>
                                        <button data-modal-toggle="extralarge-modal" type="button"
                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                            Decline
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>

            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                <figure class="relative">
                    <a href="#">
                        <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                            src="/assets/img-slide-2.jpg" alt="image description" />
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <h1 class="font-bold">HMTI ESPORT</h1>
                        <p>
                            Do you want to get notified when a new component is added to
                            Flowbite?
                        </p>
                        <!-- Modal toggle -->
                        <button
                            class="block text-white bg-secondary hover:bg-opacity-50 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="defaultModal">
                            Selengkapnya
                        </button>

                        <!-- Main modal -->
                        <div id="defaultModal" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-7xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            HMTI E-Sport
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="defaultModal">
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
                                            <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                                                src="/assets/img-slide-2.jpg" alt="image description" />
                                        </a>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            With less than a month to go before the European Union
                                            enacts new consumer privacy laws for its citizens,
                                            companies around the world are updating their terms of
                                            service agreements to comply.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            The European Union’s General Data Protection
                                            Regulation (G.D.P.R.) goes into effect on May 25 and
                                            is meant to ensure a common set of data rights in the
                                            European Union. It requires organizations to notify
                                            users as soon as possible of high-risk data breaches
                                            that could personally affect them.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <figure class="relative">
                    <a href="#">
                        <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                            src="/assets/img-slide-2.jpg" alt="image description" />
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <h1 class="font-bold">HMTI ESPORT</h1>
                        <p>
                            Do you want to get notified when a new component is added to
                            Flowbite?
                        </p>
                        <!-- Modal toggle -->
                        <button
                            class="block text-white bg-secondary hover:bg-opacity-50 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="defaultModal">
                            Selengkapnya
                        </button>

                        <!-- Main modal -->
                        <div id="defaultModal" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-7xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            HMTI E-Sport
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="defaultModal">
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
                                            <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                                                src="/assets/img-slide-2.jpg" alt="image description" />
                                        </a>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            With less than a month to go before the European Union
                                            enacts new consumer privacy laws for its citizens,
                                            companies around the world are updating their terms of
                                            service agreements to comply.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            The European Union’s General Data Protection
                                            Regulation (G.D.P.R.) goes into effect on May 25 and
                                            is meant to ensure a common set of data rights in the
                                            European Union. It requires organizations to notify
                                            users as soon as possible of high-risk data breaches
                                            that could personally affect them.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <figure class="relative lg:mb-6">
                    <a href="#">
                        <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                            src="/assets/img-slide-2.jpg" alt="image description" />
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <h1 class="font-bold">HMTI ESPORT</h1>
                        <p>
                            Do you want to get notified when a new component is added to
                            Flowbite?
                        </p>
                        <!-- Modal toggle -->
                        <button
                            class="block text-white bg-secondary hover:bg-opacity-50 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="defaultModal">
                            Selengkapnya
                        </button>

                        <!-- Main modal -->
                        <div id="defaultModal" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-7xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            HMTI E-Sport
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="defaultModal">
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
                                            <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                                                src="/assets/img-slide-2.jpg" alt="image description" />
                                        </a>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            With less than a month to go before the European Union
                                            enacts new consumer privacy laws for its citizens,
                                            companies around the world are updating their terms of
                                            service agreements to comply.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            The European Union’s General Data Protection
                                            Regulation (G.D.P.R.) goes into effect on May 25 and
                                            is meant to ensure a common set of data rights in the
                                            European Union. It requires organizations to notify
                                            users as soon as possible of high-risk data breaches
                                            that could personally affect them.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <figure class="relative mb-6">
                    <a href="#">
                        <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                            src="/assets/img-slide-2.jpg" alt="image description" />
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <h1 class="font-bold">HMTI ESPORT</h1>
                        <p>
                            Do you want to get notified when a new component is added to
                            Flowbite?
                        </p>
                        <!-- Modal toggle -->
                        <button
                            class="block text-white bg-secondary hover:bg-opacity-50 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="defaultModal">
                            Selengkapnya
                        </button>

                        <!-- Main modal -->
                        <div id="defaultModal" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-7xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            HMTI E-Sport
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="defaultModal">
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
                                            <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                                                src="/assets/img-slide-2.jpg" alt="image description" />
                                        </a>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            With less than a month to go before the European Union
                                            enacts new consumer privacy laws for its citizens,
                                            companies around the world are updating their terms of
                                            service agreements to comply.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            The European Union’s General Data Protection
                                            Regulation (G.D.P.R.) goes into effect on May 25 and
                                            is meant to ensure a common set of data rights in the
                                            European Union. It requires organizations to notify
                                            users as soon as possible of high-risk data breaches
                                            that could personally affect them.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="grid mb-4 place-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="z-10 px-3 py-2 leading-tight text-blue-600 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-3 py-2 leading-tight text-gray-500 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Next</span>
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Konten Berita -->

        <!-- Konten Kegiatan -->
        <div class="hidden" id="kegiatan" role="tabpanel" aria-labelledby="kegiatan-tab">
            <div class="inline-flex mb-10 rounded-md shadow-sm" role="group">
                <button type="button"
                    class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    Filter
                </button>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdown2" type="button"
                    class="flex px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    All
                    <svg class="w-5 h-5 ml-1 text-secondary" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="dropdown2"
                    class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-22">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div>
            <div class="mb-10">
                <figure class="relative transition-all duration-300 shadow cursor-pointer filter">
                    <a href="#">
                        <img class="rounded-lg" src="/assets/img-slide-1.jpg" alt="image description" />
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <p>
                            Do you want to get notified when a new component is added to
                            Flowbite?
                        </p>
                        <button
                            class="block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="extralarge-modal">
                            Extra large modal
                        </button>

                        <div id="extralarge-modal" tabindex="-1"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-7xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                            Extra Large modal
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="extralarge-modal">
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
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            With less than a month to go before the European Union
                                            enacts new consumer privacy laws for its citizens,
                                            companies around the world are updating their terms of
                                            service agreements to comply.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            The European Union’s General Data Protection
                                            Regulation (G.D.P.R.) goes into effect on May 25 and
                                            is meant to ensure a common set of data rights in the
                                            European Union. It requires organizations to notify
                                            users as soon as possible of high-risk data breaches
                                            that could personally affect them.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            With less than a month to go before the European Union
                                            enacts new consumer privacy laws for its citizens,
                                            companies around the world are updating their terms of
                                            service agreements to comply.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            The European Union’s General Data Protection
                                            Regulation (G.D.P.R.) goes into effect on May 25 and
                                            is meant to ensure a common set of data rights in the
                                            European Union. It requires organizations to notify
                                            users as soon as possible of high-risk data breaches
                                            that could personally affect them.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            With less than a month to go before the European Union
                                            enacts new consumer privacy laws for its citizens,
                                            companies around the world are updating their terms of
                                            service agreements to comply.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            The European Union’s General Data Protection
                                            Regulation (G.D.P.R.) goes into effect on May 25 and
                                            is meant to ensure a common set of data rights in the
                                            European Union. It requires organizations to notify
                                            users as soon as possible of high-risk data breaches
                                            that could personally affect them.
                                        </p>
                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-toggle="extralarge-modal" type="button"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            I accept
                                        </button>
                                        <button data-modal-toggle="extralarge-modal" type="button"
                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                            Decline
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>

            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                <figure class="relative">
                    <a href="#">
                        <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                            src="/assets/img-slide-2.jpg" alt="image description" />
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <h1 class="font-bold">HMTI ESPORT</h1>
                        <p>
                            Do you want to get notified when a new component is added to
                            Flowbite?
                        </p>
                        <!-- Modal toggle -->
                        <button
                            class="block text-white bg-secondary hover:bg-opacity-50 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="defaultModal">
                            Selengkapnya
                        </button>

                        <!-- Main modal -->
                        <div id="defaultModal" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-7xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            HMTI E-Sport
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="defaultModal">
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
                                            <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                                                src="/assets/img-slide-2.jpg" alt="image description" />
                                        </a>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            With less than a month to go before the European Union
                                            enacts new consumer privacy laws for its citizens,
                                            companies around the world are updating their terms of
                                            service agreements to comply.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            The European Union’s General Data Protection
                                            Regulation (G.D.P.R.) goes into effect on May 25 and
                                            is meant to ensure a common set of data rights in the
                                            European Union. It requires organizations to notify
                                            users as soon as possible of high-risk data breaches
                                            that could personally affect them.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <figure class="relative">
                    <a href="#">
                        <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                            src="/assets/img-slide-2.jpg" alt="image description" />
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <h1 class="font-bold">HMTI ESPORT</h1>
                        <p>
                            Do you want to get notified when a new component is added to
                            Flowbite?
                        </p>
                        <!-- Modal toggle -->
                        <button
                            class="block text-white bg-secondary hover:bg-opacity-50 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="defaultModal">
                            Selengkapnya
                        </button>

                        <!-- Main modal -->
                        <div id="defaultModal" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-7xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            HMTI E-Sport
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="defaultModal">
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
                                            <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                                                src="/assets/img-slide-2.jpg" alt="image description" />
                                        </a>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            With less than a month to go before the European Union
                                            enacts new consumer privacy laws for its citizens,
                                            companies around the world are updating their terms of
                                            service agreements to comply.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            The European Union’s General Data Protection
                                            Regulation (G.D.P.R.) goes into effect on May 25 and
                                            is meant to ensure a common set of data rights in the
                                            European Union. It requires organizations to notify
                                            users as soon as possible of high-risk data breaches
                                            that could personally affect them.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <figure class="relative lg:mb-6">
                    <a href="#">
                        <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                            src="/assets/img-slide-2.jpg" alt="image description" />
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <h1 class="font-bold">HMTI ESPORT</h1>
                        <p>
                            Do you want to get notified when a new component is added to
                            Flowbite?
                        </p>
                        <!-- Modal toggle -->
                        <button
                            class="block text-white bg-secondary hover:bg-opacity-50 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="defaultModal">
                            Selengkapnya
                        </button>

                        <!-- Main modal -->
                        <div id="defaultModal" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-7xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            HMTI E-Sport
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="defaultModal">
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
                                            <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                                                src="/assets/img-slide-2.jpg" alt="image description" />
                                        </a>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            With less than a month to go before the European Union
                                            enacts new consumer privacy laws for its citizens,
                                            companies around the world are updating their terms of
                                            service agreements to comply.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            The European Union’s General Data Protection
                                            Regulation (G.D.P.R.) goes into effect on May 25 and
                                            is meant to ensure a common set of data rights in the
                                            European Union. It requires organizations to notify
                                            users as soon as possible of high-risk data breaches
                                            that could personally affect them.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <figure class="relative mb-6">
                    <a href="#">
                        <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                            src="/assets/img-slide-2.jpg" alt="image description" />
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <h1 class="font-bold">HMTI ESPORT</h1>
                        <p>
                            Do you want to get notified when a new component is added to
                            Flowbite?
                        </p>
                        <!-- Modal toggle -->
                        <button
                            class="block text-white bg-secondary hover:bg-opacity-50 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="defaultModal">
                            Selengkapnya
                        </button>

                        <!-- Main modal -->
                        <div id="defaultModal" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-7xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            HMTI E-Sport
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="defaultModal">
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
                                            <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                                                src="/assets/img-slide-2.jpg" alt="image description" />
                                        </a>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            With less than a month to go before the European Union
                                            enacts new consumer privacy laws for its citizens,
                                            companies around the world are updating their terms of
                                            service agreements to comply.
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            The European Union’s General Data Protection
                                            Regulation (G.D.P.R.) goes into effect on May 25 and
                                            is meant to ensure a common set of data rights in the
                                            European Union. It requires organizations to notify
                                            users as soon as possible of high-risk data breaches
                                            that could personally affect them.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="grid mb-4 place-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="z-10 px-3 py-2 leading-tight text-blue-600 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-3 py-2 leading-tight text-gray-500 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Next</span>
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Konten Kegiatan -->

        <!-- Konten Lomba -->
        <div class="hidden" id="lomba" role="tabpanel" aria-labelledby="lomba-tab">
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <button type="button"
                    class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    Filter
                </button>
                <button type="button"
                    class="flex px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    All
                    <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <p class="text-sm text-gray-500 dark:text-gray-400">
                This is some placeholder content the
                <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for
                the next. The tab JavaScript swaps classes to control the content
                visibility and styling.
            </p>
        </div>
        <!-- Konten Lomba -->

        <!-- Konten Magang -->
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="magang" role="tabpanel"
            aria-labelledby="magang-tab">
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <button type="button"
                    class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    Filter
                </button>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdown4" type="button"
                    class="flex px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    All
                    <svg class="w-5 h-5 ml-1 text-secondary" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="dropdown4"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-22">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div>
            <!-- Filter Search Start -->
            <form class="flex items-center w-2/3 mx-auto my-5">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <input type="text" id="simple-search"
                        class="block w-full p-3 text-xl text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 pl-7 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Cari . . . " required />
                    <div class="absolute inset-y-0 flex items-center pl-3 pointer-events-none right-4">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </form>
            <!-- Filter Search End -->

            <!-- Card Start -->
            <div class="container w-[1150px] mx-auto lg:flex lg:gap-8 mt-10">
                <a href="#"
                    class="w-[385px] h-[480px] mx-auto my-12 bg-[url('/assets/img-slide-2.jpg')] bg-cover bg-center flex items-center bg-white border rounded-3xl shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 hover:w-[405px] hover:h-[520px] hover:drop-shadow-2xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 relative hover:-translate-y-10">
                    <div
                        class="w-[345px] p-5 bg-white rounded-3xl absolute bottom-[12px] left-[8px] flex justify-between items-center">
                        <div class="leading-normal">
                            <div class="text-xl font-bold">PT. Indonesia Jaya</div>
                            <div class="text-sm text-slate-500">UI/UX Designer</div>
                        </div>
                        <button type="button"
                            class="px-5 py-3 mb-2 mr-2 text-4xl font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 drop-shadow-xl dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <img src="/assets/arrow-right.svg" alt="arrow-right" />
                        </button>
                    </div>
                </a>
                <a href="#"
                    class="w-[385px] h-[480px] mx-auto my-12 bg-[url('/assets/img-slide-2.jpg')] bg-cover bg-center flex items-center bg-white border rounded-3xl shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 hover:w-[405px] hover:h-[520px] hover:drop-shadow-2xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 relative hover:-translate-y-10">
                    <div
                        class="w-[345px] p-5 bg-white rounded-3xl absolute bottom-[12px] left-[8px] flex justify-between items-center">
                        <div class="leading-normal">
                            <div class="text-xl font-bold">PT. Indonesia Jaya</div>
                            <div class="text-sm text-slate-500">UI/UX Designer</div>
                        </div>
                        <button type="button"
                            class="px-5 py-3 mb-2 mr-2 text-4xl font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 drop-shadow-xl dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <img src="/assets/arrow-right.svg" alt="arrow-right" />
                        </button>
                    </div>
                </a>
                <a href="#"
                    class="w-[385px] h-[480px] mx-auto my-12 bg-[url('/assets/img-slide-2.jpg')] bg-cover bg-center flex items-center bg-white border rounded-3xl shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 hover:w-[405px] hover:h-[520px] hover:drop-shadow-2xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 relative hover:-translate-y-10">
                    <div
                        class="w-[345px] p-5 bg-white rounded-3xl absolute bottom-[12px] left-[8px] flex justify-between items-center">
                        <div class="leading-normal">
                            <div class="text-xl font-bold">PT. Indonesia Jaya</div>
                            <div class="text-sm text-slate-500">UI/UX Designer</div>
                        </div>
                        <button type="button"
                            class="px-5 py-3 mb-2 mr-2 text-4xl font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 drop-shadow-xl dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <img src="/assets/arrow-right.svg" alt="arrow-right" />
                        </button>
                    </div>
                </a>
            </div>
            <div class="container w-[1150px] -mt-[20px] mx-auto lg:flex lg:gap-8 mb-20">
                <a href="#"
                    class="w-[385px] h-[480px] mx-auto my-12 bg-[url('/assets/img-slide-2.jpg')] bg-cover bg-center flex items-center bg-white border rounded-3xl shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 hover:w-[405px] hover:h-[520px] hover:drop-shadow-2xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 relative hover:-translate-y-10">
                    <div
                        class="w-[345px] p-5 bg-white rounded-3xl absolute bottom-[12px] left-[8px] flex justify-between items-center">
                        <div class="leading-normal">
                            <div class="text-xl font-bold">PT. Indonesia Jaya</div>
                            <div class="text-sm text-slate-500">UI/UX Designer</div>
                        </div>
                        <button type="button"
                            class="px-5 py-3 mb-2 mr-2 text-4xl font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 drop-shadow-xl dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <img src="/assets/arrow-right.svg" alt="arrow-right" />
                        </button>
                    </div>
                </a>
                <a href="#"
                    class="w-[385px] h-[480px] mx-auto my-12 bg-[url('/assets/img-slide-2.jpg')] bg-cover bg-center flex items-center bg-white border rounded-3xl shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 hover:w-[405px] hover:h-[520px] hover:drop-shadow-2xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 relative hover:-translate-y-10">
                    <div
                        class="w-[345px] p-5 bg-white rounded-3xl absolute bottom-[12px] left-[8px] flex justify-between items-center">
                        <div class="leading-normal">
                            <div class="text-xl font-bold">PT. Indonesia Jaya</div>
                            <div class="text-sm text-slate-500">UI/UX Designer</div>
                        </div>
                        <button type="button"
                            class="px-5 py-3 mb-2 mr-2 text-4xl font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 drop-shadow-xl dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <img src="/assets/arrow-right.svg" alt="arrow-right" />
                        </button>
                    </div>
                </a>
                <a href="#"
                    class="w-[385px] h-[480px] mx-auto my-12 bg-[url('/assets/img-slide-2.jpg')] bg-cover bg-center flex items-center bg-white border rounded-3xl shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 hover:w-[405px] hover:h-[520px] hover:drop-shadow-2xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 relative hover:-translate-y-10">
                    <div
                        class="w-[345px] p-5 bg-white rounded-3xl absolute bottom-[12px] left-[8px] flex justify-between items-center">
                        <div class="leading-normal">
                            <div class="text-xl font-bold">PT. Indonesia Jaya</div>
                            <div class="text-sm text-slate-500">UI/UX Designer</div>
                        </div>
                        <button type="button"
                            class="px-5 py-3 mb-2 mr-2 text-4xl font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 drop-shadow-xl dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <img src="/assets/arrow-right.svg" alt="arrow-right" />
                        </button>
                    </div>
                </a>
            </div>
            <!-- Card End -->
        </div>
        <!-- Konten Magang -->

        <!-- Konten Prestasi -->
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="prestasi" role="tabpanel"
            aria-labelledby="prestasi-tab">
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <button type="button"
                    class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    Filter
                </button>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdown5" type="button"
                    class="flex px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    All
                    <svg class="w-5 h-5 ml-1 text-secondary" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="dropdown5"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-22">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div>
            <!-- Card Start -->
            <div class="flex w-4/5 mx-auto mt-14">
                <div
                    class="w-4/5 h-[450px] mx-[20px] bg-cover bg-center overflow-hidden rounded-lg bg-[url('/assets/img-slide-2.jpg')]">
                </div>
                <div class="flex flex-col justify-center w-2/5 gap-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        HMTI ESPORT
                        <span class="px-4 py-1 mx-2 text-lg text-white bg-yellow-400 rounded-lg">Juara 1</span>
                    </h5>
                    <p class="text-sm text-slate-400 dark:text-gray-400">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit,
                        incidunt cupiditate sapiente enim impedit illo repudiandae
                        repellendus. Cumque, tenetur iure dolor delectus hic temporibus
                        voluptate eum corrupti deserunt consequatur exercitationem amet
                        omnis? Autem, voluptate nemo. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Velit, incidunt cupiditate
                        sapiente enim impedit illo repudiandae repellendus. Cumque,
                        tenetur iure dolor delectus hic temporibus voluptate eum
                        corrupti deserunt consequatur exercitationem amet omnis? Autem,
                        voluptate nemo.
                    </p>
                    <button type="submit"
                        class="w-[180px] flex items-center justify-center gap-2 bg-yellow-400 px-4 py-2 rounded-full text-white hover:bg-yellow-500 animate-bounce hover:animate-none"
                        data-modal-toggle="defaultModal">
                        <div>Selengkapnya</div>
                        <img src="/assets/arrow.svg" alt="arrow" />
                    </button>
                </div>
            </div>
            <div class="flex w-4/5 mx-auto mt-[50px] mb-[150px]">
                <div
                    class="w-4/5 h-[450px] mx-[20px] bg-cover bg-center overflow-hidden rounded-lg bg-[url('/assets/img-slide-2.jpg')]">
                </div>
                <div class="flex flex-col justify-center w-2/5 gap-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        HMTI ESPORT
                        <span class="px-4 py-1 mx-2 text-lg text-white rounded-lg bg-slate-300">Juara 2</span>
                    </h5>
                    <p class="text-sm text-slate-400 dark:text-gray-400">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit,
                        incidunt cupiditate sapiente enim impedit illo repudiandae
                        repellendus. Cumque, tenetur iure dolor delectus hic temporibus
                        voluptate eum corrupti deserunt consequatur exercitationem amet
                        omnis? Autem, voluptate nemo. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Velit, incidunt cupiditate
                        sapiente enim impedit illo repudiandae repellendus. Cumque,
                        tenetur iure dolor delectus hic temporibus voluptate eum
                        corrupti deserunt consequatur exercitationem amet omnis? Autem,
                        voluptate nemo.
                    </p>
                    <button type="submit"
                        class="w-[180px] flex items-center justify-center gap-2 bg-yellow-400 px-4 py-2 rounded-full text-white hover:bg-yellow-500 animate-bounce hover:animate-none"
                        data-modal-toggle="defaultModal">
                        <div>Selengkapnya</div>
                        <img src="/assets/arrow.svg" alt="arrow" />
                    </button>
                </div>
            </div>
            <!-- Card End -->

            <!-- Pop-up Menu Start -->
            <div id="defaultModal" tabindex="-1" aria-hidden="true"
                class="fixed left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                <div class="relative w-4/5 h-full md:h-auto translate-y-[145px]">
                    <!-- Popup content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Popup body -->
                        <div class="p-4 space-y-6">
                            <div
                                class="w-full h-[450px] bg-cover bg-center overflow-hidden rounded-lg bg-[url('/assets/img-slide-2.jpg')] relative">
                                <button type="button"
                                    class="text-white absolute right-0 bg-transparent backdrop-blur-sm hover:text-gray-900 rounded-full text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="defaultModal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <div class="mx-[200px] mt-[20px]">
                                <span class="px-3 py-1 bg-sky-600 text-white rounded-xl mt-[20px]">21 Desember
                                    2022</span>
                                <div class="w-[50px] font-semibold text-2xl my-4">
                                    HMTI ESPORT
                                </div>
                                <div class="container text-sm text-justify font-semibold mb-[75px]">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Atque autem recusandae facilis perferendis. Sed, non.
                                    Alias, voluptatem sequi aspernatur neque, explicabo
                                    eveniet et voluptas exercitationem qui molestiae possimus,
                                    quisquam animi. Placeat, iusto et similique reiciendis
                                    commodi illo perferendis fugiat est inventore! Corrupti
                                    sunt nemo sapiente ratione libero minus culpa quo nisi
                                    sequi dicta pariatur, maiores explicabo ipsum id impedit.
                                    Provident, cupiditate. Quas ratione ea cumque tempora
                                    minima quidem nam, laborum, dolorum deserunt praesentium
                                    aliquam facere voluptate enim animi ullam iste ipsum rem.
                                    Impedit, error ipsum? Voluptate ullam quibusdam veritatis
                                    in laborum debitis nostrum voluptates sunt accusamus
                                    blanditiis aperiam, non, iste, perferendis nemo ratione!
                                    Dolorum, voluptatum dolorem? Neque incidunt assumenda
                                    dolorem, quaerat possimus dolore, eos voluptatem maiores
                                    pariatur nulla vitae est! Magni sed quos tempora quas aut
                                    pariatur optio, quam officia animi asperiores cum nisi
                                    libero adipisci vero ut amet repudiandae temporibus
                                    incidunt nam ad? Cupiditate iste deserunt fugit minima
                                    illo.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pop-up Menu End -->
        </div>
        <!-- Konten Prestasi -->

        <!-- Konten Konten -->
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="konten" role="tabpanel"
            aria-labelledby="konten-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">
                This is some placeholder content the
                <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated
                    content</strong>. Clicking another tab will toggle the visibility of this one for
                the next. The tab JavaScript swaps classes to control the content
                visibility and styling.
            </p>
        </div>
        <!-- Konten Konten -->
    </div>
    <!-- Konten Tabs -->
</section>
@endsection