<div {{--class="{{ $show ? 'block' : 'hidden' }}"--}}>
    <div class="mt-4 p-4 absolute border rounded-md bg-gray-700 border-indigo-600">
{{--        <div class="absolute top-0 right-0 pt-1 pr-3">--}}
{{--            <button type="button"--}}
{{--                wire:click="dispatch('search:clear-results')">--}}
{{--                x--}}
{{--            </button>--}}
{{--        </div>--}}
        @if(count($results) == 0)

            <p>No Results Found</p>
        @endif
        @foreach($results as $result)
            <div class="pt-2" wire:key="result-{{$result->id}}">
                <a href="/articles/{{$result->id}}"
                   class="text-white hover:bg-gray-700 hover:text-blue-900 rounded-md"
                   wire:navigate
                >
                    {{ $result->title }}
                </a>
            </div>
        @endforeach
    </div>
</div>
