<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspol extends Model
{
    use ActivityTrait;

    protected $table = 'inspols';
    protected $fillable = ['loan_id', 'agent_id', 'county_id', 'crop_id', 'practice', 'plc', 'type', 'unit', 'options', 'ins_level', 'planting_days', 'ins_price', 'ins_share', 'premium', 'exp_yield', 'stax_loss_trigger', 'stax_desired_range', 'stax_protection_factor'];

    /* CASTS */
    protected $casts = [
        'plc' => 'boolean',
        'ins_level' => 'double',
        'planting_days' => 'integer',
        'ins_share' => 'double',
        'ins_price' => 'double',
        'premium' => 'double',
        'exp_yield' => 'double',
        'stax_loss_trigger' => 'double',
        'stax_desired_range' => 'double',
        'stax_protection_factor' => 'double'
    ];
    /* CASTS */

    /* RELATIONSHIPS */
    public function agent()
    {
        return $this->belongsTo('App\Agent', 'agent_id');
    }
    public function crop()
    {
        return $this->belongsTo('App\Crop', 'crop_id');
    }
    public function databases()
    {
        return $this->hasMany('App\Aphdb');
    }
    public function county()
    {
        return $this->belongsTo('App\County', 'county_id');
    }
    /* RELATIONSHIPS */
}
