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
            'FarmpracticesTableSeeder',
            'GlobvarsTableSeeder',
            'GuarantorsTableSeeder',
            'InsoptsTableSeeder',
            'InspolsTableSeeder',
            'InstypesTableSeeder',
            'InsunitsTableSeeder',
            'JointventuresTableSeeder',
            'LoanconditionsTableSeeder',
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
            'RatioconstraintsTableSeeder',
            'RecommentsTableSeeder',
            'ReferencesTableSeeder',
            'RegionsTableSeeder',
            'ReportfiltersTableSeeder',
            'ReportoptionsTableSeeder',
            'ReportsTableSeeder',
            'RequireddocumentsTableSeeder',
            'RolesTableSeeder',
            'SpendcatsTableSeeder',
            'StatesTableSeeder',
            'StoragecontractsTableSeeder',
            'SystemicsTableSeeder',
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
