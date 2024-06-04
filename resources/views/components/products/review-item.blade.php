@props(['review'])
{{-- pass a review object --}}
<div class=" flex flex-col items-start bg-[#f8fbff] border-[#0360B6] border-l-2 rounded-lg shadow-sm shadow-[#95b8d9] w-[80%] p-4 ">
    {{-- <div class="review-header"> --}}
        {{-- <span class="rating">
            @for ($i = 1; $i <= 5; $i++)
                <i class="fas fa-star {{ $i <= $review->rating ? 'text-yellow-500' : '' }}"></i>
            @endfor
        </span>
        <span class="reviewer">
            By {{ $review->user->name }}
        </span>
    </div>
    <div class="review-content">
        <p>{{ $review->review }}</p> --}}


<div class="">
    {{-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/docs/images/blog/image-4.jpg" alt=""> --}}
    <div class="flex flex-col ">
        <h5 class="mb-2 text-xl font-medium tracking-tight text-gray-600"> {{$review->user->name}}</h5>
        <p class="mb-3 font-normal text-gray-500">
            {{$review->review}}
            {{-- Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. --}}
        </p>
        <p class=" font-normal text-gray-500">
            {{$review->rating}}/5
            {{-- Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. --}}
        </p>
    </div>
{{-- </div> --}}

        
    </div>
</div>