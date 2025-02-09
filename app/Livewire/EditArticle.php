<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class EditArticle extends AdminComponent
{
    use WithFileUploads;
    public ArticleForm $form;

    public function mount(Article $article)
    {
        $this->form->setArticle($article);
    }

    public function downloadPhoto(): BinaryFileResponse
    {
        return response()->download(Storage::disk('public')->path($this->form->photo_path), 'article.jpg');

//        return response()->streamDownload(function () {
//
//        }, 'article.jpg');
    }

    public function save()
    {
        $this->form->update();

//        $this->redirectIntended('/dashboard');

        session()->flash('message', 'Article updated successfully.');

        $this->redirect(ArticleList::class, navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}
