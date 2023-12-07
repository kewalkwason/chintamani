<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPersonalDetails extends Model
{
    protected $table = 'user_personal_details';

    protected $fillable = [
        's_no',
        'apply_id',
        'user_id',
        'type',
        'first_name',
        'last_name',
        'phone_no',
        'alt_phone_no',
        'gender',
        'd_o_b',
        'official_mail',
        'marital_status',
        'spouse_name',
        'spouse_phone',
        'spouse_occupation',
        'emp_type',
        'subject',
        'take_home_salary',
        'cibil',
        'address_state',
        'address_city',
        'local_address',
        'pin_code',
        'latitude',
        'longitude',
        'device_version',
        'pan_card_no',
        'aadhar_card_no',
        'social_media_type',
        'social_id',
        'social_name',
        'company_name',
        'company_address',
        'social_email',
        'social_profile_pic',
        'house_type',
        'staying_years',
        'salary_mode',
        'working_years',
        'current_loan',
        'current_loan_emi',
        'work_email',
        'company_phone',
        'company_website',
        'web_message',
        'reference_name_1',
        'reference_mobile_1',
        'reference_name_2',
        'reference_mobile_2',
        'reference_name_3',
        'reference_mobile_3',
        'reference_name_4',
        'reference_mobile_4',
        'existing_customer',
        'banking_password',
        'is_gurrantor',
        'accountUID',
        'statistics',
        'assigned_to',
        'dsa_id',
        'date_created',
        'verify_first_name',
        'verify_last_name',
        'verify_local_address',
        'verify_emp_type',
        'verify_take_home_salary',
        'verify_working_years',
        'verify_company_name',
        'verify_company_address',
        'verify_official_mail',
        'verify_gender',
        'verify_phone_no',
        'verify_dob',
        'verify_pan_card_no',
        'verify_aadhar_card_no',
        'verify_current_loan',
        'verify_emi',
        'verify_house_type',
        'verify_staying_years',
        'verify_address_city',
        'verify_address_state',
        'verify_pin_code',
        'verify_applicant',
        'verify_guarantor',
        'is_ringing_customer',
        'file_edited_log',
        'updated_at',
        'applyarea',
        'date_time',
        'pancard_no',
    ];
    public function appyloan()
    {
        return $this->hasOne(ApplyLoan::class, 'user_id', 's_no');
    }
    public function users()
    {
        return $this->hasOne(User::class, 'id', 'assigned_to');
    }
}