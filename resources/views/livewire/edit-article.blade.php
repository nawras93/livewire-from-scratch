<div class="mx-auto mt-10">
    <h1>Edit Article ({{ $form->id }})</h1>

    {{--    <div wire:dirty>form data has changed</div>--}}
    <form wire:submit="save">
        <div class="mb-3">
            <label wire:dirty.class="text-blue-500" wire:target="form.title" class="block" for="article-title">
                Title <span wire:dirty wire:target="form.title">*</span>
            </label>
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
            <label wire:dirty.class="text-blue-500" wire:target="form.content" class="block" for="article-content">
                Content <span wire:dirty wire:target="form.content">*</span>
            </label>
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
            <label class="block" for="article-photo">
                Photo <span wire:dirty wire:target="form.photo">*</span>
            </label>
            <div>
                @if ($form->photo)
                    <img src="{{ $form->photo->temporaryUrl() }}" alt="" class="w-64">
                @elseif($form->photo_path)
                    <img src="{{ Storage::url($form->photo_path) }}" alt="" class="w-64">
                    <button type="button"
                            wire:click="downloadPhoto"
                    >
                        Download
                    </button>
                @endif
            </div>
            <input type="file"
                   id="article-content"
                   class="p-2 w-full border rounded-md bg-gray-700 text-white"
                   wire:model="form.photo"
            ></input>
            <div>
                @error('form.photo') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mb-3">
            <label wire:dirty.class="text-blue-500" wire:target="form.published" class="flex items-center">
                <input type="checkbox" name="published"
                       class="mr-2"
                       wire:model.boolean="form.published"
                >
                Published <span wire:dirty wire:target="form.published">*</span>
            </label>
        </div>
        <div class="mb-3">
            <div>
                <div wire:dirty.class="text-blue-500" wire:target="form.notifications" class="mb-2">
                    Notification Options <span wire:dirty wire:target="form.notifications">*</span>
                </div>
                <div class="flex gap-6 mb-3">
                    <label class="flex items-center">
                        <input type="radio" value="true" class="mr-2"
                               wire:model.boolean="form.allowNotifications"
                        >
                        Yes
                    </label>
                    <label class="flex items-center">
                        <input type="radio" value="false" class="mr-2"
                               wire:model.boolean="form.allowNotifications"
                        >
                        No
                    </label>
                </div>
                <div x-show="$wire.form.allowNotifications">
                    <label class="flex items-center">
                        <input type="checkbox" value="email" class="mr-2"
                               wire:model="form.notifications"
                        >
                        Email
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" value="sms" class="mr-2"
                               wire:model="form.notifications"
                        >
                        SMS
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" value="push" class="mr-2"
                               wire:model="form.notifications"
                        >
                        Push
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
