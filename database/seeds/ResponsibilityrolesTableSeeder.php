<?php

use App\ResponsibilityRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResponsibilityrolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('responsibility_roles')->delete();

        $collection = [
            [
                'responsibility_id' => '1',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '1',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '1',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '1',
                'role_id' => '11',
                'level' => 'R'
            ],[
                'responsibility_id' => '2',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '2',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '2',
                'role_id' => '11',
                'level' => 'R'
            ],[
                'responsibility_id' => '2',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '3',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '3',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '3',
                'role_id' => '8',
                'level' => 'R'
            ],[
                'responsibility_id' => '4',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '4',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '4',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '4',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '5',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '5',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '5',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '5',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '5',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '6',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '6',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '6',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '6',
                'role_id' => '11',
                'level' => 'R'
            ],[
                'responsibility_id' => '6',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '6',
                'role_id' => '17',
                'level' => 'A'
            ],[
                'responsibility_id' => '7',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '7',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '7',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '7',
                'role_id' => '11',
                'level' => 'R'
            ],[
                'responsibility_id' => '8',
                'role_id' => '2',
                'level' => 'R'
            ],[
                'responsibility_id' => '8',
                'role_id' => '1',
                'level' => 'R'
            ],[
                'responsibility_id' => '8',
                'role_id' => '22',
                'level' => 'R'
            ],[
                'responsibility_id' => '8',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '8',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '9',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '9',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '9',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '10',
                'role_id' => '22',
                'level' => 'A'
            ],[
                'responsibility_id' => '10',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '10',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '10',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '10',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '11',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '11',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '11',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '11',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '12',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '12',
                'role_id' => '8',
                'level' => 'R'
            ],[
                'responsibility_id' => '13',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '13',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '13',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '13',
                'role_id' => '8',
                'level' => 'R'
            ],[
                'responsibility_id' => '14',
                'role_id' => '22',
                'level' => 'A'
            ],[
                'responsibility_id' => '14',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '14',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '14',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '14',
                'role_id' => '11',
                'level' => 'R'
            ],[
                'responsibility_id' => '15',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '15',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '15',
                'role_id' => '11',
                'level' => 'R'
            ],[
                'responsibility_id' => '15',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '16',
                'role_id' => '22',
                'level' => 'A'
            ],[
                'responsibility_id' => '16',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '16',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '16',
                'role_id' => '11',
                'level' => 'R'
            ],[
                'responsibility_id' => '16',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '17',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '17',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '17',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '18',
                'role_id' => '22',
                'level' => 'A'
            ],[
                'responsibility_id' => '18',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '18',
                'role_id' => '12',
                'level' => 'R'
            ],[
                'responsibility_id' => '18',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '18',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '18',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '19',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '19',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '19',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '19',
                'role_id' => '8',
                'level' => 'R'
            ],[
                'responsibility_id' => '20',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '20',
                'role_id' => '22',
                'level' => 'A'
            ],[
                'responsibility_id' => '20',
                'role_id' => '9',
                'level' => 'R'
            ],[
                'responsibility_id' => '20',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '21',
                'role_id' => '22',
                'level' => 'A'
            ],[
                'responsibility_id' => '21',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '21',
                'role_id' => '12',
                'level' => 'R'
            ],[
                'responsibility_id' => '21',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '21',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '21',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '22',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '22',
                'role_id' => '9',
                'level' => 'R'
            ],[
                'responsibility_id' => '22',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '22',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '23',
                'role_id' => '1',
                'level' => 'R'
            ],[
                'responsibility_id' => '23',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '23',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '23',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '24',
                'role_id' => '22',
                'level' => 'R'
            ],[
                'responsibility_id' => '24',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '24',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '24',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '24',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '25',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '25',
                'role_id' => '7',
                'level' => 'R'
            ],[
                'responsibility_id' => '25',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '26',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '26',
                'role_id' => '7',
                'level' => 'R'
            ],[
                'responsibility_id' => '26',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '27',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '27',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '27',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '27',
                'role_id' => '8',
                'level' => 'R'
            ],[
                'responsibility_id' => '28',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '28',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '28',
                'role_id' => '7',
                'level' => 'R'
            ],[
                'responsibility_id' => '28',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '29',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '29',
                'role_id' => '7',
                'level' => 'R'
            ],[
                'responsibility_id' => '29',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '30',
                'role_id' => '2',
                'level' => 'R'
            ],[
                'responsibility_id' => '30',
                'role_id' => '22',
                'level' => 'A'
            ],[
                'responsibility_id' => '30',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '30',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '30',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '31',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '31',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '31',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '31',
                'role_id' => '8',
                'level' => 'R'
            ],[
                'responsibility_id' => '32',
                'role_id' => '7',
                'level' => 'R'
            ],[
                'responsibility_id' => '32',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '33',
                'role_id' => '21',
                'level' => 'R'
            ],[
                'responsibility_id' => '33',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '33',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '33',
                'role_id' => '17',
                'level' => 'R'
            ],[
                'responsibility_id' => '34',
                'role_id' => '24',
                'level' => 'R'
            ],[
                'responsibility_id' => '34',
                'role_id' => '17',
                'level' => 'R'
            ],[
                'responsibility_id' => '35',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '35',
                'role_id' => '24',
                'level' => 'R'
            ],[
                'responsibility_id' => '35',
                'role_id' => '25',
                'level' => 'A'
            ],[
                'responsibility_id' => '36',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '36',
                'role_id' => '25',
                'level' => 'A'
            ],[
                'responsibility_id' => '36',
                'role_id' => '17',
                'level' => 'R'
            ],[
                'responsibility_id' => '37',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '37',
                'role_id' => '25',
                'level' => 'A'
            ],[
                'responsibility_id' => '37',
                'role_id' => '17',
                'level' => 'R'
            ],[
                'responsibility_id' => '38',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '38',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '38',
                'role_id' => '25',
                'level' => 'A'
            ],[
                'responsibility_id' => '38',
                'role_id' => '17',
                'level' => 'R'
            ],[
                'responsibility_id' => '39',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '39',
                'role_id' => '25',
                'level' => 'R'
            ],[
                'responsibility_id' => '39',
                'role_id' => '17',
                'level' => 'A'
            ],[
                'responsibility_id' => '40',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '40',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '40',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '40',
                'role_id' => '25',
                'level' => 'A'
            ],[
                'responsibility_id' => '40',
                'role_id' => '17',
                'level' => 'R'
            ],[
                'responsibility_id' => '41',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '41',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '41',
                'role_id' => '25',
                'level' => 'R'
            ],[
                'responsibility_id' => '41',
                'role_id' => '17',
                'level' => 'A'
            ],[
                'responsibility_id' => '42',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '42',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '42',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '42',
                'role_id' => '25',
                'level' => 'R'
            ],[
                'responsibility_id' => '42',
                'role_id' => '17',
                'level' => 'R'
            ],[
                'responsibility_id' => '43',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '43',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '43',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '43',
                'role_id' => '25',
                'level' => 'A'
            ],[
                'responsibility_id' => '43',
                'role_id' => '17',
                'level' => 'R'
            ],[
                'responsibility_id' => '44',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '44',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '44',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '44',
                'role_id' => '25',
                'level' => 'R'
            ],[
                'responsibility_id' => '44',
                'role_id' => '17',
                'level' => 'A'
            ],[
                'responsibility_id' => '45',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '45',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '45',
                'role_id' => '25',
                'level' => 'A'
            ],[
                'responsibility_id' => '45',
                'role_id' => '17',
                'level' => 'R'
            ],[
                'responsibility_id' => '46',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '46',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '46',
                'role_id' => '21',
                'level' => 'R'
            ],[
                'responsibility_id' => '46',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '46',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '47',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '47',
                'role_id' => '21',
                'level' => 'R'
            ],[
                'responsibility_id' => '47',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '48',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '48',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '48',
                'role_id' => '21',
                'level' => 'R'
            ],[
                'responsibility_id' => '48',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '48',
                'role_id' => '17',
                'level' => 'A'
            ],[
                'responsibility_id' => '49',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '49',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '49',
                'role_id' => '24',
                'level' => 'R'
            ],[
                'responsibility_id' => '49',
                'role_id' => '25',
                'level' => 'A'
            ],[
                'responsibility_id' => '50',
                'role_id' => '24',
                'level' => 'R'
            ],[
                'responsibility_id' => '50',
                'role_id' => '25',
                'level' => 'A'
            ],[
                'responsibility_id' => '51',
                'role_id' => '3',
                'level' => 'R'
            ],[
                'responsibility_id' => '51',
                'role_id' => '21',
                'level' => 'A'
            ],[
                'responsibility_id' => '51',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '52',
                'role_id' => '23',
                'level' => 'A'
            ],[
                'responsibility_id' => '52',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '52',
                'role_id' => '24',
                'level' => 'R'
            ],[
                'responsibility_id' => '53',
                'role_id' => '24',
                'level' => 'R'
            ],[
                'responsibility_id' => '53',
                'role_id' => '25',
                'level' => 'A'
            ],[
                'responsibility_id' => '54',
                'role_id' => '24',
                'level' => 'R'
            ],[
                'responsibility_id' => '54',
                'role_id' => '25',
                'level' => 'R'
            ],[
                'responsibility_id' => '54',
                'role_id' => '17',
                'level' => 'R'
            ],[
                'responsibility_id' => '55',
                'role_id' => '22',
                'level' => 'R'
            ],[
                'responsibility_id' => '55',
                'role_id' => '23',
                'level' => 'A'
            ],[
                'responsibility_id' => '55',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '55',
                'role_id' => '25',
                'level' => 'A'
            ],[
                'responsibility_id' => '56',
                'role_id' => '22',
                'level' => 'A'
            ],[
                'responsibility_id' => '56',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '56',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '56',
                'role_id' => '25',
                'level' => 'A'
            ],[
                'responsibility_id' => '56',
                'role_id' => '17',
                'level' => 'R'
            ],[
                'responsibility_id' => '57',
                'role_id' => '22',
                'level' => 'R'
            ],[
                'responsibility_id' => '57',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '57',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '57',
                'role_id' => '25',
                'level' => 'R'
            ],[
                'responsibility_id' => '58',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '58',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '58',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '58',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '59',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '59',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '59',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '59',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '60',
                'role_id' => '23',
                'level' => 'A'
            ],[
                'responsibility_id' => '60',
                'role_id' => '7',
                'level' => 'R'
            ],[
                'responsibility_id' => '60',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '61',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '61',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '61',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '62',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '62',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '62',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '63',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '63',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '63',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '64',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '64',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '64',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '64',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '64',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '64',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '65',
                'role_id' => '23',
                'level' => 'A'
            ],[
                'responsibility_id' => '65',
                'role_id' => '12',
                'level' => 'R'
            ],[
                'responsibility_id' => '65',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '65',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '66',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '66',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '66',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '67',
                'role_id' => '3',
                'level' => 'R'
            ],[
                'responsibility_id' => '67',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '67',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '67',
                'role_id' => '23',
                'level' => 'A'
            ],[
                'responsibility_id' => '67',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '68',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '68',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '68',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '68',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '68',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '68',
                'role_id' => '22',
                'level' => 'R'
            ],[
                'responsibility_id' => '68',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '68',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '68',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '68',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '68',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '68',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '69',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '69',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '69',
                'role_id' => '21',
                'level' => 'A'
            ],[
                'responsibility_id' => '69',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '69',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '70',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '70',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '70',
                'role_id' => '21',
                'level' => 'A'
            ],[
                'responsibility_id' => '70',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '70',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '71',
                'role_id' => '3',
                'level' => 'R'
            ],[
                'responsibility_id' => '71',
                'role_id' => '2',
                'level' => 'R'
            ],[
                'responsibility_id' => '71',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '71',
                'role_id' => '23',
                'level' => 'A'
            ],[
                'responsibility_id' => '71',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '71',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '72',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '72',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '72',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '73',
                'role_id' => '3',
                'level' => 'R'
            ],[
                'responsibility_id' => '73',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '73',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '73',
                'role_id' => '21',
                'level' => 'A'
            ],[
                'responsibility_id' => '73',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '74',
                'role_id' => '22',
                'level' => 'R'
            ],[
                'responsibility_id' => '74',
                'role_id' => '23',
                'level' => 'A'
            ],[
                'responsibility_id' => '75',
                'role_id' => '3',
                'level' => 'R'
            ],[
                'responsibility_id' => '75',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '75',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '75',
                'role_id' => '21',
                'level' => 'A'
            ],[
                'responsibility_id' => '75',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '75',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '76',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '76',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '76',
                'role_id' => '22',
                'level' => 'R'
            ],[
                'responsibility_id' => '75',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '76',
                'role_id' => '3',
                'level' => 'R'
            ],[
                'responsibility_id' => '76',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '76',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '76',
                'role_id' => '21',
                'level' => 'A'
            ],[
                'responsibility_id' => '76',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '77',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '77',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '77',
                'role_id' => '1',
                'level' => 'R'
            ],[
                'responsibility_id' => '77',
                'role_id' => '21',
                'level' => 'R'
            ],[
                'responsibility_id' => '77',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '78',
                'role_id' => '1',
                'level' => 'R'
            ],[
                'responsibility_id' => '78',
                'role_id' => '21',
                'level' => 'R'
            ],[
                'responsibility_id' => '78',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '78',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '79',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '79',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '79',
                'role_id' => '24',
                'level' => 'R'
            ],[
                'responsibility_id' => '80',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '80',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '80',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '80',
                'role_id' => '21',
                'level' => 'A'
            ],[
                'responsibility_id' => '80',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '80',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '80',
                'role_id' => '24',
                'level' => 'R'
            ],[
                'responsibility_id' => '80',
                'role_id' => '17',
                'level' => 'A'
            ],[
                'responsibility_id' => '81',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '81',
                'role_id' => '1',
                'level' => 'R'
            ],[
                'responsibility_id' => '81',
                'role_id' => '22',
                'level' => 'A'
            ],[
                'responsibility_id' => '81',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '82',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '82',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '82',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '82',
                'role_id' => '22',
                'level' => 'R'
            ],[
                'responsibility_id' => '82',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '82',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '82',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '83',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '83',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '83',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '83',
                'role_id' => '22',
                'level' => 'A'
            ],[
                'responsibility_id' => '83',
                'role_id' => '21',
                'level' => 'R'
            ],[
                'responsibility_id' => '83',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '83',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '83',
                'role_id' => '24',
                'level' => 'A'
            ],[
                'responsibility_id' => '84',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '84',
                'role_id' => '1',
                'level' => 'R'
            ],[
                'responsibility_id' => '84',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '84',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '84',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '84',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '84',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '84',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '84',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '84',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '85',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '85',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '85',
                'role_id' => '9',
                'level' => 'R'
            ],[
                'responsibility_id' => '86',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '86',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '86',
                'role_id' => '9',
                'level' => 'R'
            ],[
                'responsibility_id' => '86',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '86',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '86',
                'role_id' => '10',
                'level' => 'R'
            ],[
                'responsibility_id' => '86',
                'role_id' => '11',
                'level' => 'R'
            ],[
                'responsibility_id' => '86',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '86',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '87',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '87',
                'role_id' => '1',
                'level' => 'A'
            ],[
                'responsibility_id' => '87',
                'role_id' => '23',
                'level' => 'A'
            ],[
                'responsibility_id' => '87',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '88',
                'role_id' => '3',
                'level' => 'R'
            ],[
                'responsibility_id' => '88',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '88',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '88',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '89',
                'role_id' => '22',
                'level' => 'R'
            ],[
                'responsibility_id' => '89',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '89',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '89',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '89',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '89',
                'role_id' => '11',
                'level' => 'A'
            ],[
                'responsibility_id' => '89',
                'role_id' => '8',
                'level' => 'A'
            ],[
                'responsibility_id' => '90',
                'role_id' => '22',
                'level' => 'R'
            ],[
                'responsibility_id' => '90',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '90',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '91',
                'role_id' => '22',
                'level' => 'R'
            ],[
                'responsibility_id' => '91',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '92',
                'role_id' => '22',
                'level' => 'A'
            ],[
                'responsibility_id' => '92',
                'role_id' => '12',
                'level' => 'R'
            ],[
                'responsibility_id' => '92',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '92',
                'role_id' => '10',
                'level' => 'A'
            ],[
                'responsibility_id' => '93',
                'role_id' => '22',
                'level' => 'R'
            ],[
                'responsibility_id' => '93',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '94',
                'role_id' => '22',
                'level' => 'R'
            ],[
                'responsibility_id' => '94',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '95',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '96',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '96',
                'role_id' => '12',
                'level' => 'A'
            ],[
                'responsibility_id' => '96',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '97',
                'role_id' => '2',
                'level' => 'R'
            ],[
                'responsibility_id' => '97',
                'role_id' => '22',
                'level' => 'A'
            ],[
                'responsibility_id' => '97',
                'role_id' => '9',
                'level' => 'A'
            ],[
                'responsibility_id' => '98',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '98',
                'role_id' => '21',
                'level' => 'R'
            ],[
                'responsibility_id' => '98',
                'role_id' => '24',
                'level' => 'R'
            ],[
                'responsibility_id' => '98',
                'role_id' => '25',
                'level' => 'A'
            ],[
                'responsibility_id' => '99',
                'role_id' => '24',
                'level' => 'R'
            ],[
                'responsibility_id' => '99',
                'role_id' => '25',
                'level' => 'A'
            ],[
                'responsibility_id' => '100',
                'role_id' => '24',
                'level' => 'R'
            ],[
                'responsibility_id' => '100',
                'role_id' => '25',
                'level' => 'A'
            ],[
                'responsibility_id' => '101',
                'role_id' => '22',
                'level' => 'A'
            ],[
                'responsibility_id' => '101',
                'role_id' => '9',
                'level' => 'R'
            ],[
                'responsibility_id' => '101',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '102',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '102',
                'role_id' => '7',
                'level' => 'R'
            ],[
                'responsibility_id' => '103',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '103',
                'role_id' => '13',
                'level' => 'A'
            ],[
                'responsibility_id' => '103',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '104',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '104',
                'role_id' => '13',
                'level' => 'A'
            ],[
                'responsibility_id' => '105',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '105',
                'role_id' => '13',
                'level' => 'A'
            ],[
                'responsibility_id' => '105',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '106',
                'role_id' => '13',
                'level' => 'R'
            ],[
                'responsibility_id' => '106',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '107',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '107',
                'role_id' => '13',
                'level' => 'R'
            ],[
                'responsibility_id' => '108',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '108',
                'role_id' => '13',
                'level' => 'A'
            ],[
                'responsibility_id' => '108',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '109',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '109',
                'role_id' => '13',
                'level' => 'A'
            ],[
                'responsibility_id' => '109',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '110',
                'role_id' => '23',
                'level' => 'R'
            ],[
                'responsibility_id' => '110',
                'role_id' => '13',
                'level' => 'A'
            ],[
                'responsibility_id' => '111',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '111',
                'role_id' => '13',
                'level' => 'R'
            ],[
                'responsibility_id' => '111',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '112',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '112',
                'role_id' => '13',
                'level' => 'R'
            ],[
                'responsibility_id' => '112',
                'role_id' => '5',
                'level' => 'R'
            ],[
                'responsibility_id' => '113',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '113',
                'role_id' => '1',
                'level' => 'R'
            ],[
                'responsibility_id' => '113',
                'role_id' => '13',
                'level' => 'A'
            ],[
                'responsibility_id' => '114',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '114',
                'role_id' => '13',
                'level' => 'R'
            ],[
                'responsibility_id' => '115',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '115',
                'role_id' => '13',
                'level' => 'R'
            ],[
                'responsibility_id' => '115',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '116',
                'role_id' => '3',
                'level' => 'A'
            ],[
                'responsibility_id' => '116',
                'role_id' => '2',
                'level' => 'A'
            ],[
                'responsibility_id' => '116',
                'role_id' => '1',
                'level' => 'R'
            ],[
                'responsibility_id' => '116',
                'role_id' => '13',
                'level' => 'A'
            ],[
                'responsibility_id' => '116',
                'role_id' => '5',
                'level' => 'A'
            ],[
                'responsibility_id' => '117',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '117',
                'role_id' => '8',
                'level' => 'R'
            ],[
                'responsibility_id' => '118',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '118',
                'role_id' => '8',
                'level' => 'R'
            ],[
                'responsibility_id' => '119',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '119',
                'role_id' => '8',
                'level' => 'R'
            ],[
                'responsibility_id' => '120',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '120',
                'role_id' => '8',
                'level' => 'R'
            ],[
                'responsibility_id' => '121',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '121',
                'role_id' => '8',
                'level' => 'R'
            ],[
                'responsibility_id' => '122',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '122',
                'role_id' => '8',
                'level' => 'R'
            ],[
                'responsibility_id' => '123',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '123',
                'role_id' => '8',
                'level' => 'R'
            ],[
                'responsibility_id' => '124',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '124',
                'role_id' => '8',
                'level' => 'R'
            ],[
                'responsibility_id' => '125',
                'role_id' => '7',
                'level' => 'A'
            ],[
                'responsibility_id' => '125',
                'role_id' => '8',
                'level' => 'R'
            ]
        ];

        foreach ($collection as $record) {
            Responsibilityrole::create($record);
        }
    }
}
