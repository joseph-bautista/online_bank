<?php

namespace App\Services\Transaction\Actions;

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
        $transaction->description = $data['description'];
        $transaction->save();
    }
}
