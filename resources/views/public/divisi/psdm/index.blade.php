@extends('layouts.front')
@section('main')

<div class="container mx-auto">
    <div class="flex justify-center text-center pt-36">
        <div class="m-auto">
            <div class="relative md:w-[1032px] px-10">
                <h1 class="md:text-3xl text-xl tracking-wide font-bold">
                    INFORMASI DAN KOMUNIKASI
                </h1>
                <p class="text-sm text-gray-500 py-10">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu
                    turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus
                    nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum
                    tellus elit sed risus. Maecenas eget condimentum velit, sit amet
                    feugiat lectus. Class aptent taciti sociosqu ad litora.
                </p>
            </div>
            <div class="absolute pt-5 left-1/2 -translate-x-1/2 items-center">
                <ul class="flex justify-center gap-5 md:gap-10">
                    <li class="hover:border-b-4 border-[#FFD900] border-b-4">
                        <a href="">Semua</a>
                    </li>
                    <li class="hover:border-b-4 border-[#FFD900] duration-100">
                        <a href="">Koordinator</a>
                    </li>
                    <li class="hover:border-b-4 border-[#FFD900] duration-100">
                        <a href="">Anggota</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="grid md:grid-cols-4 gap-y-10 md:px-32 py-20">
    <div class="relative shadow-2xl w-[250px] rounded-3xl mx-auto md:mx-0 hover:-translate-y-2 duration-300">
        <img src="../assets/sample portrait.png" alt="" />
        <div class="absolute bottom-0 py-5 px-5 filter-none">
            <h3 class="font-bold">Muhammad Harits F.</h3>
            <h6>Koordinator</h6>
        </div>
    </div>
    <div class="relative shadow-2xl w-[250px] rounded-3xl mx-auto md:mx-0 hover:-translate-y-2 duration-300">
        <img src="../assets/sample portrait.png" alt="" />
        <div class="absolute bottom-0 py-5 px-5">
            <h3 class="font-bold">Muhammad Rafly</h3>
            <h6>Sekertaris</h6>
        </div>
    </div>
    <div class="relative shadow-2xl w-[250px] rounded-3xl mx-auto md:mx-0 hover:-translate-y-2 duration-300">
        <img src="../assets/sample portrait.png" alt="" />
        <div class="absolute bottom-0 py-5 px-5">
            <h3 class="font-bold">Muamar Hasan Albana</h3>
            <h6>Implementation</h6>
        </div>
    </div>
    <div class="relative shadow-2xl w-[250px] rounded-3xl mx-auto md:mx-0 hover:-translate-y-2 duration-300">
        <img src="../assets/sample portrait.png" alt="" />
        <div class="absolute bottom-0 py-5 px-5">
            <h3 class="font-bold">Muhamad Rifda Firdaus. S</h3>
            <h6>Planing</h6>
        </div>
    </div>
    <div class="relative shadow-2xl w-[250px] rounded-3xl mx-auto md:mx-0 hover:-translate-y-2 duration-300">
        <img src="../assets/sample portrait.png" alt="" />
        <div class="absolute bottom-0 py-5 px-5">
            <h3 class="font-bold">Prihatini</h3>
            <h6>Planing</h6>
        </div>
    </div>
    <div class="relative shadow-2xl w-[250px] rounded-3xl mx-auto md:mx-0 hover:-translate-y-2 duration-300">
        <img src="../assets/sample portrait.png" alt="" />
        <div class="absolute bottom-0 py-5 px-5">
            <h3 class="font-bold">Muhammad Fakhraj J.</h3>
            <h6>Content</h6>
        </div>
    </div>
    <div class="relative shadow-2xl w-[250px] rounded-3xl mx-auto md:mx-0 hover:-translate-y-2 duration-300">
        <img src="../assets/sample portrait.png" alt="" />
        <div class="absolute bottom-0 py-5 px-5">
            <h3 class="font-bold">Nazmatul Ima</h3>
            <h6>Content</h6>
        </div>
    </div>
    <div class="relative shadow-2xl w-[250px] rounded-3xl mx-auto md:mx-0 hover:-translate-y-2 duration-300">
        <img src="../assets/sample portrait.png" alt="" />
        <div class="absolute bottom-0 py-5 px-5">
            <h3 class="font-bold">Ujang Herlan</h3>
            <h6>Training And Development</h6>
        </div>
    </div>
    <div class="relative shadow-2xl w-[250px] rounded-3xl mx-auto md:mx-0 hover:-translate-y-2 duration-300">
        <img src="../assets/sample portrait.png" alt="" />
        <div class="absolute bottom-0 py-5 px-5">
            <h3 class="font-bold">Nadia Sari</h3>
            <h6>Training And Development</h6>
        </div>
    </div>
</div>