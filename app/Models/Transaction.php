<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class Transaction extends Model implements Auditable
{
    use AuditingAuditable;
    protected $casts = [
        'created_at' => 'date: F d, Y',
        'updated_at' => 'date:  F j, Y',
    ];
}
