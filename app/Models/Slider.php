<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'cms_home_slider';

    protected $fillable = [
        'slug_url_name',
        'meta_description',
        'meta_keywords',
        'slider_tags',
        'title',
        'content',
        'slider_image',
        'status',
    ];
}