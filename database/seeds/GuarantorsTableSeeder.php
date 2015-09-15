<?php

use App\Guarantor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuarantorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('guarantors')->delete();

        Guarantor::create([
            'loan_id' => 1,
            'guarantor' => 'Bo Gwin',
            'location' => 'Rayville, LA',
            'phone' => '3186379928',
            'email' => 'bogwin@gmail.com'
        ]);

        Guarantor::create([
            'loan_id' => 1,
            'guarantor' => 'Sharon Gwin',
            'location' => 'Rayville, LA',
            'phone' => '3186379928',
            'email' => 'sharongwin@gmail.com'
        ]);

        Guarantor::create([
            'loan_id' => 2,
            'guarantor' => 'Matthew Murdock',
            'location' => 'Boston, MA',
            'phone' => '6176379928',
            'email' => 'mmurdock@gmail.com'
        ]);

        Guarantor::create([
            'loan_id' => 2,
            'guarantor' => 'Elektra Natchios',
            'location' => 'New York, NY',
            'phone' => '2126379928',
            'email' => 'carmen@elektra.com'
        ]);
    }
}
