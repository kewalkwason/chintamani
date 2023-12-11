<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDocuments extends Model
{
    protected $table = 'user_documents';

    protected $fillable = [
        'id',
        'user_id',
        'p_id',
        'guarantor_id',
        'type',
        'person',
        'profile_pic',
        'employer_id',
        'pan_card_photo',
        'aadhar_front',
        'aadhar_back',
        'salary_slip1',
        'salary_slip2',
        'salary_slip3',
        'pass_usalary_slip1',
        'pass_usalary_slip2',
        'pass_usalary_slip3',
        'bank_statement',
        'cheque',
        'cibil',
        'other_document',
        'verify_applicant',
        'verify_guarantor',
        'rent_aggrement',
        'electric_bill',
        'updated_at',
        'uploaded_at',
    ];

}