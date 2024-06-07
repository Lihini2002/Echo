<div>
    <li class="me-2">
        <span 
            class="bg-[#d2e2f3] shadow-md shadow-grey-500 text-sm font-medium me-2 px-5 py-2 rounded dark text-gray-700 cursor-pointer"
            wire:click="setActiveCategory({{ $category->id }})" 
            wire:key="{{ $category->id }}"

            :class="{ 'bg-[#e2b857] text-white': activeCategory == {{ $category }} }" 
           
        >
        {{-- {{dd($activeCategory)}} --}}
            {{ $category->name }}
        </span>
    </li>
</div>
