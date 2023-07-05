<?php

namespace App\Services\Transaction\Actions;

use App\Models\Bank;
use App\Models\Provider;
use App\Models\Transaction;

class CreateTransaction
{
    public static function handle($data)
    {
        $transaction = new Transaction();
        $transaction->type = $data['type'];
        $transaction->user_id = $data['user_id'];
        $transaction->amount = $data['amount'];
        $transaction->last_current_balance = $data['last_current_balance'];
        
        if(!empty($data['additional_data'])){
            $bank = Bank::find($data['additional_data']['bank_id']);
            $transaction->description = $data['description'].'You have transferred via '.$bank->provider->name.' to '.$bank->name.' with account number: '.$data['additional_data']['account_number'];
        }else{
            $transaction->description = $data['description'];
        }
        $transaction->save();
    }
}
