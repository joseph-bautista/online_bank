<?php

namespace App\Services\Account\Concerns;

use App\Models\Account;
use Illuminate\Http\Request;

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
}
