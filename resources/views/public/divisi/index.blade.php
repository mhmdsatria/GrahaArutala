@extends('layouts.front')
@section('main')
<div class="font-raleway flex flex-col gap-4">
    <!-- CONTENT 1 START -->
    <div class="container mx-auto pt-14 font-raleway">
        <div class="text-center">
            <div class="relative py-4 m-auto md:py-10">
                <img loading='lazy' class="brightness-50 m-auto md:md:w-[1200px] w-[325px]" src="/assets/img-slide-2.jpg" alt="" />
                <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] md:w-[800px]">
                    <h1 class="font-bold font-mont text-[10px] pt-10 md:text-2xl text-white">
                        HIMPUNAN MAHASISWA TEKNIK INFORMATIKA <br />
                        UNIVERSITAS NUSA PUTRA <br />
                        PERIODE 2023-2024
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT 1 START -->

    <!-- BADAN PENGURUS HARIAN START -->
    <div class="container mx-auto">
        <div class="relative text-center">
            <div class="flex justify-center md:py-10 py-4 relative rounded-[45px] drop-shadow-2xl">
                <div class="absolute z-20 flex items-center -translate-y-1/2 top-1/2 right-3 md:-right-3">
                    <a href="{{ route('bph')}}" class="md:px-7 md:py-5 shrink-0 py-[5px] px-3 bg-[#1746F9] rounded-full md:text-4xl text-white hover:bg-yellow-400 hover:text-[#1746F9] duration-500">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>

                <img loading='lazy' class="md:w-[1200px] rounded-[45px] w-[325px] object-cover brightness-50" src="/assets/bph.webp" alt="" />

                <div class="absolute top-1/3 translate-y-1/3 md:top-3/4 translate-y-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 md:w-[1032px]">
                    <h1 class="text-base font-medium text-white md:font-bold font-mont md:text-2xl">
                        BADAN PENGURUS HARIAN
                    </h1>
                    <div class="invisible md:visible">
                        <p class="text-xs text-white text-gray-500">
                            Menyampaikan segala bentuk informasi yang bermanfaat dari dan untuk internal maupun eksternal, serta
                            membidangi segala macaminformasi di bidang design dan editing foto & video untuk keperluan himpunan dan Memberikan Informasi yang bersifat aktual dan faktual dan bermanfaat bagi Mahasiswa HMTI ,Menyajikan konten-konten yang menarik dan kreatif melalui berbagai media sosial dan media informasidan komunikasi lainnya.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BADAN PENGURUS HARIAN END -->

    <!-- DIVISI DANA DAN USAHA START -->
    <div class="container mx-auto">
        <div class="relative text-center">
            <div class="flex justify-center md:py-10 py-4 relative rounded-[45px] drop-shadow-2xl">
                <div class="absolute z-20 flex items-center -translate-y-1/2 top-1/2 right-3 md:-right-3">
                    <a href="{{ route('danuss')}}" class="md:px-7 md:py-5 shrink-0 py-[5px] px-3 bg-[#1746F9] rounded-full md:text-4xl text-white hover:bg-yellow-400 hover:text-[#1746F9] duration-500">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>

                <img loading='lazy' class="md:w-[1200px] rounded-[45px] w-[325px] object-cover brightness-50" src="/assets/danus.webp" alt="" />

                <div class="absolute top-1/3 translate-y-1/3 md:top-3/4 translate-y-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 md:w-[1032px]">
                    <h1 class="text-base font-medium text-white md:font-bold font-mont md:text-2xl">
                        DIVISI DANUS
                    </h1>
                    <div class="invisible md:visible">
                        <p class="text-xs text-white text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu
                            turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus
                            nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum
                            tellus elit sed risus. Maecenas eget condimentum velit, sit amet
                            feugiat lectus. Class aptent taciti sociosqu ad litora torquent
                            per conubia nostra, per inceptos himenaeos. Praesent auctor purus
                            luctus enim egestas, ac scelerisque ante pulvinar. Donec ut
                            rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur
                            vel bibendum lorem. Morbi convallis convallis diam sit amet
                            lacinia. Aliquam in elementum tellus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DIVISI DANA DAN USAHA END -->

    <ul class="absolute hidden w-full md:block">
        <li><img loading='lazy' class="absolute -z-50 right-0 -top-[90rem]" src="/assets/bg-fill.svg" alt=""></li>
        <li><img loading='lazy' class="absolute rotate-180 translate-y-40 -z-50 -left-16 top-96" src="/assets/bg-fill.svg" alt=""></li>
        <li><img loading='lazy' class="absolute -z-50 right-0 top-[90rem] -translate-y-0" src="/assets/bg-fill.svg" alt=""></li>
    </ul>

    <!-- DIVISI HUKAM START -->
    <div class="container mx-auto">
        <div class="relative text-center">
            <div class="flex justify-center md:py-10 py-4 relative rounded-[45px] drop-shadow-2xl">
                <div class="absolute z-20 flex items-center -translate-y-1/2 top-1/2 right-3 md:-right-3">
                    <a href="{{ route('hukam')}}" class="md:px-7 md:py-5 py-[5px] px-3 bg-[#1746F9] rounded-full md:text-4xl text-white hover:bg-yellow-400 hover:text-[#1746F9] duration-500">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
                <img loading='lazy' class="md:w-[1200px] w-[325px] rounded-[45px] object-cover brightness-50" src="/assets/hukam.webp" alt="" />
                <div class="absolute top-1/3 translate-y-1/3 md:top-3/4 translate-y-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 md:w-[1032px]">
                    <h1 class="text-base font-medium text-white md:font-bold font-mont md:text-2xl">
                        DIVISI HUKAM
                    </h1>
                    <div class="invisible md:visible">
                        <p class="text-xs text-white text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu
                            turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus
                            nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum
                            tellus elit sed risus. Maecenas eget condimentum velit, sit amet
                            feugiat lectus. Class aptent taciti sociosqu ad litora torquent
                            per conubia nostra, per inceptos himenaeos. Praesent auctor purus
                            luctus enim egestas, ac scelerisque ante pulvinar. Donec ut
                            rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur
                            vel bibendum lorem. Morbi convallis convallis diam sit amet
                            lacinia. Aliquam in elementum tellus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DIVISI HUKAM END -->

    <!-- DIVISI INFOKOM START -->
    <div class="container mx-auto">
        <div class="relative text-center">
            <div class="flex justify-center md:py-10 py-4 relative rounded-[45px] drop-shadow-2xl">
                <div class="absolute z-20 flex items-center -translate-y-1/2 top-1/2 right-3 md:-right-3">
                    <a href="{{ route('kominfo')}}" class="md:px-7 md:py-5 py-[5px] px-3 bg-[#1746F9] rounded-full md:text-4xl text-white hover:bg-yellow-400 hover:text-[#1746F9] duration-500">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
                <img loading='lazy' class="md:w-[1200px] w-[325px] rounded-[45px] object-cover brightness-50" src="/assets/kominfo.webp" alt="" />
                <div class="absolute top-1/3 translate-y-1/3 md:top-3/4 translate-y-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 md:w-[1032px]">
                    <h1 class="text-base font-medium text-white md:font-bold font-mont md:text-2xl">
                        DIVISI KOMINFO
                    </h1>
                    <div class="invisible md:visible">
                        <p class="text-xs text-white text-gray-500">
                            Menyampaikan segala bentuk informasi yang bermanfaat dari dan untuk internal maupun eksternal, serta
                            membidangi segala macaminformasi di bidang design dan editing foto & video untuk keperluan himpunan dan Memberikan Informasi yang bersifat aktual dan faktual dan bermanfaat bagi Mahasiswa HMTI ,Menyajikan konten-konten yang menarik dan kreatif melalui berbagai media sosial dan media informasidan komunikasi lainnya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DIVISI INFOKOM END -->

    <!-- DIVISI INFOKOM START -->
    <div class="container mx-auto">
        <div class="relative text-center">
            <div class="flex justify-center md:py-10 py-4 relative rounded-[45px] drop-shadow-2xl">
                <div class="absolute z-20 flex items-center -translate-y-1/2 top-1/2 right-3 md:-right-3">
                    <a href="{{ route('minatbakat')}}" class="md:px-7 md:py-5 py-[5px] px-3 bg-[#1746F9] rounded-full md:text-4xl text-white hover:bg-yellow-400 hover:text-[#1746F9] duration-500">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
                <img loading='lazy' class="md:w-[1200px] w-[325px] rounded-[45px] object-cover brightness-50" src="/assets/minatbakat.webp" alt="" />
                <div class="absolute top-1/3 translate-y-1/3 md:top-3/4 translate-y-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 md:w-[1032px]">
                    <h1 class="text-base font-medium text-white md:font-bold font-mont md:text-2xl">
                        DIVISI MINAT BAKAT
                    </h1>
                    <div class="invisible md:visible">
                        <p class="text-xs text-white text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu
                            turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus
                            nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum
                            tellus elit sed risus. Maecenas eget condimentum velit, sit amet
                            feugiat lectus. Class aptent taciti sociosqu ad litora torquent
                            per conubia nostra, per inceptos himenaeos. Praesent auctor purus
                            luctus enim egestas, ac scelerisque ante pulvinar. Donec ut
                            rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur
                            vel bibendum lorem. Morbi convallis convallis diam sit amet
                            lacinia. Aliquam in elementum tellus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DIVISI INFOKOM END -->

    <!-- DIVISI PSDM START -->
    <div class="container mx-auto">
        <div class="relative text-center">
            <div class="flex justify-center md:py-10 py-4 relative rounded-[45px] drop-shadow-2xl">
                <div class="absolute z-20 flex items-center -translate-y-1/2 top-1/2 right-3 md:-right-3">
                    <a href="{{ route('psdm')}}" class="md:px-7 md:py-5 py-[5px] px-3 bg-[#1746F9] rounded-full md:text-4xl text-white hover:bg-yellow-400 hover:text-[#1746F9] duration-500">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
                <img loading='lazy' class="md:w-[1200px] w-[325px] object-cover rounded-[45px] brightness-50 w-[325px]" src="/assets/psdm.webp" alt="" />
                <div class="absolute top-1/3 translate-y-1/3 md:top-3/4 translate-y-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 md:w-[1032px]">
                    <h1 class="text-base font-medium text-white md:font-bold font-mont md:text-2xl">
                        DIVISI PSDM
                    </h1>
                    <div class="invisible md:visible">
                        <p class="text-xs text-white text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu
                            turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus
                            nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum
                            tellus elit sed risus. Maecenas eget condimentum velit, sit amet
                            feugiat lectus. Class aptent taciti sociosqu ad litora torquent
                            per conubia nostra, per inceptos himenaeos. Praesent auctor purus
                            luctus enim egestas, ac scelerisque ante pulvinar. Donec ut
                            rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur
                            vel bibendum lorem. Morbi convallis convallis diam sit amet
                            lacinia. Aliquam in elementum tellus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kaderisasi Start -->
    <div class="container mx-auto">
        <div class="relative text-center">
            <div class="flex justify-center md:py-10 py-4 relative rounded-[45px] drop-shadow-2xl">
                <div class="absolute z-20 flex items-center -translate-y-1/2 top-1/2 right-3 md:-right-3">
                    <a href="{{ route('kaderisasi')}}" class="md:px-7 md:py-5 py-[5px] px-3 bg-[#1746F9] rounded-full md:text-4xl text-white hover:bg-yellow-400 hover:text-[#1746F9] duration-500">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
                <img loading='lazy' class="md:w-[1200px] w-[325px] object-cover brightness-50 w-[325px] rounded-[50px]" src="/assets/kader.webp" alt="" />
                <div class="absolute top-1/3 translate-y-1/3 md:top-3/4 translate-y-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 md:w-[1032px]">
                    <h1 class="text-base font-medium text-white md:font-bold font-mont md:text-2xl">
                        DIVISI KADERISASI
                    </h1>
                    <div class="invisible md:visible">
                        <p class="text-xs text-white text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu
                            turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus
                            nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum
                            tellus elit sed risus. Maecenas eget condimentum velit, sit amet
                            feugiat lectus. Class aptent taciti sociosqu ad litora torquent
                            per conubia nostra, per inceptos himenaeos. Praesent auctor purus
                            luctus enim egestas, ac scelerisque ante pulvinar. Donec ut
                            rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur
                            vel bibendum lorem. Morbi convallis convallis diam sit amet
                            lacinia. Aliquam in elementum tellus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kader END -->
    <!-- HUMAS Start -->
    <div class="container mx-auto">
        <div class="relative text-center">
            <div class="flex justify-center md:py-10 py-4 relative rounded-[45px] drop-shadow-2xl">
                <div class="absolute z-20 flex items-center -translate-y-1/2 top-1/2 right-3 md:-right-3">
                    <a href="{{ route('humas')}}" class="md:px-7 md:py-5 py-[5px] px-3 bg-[#1746F9] rounded-full md:text-4xl text-white hover:bg-yellow-400 hover:text-[#1746F9] duration-500">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>

                <img loading='lazy' class="md:w-[1200px] w-[325px] object-cover brightness-50 w-[325px] rounded-[50px]" src="/assets/humas.webp" alt="" />

                <div class="absolute top-1/3 translate-y-1/3 md:top-3/4 translate-y-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 md:w-[1032px]">
                    <h1 class="text-base font-medium text-white md:font-bold font-mont md:text-2xl">
                        DIVISI HUMAS
                    </h1>
                    <div class="invisible md:visible">
                        <p class="text-xs text-white text-gray-500">
                            engkomunikasikan segala informasi organisasi baik itu internal maupun eksternal dan Memberikan dan menerima informasi baik ke internal maupun external
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HUMAS END -->
</div>
@endsection