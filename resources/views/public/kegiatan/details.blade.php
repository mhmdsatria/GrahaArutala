@extends('layouts.front')
@section('main')

<!-- Body Start -->
<section class="container">
    <div class="" id="berita" role="tabpanel" aria-labelledby="berita-tab">
        <div class="md:pt-10">
            <div class="flex flex-col items-center justify-center mx-4">
                <h1 class="text-2xl font-bold mb-4">{{ $collection->title }}</h1>
                <img src="{{ asset($collection->image) }}" class="w-full mb-4"alt="{{ asset($collection->image) }}">
                <div class="mb-8">{!! $collection->content !!}</div>
            </div>
        </div>
</section>
<!-- Body End -->
@endsection