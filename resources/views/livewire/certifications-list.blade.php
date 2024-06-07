<div>
    <div class="mx-20 px-10 mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        @foreach ($certifications as $certification)
            <x-certifications.certification-item wire:key="{{ $certification->id }}" :certification="$certification" />
        @endforeach

        @if ($certifications->isEmpty())
            <div class="text-center text-gray-500 font-bold">No products found.</div>
        @endif
    </div>

    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
</div>
