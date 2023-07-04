<?php

namespace Database\Seeders;

use App\Services\Account\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accounts = array(
            0 => array(
                'account_number' => random_int(10, 99).time(),
                'balance' => 100000.00,
                'user_id' => 1,
            ),
            1 => array(
                'account_number' => random_int(10, 99).time(),
                'balance' => 10050.26,
                'user_id' => 2,
            ),
        );
        

        foreach ($accounts as $account) {
            Account::create($account);
        }
    }
}
