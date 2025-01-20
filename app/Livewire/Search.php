<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Search extends Component
{
    #[Validate('required')]
    public $searchText;
    public $searchResults = [];
    public $placeholder;

    public function updatedSearchText($value)
    {
        $this->reset('searchResults');
        $this->validate();
        $searchTerm = "%{$value}%";
        $this->searchResults = Article::where('title', 'like', $searchTerm)->get();
    }

    #[On('search:clear-results')]
    public function clear()
    {
        $this->reset('searchText', 'searchResults');
    }

    public function render()
    {
        return view('livewire.search');
    }
}
