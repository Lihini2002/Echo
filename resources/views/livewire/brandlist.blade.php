<div>
    {{-- In work, do what you enjoy. --}}

<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    {{-- {{dd($brands)}} --}}
    @foreach ($brands as $brand)
      <livewire:brandcard :brand="$brand" key="{{ $brand->id }}" />
    @endforeach
  </div>
</div>
