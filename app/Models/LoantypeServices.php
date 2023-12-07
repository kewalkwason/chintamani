<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoantypeServices extends Model
{
    protected $table = 'cms_loantype_services';

    protected $fillable = [
        'category_id','tags','slug_name',
        'subcategory_id',
        'image',
        'heading',
    ];
}