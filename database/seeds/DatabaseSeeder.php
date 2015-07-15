<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $seeders = [
            'AgenciesTableSeeder',
            'AgentsTableSeeder',
            'AttachmentsTableSeeder',
            'CommentsTableSeeder',
            'CommitteesTableSeeder',
            'CommitteespecsTableSeeder',
            'CorporationsTableSeeder',
            'CropsTableSeeder',
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
            'LoanstatusTableSeeder',
            'LoantypesTableSeeder',
            'LocationsTableSeeder',
            'MeasuresTableSeeder',
            'NotificationsTableSeeder',
            'OthercollateralsTableSeeder',
            'PartnersTableSeeder',
            'PdfappsTableSeeder',
            'PrerequisitesTableSeeder',
            'PriorliensTableSeeder',
            'RatioconstraintsTableSeeder',
            'RecommentsTableSeeder',
            'ReferencesTableSeeder',
            'RegionsTableSeeder',
            'ReportsTableSeeder',
            'RequireddocumentsTableSeeder',
            'RolesTableSeeder',
            'SpendcatsTableSeeder',
            'StatesTableSeeder',
            'StoragecontractsTableSeeder',
            'SystemicsTableSeeder',
            'UploadsTableSeeder',
            'UsersTableSeeder',
            'ViewfiltersTableSeeder',
            'ViewoptionsTableSeeder'
        ];

        foreach($seeders as $seeder){
            $this->call($seeder);
        }

        Model::reguard();
    }
}
