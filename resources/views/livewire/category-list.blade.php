<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    
    <div>
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                @foreach($categories as $category)
            
                <livewire:category-link :category="$category" />
              
            @endforeach

            </ul>
     
      </div>

</div>
