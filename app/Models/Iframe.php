<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iframe extends Model
{
    use HasFactory;
    protected $table = 'iframes';
    protected $fillable = [
        'iframe_src',
    ];
}
