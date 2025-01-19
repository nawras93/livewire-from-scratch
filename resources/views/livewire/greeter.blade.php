<div>
    <div>
        Hello {{ $name }}!
    </div>

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
        wire:submit="changeName(document.querySelector('#newName').value)"
    >
        <div class="mt-4">
            <input
                id="newName"
                class="block w-full p-4 border rounded-md bg-gray-700 text-white" type="text">
        </div>
        <div class="mt-4">
            <button
                type="submit"
                class="text-white font-medium rounded-xl px-4 bg-blue-500">
                Greet
            </button>
        </div>
    </form>
</div>
