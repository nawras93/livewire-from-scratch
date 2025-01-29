<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Session;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Manage Articles')]
class ArticleList extends AdminComponent
{
    use WithPagination;
    #[Session('showPublishedOnly')]
    public $showPublishedOnly = false;

    #[Computed(/*persist: true*/)]
    public function articles()
    {
        $query = Article::query();

        if ($this->showPublishedOnly) {
            $query->where('published', true);
        }
        return $query->paginate(10, pageName: 'articles-page');
    }

    public function delete(Article $article)
    {
//        if ($this->articles->count() > 10) {
//            throw new \Exception('Nope');
//        }

        $article->delete();
//        unset($this->articles);
        cache()->forget('published-count');
    }

    public function togglePublished($showOnlyPublished)
    {
        $this->showPublishedOnly = $showOnlyPublished;
        $this->resetPage(pageName: 'articles-page');
    }

}
