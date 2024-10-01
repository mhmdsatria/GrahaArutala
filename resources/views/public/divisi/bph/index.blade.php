@extends('layouts.front')
@section('main')

<div class="container mx-auto">
    <div class="flex justify-center text-center pt-36">
        <div class="m-auto">
            <div class="relative md:w-[1032px] px-10">
                <h1 class="md:text-3xl text-xl tracking-wide font-bold">
                    BADAN PENGURUS HARIAN
                </h1>
                <p class="text-sm text-gray-500 py-10">
                    Menyampaikan segala bentuk informasi yang bermanfaat dari dan untuk internal maupun eksternal, serta
                    membidangi segala macaminformasi di bidang design dan editing foto & video untuk keperluan himpunan dan Memberikan Informasi yang bersifat aktual dan faktual dan bermanfaat bagi Mahasiswa HMTI ,Menyajikan konten-konten yang menarik dan kreatif melalui berbagai media sosial dan media informasidan komunikasi lainnya.
                </p>
            </div>
            <div class="absolute pt-5 left-1/2 -translate-x-1/2 items-center">
                <ul class="flex justify-center gap-5 md:gap-10">
                    <li class="hover:border-b-4 border-[#FFD900] border-b-4">
                        <a href="">Semua</a>
                    </li>
                    <li class="hover:border-b-4 border-[#FFD900] duration-100">
                        <a href="">Ketua</a>
                    </li>
                    <li class="hover:border-b-4 border-[#FFD900] duration-100">
                        <a href="">Sekretaris</a>
                    </li>
                    <li class="hover:border-b-4 border-[#FFD900] duration-100">
                        <a href="">Bendahara</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="grid md:grid-cols-4 gap-y-10 md:px-32 py-20">
    <div class="relative shadow-2xl w-[250px] rounded-3xl mx-auto md:mx-0 hover:-translate-y-2 duration-300">
        <img src="../assets/kahim.webp" alt="" class="rounded-l-lg"/>
        <div class="absolute bottom-0 py-5 px-5 filter-none">
            <h3 class="font-bold">Muhamad Fadil Amin</h3>
            <h6>Ketua Himpunan</h6>
        </div>
    </div>
    <div class="relative shadow-2xl w-[250px] rounded-3xl mx-auto md:mx-0 hover:-translate-y-2 duration-300">
        <img src="../assets/wahim.webp" alt="" />
        <div class="absolute bottom-0 py-5 px-5">
            <h3 class="font-bold">Ahmad Ibrahim M.</h3>
            <h6>Wakil Ketua Himpunan</h6>
        </div>
    </div>
    <div class="relative shadow-2xl w-[250px] rounded-3xl mx-auto md:mx-0 hover:-translate-y-2 duration-300">
        <img src="../assets/sekertaris1.webp" alt="" />
        <div class="absolute bottom-0 py-5 px-5">
            <h3 class="font-bold">Tirawati</h3>
            <h6>Sekertaris</h6>
        </div>
    </div>
    <div class="relative shadow-2xl w-[250px] rounded-3xl mx-auto md:mx-0 hover:-translate-y-2 duration-300">
        <img src="../assets/sekertaris2.webp" alt="" />
        <div class="absolute bottom-0 py-5 px-5">
            <h3 class="font-bold">Rahayu Amelia Kamis</h3>
            <h6>Sekertaris 2</h6>
        </div>
    </div>
    <div class="relative shadow-2xl w-[250px] rounded-3xl mx-auto md:mx-0 hover:-translate-y-2 duration-300">
        <img src="../assets/bendahara1.webp" alt="" />
        <div class="absolute bottom-0 py-5 px-5">
            <h3 class="font-bold">Azkia Salmanaz Z.</h3>
            <h6>Bendahara</h6>
        </div>
    </div>
    <div class="relative shadow-2xl w-[250px] rounded-3xl mx-auto md:mx-0 hover:-translate-y-2 duration-300">
        <img src="../assets/bendahara2.webp" alt="" />
        <div class="absolute bottom-0 py-5 px-5">
            <h3 class="font-bold">Amelinda Renjani</h3>
            <h6>Bendahara 2</h6>
        </div>
    </div>
</div>