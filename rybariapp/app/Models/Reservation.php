<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Reservation extends Model
{
    use HasFactory;


    protected $fillable = [
        'date',
        'title',
        'description',
        'user_id',
        'user_name',
        'user_email',


    ];
    public function user()
    {
    return $this->belongsTo(User::class);
    

    }

}
