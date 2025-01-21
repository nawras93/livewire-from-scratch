<div class="m-auto ">
    @foreach($articles as $article)
    <div class="mt-5 p-3" wire:key="{{ $article->id }}">
            <h3 class="text-2xl text-blue-500 mb-3 hover:text-blue-800">
                <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
            </h3>

            <p>{{ str($article->content)->words(10) }}</p>
    </div>
    @endforeach
</div>
