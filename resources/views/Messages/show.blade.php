<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Message Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <p class="font-bold mb-2">Name :{{ $data->name }}</p>
                        <p class="font-bold mb-4">Mail from :{{ $data->email }}</p>
                        <div>{!! $data->message !!}</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>