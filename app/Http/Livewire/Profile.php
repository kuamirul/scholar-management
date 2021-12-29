<?php

namespace App\Http\Livewire;

use App\Models\Students as StudentInfo;
use App\Models\User;
use Livewire\Component;

class Profile extends Component
{

    public $profile;
    public $user;

    public function mount($student_id){

        //values from Student table
        $this->profile = StudentInfo::where('student_id', $student_id)->first();
        
        //values from User table (email, name)
        $this->user = User::where('student_id', $student_id)->first();

    }

    public function render()
    {
        return view('livewire.profile');
    }
}
