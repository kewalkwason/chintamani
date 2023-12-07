<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    protected $table = 'remark';

    protected $fillable = [
        'remark_id',
        'order_id',
        'user_id',
        'type',
        'set_date_time',
        'remark',
        'added_by',
        'status',
        'updated_by',
        'created_at',
    ];
}