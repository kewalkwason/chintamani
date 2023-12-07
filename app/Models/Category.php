<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'cms_loan_category';

    protected $fillable = [
        'category_name',
        'slug_name',
        'tags',
        'category_code'
    ];
}