<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallBack extends Model
{
    protected $table = 'callback';

    protected $fillable = [
        'id',
        'user_id',
        'set_date_time',
        'added_by',
        'req_from',
        'ringing_type',
        'status',
        'updated_by',
        'created_at',
    ];
    public function userDetail()
    {
        return $this->hasOne(UserPersonalDetails::class, 's_no', 'user_id');
    }
}