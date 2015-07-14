<?php

use App\Requireddocument;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequireddocumentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('requireddocuments')->delete();

        Requireddocument::create([
            'loantype_id' =>	1,
            'document'	  =>	"Signed Application"
        ]);
        Requireddocument::create([
            'loantype_id' =>	2,
            'document'	  =>	"Signed Application"
        ]);
        Requireddocument::create([
            'loantype_id' =>	3,
            'document'	  =>	"Signed Application"
        ]);
        Requireddocument::create([
            'loantype_id' =>	4,
            'document'	  =>	"Signed Application"
        ]);
        Requireddocument::create([
            'loantype_id' =>	5,
            'document'	  =>	"Signed Application"
        ]);
        Requireddocument::create([
            'loantype_id' =>	6,
            'document'	  =>	"Signed Application"
        ]);
        Requireddocument::create([
            'loantype_id' => 7,
            'document' =>	"Signed Application"
        ]);
        Requireddocument::create([
            'loantype_id' =>	1,
            'document'	  =>	"Driver's License"
        ]);
        Requireddocument::create([
            'loantype_id' =>	2,
            'document'	  =>	"Driver's License"
        ]);
        Requireddocument::create([
            'loantype_id' =>	3,
            'document'	  =>	"Driver's License"
        ]);
        Requireddocument::create([
            'loantype_id' =>	4,
            'document'	  =>	"Driver's License"
        ]);
        Requireddocument::create([
            'loantype_id' =>	5,
            'document'	  =>	"Driver's License"
        ]);
        Requireddocument::create([
            'loantype_id' =>	6,
            'document'	  =>	"Driver's License"
        ]);
        Requireddocument::create([
            'loantype_id' =>	7,
            'document'	  =>	"Driver's License"
        ]);
        Requireddocument::create([
            'loantype_id' =>	1,
            'document'	  =>	"Financials"
        ]);
        Requireddocument::create([
            'loantype_id' =>	2,
            'document'	  =>	"Financials"
        ]);
        Requireddocument::create([
            'loantype_id' =>	3,
            'document'	  =>	"Financials"
        ]);
        Requireddocument::create([
            'loantype_id' =>	4,
            'document'	  =>	"Financials"
        ]);
        Requireddocument::create([
            'loantype_id' =>	5,
            'document'	  =>	"Financials"
        ]);
        Requireddocument::create([
            'loantype_id' =>	6,
            'document'	  =>	"Financials"
        ]);
        Requireddocument::create([
            'loantype_id' =>	7,
            'document'	  =>	"Financials"
        ]);
        Requireddocument::create([
            'loantype_id' =>	1,
            'document'	  =>	"Equipment List"
        ]);
        Requireddocument::create([
            'loantype_id' =>	2,
            'document'	  =>	"Equipment List"
        ]);
        Requireddocument::create([
            'loantype_id' =>	3,
            'document'	  =>	"Equipment List"
        ]);
        Requireddocument::create([
            'loantype_id' =>	1,
            'document'	  =>	"Leases"
        ]);
        Requireddocument::create([
            'loantype_id' =>	2,
            'document'	  =>	"Leases"
        ]);
        Requireddocument::create([
            'loantype_id' =>	3,
            'document'	  =>	"Leases"
        ]);
        Requireddocument::create([
            'loantype_id' =>	1,
            'document'	  =>	"FSA Information"
        ]);
        Requireddocument::create([
            'loantype_id' =>	2,
            'document'	  =>	"FSA Information"
        ]);
        Requireddocument::create([
            'loantype_id' =>	3,
            'document'	  =>	"FSA Information"
        ]);
        Requireddocument::create([
            'loantype_id' =>	1,
            'document'	  =>	"Insurance Information"
        ]);
        Requireddocument::create([
            'loantype_id' =>	2,
            'document'	  =>	"Insurance Information"
        ]);
        Requireddocument::create([
            'loantype_id' =>	3,
            'document'	  =>	"Insurance Information"
        ]);
        Requireddocument::create([
            'loantype_id' =>	1,
            'document'	  =>	"Crop Insurance APH Database"
        ]);
        Requireddocument::create([
            'loantype_id' =>	2,
            'document'	  =>	"Crop Insurance APH Database"
        ]);
        Requireddocument::create([
            'loantype_id' =>	3,
            'document'	  =>	"Crop Insurance APH Database"
        ]);
        Requireddocument::create([
            'loantype_id' =>	1,
            'document'	  =>	"Grain Contracts"
        ]);
        Requireddocument::create([
            'loantype_id' =>	2,
            'document'	  =>	"Grain Contracts"
        ]);
        Requireddocument::create([
            'loantype_id' =>	3,
            'document'	  =>	"Grain Contracts"
        ]);
        Requireddocument::create([
            'loantype_id' =>	6,
            'document'	  =>	"Grain Contracts"
        ]);
    }
}
