<div class="min-h-screen bg-[#FFCF8F] flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
    
    
    
    <div>
        {{ $logo }}
    </div>
    
    <div>
        <p class="font-extrabold text-4xl font-sans-serif capitalize text-[#0360B6] ">Log In</p>
    </div>


    {{-- This is the part where we have the form --}}
    <div class="w-full sm:max-w-md mt-6 font-sans-serif px-6 py-4 overflow-hidden sm:rounded-lg bg-gray-100">
        {{ $slot }}
    </div>
</div>
