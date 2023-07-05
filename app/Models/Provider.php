<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class Provider extends Model implements Auditable
{
    use AuditingAuditable;
    public function banks(): HasMany{
        return $this->hasMany(Bank::class);
    }
}
