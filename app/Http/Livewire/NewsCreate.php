<?php

namespace App\Http\Livewire;

use App\Models\News;
use Illuminate\Support\Str;
use Livewire\Component;

class NewsCreate extends Component
{
    public $saveSuccess = false;
    public $news;
	
	public $show = false;

    protected $rules = [
        'news.title' => 'required|min:6',
        'news.body' => 'required|min:6',
    ];

	public function show()
    {
        $this->show = true;
    }

    public function mount(){
        $this->news = new News;
    }

    public function savePost(){
        $this->news->user_id = 1;
        $this->news->slug = Str::slug($this->news->title);
        $this->news->save();
        $this->saveSuccess = true;
    }

    public function render()
    {
        return view('livewire.news-create')
				->extends('layouts.app')
                ->section('content');
    }
}