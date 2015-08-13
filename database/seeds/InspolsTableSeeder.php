<?php

use App\Inspol;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InspolsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('inspols')->delete();

        $policies = [
            [
                'loan_id' => 1,
                'agent_id' => 1,
                'county_id' => 1317,
                'crop_id' => 1,
                'practice' => 'NI',
                'plc' => false,
                'type' => 'RP',
                'unit' => 'EU',
                'options' => 'PFSE',
                'ins_level' => 70,
                'planting_days' => 0,
                'ins_price' => 4.25,
                'ins_share' => 80,
                'premium' => 11.88,
                'stax_loss_trigger' => 0,
                'stax_desired_range' => 0,
                'stax_protection_factor' => 0
            ],
            [
                'loan_id' => 1,
                'agent_id' => 1,
                'county_id' => 1317,
                'crop_id' => 2,
                'practice' => 'NI',
                'plc' => false,
                'type' => 'RP',
                'unit' => 'EU',
                'options' => 'SE',
                'ins_level' => 70,
                'planting_days' => 0,
                'ins_price' => 11.25,
                'ins_share' => 80,
                'premium' => 14.35,
                'stax_loss_trigger' => 90,
                'stax_desired_range' => 15,
                'stax_protection_factor' => 120
            ],
            [
                'loan_id' => 1,
                'agent_id' => 1,
                'county_id' => 1317,
                'crop_id' => 6,
                'practice' => 'NI',
                'plc' => true,
                'type' => 'RP',
                'unit' => 'EU',
                'options' => 'STAX',
                'ins_level' => 70,
                'ins_share' => 80,
                'planting_days' => 0,
                'ins_price' => 0.6300,
                'premium' => 19.82,
                'stax_loss_trigger' => 90,
                'stax_desired_range' => 15,
                'stax_protection_factor' => 120
            ],

            [
                'loan_id' => 1,
                'agent_id' => 1,
                'county_id' => 1317,
                'crop_id' => 1,
                'practice' => 'IR',
                'plc' => false,
                'type' => 'RP',
                'unit' => 'EU',
                'options' => 'PFSE',
                'ins_level' => 70,
                'ins_share' => 80,
                'planting_days' => 0,
                'ins_price' => 4.25,
                'premium' => 11.88,
                'stax_loss_trigger' => 0,
                'stax_desired_range' => 0,
                'stax_protection_factor' => 0
            ],
            [
                'loan_id' => 1,
                'agent_id' => 1,
                'county_id' => 1317,
                'crop_id' => 6,
                'practice' => 'IR',
                'plc' => false,
                'type' => 'RP',
                'unit' => 'EU',
                'options' => 'HPE SE',
                'ins_level' => 70,
                'ins_share' => 80,
                'planting_days' => 0,
                'ins_price' => 0.6300,
                'premium' => 19.82,
                'stax_loss_trigger' => 90,
                'stax_desired_range' => 15,
                'stax_protection_factor' => 120
            ],

            [
                'loan_id' => 1,
                'agent_id' => 2,
                'county_id' => 1310,
                'crop_id' => 1,
                'practice' => 'NI',
                'plc' => false,
                'type' => 'RP',
                'unit' => 'EU',
                'options' => 'SE',
                'ins_level' => 75,
                'ins_share' => 100,
                'planting_days' => 0,
                'ins_price' => 4.25,
                'premium' => 11.88,
                'stax_loss_trigger' => 0,
                'stax_desired_range' => 0,
                'stax_protection_factor' => 0
            ],
            [
                'loan_id' => 1,
                'agent_id' => 2,
                'county_id' => 1310,
                'crop_id' => 2,
                'practice' => 'NI',
                'plc' => false,
                'type' => 'RP',
                'unit' => 'EU',
                'options' => 'SE',
                'ins_level' => 70,
                'planting_days' => 0,
                'ins_price' => 11.25,
                'ins_share' => 100,
                'premium' => 14.35,
                'stax_loss_trigger' => 90,
                'stax_desired_range' => 15,
                'stax_protection_factor' => 120
            ],
            [
                'loan_id' => 1,
                'agent_id' => 2,
                'county_id' => 1310,
                'crop_id' => 6,
                'practice' => 'NI',
                'plc' => true,
                'type' => 'RP',
                'unit' => 'EU',
                'options' => 'STAX',
                'ins_level' => 70,
                'ins_share' => 80,
                'planting_days' => 0,
                'ins_price' => 0.6300,
                'premium' => 19.82,
                'stax_loss_trigger' => 90,
                'stax_desired_range' => 15,
                'stax_protection_factor' => 120
            ],

            [
                'loan_id' => 1,
                'agent_id' => 2,
                'county_id' => 1310,
                'crop_id' => 1,
                'practice' => 'IR',
                'plc' => false,
                'type' => 'RP',
                'unit' => 'EU',
                'options' => 'SE',
                'ins_level' => 75,
                'ins_share' => 80,
                'planting_days' => 0,
                'ins_price' => 4.25,
                'premium' => 11.88,
                'stax_loss_trigger' => 0,
                'stax_desired_range' => 0,
                'stax_protection_factor' => 0
            ],
            [
                'loan_id' => 1,
                'agent_id' => 2,
                'county_id' => 1310,
                'crop_id' => 2,
                'practice' => 'IR',
                'plc' => false,
                'type' => 'RP',
                'unit' => 'EU',
                'options' => 'SE',
                'ins_level' => 70,
                'planting_days' => 0,
                'ins_price' => 11.25,
                'ins_share' => 80,
                'premium' => 14.35,
                'stax_loss_trigger' => 90,
                'stax_desired_range' => 15,
                'stax_protection_factor' => 120
            ],
            [
                'loan_id' => 1,
                'agent_id' => 2,
                'county_id' => 1310,
                'crop_id' => 6,
                'practice' => 'IR',
                'plc' => true,
                'type' => 'RP',
                'unit' => 'EU',
                'options' => 'STAX',
                'ins_level' => 70,
                'ins_share' => 80,
                'planting_days' => 0,
                'ins_price' => 0.6300,
                'premium' => 19.82,
                'stax_loss_trigger' => 90,
                'stax_desired_range' => 15,
                'stax_protection_factor' => 120
            ]
        ];

        foreach ($policies as $policy) {
            Inspol::create($policy);
        }
    }
}
