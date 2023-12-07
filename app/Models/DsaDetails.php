<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DsaDetails extends Model
{
    protected $table = 'dsa_details';

    protected $fillable = [
        'dsa_id',
        'name',
        'phone_no',
        'email',
        'password',
        'address',
        'website',
        'pan_card',
        'gst',
        'updated_at',
        'user_id',
        'status',
    ];

}