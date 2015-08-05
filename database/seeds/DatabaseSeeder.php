<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $seeders = [
            'UsersTableSeeder',
            'AddendumfinancialsTableSeeder',
            'AddendumloansTableSeeder',
            'AdmingradersTableSeeder',
            'AgenciesTableSeeder',
            'AgentsTableSeeder',
            'ApplicantfinancialsTableSeeder',
            'ApplicantsTableSeeder',
            'AttachmentsTableSeeder',
            'CommentsTableSeeder',
            'CommentstatusesTableSeeder',
            'CommitteesTableSeeder',
            'CommitteespecsTableSeeder',
            'CorporationsTableSeeder',
            'CropexpensesTableSeeder',
            'CropsTableSeeder',
            'CrosscollateralsTableSeeder',
            'DefaultcountycropsTableSeeder',
            'DefaultexpensesTableSeeder',
            'DisbursementsTableSeeder',
            'DistributorsTableSeeder',
            'EntitytypesTableSeeder',
            'ExceptionsTableSeeder',
            'FarmersTableSeeder',
            'FarmexpensesTableSeeder',
            'FarmsTableSeeder',
            'FarmunitsTableSeeder',
            'GlobvarsTableSeeder',
            'GuarantorsTableSeeder',
            'InsoptsTableSeeder',
            'InspolsTableSeeder',
            'InstypesTableSeeder',
            'InsunitsTableSeeder',
            'JointventuresTableSeeder',
            'LoanconditionsTableSeeder',
            'LoancropsTableSeeder',
            'LoandistributorsTableSeeder',
            'LoanexceptionsTableSeeder',
            'LoanfinancialsTableSeeder',
            'LoanpracticesTableSeeder',
            'LoanquestionsTableSeeder',
            'LoanstatusTableSeeder',
            'LoansTableSeeder',
            'LoantypesTableSeeder',
            'LocationsTableSeeder',
            'MatrixTableSeeder',
            'MeasuresTableSeeder',
            'NotificationsTableSeeder',
            'OptimizerviewoptionsTableSeeder',
            'OthercollateralsTableSeeder',
            'PartnersTableSeeder',
            'PdfappsTableSeeder',
            'PrerequisitesTableSeeder',
            'PriorliensTableSeeder',
            'QbtransTableSeeder',
            'RatioconstraintsTableSeeder',
            'RecommentsTableSeeder',
            'ReferencesTableSeeder',
            'RegionsTableSeeder',
            'ReportfiltersTableSeeder',
            'ReportoptionsTableSeeder',
            'ReportsTableSeeder',
            'RequireddocumentsTableSeeder',
            'RescatsTableSeeder',
            'ResponsibilitiesTableSeeder',
            'ResponsibilityrolesTableSeeder',
            'RolesTableSeeder',
            'SpendcatsTableSeeder',
            'StatesTableSeeder',
            'StoragecontractsTableSeeder',
            'SystemicsTableSeeder',
            'UnitpracticesTableSeeder',
            'UploadsTableSeeder',
            'ViewfiltersTableSeeder',
            'ViewoptionsTableSeeder'
        ];

        foreach($seeders as $seeder){
            $this->call($seeder);
        }

        Model::reguard();
    }
}
