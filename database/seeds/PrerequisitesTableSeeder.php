<?php

use App\Prerequisite;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrerequisitesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('prerequisites')->delete();

        Prerequisite::create([
            'loan_id'	=>	1,
            'document' => "DriversLicense",
            'title' => "Driver's License",
            'received' => 1,
            'date_requested' => '2014-09-02',
            'date_received' => '2014-09-02',
            'path' => '2015_1/',
            'filename' => 'driversLicense.pdf'
        ]);
        Prerequisite::create([
            'loan_id'	=>	1,
            'document' => "Financials",
            'title' => "Financials",
            'date_requested' => '2014-09-02',
            'reason_pending' => 'Client unprepared'
        ]);
        Prerequisite::create([
            'loan_id'	=>	1,
            'document' => "EquipmentList",
            'title' => "Equipment List",
            'received' => 1,
            'date_requested' => '2014-09-02',
            'date_received' => '2014-09-02',
            'path' => '2015_1/',
            'filename' => 'equipmentList.pdf'
        ]);
        Prerequisite::create([
            'loan_id'	=>	1,
            'document' => "Leases",
            'title' => "Leases"
        ]);
        Prerequisite::create([
            'loan_id'	=>	1,
            'document' => "FSAInformation",
            'title' => "FSA Information"
        ]);
        Prerequisite::create([
            'loan_id'	=>	1,
            'document' => "InsuranceInformation",
            'title' => "Insurance Information"
        ]);
        Prerequisite::create([
            'loan_id'	=>	1,
            'document' => "CropInsuranceInfoDatabase",
            'title' => "Crop Insurance Info & Database"
        ]);
        Prerequisite::create([
            'loan_id'	=>	1,
            'document' => "GrainContracts",
            'title' => "Grain Contracts"
        ]);

        Prerequisite::create([
            'loan_id'	=>	2,
            'document' => "DriversLicense",
            'title' => "Driver's License",
            'path' => '2015_2/'
        ]);
        Prerequisite::create([
            'loan_id'	=>	2,
            'document' => "Financials",
            'title' => "Financials",
            'date_requested' => '2014-09-02',
            'reason_pending' => 'Client unprepared'
        ]);
        Prerequisite::create([
            'loan_id'	=>	2,
            'document' => "EquipmentList",
            'title' => "Equipment List",
            'received' => 1,
            'date_requested' => '2014-09-02',
            'date_received' => '2014-09-02',
            'path' => '2015_1/',
            'filename' => 'equipmentList.pdf'
        ]);
        Prerequisite::create([
            'loan_id'	=>	2,
            'document' => "Leases",
            'title' => "Leases"
        ]);
        Prerequisite::create([
            'loan_id'	=>	2,
            'document' => "FSAInformation",
            'title' => "FSA Information"
        ]);
        Prerequisite::create([
            'loan_id'	=>	2,
            'document' => "InsuranceInformation",
            'title' => "Insurance Information"
        ]);
        Prerequisite::create([
            'loan_id'	=>	2,
            'document' => "CropInsuranceInfoDatabase",
            'title' => "Crop Insurance Info & Database"
        ]);
        Prerequisite::create([
            'loan_id'	=>	2,
            'document' => "GrainContracts",
            'title' => "Grain Contracts"
        ]);
    }
}
