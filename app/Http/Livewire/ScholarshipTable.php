<?php

namespace App\Http\Livewire;

use App\Models\News;
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

class ScholarshipTable extends LivewireDatatable
{

    public $model = News::class;

    // public function builder()
    // {
    //     return News::query();
    // }

    public function columns()
    {
        return [

        Column::name('title')
                ->label('Scholarship Title')
				->editable(),
        
        Column::name('body')
        ->label('Description')
        ->editable(), 
        
        Column::callback(['id', 'title'], function ($id, $title) {
            return view('table-action.scholarship', ['id' => $id, 'title' => $title]);
        })
        ->label('Action')
        ->unsortable()

        ];        
    }
}