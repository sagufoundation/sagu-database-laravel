<?php

namespace Database\Seeders\Library;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Library\Loan_logs;
use Carbon\Carbon;

class LoanLogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loan_logs::create(
            [

                'user_id' => 7,
                'book_id' => 1,
                'status' => 'Active',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );

        Loan_logs::create(
            [

                'user_id' => 7,
                'book_id' => 2,
                'status' => 'Pending',

                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()

            ]
        );
    }
}
