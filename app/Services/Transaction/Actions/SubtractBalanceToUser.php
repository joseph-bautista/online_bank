<?php

namespace App\Services\Transaction\Actions;

use App\Models\Account;
use App\Models\User;

class SubtractBalanceToUser
{
    public static function handle($from_user_id, $amount, $additionalData = [])
    {   
        $user = User::find($from_user_id);
        $account = Account::where('user_id', $user->id)->first();
        
        if ($account->balance < $amount) {
            return false;
        }
        $account->balance = $account->balance - $amount;
        $account->save();
        $data = [
            'type' => 'withdraw',
            'user_id' => $user->id,
            'amount' => $amount,
            'last_current_balance' => $account->balance,
            'description' => $amount.' was withdrawn from your account.',
            'additional_data' => $additionalData
        ];
        CreateTransaction::handle($data);
        return true;
    }
}
