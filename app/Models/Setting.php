<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = [
        'left_title',
        'footer_adders',
        'footer_phone',
        'footer_email',

        'right_title',
        'sub_description',

        'twitter',
        'facebook',
        'instagram',
        'skype',
        'linkedin',
    ];
}
