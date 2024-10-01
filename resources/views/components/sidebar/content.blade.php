<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Dashboard"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown
        title="Merubah Isi Konten"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        {{-- <x-sidebar.sublink
            title="Patner Company"
            href="{{ route('projects.index') }}"
            :active="request()->routeIs('projects.index')"
        /> --}}
        <x-sidebar.sublink
            title="Konten"
            href="{{ route('contents.index') }}"
            :active="request()->routeIs('contents.index')"
        />
        <x-sidebar.sublink
            title="Berita"
            href="{{ route('beritas.index') }}"
            :active="request()->routeIs('beritas.index')"
        />

        <x-sidebar.sublink
            title="Message List"
            href="{{ route('messages.index') }}"
            :active="request()->routeIs('messages.index')"
        />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown
    title="Account"
    :active="Str::startsWith(request()->route()->uri(), 'buttons')"
>
    <x-slot name="icon">
        <x-icons.account class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
    </x-slot>

    <x-sidebar.sublink
        title="Account List"
        href="{{ route('account.index') }}"
        :active="request()->routeIs('account.index')"
    />

    {{-- <x-sidebar.sublink
        title="Message List"
        href="{{ route('contact.index') }}"
        :active="request()->routeIs('contact.index')"
    /> --}}
    </x-sidebar.dropdown>
    
    @php
        $links = array_fill(0, 0, '');
    @endphp

    @foreach ($links as $index => $link)
        <x-sidebar.link title="Dummy link {{ $index + 1 }}" href="#" />
    @endforeach

</x-perfect-scrollbar>
