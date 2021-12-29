<?php

namespace App\Http\Livewire;

use App\Models\Semesters;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class SemesterTable extends LivewireDatatable
{
    public $model = Semesters::class;

    // public function builder()
    // {
        //
    // }

    public function columns()
    {
        return [

            Column::name('semester_name')
                    ->label('Semester Name')
                    ->editable(),
                       
            Column::callback(['id', 'semester_name'], function ($id, $semester_name) {
                return view('table-action.semester', ['id' => $id, 'semester_name' => $semester_name]);
            })
            ->label('Action')
            ->unsortable()
    
            ]; 
    }
}