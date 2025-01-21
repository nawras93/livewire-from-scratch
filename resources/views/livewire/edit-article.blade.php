<div class="mx-auto mt-10">
    <h1>Edit Article</h1>
    <form wire:submit="save">
        <div class="mb-3">
            <label class="block" for="article-title">Title</label>
            <input
                type="text"
                class="p-2 w-full border rounded-md bg-gray-700 text-white"
                wire:model="form.title"
            >
            <div>
                @error('form.title') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mb-3">
            <label class="block" for="article-content">Content</label>
            <textarea
                id="article-content"
                class="p-2 w-full border rounded-md bg-gray-700 text-white"
                wire:model="form.content"
            ></textarea>
            <div>
                @error('form.content') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mb-3">
            <button
                class="bg-indigo-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded"
                type="submit"
            >
                Save
            </button>
        </div>
    </form>

</div>
