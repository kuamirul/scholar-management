<?php

namespace App\Http\Livewire;

use App\Models\Semesters;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateSemester extends Component
{
    public $saveSuccess = false;
    public $semesters;
	
	public $show = false;

    protected $rules = [
        'semesters.semester_name' => 'required|min:6',
    ];

	public function show()
    {
        $this->show = true;
    }

    public function mount(){
        $this->semesters = new Semesters;
    }

    public function savePost(){
        // $this->semesters->slug = Str::slug($this->semesters->title);
        $this->semesters->save();
        $this->saveSuccess = true;
    }


    public function render()
    {
        return view('livewire.create-semester');
    }
}
