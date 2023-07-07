<?php

namespace App\Services\Transaction\Actions;

use App\Models\Account;
use App\Models\User;

class AddBalanceToUser
{
    public static function handle($email, $amount, $additionalData = [])
    {
        $user = User::where('email', $email)->first();
        $account = Account::where('user_id', $user->id)->first();
        $account->balance = $account->balance + $amount;
        $account->save();
        $data = [
            'name' => 'Deposited To Your Account',
            'type' => 'deposit',
            'user_id' => $user->id,
            'amount' => $amount,
            'last_current_balance' => $account->balance,
            'description' => $amount.' was deposited to your account.'
        ];
        CreateTransaction::handle($data);
        return true;
    }
}
