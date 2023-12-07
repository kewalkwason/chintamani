<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityPages extends Model
{
    protected $table = 'cms_city_pages';

    protected $fillable = [
        'city_id','tags',
        'content',
        'heading',
    ];
}