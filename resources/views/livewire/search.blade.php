<div>

    <form>
        <div class="mt-4">
            <input
                type="text"
                class="p-4 w-full border rounded-md bg-gray-700 text-white"
                wire:model.live.debounce="searchText"
                placeholder="{{$placeholder}}"
            >
        </div>
    </form>
    @livewire('search-results', ['results' => $searchResults, 'show' => !empty($searchText)])
</div>
