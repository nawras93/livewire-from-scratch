<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Isolate;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Isolate]
class Search extends Component
{
    #[Url(as: 'q', history: true, except: '')]
    public $searchText = '';

    public $placeholder;

    #[On('search:clear-results')]
    public function clear()
    {
        $this->reset('searchText');
    }

    public function queryString()
    {
        return [
            'searchText' => [
                'as' => 'q',
                'history' => true,
                'except' => '',
            ]
        ];
    }

    public function render()
    {
        return view('livewire.search', [
            'searchResults' => Article::where('title', 'like', "%$this->searchText%")->get()
        ]);
    }
}
