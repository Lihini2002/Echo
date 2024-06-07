

<div class="flex items-center justify-center mb-10">
    <div class="flex flex-col bg-[#f8fbff] border-[#0360B6] border-l-2 rounded-lg shadow-sm shadow-[#95b8d9] w-[76%] p-4">
        @if ($errorMessage)
            <div class="bg-red-500 text-white p-2 rounded mb-4">
                {{ $errorMessage }}
            </div>
        @endif
    
        <div class="flex flex-col">
            <form wire:submit.prevent="submit">
                <div class="flex flex-row justify-between items-center mb-4">
                    <div class="flex justify-start font-normal text-gray-700 text-xl">
                        <p>Add a new review</p>
                    </div>
                    <div class="flex gap-4 items-center">
                        <div>
                            <input type="number" id="rating" wire:model="rating" class="mt-1 block rounded-md" min="1" max="5" placeholder="Rating">
                        </div>
                        <div>
                            <button type="submit" class="px-4 py-2 mt-1 bg-[#] bg-[#0360B6] text-white font-semibold rounded">Submit</button>
                        </div>
                    </div>
                </div>
        
                <div class="mb-4">
                    <textarea id="review" wire:model="review" class="mt-1 block w-full rounded-md" rows="2" placeholder="Share your thoughts"></textarea>
                </div>
            </form>
        </div>
    </div>
</div>
