<div class="relative flex ml-3 space-x-4">
    @can('view-admin', 'App\\Models\User')
        <x-nav-link :navigate='false' href="{{ route('filament.admin.auth.login') }}" :active="request()->routeIs('filament.admin.auth.login')">
            {{ __('Admin') }}
        </x-nav-link>
    @endcan

    
    {{-- @php
    $unreadNotifications = auth()->user()->unreadNotifications;
    @endphp
    <li class="relative">
        <button class="relative text-gray-600 hover:text-gray-800 focus:outline-none" id="notificationButton">
            <i class="far fa-bell"></i>
            @if($unreadNotifications->count())
                <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">{{ $unreadNotifications->count() }}</span>
            @endif
        </button>
        <div id="notificationDropdown" class=" absolute right-0 mt-2 w-64 bg-white rounded-md shadow-lg overflow-hidden z-20">
            <div class="py-2">
                <span class="block px-4 py-2 text-sm text-gray-700">You have {{ $unreadNotifications->count() }} notifications</span>
            </div>
            <div class="border-t border-gray-200"></div>
            <div class="py-2">
                @foreach($unreadNotifications as $notification)
                    <a href="{{ route('notifications.show', $notification->id) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-envelope mr-2"></i> {{ $notification->data['message'] }}
                        <span class="float-right text-gray-500 text-xs">{{ $notification->created_at->diffForHumans() }}</span>
                    </a>
                @endforeach
            </div>
            <div class="border-t border-gray-200"></div>
            <a href="{{ route('notifications.markAllRead') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mark all as read</a>
        </div>
    </li> --}}

    {{-- notifications --}}
    <div class="relative">
        <svg class="w-8 h-8 text-black animate-wiggle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M15.585 15.5H5.415A1.65 1.65 0 0 1 4 13a10.526 10.526 0 0 0 1.5-5.415V6.5a4 4 0 0 1 4-4h2a4 4 0 0 1 4 4v1.085c0 1.907.518 3.78 1.5 5.415a1.65 1.65 0 0 1-1.415 2.5zm1.915-11c-.267-.934-.6-1.6-1-2s-1.066-.733-2-1m-10.912 3c.209-.934.512-1.6.912-2s1.096-.733 2.088-1M13 17c-.667 1-1.5 1.5-2.5 1.5S8.667 18 8 17"/></svg>
       
    </div>
    
    


    {{-- cart --}}
    <div class="">
        <a href="{{ route('home') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="file: mt-4 h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>
          </a>
    </div>
   
    <x-dropdown align="right" width="48">
        
        <x-slot name="trigger">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <button
                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                        alt="{{ Auth::user()->name }}" />
                </button>
            @else
                <span class="inline-flex rounded-md">
                    <button type="button"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                        {{ Auth::user()->name }}

                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                </span>
            @endif
        </x-slot>

        <x-slot name="content">
            <!-- Account Management -->
            <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Manage Account') }}
            </div>


       
            <x-dropdown-link wire:navigate href="{{ route('home', ['id' => auth()->id()]) }}">
              {{ __('Profile') }}
            </x-dropdown-link>
       
           
            <x-dropdown-link wire:navigate href="{{ route('profile.show') }}">
                {{ __('Edit Profile') }}
            </x-dropdown-link>
 
            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-dropdown-link wire:navigate href="{{ route('api-tokens.index') }}">
                    {{ __('API Tokens') }}
                </x-dropdown-link>
            @endif 

            <div class="border-t border-gray-200"></div>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
   
</div>

