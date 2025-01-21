<div class="mx-auto w-1/2 mt-10">

    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
        <tr class="text-xs uppercase bg-gray-700 text-gray-400">
            <th class="border border-gray-300 px-4 py-2 text-left">Title</th>
            <th class="border border-gray-300 px-4 py-2"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr wire:key="{{ $article->id }}" class="border-b bg-gray-800 border-gray-700">
                <td class=" px-4 py-2">{{ $article->title }}</td>
                <td class=" px-4 py-2 text-center">
                        <button
                            wire:click="delete({{$article->id}})"
                            wire:confirm="Are you sure you want to delete this article?"
                            class="text-gray-200 p-2 bg-red-600 hover:bg-red-950 rounded-md text-xs">
                            Delete
                        </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
