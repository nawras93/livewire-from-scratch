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
            <label class="flex items-center">
                <input type="checkbox" name="published"
                       class="mr-2"
                       wire:model.boolean="form.published"
                >
                Published
            </label>
        </div>
        <div class="mb-3">
            <div>
                <div class="mb-2">Notification Options</div>
                <div class="flex gap-6">
                    <label class="flex items-center">
                        <input type="radio" value="email" class="mr-2"
                               wire:model="form.notification"
                        >
                        Email
                    </label>
                    <label class="flex items-center">
                        <input type="radio" value="sms" class="mr-2"
                               wire:model="form.notification"
                        >
                        SMS
                    </label>
                    <label class="flex items-center">
                        <input type="radio" value="none" class="mr-2"
                               wire:model="form.notification"
                        >
                        None
                    </label>
                </div>
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
