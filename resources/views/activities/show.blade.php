<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Activity Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex flex-col items-center justify-center">
                        <h1 class="text-2xl font-bold mb-4">{{ $activity->title }}</h1>
                        <img src="{{ asset($activity->image) }}" class="w-full mb-4"alt="{{ asset($activity->image) }}">
                        <div>{!! $activity->content !!}</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>