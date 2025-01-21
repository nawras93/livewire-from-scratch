<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy]
class ArticleCount extends Component
{
    public $count = 0;

    public function mount()
    {
        sleep('3');
        $this->count = Article::count();
    }

    public function placeholder()
    {
        return view('livewire.placeholder');
    }

    public function render()
    {
        return view('livewire.article-count');
    }
}
