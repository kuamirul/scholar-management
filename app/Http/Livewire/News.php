<?php

namespace App\Http\Livewire;

use App\Models\News as NewsPost;
use Livewire\Component;
use Livewire\WithPagination;

class News extends Component
{
    public $news;

    public function mount($slug){
        $this->news = NewsPost::where('slug', $slug)->first();
    }
	
	use WithPagination;
	
    public function render()
    {
        return view('livewire.news', ['news' => NewsPost::paginate(10),])
				->extends('template')
                ->section('content');
    }
}
