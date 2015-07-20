<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->delete();

        Role::create([
            'abr'	=>	'PRE',
            'role'	=>	'President'
        ]);
        Role::create([
            'abr'	=>	'CEO',
            'role'	=>	'Chief Executive Officer',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'CFO',
            'role'	=>	'Chief Financial Officer',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'ABM',
            'role'	=>	'Area Manager',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'COM',
            'role'	=>	'Corporate Office Manager',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'MGR',
            'role'	=>	'Office Manager',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'OAS',
            'role'	=>	'Office Assistant',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'LBM',
            'role'	=>	'Loan Business Manager',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'LOF',
            'role'	=>	'Loan Officer',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'LAN',
            'role'	=>	'Loan Analyst',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'LCA',
            'role'	=>	'Loan Compliance Auditor',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'HRM',
            'role'	=>	'Human Resources Manager',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'IBM',
            'role'	=>	'Insurance Business Manager',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'IAN',
            'role'	=>	'Insurance Analyst',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'CIM',
            'role'	=>	'Corporate Insurance Manager',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'CIA',
            'role'	=>	'Crop Insurance Agents',
            'employment_status' => 0,
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'ITT',
            'role'	=>	'IT Technician',
            'employment_status' => 0
        ]);
        Role::create([
            'abr'	=>	'SUP',
            'role'	=>	'Other Support',
            'employment_status' => 0
        ]);
        Role::create([
            'abr'	=>	'SYS',
            'role'	=>	'System',
            'employment_status' => 0
        ]);
    }
}
