<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

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
    ];

    protected $casts = [
        'created_at' => 'date: F j, Y',
        'updated_at' => 'date:  F j, Y',
    ];

    public static function booted()
    {
        static::creating(function ($user) {
            $user->password = Hash::make($user->password);
            $user->role = strtolower($user->role);
        });

        static::updating(function ($user) {
            $user->password = Hash::make($user->password);
            $user->role = strtolower($user->role);
        });
    }
}
