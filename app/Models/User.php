<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Auth\Authorizable;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Model implements AuthenticatableContract, AuthorizableContract, Auditable
{
    use Authenticatable, Authorizable, HasFactory, AuditingAuditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 
        'email',
        'password',
        'mobile',
        'role'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        'password',
        'api_token'
    ];

    protected $casts = [
        'created_at' => 'date: F j, Y',
        'updated_at' => 'date:  F j, Y',
    ];

    public function account(): HasOne {
        return $this->hasOne(Account::class);
    }

    public function transactions(): HasMany {
        return $this->hasMany(Transaction::class);
    }
}
