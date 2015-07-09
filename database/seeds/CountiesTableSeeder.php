<?php

use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class CountiesTableSeeder extends CsvSeeder {

    public function __construct()
    {
        $this->table = 'counties';
        $this->filename = base_path().'/database/seeds/csvs/counties.csv';
    }

    public function run()
    {
        DB::disableQueryLog();
        DB::table($this->table)->truncate();
        parent::run();
    }
}