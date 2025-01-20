<div>

    <form>
        <div class="mt-4">
            <input
                type="text"
                class="p-4 w-9/12 border rounded-md bg-gray-700 text-white"
                wire:model.live.debounce="searchText"
                placeholder="Search..."
            >
            <button class="font-medium rounded-md p-4 disabled:bg-indigo-400 bg-indigo-600  text-white"
                    wire:click.prevent="clear()"
                    {{ empty($searchText) ? 'disabled' : '' }}

            >
                Clear
            </button>
        </div>
    </form>
    <div class="mt-4">
        @foreach($searchResults as $result)
            <div class="pt-2">
                <a href="/articles/{{$result->id}}" class="text-white hover:bg-gray-700 hover:text-blue-900 rounded-md">
                    {{ $result->title }}
                </a>
            </div>
        @endforeach
    </div>
</div>
