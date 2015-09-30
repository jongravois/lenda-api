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
            'AphdbsTableSeeder',
            'AgentsTableSeeder',
            'ApplicantfinancialsTableSeeder',
            'ApplicantsTableSeeder',
            'AttachmentsTableSeeder',
            'BuyersTableSeeder',
            'CommentsTableSeeder',
            'CommentstatusesTableSeeder',
            'CommitteesTableSeeder',
            'CommitteespecsTableSeeder',
            'ConditionsTableSeeder',
            'CorporationsTableSeeder',
            'CropexpensesTableSeeder',
            'CropsTableSeeder',
            'CrosscollateralsTableSeeder',
            'DefaultcommitteesTableSeeder',
            'DefaultcountycropsTableSeeder',
            'DefaultexpensesTableSeeder',
            'DisbursementsTableSeeder',
            'DistributorsTableSeeder',
            'EntitytypesTableSeeder',
            'ExceptionsTableSeeder',
            'FarmersTableSeeder',
            'FarmexpensesTableSeeder',
            'FarmunitsTableSeeder',
            'FarmsTableSeeder',
            'FsapaymentsTableSeeder',
            'GlobvarsTableSeeder',
            'GuarantorsTableSeeder',
            'InscrophailsTableSeeder',
            'InsoptsTableSeeder',
            'IndirectcropincomesTableSeeder',
            'InspolsTableSeeder',
            'InstypesTableSeeder',
            'InsunitsTableSeeder',
            'JointventuresTableSeeder',
            'LibrarydoctypesTableSeeder',
            'LibraryfileclassesTableSeeder',
            'LibraryfiletypesTableSeeder',
            'LibrariesTableSeeder',
            'LoanconditionsTableSeeder',
            'LoancropsTableSeeder',
            'LoancropyieldsTableSeeder',
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
            'OtherincomesourcesTableSeeder',
            'PartnersTableSeeder',
            'PdfappsTableSeeder',
            'PlannedcropsTableSeeder',
            'PrerequisitesTableSeeder',
            'PriorliensTableSeeder',
            'QbtransTableSeeder',
            'RatioconstraintsTableSeeder',
            'RebatorsTableSeeder',
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
            'TabstatusesTableSeeder',
            'TermsmodificationsTableSeeder',
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
