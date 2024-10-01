@extends('layouts.front')
@section('main')
<div class="pt-20"></div>
<div class="container mx-auto mb-20">
    @if (session('success'))
    <div class="flex p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
        role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">Success alert!</span> {{ session('success') }}
        </div>
    </div>
    @endif

    @if (($errors->has('g-recaptcha-response')))
    <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
        role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">{{ $errors->first('g-recaptcha-response') }}</span>
        </div>
    </div>
    @endif

    <section class="container py-7">
        <div
            class="container bg-[url('../assets/contact-bg.jpg')] bg-cover bg-no-repeat md:flex md:justify-between md:items-center">
            <div class=" max-w-xl p-10 flex-row ">
                <h1 class="text-xl font-bold text-white pb-10 md:text-5xl">Kami Mendengarkan Aspirasi Anda </h1>
                <div class="flex space-x-1 md:space-x-4 ">
                </div>
            </div>

            <div class="p-10 flex-row">
                <form method="POST" action="{{ route('messages.store') }}" enctype="multipart/form-data" >
                    @csrf
                    <input required type="text" placeholder="Full Name" name="name"
                        class="block w-full bg-white text-black border rounded-md border-gray-200  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <input required type="email" placeholder="Email" name="email"
                        class="block w-full bg-white text-black border border-gray-200 rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <textarea name="message" id="message"
                        class="block w-full bg-white text-black border rounded-md border-gray-200  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        cols="35" rows="5" placeholder="Kritik dan Saran" required></textarea>
                    <div class="g-recaptcha" data-sitekey="6LftNcYnAAAAAPVkF3QeikM4FPLvouFiZmmtnBv6"></div>
                    <button type="submit "
                        class="ease-in-out duration-300 w-full py-3 px-5 bg-[#1746f9] rounded-md text-[15px] font-mont font-bold text-white hover:bg-gradient-to-r from-[#1746f9] via-[#1a3ab3] to-[#1e2748] hover:shadow-xl ">Kirim</button>
                </form>


            </div>

        </div>
    </section>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection