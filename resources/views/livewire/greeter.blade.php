<div>


{{--    <div class="mt-4">--}}
{{--        <input--}}
{{--            id="newName"--}}
{{--            class="block w-full p-4 border rounded-md bg-gray-700 text-white" type="text">--}}
{{--    </div>--}}
{{--    <div class="mt-4">--}}
{{--        <button wire:click="changeName(document.querySelector('#newName').value)" class="text-white font-medium rounded-xl px-4 bg-blue-500">--}}
{{--            Greet--}}
{{--        </button>--}}
{{--    </div>--}}

    <form
        wire:submit="changeGreeting()"
    >
        <div class="mt-4">
            <select
                class="p-4 border rounded-md bg-gray-700 text-white"
                wire:model.fill="greeting"
            >
                @foreach($greetings as $item)
                    <option value="{{ $item->greeting }}" {{ $item->greeting === $greeting ? 'selected' : '' }}>{{ $item->greeting }}</option>
                @endforeach
            </select>

            <input
                type="text"
                class="p-4 border rounded-md bg-gray-700 text-white"
                wire:model.live.blur="name"
            >
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mt-4">
            <button
                type="submit"
                class="text-white font-medium rounded-xl px-4 bg-blue-500">
                Greet
            </button>
        </div>
    </form>

    @if($greetingMessage !== '')
        <div class="mt-4">
            {{ $greetingMessage }}
        </div>
    @endif
</div>
