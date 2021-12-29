<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
	
    protected $fillable = [
        'student_name',
        'student_nric',
        'student_id',
        'address',
        'acc_number',
        'bank_name',
        'phone_number',
        // 'sponsor_type_id',
        'sponsor_status',
        'sponsor_start_date',
        'sponsor_start_date',
        'father_name',
        'father_nric',
        'father_phone_number',
        'father_occupation',
        'father_income',
        'mother_name',
        'mother_nric',
        'mother_phone_number',
        'mother_occupation',
        'mother_income',
        'guarantor1_name',
        'guarantor1_nric',
        'guarantor1_phone_number',
        'guarantor1_occupation',
        'guarantor1_income',
        'guarantor2_name',
        'guarantor2_nric',
        'guarantor2_phone_number',
        'guarantor2_occupation',
        'guarantor2_income',
    ];
	
	public function user()
    {
        // return $this->belongsTo(User::class);
        return $this->hasOne(User::class,'student_id','student_id');
	}	
	
}
