<nav class="flex items-center justify-between py-3 px-6 bg-[#FFCF8F]">
    <div id="nav-left" class="flex items-center">
        <a href="{{ route('home') }}">
            <x-application-mark />
        </a>
        <div class="top-menu ml-10 ">
            <div class="flex space-x-4">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link href="{{ route('explore') }}" :active="request()->routeIs('explore')">
                    {{ __('Explore') }}
                </x-nav-link>

                <x-nav-link href="{{ route('brands') }}" :active="request()->routeIs('brands')">
                    {{ __('Brands') }}
                </x-nav-link>

                <x-nav-link href="{{ route('certifications') }}" :active="request()->routeIs('certifications')">
                    {{ __('Certifications') }}
                </x-nav-link>
                {{-- Change the events here --}}
                {{-- <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Blog') }}
                </x-nav-link> --}}
                
            </div>
        </div>
    </div>
    <div id="nav-right" class="flex items-center md:space-x-6">
        @auth()
            @include('layouts.partials.header-right-auth')
        @else
            @include('layouts.partials.header-right-guest')
        @endauth
        {{-- <livewire:notifications-component/> --}}

    </div>
</nav>

