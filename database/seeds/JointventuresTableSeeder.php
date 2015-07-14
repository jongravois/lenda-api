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
            'partner' => 'Dick Grayson',
            'ssn' => '432123456',
            'address' => '1 Wayne Manor',
            'city' => 'Jonesboro',
            'state_id' => 4,
            'zip' => '77631',
            'email' => 'robin@marvel.com',
            'phone' => '5125551212'
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
