<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yourachievements extends Model
{
    protected $table = 'cms_achievements';

    protected $fillable = [
        'heading',
        'content',
        'image',
        'status',
    ];
}