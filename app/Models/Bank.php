<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class Bank extends Model implements Auditable
{
    use AuditingAuditable;
    public function provider(): BelongsTo{
        return $this->belongsTo(Provider::class);
    }
}
