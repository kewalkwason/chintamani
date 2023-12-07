<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyLoan extends Model
{
    protected $table = 'apply_loan';

    protected $fillable = [
        's_no',
        'user_id',
        'visibility',
        'loan_amount',
        'tenure_month',
        'disbursed_amount',
        'fine_amount',
        'days_returning',
        'repayment_date',
        'returnpayment_date',
        'repayment_status',
        'upcoming_payment',
        'order_id',
        'total_interest',
        'processing_fee',
        'disbursed_date',
        'application_status',
        'date_created',
        'acct_no',
        'ifsc_code',
        'bank_statement',
        'bank_statement_pin',
        'salary_slip_pin',
        'salary_slip1',
        'pass_usalary_slip1',
        'salary_slip2',
        'pass_usalary_slip2',
        'salary_slip3',
        'pass_usalary_slip3',
        'account_type',
        'bank_name',
        'document_dependency',
        'updated_at',
        'updated_by',
        'sanctioned_by',
        'verify_date',
        'applied_date',
        'processing_date',
        'hold_date',
        'approved_date',
        'rejected_date',
        'decline_date',
        'trash_status',
        'important',
        'is_active',
        'status',
        'view_by',
        'view_status',
        'view_exp',
    ];

    public function userDetail()
    {
        return $this->hasOne(UserPersonalDetails::class, 's_no', 'user_id');
    }
    public function users()
    {
        return $this->hasOne(User::class, 'id', 'updated_by');
    }
    
    public function dsaDetail()
    {
        return $this->hasOne(DsaDetails::class, 'dsa_id', 'user_personal_details.dsa_id');
    }
}