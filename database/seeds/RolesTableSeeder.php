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
            'abr'	=>	'PRL',
            'role'	=>	'President of Lending',
            'description' => "Responsible for ARM Loan Locations. This primarily includes making sure that (1) Existing ARM Loan Locations adhere to the Location Growth Profiles for loan commitments and EBT, (2) Adding new ARM Loan Locations in accordance with our Growth Strategy, (3) Marketing of ARM Loan Locations, and (4) Personnel growth within each ARM Loan Locations",
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'COO',
            'role'	=>	'Chief Operating Officer',
            'description' => "Responsible for (1) the day-to-day running of the critical departments of ARM, (2) establishing procedures and processes to ensure their smooth functioning, and (3) providing timely operational information and assistance to the CEO",
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'CEO',
            'role'	=>	'Chief Executive Officer',
            'description' => "Top executive responsible for ARM’s overall operations and performance. Serves as the main link between the board of directors (the board) and the ARM's various parts or levels, and is held responsible for ARM’s success or failure. Insures that IT and accounting meets corporate goals. Maintains and implements corporate policy, as established by the board.",
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'CFO',
            'role'	=>	'Chief Financial Officer',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'ABM',
            'role'	=>	'Area Business Manager',
            'description' => "For a particular ARM Loan Location(s), the ABM is responsible for (1) meeting the growth objectives of the Location Growth Profile, (2) adherence to ARM policies and procedures, (3) front line for collection of past dues, (3) development of employees, and (4) communication of objectives and opportunities.",
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'COM',
            'role'	=>	'Corporate Office Manager',
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'OM',
            'role'	=>	'Office Manager',
            'description' => "Responsible for ARM Loan Location operations including: loan closings, loan filings, loan disbursements, office operations, and management of Office Assistant roles and responsibilities.",
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'OA',
            'role'	=>	'Office Assistant',
            'description' => "Responsible for specific ARM Loan Location office operations as they pertain to loan operations and other crop insurance processing.",
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'LBM',
            'role'	=>	'Loan Business Manager',
            'description' => "Responsible for ensuring that ARM Loan Officers and Loan Analysts are (1) trained properly and (2) perform loan analysis and loan management steps consistently. The LBM supports the growth of ARM Loan Locations.",
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'LO',
            'role'	=>	'Loan Officer',
            'description' => "Responsible for (1) structuring agriculture loan deals that serve the customers needs, (2) adhering to ARM policies and procedures, (3) supporting ARM’s Loan Location growth objectives as defined in the Location Growth Profile, (4) Interfacing with office staff to get the job done, (5) selling crop insurance, and (6) using loan experience to develop Loan Analysts",
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'LA',
            'role'	=>	'Loan Analyst',
            'description' => "Responsible for (1) structuring agriculture loan deals that serve the customers needs, (2) adhering to ARM policies and procedures, (3) supporting ARM’s Loan Location growth objectives as defined in the Location Growth Profile, (4) Interfacing with office staff to get the job done.",
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'LCA',
            'role'	=>	'Loan Compliance Auditor',
            'description' => ": Responsible for the quality and consistency of ARM Loans across ARM locations. The LCA serves as the corporate interface with ARM Loan Location ABM’s for loan reviews and loan past due collection.",
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'HRM',
            'role'	=>	'Human Resources Manager',
            'description' => "The human resource manager is directly responsible for the overall administration, coordination and evaluation of the human resource function.",
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
            'abr'	=>	'IA',
            'role'	=>	'Crop Insurance Agents',
            'description' => "Responsible for marketing of crop insurance policies to the customer, adhering to ARM insurance standards, maintenance of customer APH databases, and the obtaining of applications, production reports, acreage reports, and notice of loss claims",
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'ITT',
            'role'	=>	'IT Technician'
        ]);
        Role::create([
            'abr'	=>	'SUP',
            'role'	=>	'Other Support'
        ]);
        Role::create([
            'abr'	=>	'SYS',
            'role'	=>	'System'
        ]);
        Role::create([
            'abr'	=>	'PRI',
            'role'	=>	'President of Insurance',
            'description' => "Responsible for (1) ARM agency growth strategy, (2) insurance agency acquisitions, (3) insurance policy, and (4) ARM umbrella value to agencies.",
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'CRO',
            'role'	=>	'Chief Risk Officer',
            'description' => "The corporate executive tasked with assessing and mitigating significant loan risk, regulatory risk, and technological risks across ARM",
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'CTR',
            'role'	=>	'Corporate Controller',
            'description' => "Top managerial and financial accountant. The controller supervises the accounting department and assists management in interpreting and utilizing managerial accounting information.",
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'PA',
            'role'	=>	'Principal Agent',
            'description' => "Serves as the leader of an ARM Loan or Agency location’s crop insurance business; which includes (1) making sure that policies are represented and processed correctly, (2) development of ARM agents, (3) growth of policy revenue, (4) marketing of additional ARM lines of revenue, and (5) supervision of Insurance Processors and Agents",
            'matrix' => 1
        ]);
        Role::create([
            'abr'	=>	'IP',
            'role'	=>	'Insurance Processor',
            'description' => "Responsible for the support of Principal Agent, Crop Insurance Agents, and all crop insurance operations including: processing of customer insurance applications, production reports, acreage reports, filing notice of loss claims",
            'matrix' => 1
        ]);
    }
}
