<?php

namespace App\Services\Account\Concerns;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait AccountConcern
{
    public function createAccount($user_id)
    {
        $account = new Account();
        $account->account_number = random_int(10, 99).time();
        $account->balance = 0.00;
        $account->user_id = $user_id;
        $account->save();
        
        return $account;
    }

    public function checkAccountExist($email){
        return User::where('email', $email)->where('email', '!=', Auth::user()->email)->exists();
    }
}
