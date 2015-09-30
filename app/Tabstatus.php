<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabstatus extends Model
{
    protected $table = 'tabstatuses';
    protected $fillable = ['loan_id', 'summary', 'underwriting', 'terms', 'committee', 'comments', 'applicant', 'quests', 'references', 'financials', 'crops', 'farms', 'fsa', 'insurance', 'budget', 'collateral', 'prereqs'];

    /* CASTING */
    protected $casts = [
        'summary' => 'boolean',
        'underwriting' => 'boolean',
        'terms' => 'boolean',
        'committee' => 'boolean',
        'comments' => 'boolean',
        'applicant' => 'boolean',
        'quests' => 'boolean',
        'references' => 'boolean',
        'financials' => 'boolean',
        'crops' => 'boolean',
        'farms' => 'boolean',
        'fsa' => 'boolean',
        'insurance' => 'boolean',
        'budget' => 'boolean',
        'collateral' => 'boolean',
        'prereqs' => 'boolean'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
