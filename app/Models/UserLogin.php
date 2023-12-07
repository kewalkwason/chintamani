<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Model;

class UserLogin extends Model
{
    
    protected $table = 'user_login';
    protected $guarded = ['user_id'];

    protected $fillable = [
        'user_id',
        'user_name',
        'user_email',
        'phone_no',
        'password',
        'city',
        'address',
        'aadhar_front',
        'aadhar_back',
        'pancard_photo',
        'applied_type',
        'existing_customer',
        'profile_completed',
        'location',
        'fcm_token',
        'date_time',
        'dsa_id',
        'dsa_status',
        'created_at',
        'updated_at',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getAuthDsaPassword()
    {
        return $this->password;
    }
}
