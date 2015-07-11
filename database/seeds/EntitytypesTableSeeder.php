<?php

use App\Entitytype;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntitytypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('entitytypes')->delete();

        Entitytype::create([
            'entitytype' => 'Corporation'
        ]);

        Entitytype::create([
            'entitytype' => 'Individual'
        ]);

        Entitytype::create([
            'entitytype' => 'JointVenture'
        ]);
        Entitytype::create([
            'entitytype' => 'Partnership'
        ]);
        Entitytype::create([
            'entitytype' => 'Spousal'
        ]);
    }
}
