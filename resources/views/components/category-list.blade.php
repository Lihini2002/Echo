<div class="top-menu ml-10">
    <div class="flex space-x-4">
        <x-category-link href="{{ route('home') }}" :active="request()->routeIs('home')">
            {{ __('Home') }}
        </x-category-link>
        <x-category-link href="{{ route('explore') }}" :active="request()->routeIs('explore')">
            {{ __('Explore') }}
        </x-category-link>

        <x-category-link href="{{ route('brands') }}" :active="request()->routeIs('brands')">
            {{ __('Brands') }}
        </x-category-link>

        <x-category-link href="{{ route('certifications') }}" :active="request()->routeIs('certifications')">
            {{ __('Certifications') }}
        </x-category-link>
        {{-- Change the events here --}}
        {{-- <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
            {{ __('Blog') }}
        </x-nav-link> --}}
        
    </div>
</div>