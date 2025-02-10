<div>

    <form>
        <div class="mt-4">
            <input
                type="text"
                class="p-4 w-full border rounded-md bg-gray-700 text-white"
                wire:model.live.debounce="searchText"
                wire:offline.attr="disabled"
                placeholder="{{$placeholder}}"
            >
        </div>
    </form>
    @if(!empty($searchText))
        <div wire:transition>
            @livewire('search-results', ['results' => $searchResults])
        </div>
    @endif

</div>
