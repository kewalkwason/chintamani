<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'cms_contact_details';

    protected $fillable = [
        'phone',
        'email',
        'address',
        'our_opening_hours',
        'image',
        'tags',
    ];
}