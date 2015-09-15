<?php

use App\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('partners')->delete();

        Partner::create([
            'applicant_id' => 1,
            'partner' => 'Pepper Potts',
            'title' => 'CFO',
            'location' => 'Monroe, LA',
            'email' => 'ppotts@marvel.com',
            'phone' => '5125551020'
        ]);

        Partner::create([
            'applicant_id' => 1,
            'partner' => 'James Rhodes',
            'title' => 'Colonel',
            'location' => 'Norfolk, VA',
            'email' => 'warmachine@marvel.com',
            'phone' => '5125559999'
        ]);

        Partner::create([
            'applicant_id' => 4,
            'partner' => 'Sam Wilson',
            'title' => 'Falcon',
            'location' => 'Washington, D.C.',
            'email' => 'falcon@marvel.com',
            'phone' => '5125995599'
        ]);
    }
}
