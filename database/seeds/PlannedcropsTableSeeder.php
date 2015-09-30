<?php

use App\Plannedcrop;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlannedcropsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('plannedcrops')->delete();

        $collection = [
            [
                'loan_id' => 2,
                'crop_id' => 1,
                'crop' => 'Corn',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(1)
            ],
            [
                'loan_id' => 2,
                'crop_id' => 2,
                'crop' => 'Soybeans',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(2)
            ],
            [
                'loan_id' => 2,
                'crop_id' => 3,
                'crop' => 'Soybeans FAC',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(3)
            ],
            [
                'loan_id' => 2,
                'crop_id' => 4,
                'crop' => 'Sorghum',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(4)
            ],
            [
                'loan_id' => 2,
                'crop_id' => 5,
                'crop' => 'Wheat',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(5)
            ],
            [
                'loan_id' => 2,
                'crop_id' => 6,
                'crop' => 'Cotton',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(6)
            ],
            [
                'loan_id' => 2,
                'crop_id' => 7,
                'crop' => 'Rice',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(7)
            ],
            [
                'loan_id' => 2,
                'crop_id' => 8,
                'crop' => 'Peanuts',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(8)
            ],
            [
                'loan_id' => 2,
                'crop_id' => 9,
                'crop' => 'Sugar Cane',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(9)
            ],
            [
                'loan_id' => 2,
                'crop_id' => 10,
                'crop' => 'Sunflowers',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(10)
            ],

            [
                'loan_id' => 3,
                'crop_id' => 1,
                'crop' => 'Corn',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(1)
            ],
            [
                'loan_id' => 3,
                'crop_id' => 2,
                'crop' => 'Soybeans',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(2)
            ],
            [
                'loan_id' => 3,
                'crop_id' => 3,
                'crop' => 'Soybeans FAC',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(3)
            ],
            [
                'loan_id' => 3,
                'crop_id' => 4,
                'crop' => 'Sorghum',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(4)
            ],
            [
                'loan_id' => 3,
                'crop_id' => 5,
                'crop' => 'Wheat',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(5)
            ],
            [
                'loan_id' => 3,
                'crop_id' => 6,
                'crop' => 'Cotton',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(6)
            ],
            [
                'loan_id' => 3,
                'crop_id' => 7,
                'crop' => 'Rice',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(7)
            ],
            [
                'loan_id' => 3,
                'crop_id' => 8,
                'crop' => 'Peanuts',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(8)
            ],
            [
                'loan_id' => 3,
                'crop_id' => 9,
                'crop' => 'Sugar Cane',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(9)
            ],
            [
                'loan_id' => 3,
                'crop_id' => 10,
                'crop' => 'Sunflowers',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(10)
            ],

            [
                'loan_id' => 4,
                'crop_id' => 1,
                'crop' => 'Corn',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(1)
            ],
            [
                'loan_id' => 4,
                'crop_id' => 2,
                'crop' => 'Soybeans',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(2)
            ],
            [
                'loan_id' => 4,
                'crop_id' => 3,
                'crop' => 'Soybeans FAC',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(3)
            ],
            [
                'loan_id' => 4,
                'crop_id' => 4,
                'crop' => 'Sorghum',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(4)
            ],
            [
                'loan_id' => 4,
                'crop_id' => 5,
                'crop' => 'Wheat',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(5)
            ],
            [
                'loan_id' => 4,
                'crop_id' => 6,
                'crop' => 'Cotton',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(6)
            ],
            [
                'loan_id' => 4,
                'crop_id' => 7,
                'crop' => 'Rice',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(7)
            ],
            [
                'loan_id' => 4,
                'crop_id' => 8,
                'crop' => 'Peanuts',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(8)
            ],
            [
                'loan_id' => 4,
                'crop_id' => 9,
                'crop' => 'Sugar Cane',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(9)
            ],
            [
                'loan_id' => 4,
                'crop_id' => 10,
                'crop' => 'Sunflowers',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(10)
            ],

            [
                'loan_id' => 5,
                'crop_id' => 1,
                'crop' => 'Corn',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(1)
            ],
            [
                'loan_id' => 5,
                'crop_id' => 2,
                'crop' => 'Soybeans',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(2)
            ],
            [
                'loan_id' => 5,
                'crop_id' => 3,
                'crop' => 'Soybeans FAC',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(3)
            ],
            [
                'loan_id' => 5,
                'crop_id' => 4,
                'crop' => 'Sorghum',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(4)
            ],
            [
                'loan_id' => 5,
                'crop_id' => 5,
                'crop' => 'Wheat',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(5)
            ],
            [
                'loan_id' => 5,
                'crop_id' => 6,
                'crop' => 'Cotton',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(6)
            ],
            [
                'loan_id' => 5,
                'crop_id' => 7,
                'crop' => 'Rice',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(7)
            ],
            [
                'loan_id' => 5,
                'crop_id' => 8,
                'crop' => 'Peanuts',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(8)
            ],
            [
                'loan_id' => 5,
                'crop_id' => 9,
                'crop' => 'Sugar Cane',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(9)
            ],
            [
                'loan_id' => 5,
                'crop_id' => 10,
                'crop' => 'Sunflowers',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(10)
            ],

            [
                'loan_id' => 6,
                'crop_id' => 1,
                'crop' => 'Corn',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(1)
            ],
            [
                'loan_id' => 6,
                'crop_id' => 2,
                'crop' => 'Soybeans',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(2)
            ],
            [
                'loan_id' => 6,
                'crop_id' => 3,
                'crop' => 'Soybeans FAC',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(3)
            ],
            [
                'loan_id' => 6,
                'crop_id' => 4,
                'crop' => 'Sorghum',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(4)
            ],
            [
                'loan_id' => 6,
                'crop_id' => 5,
                'crop' => 'Wheat',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(5)
            ],
            [
                'loan_id' => 6,
                'crop_id' => 6,
                'crop' => 'Cotton',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(6)
            ],
            [
                'loan_id' => 6,
                'crop_id' => 7,
                'crop' => 'Rice',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(7)
            ],
            [
                'loan_id' => 6,
                'crop_id' => 8,
                'crop' => 'Peanuts',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(8)
            ],
            [
                'loan_id' => 6,
                'crop_id' => 9,
                'crop' => 'Sugar Cane',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(9)
            ],
            [
                'loan_id' => 6,
                'crop_id' => 10,
                'crop' => 'Sunflowers',
                'acres' => 0,
                'tea' => (double)getPlannedCropTea(10)
            ]
        ];

        foreach ($collection as $record) {
            Plannedcrop::create($record);
        }
    }
}
