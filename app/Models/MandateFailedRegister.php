<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MandateFailedRegister extends Model
{
    protected $table = 'mandate_register_failed';

    protected $fillable = [
        'sr_no',
        'user_id',
        'order_id',
        'registration_type',
        'user_name',
        'email',
        'mobile',
        'phone',
        'account_type',
        'bank_code',
        'ifsc_code',
        'mirc_code',
        'account_no',
        'pan_number',
        'aadhar_number',
        'frequency',
        'status',
        'status_code',
        'date_time',
        'amount',
        'emi_amount',
        'max_emi_amount',
        'deduction_amount',
        'merchant_transaction_identifier',
        'identifier',
        'bank_selection_code',
        'bank_reference_identifier',
        'emi_date',
        'manual_shedule_date',
        'is_mandate_id',
        'mandate_reg_no',
        'mandate_registered_response',
        'is_mandate_registered',
        'is_mandate_verified',
        'mandate_verification_response',
        'is_transaction_scheduled',
        'scheduled_date',
        'transaction_schedule_response',
        'is_transaction_verification',
        'transaction_verification_response',
        'is_active',
        'date_created',
    ];
}