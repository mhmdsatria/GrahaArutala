@extends('layouts.front')
@section('main')
<!-- Body Start -->
@foreach ($article as $item)
<section class="container mt-24">
    <div class="" id="berita" role="tabpanel" aria-labelledby="berita-tab">
        <div class="md:pt-10">
            <div class="flex flex-col items-center justify-center mx-4">
                <h1 class="text-2xl font-bold mb-4">{{ $item->title }}</h1>
                <img src="{{ asset('storage/'.$item->thumbnail) }}" class="w-full mb-4"alt="{{ asset('storage/'.$item->thumbnail) }}">
                <p>{{$item->created_at->format('Y')}}</p>
                <div class="mb-8">{!! $item->content !!}</div>
            </div>
        </div>
</section>
@endforeach
<!-- Body End -->
@endsection
