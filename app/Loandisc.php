<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loandisc extends Model
{
    use ActivityTrait;

    protected $table = 'loandiscs';
    protected $fillable = ['loan_id', 'disc_percent_crop', 'disc_percent_fsa', 'disc_percent_ins', 'disc_percent_insoyield', 'disc_percent_nonrp', 'disc_percent_rphpe', 'disc_percent_suppins', 'disc_percent_prod', 'disc_percent_equipment', 'disc_percent_realestate', 'disc_percent_other'];

    /* CASTING */
    protected $casts = [
        'loan_id' => 'integer',
        'disc_percent_crop' => 'double',
        'disc_percent_fsa' => 'double',
        'disc_percent_ins' => 'double',
        'disc_percent_insoyield' => 'double',
        'disc_percent_nonrp' => 'double',
        'disc_percent_rphpe' => 'double',
        'disc_percent_suppins' => 'double',
        'disc_percent_prod' => 'double',
        'disc_percent_equipment' => 'double',
        'disc_percent_realestate' => 'double',
        'disc_percent_other' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
