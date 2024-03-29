<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favicon extends Model
{
    use HasFactory;

    protected $table = 'favicons';
    protected $fillable = [
        'title',
        'favicon_icon',
        'apple_touch',
    ];
}
