<div class="flex justify-center px-10 mx-10">
  <div class="flex flex-wrap justify-center gap-10 space-x-4 space-y-4">
    {{-- {{dd($brands)}} --}}
    @foreach ($brands as $brand)
        <livewire:brandcard :brand="$brand" key="{{ $brand->id }}" />
    @endforeach
   
  </div>
</div>
