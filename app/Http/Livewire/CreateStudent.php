<?php

namespace App\Http\Livewire;

use App\Models\Students;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
// use Hash;

class CreateStudent extends Component
{
    public $saveSuccess = false;
    public $students;
    public $users;
    public $password;
	
	public $show = false;

    protected $rules = [
        'users.name' => 'required|string|min:6',
        'users.email' => 'required|string|min:6',
        'users.student_id' => 'required|integer|min:6',
    ];

	public function show()
    {
        $this->show = true;
    }

    public function mount(){
        $this->users = new User;
        $this->students = new Students;
    }

    public function savePost(){
        // $this->students->slug = Str::slug($this->students->title);
        
        $password = Hash::make($this->users->student_id);

        $this->users->password = $password;

        $this->students->student_name = $this->users->name;
        // $this->students->student_email = $this->users->email;
        $this->students->student_id = $this->users->student_id;

        $this->users->save();
        $this->students->save();
        $this->saveSuccess = true;
    }

    public function render()
    {
        return view('livewire.create-student');
    }
}
