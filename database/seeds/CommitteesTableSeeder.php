<?php

use App\Committee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommitteesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('committees')->delete();

        Committee::create([
            'loan_id'	=>	1,
            'role_id'	=>	999,
            'user_id'	=>	0,
            'vote_status' => 'pending',
            'committee_role' => 'Optional'
        ]);
        Committee::create([
            'loan_id'	=>	1,
            'role_id'	=>	2,
            'user_id'	=>	5,
            'vote_status' => 'voted',
            'vote' => 1,
            'vote_request_date' => '2015-09-11',
            'vote_received_date' => '2015-09-13',
            'committee_role' => 'CFO'
        ]);
        Committee::create([
            'loan_id' => 1,
            'role_id' => 4,
            'user_id' => 6,
            'vote_status' => 'voted',
            'vote' => 1,
            'vote_request_date' => '2015-09-11',
            'vote_received_date' => '2015-09-12',
            'committee_role' => 'Branch Manager'

        ]);
        Committee::create([
            'loan_id' => 1,
            'role_id' => 999,
            'user_id' => 3,
            'vote_status' => 'pending',
            'vote_request_date' => '2015-09-11',
            'committee_role' => 'Tester'
        ]);
        Committee::create([
            'loan_id' => 1,
            'role_id' => 9,
            'user_id' => 8,
            'vote_request_date' => '2015-09-11',
            'vote_status' => 'pending',
            'committee_role' => 'Manager'
        ]);
        Committee::create([
            'loan_id'	=>	2,
            'role_id'	=>	999,
            'vote_status' => 'pending',
            'committee_role' => 'Optional'
        ]);
        Committee::create([
            'loan_id'	=>	2,
            'role_id'	=>	2,
            'user_id'	=>	5,
            'vote_status' => 'voted',
            'vote' => 1,
            'vote_request_date' => '2015-09-11',
            'vote_received_date' => '2015-09-13',
            'committee_role' => 'CFO'
        ]);
        Committee::create([
            'loan_id' => 2,
            'role_id' => 4,
            'user_id' => 6,
            'vote_status' => 'voted',
            'vote' => 1,
            'vote_request_date' => '2015-09-11',
            'vote_received_date' => '2015-09-12',
            'committee_role' => 'Branch Manager'

        ]);
        Committee::create([
            'loan_id' => 2,
            'role_id' => 999,
            'user_id' => 3,
            'vote_status' => 'pending',
            'vote_request_date' => '2015-09-11',
            'committee_role' => 'Tester'
        ]);
    }
}
