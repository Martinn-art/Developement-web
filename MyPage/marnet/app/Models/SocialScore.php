<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialScore extends Model
{
    protected $fillable = [
        'meta',
        'insta',
        'x',
        'google',
        'vlastni_sit',
    ];
}
