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
            'loan_id' => 2,
            'partner' => 'Elektra Natchios',
            'ssn' => '432003930',
            'address' => '2107A Deviled Suites',
            'city' => 'Hells Kitchen',
            'state_id' => 4,
            'zip' => '77631',
            'email' => 'elektra@marvel.com',
            'phone' => '5129119999'
        ]);

        Jointventure::create([
            'loan_id' => 3,
            'partner' => 'Dick Grayson',
            'ssn' => '432123456',
            'address' => '1 Wayne Manor',
            'city' => 'Jonesboro',
            'state_id' => 4,
            'zip' => '77631',
            'email' => 'robin@marvel.com',
            'phone' => '5125551212'
        ]);
    }
}
