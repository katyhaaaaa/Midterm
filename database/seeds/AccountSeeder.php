<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => '1',
                'acct_name' => 'Silaga A. Account',
                'init_invest' => '25567',
                'start_date' => '2020-11-22',
                'remarks' => 'Done with normal transactions.'
            ],
            [
                'user_id' => '1',
                'acct_name' => 'deLeon L. Account',
                'init_invest' => '21598',
                'start_date' => '2020-11-21',
                'remarks' => 'Done with normal transactions.'
            ],
            [
                'user_id' => '1',
                'acct_name' => 'Poquita. Account',
                'init_invest' => '24209',
                'start_date' => '2020-08-20',
                'remarks' => 'Done with normal transactions.'
            ],
            [
                'user_id' => '4',
                'acct_name' => 'Labastilla. Account',
                'init_invest' => '26728',
                'start_date' => '2020-07-19',
                'remarks' => 'Done with normal transactions.'
            ],
            [
                'user_id' => '5',
                'acct_name' => 'Melicado J. Account',
                'init_invest' => '22863',
                'start_date' => '2020-10-18',
                'remarks' => 'Done with normal transactions.'
            ]
        ];
        DB::table('accounts')->insert($data);
    }
}
