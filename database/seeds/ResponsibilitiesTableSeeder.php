<?php

use App\Responsibility;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResponsibilitiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('responsibilities')->delete();

        $collection = [
            [
                'cat_id' => '1',
                'task' => 'Loan Analysis'
            ],[
                'cat_id' => '1',
                'task' => 'Verification of Loan Eligibility (ITS, FSA, UCC)'
            ],[
                'cat_id' => '1',
                'task' => 'Third Party Credit Liason'
            ],[
                'cat_id' => '1',
                'task' => 'Verify Non-crop Collateral (equipment)'
            ],[
                'cat_id' => '1',
                'task' => 'Verify Real Estate Collateral (with atty)'
            ],[
                'cat_id' => '1',
                'task' => 'Verify Correct Insurance levels'
            ],[
                'cat_id' => '1',
                'task' => 'Submit Loans for Approval'
            ],[
                'cat_id' => '1',
                'task' => 'Approve Loans'
            ],[
                'cat_id' => '1',
                'task' => 'Coordinate Loan Closing Schedule'
            ],[
                'cat_id' => '1',
                'task' => 'Document Review'
            ],[
                'cat_id' => '1',
                'task' => 'Loan Closing'
            ],[
                'cat_id' => '1',
                'task' => 'File Security Documents'
            ],[
                'cat_id' => '1',
                'task' => 'Internal Filing of Loan Docs'
            ],[
                'cat_id' => '1',
                'task' => 'Maintain Loan Status Spreadsheet'
            ],[
                'cat_id' => '1',
                'task' => 'Maintain Customer Analysis Files'
            ],[
                'cat_id' => '1',
                'task' => 'Process Loan Addendums and/or Extensions'
            ],[
                'cat_id' => '1',
                'task' => 'Coordinate Crop Inspections'
            ],[
                'cat_id' => '1',
                'task' => 'Account Reconciliations'
            ],[
                'cat_id' => '1',
                'task' => 'Cancel Security Documents (when paid in full)'
            ],[
                'cat_id' => '1',
                'task' => 'Oversight of Loan Processing Workflow'
            ],[
                'cat_id' => '1',
                'task' => 'Document Past Due Accounts Progress and Review'
            ],[
                'cat_id' => '1',
                'task' => 'Development of Loan Officers and Analysts'
            ],[
                'cat_id' => '1',
                'task' => 'Relationship Lead for Dist Credit Managers'
            ],[
                'cat_id' => '1',
                'task' => 'Lead for Bad Debt conf with Atty'
            ],[
                'cat_id' => '2',
                'task' => 'Customer Setup (QB)'
            ],[
                'cat_id' => '2',
                'task' => 'Invoice Fees'
            ],[
                'cat_id' => '2',
                'task' => 'Verify Availability of Funds'
            ],[
                'cat_id' => '2',
                'task' => 'Disburse Funds (including invoicing)'
            ],[
                'cat_id' => '2',
                'task' => 'Process Payments'
            ],[
                'cat_id' => '2',
                'task' => 'Oversight of Loan Operation'
            ],[
                'cat_id' => '2',
                'task' => 'Maintain Customer Hard Files2'
            ],[
                'cat_id' => '2',
                'task' => 'Customer Reporting (QB)'
            ],[
                'cat_id' => '3',
                'task' => 'Market Insurance Policies'
            ],[
                'cat_id' => '3',
                'task' => 'Serve as a Resource for Ins Questions'
            ],[
                'cat_id' => '3',
                'task' => 'Send Customer Info (from Mkt Calandar)'
            ],[
                'cat_id' => '3',
                'task' => 'Quote Policies'
            ],[
                'cat_id' => '3',
                'task' => 'Perform Customer Analysis'
            ],[
                'cat_id' => '3',
                'task' => 'Obtain Application'
            ],[
                'cat_id' => '3',
                'task' => 'Process Applications'
            ],[
                'cat_id' => '3',
                'task' => 'Obtain Production Reports'
            ],[
                'cat_id' => '3',
                'task' => 'Process Production Reports3'
            ],[
                'cat_id' => '3',
                'task' => 'Setting Up Added Land Databases'
            ],[
                'cat_id' => '3',
                'task' => 'Obtain Acreage Reports'
            ],[
                'cat_id' => '3',
                'task' => 'Process Acreage Reports'
            ],[
                'cat_id' => '3',
                'task' => 'Assist with or Prepare Notice of Loss'
            ],[
                'cat_id' => '4',
                'task' => 'Direct Crop Insurance Business'
            ],[
                'cat_id' => '4',
                'task' => 'Develop New lines of Insurance Products'
            ],[
                'cat_id' => '4',
                'task' => 'Develop Agency Target Lists'
            ],[
                'cat_id' => '4',
                'task' => 'Maintain Insurance Status Spreadsheet'
            ],[
                'cat_id' => '4',
                'task' => 'Update Agent Cheat Sheet'
            ],[
                'cat_id' => '4',
                'task' => 'Negotiate AIP Contracts'
            ],[
                'cat_id' => '4',
                'task' => 'Reconcile/ Allocate Commissions'
            ],[
                'cat_id' => '4',
                'task' => 'Manage/ Schedule AIP/CE for Agents'
            ],[
                'cat_id' => '4',
                'task' => 'Attend AIP/CE Training Classes'
            ],[
                'cat_id' => '4',
                'task' => 'Manage State Licensing Requirements and Files'
            ],[
                'cat_id' => '4',
                'task' => 'Maintain Customer Hard Files'
            ],[
                'cat_id' => '4',
                'task' => 'Maintain AIP Hard Files'
            ],[
                'cat_id' => '5',
                'task' => 'Chart of Accounts (QB)'
            ],[
                'cat_id' => '5',
                'task' => 'Month-End (balancing, JE, and other)'
            ],[
                'cat_id' => '5',
                'task' => 'Customer Statements (QB)'
            ],[
                'cat_id' => '5',
                'task' => 'Perform QA Financial Audits of Agencies'
            ],[
                'cat_id' => '5',
                'task' => 'Gather Agency Financial Info'
            ],[
                'cat_id' => '5',
                'task' => 'Financials (QB)'
            ],[
                'cat_id' => '5',
                'task' => 'Monthly Statement of Cash Flows'
            ],[
                'cat_id' => '5',
                'task' => 'Accounts Payable (QB)'
            ],[
                'cat_id' => '5',
                'task' => 'Accounts Receivable (que collections)'
            ],[
                'cat_id' => '5',
                'task' => 'Approval of Balance Sheet Reconcilations'
            ],[
                'cat_id' => '5',
                'task' => 'Oversight and Review of Financials'
            ],[
                'cat_id' => '5',
                'task' => 'Review Past due and report to CEO'
            ],[
                'cat_id' => '6',
                'task' => 'Financial Forecasting and Projections'
            ],[
                'cat_id' => '6',
                'task' => 'Budgeting'
            ],[
                'cat_id' => '6',
                'task' => 'Actual to Budget Financial Review'
            ],[
                'cat_id' => '6',
                'task' => 'Cash Management'
            ],[
                'cat_id' => '6',
                'task' => 'Development of Strategic Objectives'
            ],[
                'cat_id' => '6',
                'task' => 'SOX Financial Review'
            ],[
                'cat_id' => '6',
                'task' => 'Mergers and Acquisitions'
            ],[
                'cat_id' => '6',
                'task' => 'Line of Credit'
            ],[
                'cat_id' => '6',
                'task' => 'Marketing Strategies'
            ],[
                'cat_id' => '6',
                'task' => 'Marketing Presentations'
            ],[
                'cat_id' => '6',
                'task' => 'Marketing Communications (Promo)'
            ],[
                'cat_id' => '6',
                'task' => 'Maintain Marketing Calandar'
            ],[
                'cat_id' => '6',
                'task' => 'Develop Location Customer Target Lists'
            ],[
                'cat_id' => '6',
                'task' => 'Loan Product Development'
            ],[
                'cat_id' => '6',
                'task' => 'Loan Policies and Procedures Maintenance'
            ],[
                'cat_id' => '6',
                'task' => 'Insurance Policies and Procedures Maintenance'
            ],[
                'cat_id' => '6',
                'task' => 'Loan Processing Guidelines'
            ],[
                'cat_id' => '6',
                'task' => 'Office Tools Review'
            ],[
                'cat_id' => '6',
                'task' => 'Document/ Filing Standards'
            ],[
                'cat_id' => '6',
                'task' => 'Facility Management'
            ],[
                'cat_id' => '6',
                'task' => 'Lead for IT (PC\'s, network, and phone)'
            ],[
                'cat_id' => '7',
                'task' => 'Audit Loan Files Policy and Procedures'
            ],[
                'cat_id' => '7',
                'task' => 'Collections Processes and Procedure'
            ],[
                'cat_id' => '7',
                'task' => 'Internal Review'
            ],[
                'cat_id' => '7',
                'task' => 'Special Assets Performance'
            ],[
                'cat_id' => '7',
                'task' => 'Define Tax Requirements for new locations'
            ],[
                'cat_id' => '7',
                'task' => 'Define Licence Requirements for new locations'
            ],[
                'cat_id' => '7',
                'task' => 'Identify tax solutions'
            ],[
                'cat_id' => '7',
                'task' => 'Lead for CPA'
            ],[
                'cat_id' => '8',
                'task' => 'Maintenance of Loan Training Curriculum'
            ],[
                'cat_id' => '8',
                'task' => 'Maintenance of Insurance Training Curriculum'
            ],[
                'cat_id' => '8',
                'task' => 'Insurance Agent Training'
            ],[
                'cat_id' => '8',
                'task' => 'Insurance Processor Training'
            ],[
                'cat_id' => '8',
                'task' => 'Loan Officer/Analyst Training'
            ],[
                'cat_id' => '8',
                'task' => 'Office Administration Training'
            ],[
                'cat_id' => '9',
                'task' => 'Processing Payroll'
            ],[
                'cat_id' => '9',
                'task' => 'Payroll Approval'
            ],[
                'cat_id' => '9',
                'task' => 'Employee Files and Record Management'
            ],[
                'cat_id' => '9',
                'task' => 'Coordinate Job Posting and Candidate Communication'
            ],[
                'cat_id' => '9',
                'task' => 'Coordinate Employee Benefits'
            ],[
                'cat_id' => '9',
                'task' => 'Policy, Procedure and Employment Laws Compliance'
            ],[
                'cat_id' => '9',
                'task' => 'Lead For Netchex'
            ],[
                'cat_id' => '9',
                'task' => 'Reconcile Vacation and PTO Time'
            ],[
                'cat_id' => '9',
                'task' => 'Required employment reporting'
            ],[
                'cat_id' => '9',
                'task' => 'Conduct Interviews'
            ],[
                'cat_id' => '9',
                'task' => 'Personnel Recruitment'
            ],[
                'cat_id' => '9',
                'task' => 'Background Checks'
            ],[
                'cat_id' => '9',
                'task' => 'Employee Event Coordination'
            ],[
                'cat_id' => '9',
                'task' => 'Employee Evaluations and Incentive Decisions'
            ],[
                'cat_id' => '10',
                'task' => 'Answering Phone and Deliver Messages'
            ],[
                'cat_id' => '10',
                'task' => 'Receive and Distribute Mail'
            ],[
                'cat_id' => '10',
                'task' => 'Deliver Bank Deposits'
            ],[
                'cat_id' => '10',
                'task' => 'Deliver Filings to Court House'
            ],[
                'cat_id' => '10',
                'task' => 'Deliver Checks to Walk-Ins'
            ],[
                'cat_id' => '10',
                'task' => 'Copy Weekly Invoices and Checks'
            ],[
                'cat_id' => '10',
                'task' => 'Copies, Faxes, and Mail'
            ],[
                'cat_id' => '10',
                'task' => 'Mail Customer Statements'
            ],[
                'cat_id' => '10',
                'task' => 'Lead for housekeeping services'
            ]
        ];

        foreach ($collection as $record) {
            Responsibility::create($record);
        }
    }
}
