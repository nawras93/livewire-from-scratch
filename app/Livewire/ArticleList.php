<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Manage Articles')]
class ArticleList extends AdminComponent
{
    use WithPagination;

    public $showPublishedOnly = false;

    public function delete(Article $article)
    {
        $article->delete();
    }

    public function showAll()
    {
        $this->showPublishedOnly = false;
        $this->resetPage(pageName: 'articles-page');
    }

    public function showPublished()
    {
        $this->showPublishedOnly = true;
        $this->resetPage(pageName: 'articles-page');
    }
    public function render()
    {
        $query = Article::query();

        if ($this->showPublishedOnly) {
            $query->where('published', true);
        }
        $articles = $query->paginate(10, pageName: 'articles-page');
        return view('livewire.article-list', [
            'articles' => $articles,
        ]);
    }
}
