<?php

use App\Jointventure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JointventuresTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('jointventures')->delete();

        Jointventure::create([
            'applicant_id' => 2,
            'partner' => 'Elektra Natchios',
            'location' => 'Hells Kitchen, NJ',
            'email' => 'elektra@marvel.com',
            'phone' => '5129119999'
        ]);

        Jointventure::create([
            'applicant_id' => 3,
            'partner' => 'Dick Grayson',
            'title' => 'Sidekick',
            'location' => 'Jonesboro, AR',
            'email' => 'robin@marvel.com',
            'phone' => '5125551212'
        ]);
    }
}
