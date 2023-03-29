<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        'website_name',
        'website_url',
        'website_title',
        'website_keywords',
        'website_description',
        'address',
        'phone1',
        'phone2',
        'email1',
        'email2',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
    ];

}
