<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Reservation extends Model
{
    public function rezervations(): HasMany
    {
        return $this->hasMany(reservation::class);

    }
}
