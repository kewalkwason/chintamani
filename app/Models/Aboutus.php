<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    protected $table = 'cms_about_us';

    protected $fillable = [
        'meta_keywords','tags','slug',
        'meta_description',
        'meta_title',
        'image',
        'title',
        'content',
    ];
}