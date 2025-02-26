<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Brigade extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'user_email',
        'user_name',
        'phone',
        'notes',





    ];
    public function user()
    {
    return $this->belongsTo(User::class);

    }

}
