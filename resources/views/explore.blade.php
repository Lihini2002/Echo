<x-app-layout>
    {{-- FFCF8F the yellow --}}
    <div class="h-[100vh]">
        <div class="flex justify-center py-20 bg-[#FFCF8F]">
            <div class="text-center">
                <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white"> <span class="text-[#0360B6]">Explore</span> </h1>
                <p class="text-lg text-gray-800 lg:text-xl dark:text-gray-700">Find the finest Sri Lankan products made with love and care</p>
                
            </div>
    
        </div>

        {{-- Have to make it mobile responsive --}}
        <div class="mx-10 py-10 flex justify-center">
            @livewire('category-list')  
            {{-- bg-[#2B752A] - the green --}}
        </div>

       
    </div>
 
</x-app-layout>