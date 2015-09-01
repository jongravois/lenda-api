<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Optimizerviewoption extends Model
{
    protected $table = 'optimizerviewoptions';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = ['user_id', 'rent_per_acre_ARM', 'rent_per_acre_dist', 'rent_per_acre_other', 'fsa_per_acre', 'ins_share', 'ins_price', 'ins_level', 'ins_guarantee', 'ins_premium', 'ins_value', 'ins_type', 'sco_max', 'prod_yield', 'prod_share', 'prod_price', 'var_harvest', 'rebate', 'prod_rev', 'prod_rev_adj', 'budget_ARM', 'budget_dist', 'budget_other', 'fee_ARM', 'commit_ARM', 'commit_dist', 'interest_ARM', 'interest_dist', 'interest_other', 'percent_disc_crop', 'percent_disc_fsa', 'percent_disc_cropins', 'percent_disc_nonrp', 'percent_disc_sco', 'disc_crop', 'disc_fsa', 'disc_insovercrop', 'disc_ins', 'disc_sco', 'disc_collateral'];

    /* CASTING */
    protected $casts = [
        'rent_per_acre_ARM' => 'boolean',
        'rent_per_acre_dist' => 'boolean',
        'rent_per_acre_other' => 'boolean',
        'fsa_per_acre' => 'boolean',
        'ins_share' => 'boolean',
        'ins_price' => 'boolean',
        'ins_level' => 'boolean',
        'ins_guarantee' => 'boolean',
        'ins_premium' => 'boolean',
        'ins_value' => 'boolean',
        'ins_type' => 'boolean',
        'sco_max' => 'boolean',
        'prod_yield' => 'boolean',
        'prod_share' => 'boolean',
        'prod_price' => 'boolean',
        'var_harvest' => 'boolean',
        'rebate' => 'boolean',
        'prod_rev' => 'boolean',
        'prod_rev_adj' => 'boolean',
        'budget_ARM' => 'boolean',
        'budget_dist' => 'boolean',
        'budget_other' => 'boolean',
        'fee_ARM' => 'boolean',
        'commit_ARM' => 'boolean',
        'commit_dist' => 'boolean',
        'interest_ARM' => 'boolean',
        'interest_dist' => 'boolean',
        'interest_other' => 'boolean',
        'percent_disc_crop' => 'boolean',
        'percent_disc_fsa' => 'boolean',
        'percent_disc_cropins' => 'boolean',
        'percent_disc_nonrp' => 'boolean',
        'percent_disc_sco' => 'boolean',
        'disc_crop' => 'boolean',
        'disc_fsa' => 'boolean',
        'disc_insovercrop' => 'boolean',
        'disc_ins' => 'boolean',
        'disc_sco' => 'boolean',
        'disc_collateral' => 'boolean'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
