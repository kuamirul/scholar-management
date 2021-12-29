<?php

namespace App\Http\Livewire;

use App\Models\Students;
use App\Models\Users;
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

class StudentTable extends LivewireDatatable
{
    // public $model = Students::class;
	public $hideable = 'select';
    public $exportable = true;
    // public $complex = true;
    // public $persistComplexQuery = true;
    // public $afterTableSlot = 'components.selected';
	
	public $show1 = false;
		
	public function show1()
    {
        $this->show1 = true;
    }
	
	public function builder()
    {
        return Students::query()->leftJoin('users', 'users.student_id', 'students.student_id');
		// return Students::query();
    }
	
	
    public function columns()
    {
        return [
            Column::checkbox(),

            NumberColumn::name('student_id')
                ->label('Student ID')
                // ->filterable()
                ->linkTo('profile')
				->searchable(),

            Column::name('users.name')
                ->label('Student Name')
                // ->filterable(),
				->searchable(),
				// ->editable(),

            Column::name('student_nric')
                ->label('Student NRIC')
				->editable(),
                // ->defaultSort('desc')
                // ->filterable($this->regions)
                // ->truncate(8)
                // ->searchable(),

            Column::name('address')
                // ->filterable()
				->label('Address')
				->editable(),

            Column::name('users.email')
                ->label('Student Email'),
                // ->truncate()
                // ->filterable(),

            Column::name('acc_number')
                ->label('Account Number')
                ->alignCenter()
				->editable(),

			Column::name('bank_name')
                ->label('Bank Name')
				->editable(),
				
            Column::name('phone_number')
                ->label('Student Phone Number')
				->editable(),
                // ->filterable(),
                // ->alignRight(),

            Column::name('sponsor_type_id')
                ->label('Sponsor Type')
				->editable(),

            Column::name('sponsor_status')
				->filterable(['Graduated', 'Active','Inactive','Terminated'])
                // ->exportCallback(function ($value) {
                    // return (string) $value;
                // })
                ->label('Sponsor Status')
				->editable(),
			
			DateColumn::name('sponsor_start_date')
                ->label('sponsor_start_date')
				->editable(),
                // ->filterable(),
				
			DateColumn::name('sponsor_end_date')
                ->label('sponsor_end_date')
				->editable(),
                // ->filterable(),	
			
			Column::name('father_name')
                ->label('father name')
				->editable(),
			
			Column::name('father_nric')
                ->label('father_nric')
				->editable(),
			
			Column::name('father_phone_number')
                ->label('father_phone_number')
				->editable(),				
			
			Column::name('father_occupation')
                ->label('father_occupation')
				->editable(),
				
			Column::name('father_income')
                ->label('father_income')
				->editable(),

			Column::name('mother_name')
                ->label('mother name')
				->editable(),
			
			Column::name('mother_nric')
                ->label('mother nric')
				->editable(),
			
			Column::name('mother_phone_number')
                ->label('mother phone number')
				->editable(),				
			
			Column::name('mother_occupation')
                ->label('mother occupation')
				->editable(),
				
			Column::name('mother_income')
                ->label('mother income')
				->editable(),
				
			Column::name('guarantor1_name')
                ->label('guarantor 1 name')
				->editable(),
			
			Column::name('guarantor1_nric')
                ->label('guarantor 1 nric')
				->editable(),
			
			Column::name('guarantor1_phone_number')
                ->label('guarantor 1 phone number')
				->editable(),				
			
			Column::name('guarantor1_occupation')
                ->label('guarantor1_occupation')
				->editable(),
				
			Column::name('guarantor1_income')
                ->label('guarantor 1 income')
				->editable(),				
				
			Column::name('guarantor2_name')
                ->label('guarantor 2 name')
				->editable(),
			
			Column::name('guarantor2_nric')
                ->label('guarantor 2 nric')
				->editable(),
			
			Column::name('guarantor2_phone_number')
                ->label('guarantor 2 phone number')
				->editable(),		
			
			Column::name('guarantor2_occupation')
                ->label('Guarantor 2 Occupation')
				->editable(),
				
			Column::name('guarantor2_income')
                ->label('Guarantor 2 Income')
				->editable(),	
			
            Column::callback(['id', 'student_id'], function ($id, $student_id) {
                return view('table-action.student', ['id' => $id, 'student_id' => $student_id]);
            })
            ->label('Action')
            ->unsortable()    
            // Column::raw("IF(planets.orbital_period REGEXP '^-?[0-9]+$', CONCAT(ROUND(DATEDIFF(NOW(), users.dob) / planets.orbital_period, 1), ' ', planets.name, ' years'), '---') AS native_age")
                // ->filterable()
                // ->hide(),

            // Column::callback('bedtime', 'computeBedtime')
                // ->label('Go to bed')
                // ->hide(),

            // Column::scope('selectGroupedWeaponNames', 'Weapons')
                // ->filterable($this->weapons, 'filterWeaponNames'),

            // BooleanColumn::scope('hasLightSaber', 'Light Saber')
                // ->filterable(null, 'filterHasLightSaber')
				
			// Column::callback(['id', 'planet.name'], function ($id, $planetName) {
                // return "User $id hails from $planetName";
            // })->label('Computed (php closure)')
                // ->filterOn('planets.name')
                // ->filterable($this->planets),

            // Column::raw('CONCAT("User ", users.id, " hails from ", planets.name) AS planetName')
                // ->label('Computed (raw SQL)')
                // ->filterable(),	
				
        ];
    }
}