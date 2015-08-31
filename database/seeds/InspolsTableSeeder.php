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
            //1317 NI Corn
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
            //1317 NI Beans
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
            //1317 NI Cotton
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
                'exp_yield' => 858,
                'stax_loss_trigger' => 90,
                'stax_desired_range' => 15,
                'stax_protection_factor' => 120
            ],
            //1317 IR Corn
            [
                'loan_id' => 1,
                'agent_id' => 1,
                'county_id' => 1317,
                'crop_id' => 1,
                'practice' => 'IR',
                'plc' => false,
                'type' => 'YP',
                'unit' => 'EU',
                'options' => 'PFSE',
                'ins_level' => 70,
                'ins_share' => 80,
                'planting_days' => 0,
                'ins_price' => 4.25,
                'exp_yield' => 858,
                'premium' => 11.88,
                'stax_loss_trigger' => 0,
                'stax_desired_range' => 0,
                'stax_protection_factor' => 0
            ],
            //1317 IR Cotton
            [
                'loan_id' => 1,
                'agent_id' => 1,
                'county_id' => 1317,
                'crop_id' => 6,
                'practice' => 'IR',
                'plc' => false,
                'type' => 'RPHPE',
                'unit' => 'EU',
                'options' => 'SCO',
                'ins_level' => 70,
                'ins_share' => 80,
                'planting_days' => 0,
                'ins_price' => 0.6300,
                'exp_yield' => 1192,
                'premium' => 19.82,
                'exp_yield' => 858,
                'stax_loss_trigger' => 90,
                'stax_desired_range' => 35,
                'stax_protection_factor' => 120
            ],

            //1310 NI Corn
            [
                'loan_id' => 1,
                'agent_id' => 2,
                'county_id' => 1310,
                'crop_id' => 1,
                'practice' => 'NI',
                'plc' => false,
                'type' => 'RPHPE',
                'unit' => 'EU',
                'options' => 'SE',
                'ins_level' => 75,
                'ins_share' => 100,
                'planting_days' => 0,
                'ins_price' => 4.25,
                'exp_yield' => 1192,
                'premium' => 11.88,
                'stax_loss_trigger' => 0,
                'stax_desired_range' => 0,
                'stax_protection_factor' => 0
            ],
            //1310 NI Beans
            [
                'loan_id' => 1,
                'agent_id' => 2,
                'county_id' => 1310,
                'crop_id' => 2,
                'practice' => 'NI',
                'plc' => false,
                'type' => 'RPHPE',
                'unit' => 'EU',
                'options' => 'SE',
                'ins_level' => 70,
                'planting_days' => 0,
                'ins_price' => 11.25,
                'ins_share' => 100,
                'exp_yield' => 1192,
                'premium' => 14.35,
                'stax_loss_trigger' => 90,
                'stax_desired_range' => 15,
                'stax_protection_factor' => 120
            ],
            //1310 NI Cotton
            [
                'loan_id' => 1,
                'agent_id' => 2,
                'county_id' => 1310,
                'crop_id' => 6,
                'practice' => 'NI',
                'plc' => true,
                'type' => 'RPHPE',
                'unit' => 'EU',
                'options' => 'SCO',
                'ins_level' => 70,
                'ins_share' => 80,
                'planting_days' => 0,
                'ins_price' => 0.6300,
                'premium' => 19.82,
                'exp_yield' => 1142,
                'stax_loss_trigger' => 90,
                'stax_desired_range' => 15,
                'stax_protection_factor' => 120
            ],
            //1310 IR Corn
            [
                'loan_id' => 1,
                'agent_id' => 2,
                'county_id' => 1310,
                'crop_id' => 1,
                'practice' => 'IR',
                'plc' => false,
                'type' => 'YP',
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
            //1310 IR Beans
            [
                'loan_id' => 1,
                'agent_id' => 2,
                'county_id' => 1310,
                'crop_id' => 2,
                'practice' => 'IR',
                'plc' => false,
                'type' => 'YP',
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
            //1310 IR Cotton
            [
                'loan_id' => 1,
                'agent_id' => 2,
                'county_id' => 1310,
                'crop_id' => 6,
                'practice' => 'IR',
                'plc' => true,
                'type' => 'RP',
                'unit' => 'EU',
                'options' => 'SCO',
                'ins_level' => 70,
                'ins_share' => 80,
                'planting_days' => 0,
                'ins_price' => 0.6300,
                'exp_yield' => 1142,
                'premium' => 19.82,
                'stax_loss_trigger' => 90,
                'stax_desired_range' => 15,
                'stax_protection_factor' => 120
            ],

            //1317 NI Cotton
            [
                'loan_id' => 2,
                'agent_id' => 2,
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
                'exp_yield' => 858,
                'stax_loss_trigger' => 90,
                'stax_desired_range' => 15,
                'stax_protection_factor' => 120
            ],
            //1317 NI Corn
            [
                'loan_id' => 2,
                'agent_id' => 2,
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
            //1317 NI Beans
            [
                'loan_id' => 2,
                'agent_id' => 2,
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
            //1317 NI Sorghum
            [
                'loan_id' => 2,
                'agent_id' => 2,
                'county_id' => 1317,
                'crop_id' => 4,
                'practice' => 'NI',
                'plc' => false,
                'type' => 'RP',
                'unit' => 'EU',
                'options' => 'SE',
                'ins_level' => 75,
                'planting_days' => 0,
                'ins_price' => 3.97,
                'ins_share' => 80,
                'premium' => 20.00,
                'stax_loss_trigger' => 90,
                'stax_desired_range' => 15,
                'stax_protection_factor' => 120
            ],
            //1317 NI Rice
            [
                'loan_id' => 2,
                'agent_id' => 2,
                'county_id' => 1317,
                'crop_id' => 7,
                'practice' => 'NI',
                'plc' => false,
                'type' => 'RP',
                'unit' => 'EU',
                'options' => 'SE',
                'ins_level' => 75,
                'planting_days' => 0,
                'ins_price' => 0.1125,
                'ins_share' => 80,
                'premium' => 20.00,
                'stax_loss_trigger' => 90,
                'stax_desired_range' => 15,
                'stax_protection_factor' => 120
            ],
        ];

        foreach ($policies as $policy) {
            Inspol::create($policy);
        }
    }
}
