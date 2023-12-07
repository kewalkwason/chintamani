<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allwebenquiry extends Model
{
    protected $table = 'web_enquiry';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'pancard_no',
        'subject',
        'date_time',
        'message',
        'address_city',
        'status',
        'remark',
        'remark_time',
        'remark_by',
        'assign_name',
        'is_active',
    ];
}