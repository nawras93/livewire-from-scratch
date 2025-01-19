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
        wire:submit="changeName()"
    >
        <div class="mt-4">
            <select
                class="p-4 border rounded-md bg-gray-700 text-white"
                wire:model.fill="greeting"
            >
                <option value="Hello">Hello</option>
                <option value="Hi">Hi</option>
                <option value="Hey">Hey</option>
                <option value="Howdy" selected>Howdy</option>
                <option value="Greetings">Greetings</option>
                <option value="Bonjour">Bonjour</option>
                <option value="Ciao">Ciao</option>
            </select>

            <input
                type="text"
                class="p-4 border rounded-md bg-gray-700 text-white"
                wire:model.live.blur="name"
            >
        </div>
        <div class="mt-4">
            <button
                type="submit"
                class="text-white font-medium rounded-xl px-4 bg-blue-500">
                Greet
            </button>
        </div>
    </form>

    @if($name !== '')
        <div class="mt-4">
            {{ $greeting }}, {{ $name }}!
        </div>
    @endif
</div>
