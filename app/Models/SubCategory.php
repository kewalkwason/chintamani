<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'cms_loan_subcategory';

    protected $fillable = [
        'category_id','subcategory_name','image','content','tags','slug_name','meta_title','meta_keywords','meta_description',
        'status'
    ];
}