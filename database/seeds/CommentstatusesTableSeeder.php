<?php

use App\Commentstatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentstatusesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('commentstatuses')->delete();

        Commentstatus::create([
            'comment_id' => 1,
            'recipient_id' => 3,
            'status' =>	'pending'
        ]);

        Commentstatus::create([
            'comment_id' => 3,
            'recipient_id' => 4,
            'status' =>	'pending'
        ]);

        Commentstatus::create([
            'comment_id' => 4,
            'recipient_id' => 3,
            'status' =>	'confirmed'
        ]);

        Commentstatus::create([
            'comment_id' => 7,
            'recipient_id' => 3,
            'status' =>	'pending'
        ]);

        Commentstatus::create([
            'comment_id' => 10,
            'recipient_id' => 4,
            'status' =>	'pending'
        ]);
    }
}
