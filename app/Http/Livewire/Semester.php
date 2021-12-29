<?php

namespace App\Http\Livewire;

use App\Models\Semester as AppSemester;
use Livewire\Component;

class Semester extends Component
{
    public $data, $semester_name, $selected_id;
    public $updateMode = false;
	public $saveSuccess = false;

    public function render()
    {
        $this->data = AppSemester::all();
        return view('livewire.semester');
    }
    private function resetInput()
    {
        $this->semester_name = null;
    }
    public function store()
    {
        $this->validate([
            'semester_name' => 'required|min:5'
        ]);
        AppSemester::create([
            'semester_name' => $this->semester_name
        ]);
        $this->resetInput();
		$this->saveSuccess = true;
    }
    public function edit($id)
    {
        $record = AppSemester::findOrFail($id);
        $this->selected_id = $id;
        $this->semester_name = $record->semester_name;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'semester_name' => 'required|min:5'
        ]);
        if ($this->selected_id) {
            $record = AppSemester::find($this->selected_id);
            $record->update([
                'semester_name' => $this->semester_name
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = AppSemester::where('id', $id);
            $record->delete();
        }
    }
	
	// public function delete()
    // {
        // AppSemester::find($this->deleteId)->delete();
    // }
}