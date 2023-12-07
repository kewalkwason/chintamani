<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'cms_career';

    protected $fillable = [
        'slug',
        'meta_title',
        'meta_keywords',
        'tags',
        'title',
        'image','meta_description','content','status'
    ];
}