<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspol extends Model
{
    protected $table = 'inspols';
    protected $fillable = ['loan_id', 'agent_id', 'county_id', 'crop_id', 'practice', 'plc', 'type', 'unit', 'options', 'ins_level', 'planting_days', 'ins_price', 'premium', 'stax_loss_trigger', 'stax_desired_range', 'stax_protection_factor'];

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
