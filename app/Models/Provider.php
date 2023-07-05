<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provider extends Model
{
    public function banks(): HasMany{
        return $this->hasMany(Bank::class);
    }
}
