<div class="w-full mt-10">

    <div class="flex justify-between justify-items-center  mb-4">
        <a href="/dashboard/articles/create"
           class="bg-indigo-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
            Create Article
        </a>

        <div>
            <button
                wire:click="showAll()"
                class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                Show All
            </button>
            <button
                wire:click="showPublished()"
                class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                Show Published (@livewire('article-count'))
            </button>
        </div>
{{--        @livewire('article-count', ['lazy' => true])--}}
    </div>
    <div class="my-4">
        {{ $this->articles->links() }}
    </div>
    <table class="table-auto w-full border-collapse border border-gray-300 mt-4 mb-4">
        <thead>
        <tr class="text-xs uppercase bg-gray-700 text-gray-400">
            <th class="border border-gray-300 px-4 py-2 text-left" colspan="2">Article Title</th>
        </tr>
        </thead>
        <tbody>
        @foreach($this->articles as $article)
            <tr wire:key="{{ $article->id }}" class="border-b bg-gray-800 border-gray-700">
                <td class=" px-4 py-2"><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></td>
                <td class=" px-4 py-2 text-center">
                        <a href="/dashboard/articles/{{ $article->id }}/edit" class="text-gray-200 p-2 rounded-md text-sm ">
                            Edit
                        </a>
                        <button
                            wire:click="delete({{$article->id}})"
                            wire:confirm="Are you sure you want to delete this article?"
                            class="text-gray-200 p-2 bg-red-600 hover:bg-red-950 rounded-md text-sm">
                            Delete
                        </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="my-4">
        {{ $this->articles->links() }}
    </div>
</div>
