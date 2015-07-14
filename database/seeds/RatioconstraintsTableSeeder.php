<?php

use App\Ratioconstraint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatioconstraintsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('ratioconstraints')->delete();

        Ratioconstraint::create([
            'constraint' => "Debt to Asset <=",
            'gradeA' => 50,
            'gradeB' => 67,
            'gradeC' => 80,
            'gradeD' => 100
        ]);
        Ratioconstraint::create([
            'constraint' => "Current Ratio >=",
            'gradeA' => 150,
            'gradeB' => 100,
            'gradeC' => 67,
            'gradeD' => 50
        ]);
        Ratioconstraint::create([
            'constraint' => "Working Capital >=",
            'gradeA' => 20,
            'gradeB' => 0,
            'gradeC' => -20,
            'gradeD' => -50
        ]);
        Ratioconstraint::create([
            'constraint' => "Borrowing Capacity >=",
            'gradeA' => 50,
            'gradeB' => 20,
            'gradeC' => 10,
            'gradeD' => 0
        ]);
        Ratioconstraint::create([
            'constraint' => "Years Farming >=",
            'gradeA' => 5,
            'gradeB' => 5,
            'gradeC' => 3,
            'gradeD' => 2
        ]);
        Ratioconstraint::create([
            'constraint' => "Credit Score",
            'gradeA' => 740,
            'gradeB' => 700,
            'gradeC' => 680,
            'gradeD' => 600
        ]);
        Ratioconstraint::create([
            'constraint' => "CPA Financials",
            'gradeA' => 1,
            'gradeB' => 0,
            'gradeC' => 0,
            'gradeD' => 0
        ]);
        Ratioconstraint::create([
            'constraint' => "Bankruptcy",
            'gradeA' => 0,
            'gradeB' => 0,
            'gradeC' => 0,
            'gradeD' => 1
        ]);
        Ratioconstraint::create([
            'constraint' => "Judgement",
            'gradeA' => 0,
            'gradeB' => 0,
            'gradeC' => 0,
            'gradeD' => 1
        ]);
        Ratioconstraint::create([
            'constraint' => "Any Type Max Loan Constraint",
            'gradeA' => 10000000,
            'gradeB' => 5000000,
            'gradeC' => 1000000,
            'gradeD' => 0
        ]);
        Ratioconstraint::create([
            'constraint' => "Ag-Pro Max Loan Constraint",
            'gradeA' => 1000000,
            'gradeB' => 500000,
            'gradeC' => 0,
            'gradeD' => 0
        ]);
        Ratioconstraint::create([
            'constraint' => "Capital Bridge Max Loan Constraint",
            'gradeA' => 1000000,
            'gradeB' => 500000,
            'gradeC' => 0,
            'gradeD' => 0
        ]);
        Ratioconstraint::create([
            'constraint' => "Ag-Vest Max Loan Constraint",
            'gradeA' => 1000000,
            'gradeB' => 500000,
            'gradeC' => 0,
            'gradeD' => 0
        ]);
        Ratioconstraint::create([
            'constraint' => "Ag-Pro Max Rate of Avg Revenue",
            'gradeA' => 50,
            'gradeB' => 50,
            'gradeC' => 0,
            'gradeD' => 0
        ]);
        Ratioconstraint::create([
            'constraint' => "Capital Bridge Max Rate of Avg Revenue",
            'gradeA' => 35,
            'gradeB' => 30,
            'gradeC' => 25,
            'gradeD' => 0
        ]);
        Ratioconstraint::create([
            'constraint' => "Ag-Vest Max Rate of Avg Revenue",
            'gradeA' => 35,
            'gradeB' => 30,
            'gradeC' => 25,
            'gradeD' => 0
        ]);
    }
}
