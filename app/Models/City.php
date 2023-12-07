<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cms_city';

    protected $fillable = [
        'name',
        'slug_url_name',
    ];
}