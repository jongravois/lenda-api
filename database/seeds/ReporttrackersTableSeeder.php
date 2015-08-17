<?php

use App\Report;
use App\Reporttracker;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReporttrackersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reporttrackers')->delete();

        $users = User::all();
        $reports = Report::all();

        for($u=3; $u<count($users); $u++) {
            for($r=1; $r<count($reports); $r++){
                Reporttracker::create([
                    'report_id' => $r,
                    'user_id' => $u,
                    'cnt_warned' => rand(0,15),
                    'cnt_alerted' => rand(0,15),
                    'made_required' => Carbon::now()->subDay(rand(11,140)),
                    'last_acknowledged' => Carbon::now()->subDay(rand(0,10))
                ]);
            }
        }
    }
}
