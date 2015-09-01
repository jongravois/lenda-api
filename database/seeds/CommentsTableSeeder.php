<?php

use App\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('comments')->delete();

        Comment::create([
            "loan_id" =>	1,
            "type" =>	"Committee",
            'user_id' => 6,
            "comment" => "There are concerns about the ability to manage the reception of a large cash sum as evidenced by last year's performance of this applicant.",
            'created_at' => '2015-07-15 20:50:14'
        ]);

        Comment::create([
            'loan_id' =>	1,
            'type' =>	'Committee',
            'user_id' => 3,
            'comment' => 'I will approve provided there is a controlled disbursement.',
            'created_at' => '2015-08-30 10:50:14'
        ]);

        Comment::create([
            'loan_id'	=>	1,
            'type'		=>	'Loan',
            'user_id' => 3,
            'comment'	=>	'The requested loan will pay off the 2014 loan and provide resources for the 2015 Crop Year. Tony has been a valued customer for 3 years and has moved his crop insurance to our subsidiary.'
        ]);

        Comment::create([
            'loan_id'	=>	1,
            'type'		=>	'Analyst',
            'user_id' => 3,
            'comment'	=>	'Applicant would prefer not to tie up his third-party credit and would like to see if the loan will be approved without it. If not, he is willing to commit third-party credits.',
            'created_at' => '2015-07-13 12:01:02'
        ]);

        Comment::create([
            'loan_id'	=>	1,
            'type'		=>	'Account',
            'user_id' => 7,
            'comment'	=>	'Transferred $30,000 from Misc to Equipment.',
            'created_at' => '2015-09-01 09:01:00'
        ]);

        Comment::create([
            'loan_id'	=>	7,
            'type'		=>	'Loan',
            'user_id' => 3,
            'comment'	=>	"The grain was inspected and is top quality. It has less than 9% moisture. I don't know what else to write about the grain because I am not really an analyst but this serves as an example of a Loan Comment for this loan."
        ]);

        Comment::create([
            'loan_id'	=>	1,
            'type'		=>	'Addendum',
            'user_id' => 3,
            'comment'	=>	'The additional funds requested are needed to offset unanticipated medical expenses but are easily covered by the 32% increase in yield expectation. The crop collateral is 100% insured and the request is less than the max amount of available value.'
        ]);

        Comment::create([
            'loan_id' => 1,
            'type' => 'Watch',
            'user_id' => 3,
            'comment' => 'Just like Santa Claus, ARM has its own version of "the naughty list." But this one does not record boys and girls who fibbed or acted mean to schoolmates on the playground. Instead, the Watch List keeps track of loans who are suspected or projected to become problematic during the life of the loan.'
        ]);

        Comment::create([
            'loan_id' =>	2,
            'type' =>	'Committee',
            'user_id' => 4,
            'comment' => 'Did Matthew not want to include the two new farms he purchased into the loan?'
        ]);

        Comment::create([
            'loan_id'	=>	2,
            'type'		=>	'Loan',
            'user_id' => 3,
            'comment'	=>	'The requested loan is the same as last year and Matthew used the funds last year as indicated and repaid the loan on time.'
        ]);
    }
}
