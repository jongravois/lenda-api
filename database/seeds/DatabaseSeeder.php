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
            'LoansTableSeeder',
            'AddendumfinancialsTableSeeder',
            'AddendumloansTableSeeder',
            'AdmingradersTableSeeder',
            'AgenciesTableSeeder',
            'AphdbsTableSeeder',
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
            'InscrophailsTableSeeder',
            'InsoptsTableSeeder',
            'IndirectcropincomesTableSeeder',
            'InspolsTableSeeder',
            'InstypesTableSeeder',
            'InsunitsTableSeeder',
            'JointventuresTableSeeder',
            'LoanconditionsTableSeeder',
            'LoancropsTableSeeder',
            'LoandiscsTableSeeder',
            'LoandistributorsTableSeeder',
            'LoanexceptionsTableSeeder',
            'LoanfinancialsTableSeeder',
            'LoanpracticesTableSeeder',
            'LoanquestionsTableSeeder',
            'LoanstatusTableSeeder',
            'LoantypesTableSeeder',
            'LocationsTableSeeder',
            'MatrixTableSeeder',
            'MeasuresTableSeeder',
            'NotificationsTableSeeder',
            'OptimizerviewoptionsTableSeeder',
            'OthercollateralsTableSeeder',
            'PartnersTableSeeder',
            'OtherincomesourcesTableSeeder',
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
            'ReporttrackersTableSeeder',
            'RequireddocumentsTableSeeder',
            'RescatsTableSeeder',
            'ResponsibilitiesTableSeeder',
            'ResponsibilityrolesTableSeeder',
            'RolesTableSeeder',
            'SpendcatsTableSeeder',
            'StatesTableSeeder',
            'StoragecontractsTableSeeder',
            'SystemicsTableSeeder',
//            'UnitpracticesTableSeeder',
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
