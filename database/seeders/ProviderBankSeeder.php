<?php

namespace Database\Seeders;

use App\Models\Bank;
use App\Models\Provider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProviderBankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = array(
            0 => array(
                'name' => "Instapay",
                'banks' => [
                    'Alipay',
                    'AllBank', 
                    'AUB',
                    'Bank of China (Manila Branch)',
                    'Bangko Mabuhay',
                    'Bank of Commerce',
                    'BDO', 
                    'BDO Network', 
                    'Binangonan Rural Bank',
                    'BPI / BPI Family',
                    'BPI Direct BanKO',
                    'Camalig Bank',
                    'CARD BANK',
                    'CARD SME Bank',
                    'Cebuana Lhuillier Rural Bank',
                    'China Bank',
                    'China Bank Savings',
                    'CIMB',
                    'CIS Bayad Center',
                    'CTBC (Philippines)',
                    'DBP',
                    'DCPay (Coins.ph)',
                    'Dumaguete City Development Bank',
                    'Dungganon Bank',
                    'East West Bank',
                    'East West Rural Bank',
                    'Equicom Savings Bank',
                    'GPay Network PH (GrabPay)',
                    'G-Xchange (GCash)',
                    'Infoserve Incorporated (Nationlink)',
                    'ING Bank',
                    'ISLA Bank',
                    'Landbank',
                    'Legazpi Savings Bank',
                    'Lulu Financial Services',
                    'Malayan Bank',
                    'Maya Bank',
                    'Maybank Philippines',
                    'Metrobank',
                    'Mindanao Consolidated Cooperative Bank',
                    'Netbank',
                    'Omnipay',
                    'Partner Rural Bank',
                    'PayMaya Philippines, Inc. / Maya Wallet',
                    'PBCom',
                    'Philippine Business Bank',
                    'Philtrust Bank',
                    'PNB',
                    'PPS-PEPP Financial Services',
                    'Producers Bank',
                    'PSBank',
                    'QCRB',
                    'Queen Bank',
                    'RCBC',
                    'Robinsons Bank',
                    'Rural Bank of Guinobatan',
                    'Seabank',
                    'Security Bank',
                    'ShopeePay',
                    'Standard Chartered Bank',
                    'Starpay',
                    'Sterling Bank of Asia',
                    'Sun Savings Bank',
                    'Tayocash',
                    'Tonik Bank',
                    'UCPB Savings Bank',
                    'Union Bank',
                    'UnionDIgital Bank',
                    'USSC Money Services',
                    'Veterans Bank',
                    'Wealth Bank',
                    'Zybi Tech (JuanCash)'
                ]
            ),
            1 => array(
                'name' => "Pesonet",
                'banks' => [
                    'Al-Amanah Islamic Investment Bank of the Philippines',
                    'Asia United Bank Corporation',
                    'Australia and New Zealand Banking Group Ltd.',
                    'Bangkok Bank Public Co. Ltd.',
                    'Bank of America, N.A',
                    'Bank of China (Hongkong) Limited - Manila Branch',
                    'Bank of Commerce',
                    'Bank of the Philippine Islands',
                    'BDO Unibank, Inc.',
                    'Cathay United Bank Co., Ltd. - Manila Branch',
                    'China Banking Corporation',
                    'CIMB Bank Philippines, Inc.',
                    'Citibank, N.A.',
                    'CTBC Bank (Philippines) Corporation',
                    'Deutsche Bank AG',
                    'Development Bank of the Philippines',
                    'East West Banking Corporation',
                    'Industrial and Commercial Bank of China, Ltd. - Manila Branch',
                    'Industrial Bank of Korea Manila Branch',
                    'JP Morgan Chase Bank, N.A.',
                    'KEB Hana Bank - Manila Branch',
                    'Land Bank of the Philippines',
                    'Maybank Philippines, Inc.',
                    'Mega International Commercial Bank Co., Ltd.',
                    'Metropolitan Bank and Trust Company',
                    'Mizuho Bank, Ltd. - Manila Branch',
                    'MUFG Bank, Ltd.',
                    'Philippine Bank of Communications',
                    'Philippine National Bank',
                    'Philippine Trust Company',
                    'Philippine Veterans Bank',
                    'Rizal Commercial Banking Corporation',
                    'Robinsons Bank Corporation',
                    'Security Bank Corporation',
                    'Shinhan Bank - Manila Branch',
                    'Standard Chartered Bank',
                    'Sumitomo Mitsui Banking Corporation - Manila Branch',
                    'The Hongkong & Shanghai Banking Corporation',
                    'Union Bank of the Philippines',
                    'United Overseas Bank Limited, Manila Branch',
                    'AllBank (A Thrift Bank), Inc.',
                    'Bangko Kabayan, Inc. (A Private Development Bank)',
                    'Bank of Makati (A Savings Bank), Inc.',
                    'BPI Direct BanKO, Inc., A Savings Bank',
                    'China Bank Savings, Inc.',
                    'Dumaguete City Development Bank, Inc.',
                    'Equicom Savings Bank, Inc.',
                    'First Consolidated Bank, Inc. (A Private Development Bank)',
                    'HSBC Savings Bank (Phils), Inc.',
                    'Malayan Savings Bank, Inc.',
                    'Philippine Business Bank, Inc., A Savings Bank',
                    'Philippine Savings Bank',
                    'Producers Savings Bank Corporation',
                    'Queen City Development Bank, Inc. or Queenbank, A Thrift Bank',
                    'Sterling Bank of Asia, Inc. (A Savings Bank)',
                    'Wealth Development Bank Corporation',
                    'Yuanta Savings Bank Philippines, Inc.',
                    'Bangko Mabuhay (A Rural Bank), Inc.',
                    'Bangko Nuestra Senora del Pilar, Inc. (A Rural Bank)',
                    'BOF, Inc. (A Rural Bank)',
                    'BDO Network Bank, Inc. (A Rural Bank)',
                    'Biñan Rural Bank, Inc.',
                    'Camalig Bank, Inc. (A Rural Bank)',
                    'Cantilan Bank, Inc. (A Rural Bank)',
                    'Cebuana Lhuillier Rural Bank, Inc.',
                    'Cooperative Bank of Quezon Province',
                    'Country Builders Bank, Inc. (A Rural Bank)',
                    'Dungganon Bank (A Microfinance Rural Bank), Inc.',
                    'East West Rural Bank, Inc.',
                    'Guagua Rural Bank, Inc.',
                    'Innovative Rural Bank, Inc. (A Rural Bank)',
                    'Laguna Prestige Banking Corporation, (A Rural Bank)',
                    'Malarayat Rural Bank, Inc.',
                    'Money Mall Rural Bank, Inc.',
                    'MVSM Bank (Rural Bank Since 1953), Inc.',
                    'Netbank (A Rural Bank), Inc.',
                    'New Rural Bank of San Leonardo (Nueva Ecija), Inc.',
                    'Rang-Ay Bank, Inc. (A Rural Bank)',
                    'RBT Bank, Inc., A Rural Bank',
                    'Rural Bank of Bacolod City, Inc.',
                    'Rural Bank of Bauang, Inc.',
                    'Rural Bank of Digos, Inc.',
                    'Rural Bank of Guinobatan, Inc.',
                    'Rural Bank of La Paz, Inc.',
                    'Rural Bank of Lebak (Sultan Kudarat), Inc.',
                    'Rural Bank of Montalban, Inc.',
                    'Rural Bank of Porac (Pampanga), Inc.',
                    'Rural Bank of Rosario (La Union), Inc.',
                    'Rural Bank of Sagay, Inc.',
                    'Rural Bank of Sta. Ignacia, Inc.',
                    'SeaBank Philippines Inc. (A Rural Bank)',
                    'GoTyme Bank Corporation',
                    'Maya Bank, Inc.',
                    'Tonik Digital Bank, Inc.',
                    'Union Digital Bank',
                    'UNObank, Inc.',
                    'DCPAY Philippines, Inc.',
                    'GPay Network PH, Inc.',
                    'G-Xchange, Inc. (GXI)',
                    'Lulu Financial Services (Phils.), Inc.',
                    'Maya Philippines, Inc.',
                    'Paymongo Payments, Inc.',
                    'TayoCash, Inc.',
                    'USSC Money Services, Inc.',
                    'Zybi Tech, Inc.',
                ]
            ),
        );
        

        foreach ($items as $item) {
            $provider = new Provider();
            $provider->name = $item['name'];
            $provider->save();
            foreach($item['banks'] as $bank){
                $bankModel = new Bank();
                $bankModel->name = $bank;
                $bankModel->provider_id = $provider->id;
                $bankModel->save();
            }
        }
    }
}
