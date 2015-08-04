<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Qbtran extends Model
{
    protected $table = 'qbtrans';
    protected $fillable = ['transaction_id', 'loan_id', 'user_id','qb_date', 'qb_type', 'cat_id', 'qb_description', 'qb_amount', 'qb_cat_balance', 'qb_total_budget', 'qb_total_spent', 'qb_trans_status'];

    /* CASTING */
    protected $casts = [
        'qb_amount' => 'double',
        'qb_cat_balance' => 'double',
        'qb_total_budget' => 'double',
        'qb_total_spent' => 'double'
    ];
    /* CASTING */
    public function setQbdateAttribute($value)
    {
        $this->attributes['qb_date'] = Carbon::createFromFormat('d/m/Y', $value);
    }
    public function getQbDateAttribute($value)
    {
        if (is_null($value))
            return null;
        else
            return Carbon::parse($value)->format('m/d/Y');
    }

    /* RELATIONSHIPS */
    public function loan()
    {
        return $this->belongsTo('App\Loan', 'loan_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
