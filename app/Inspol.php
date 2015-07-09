<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspol extends Model
{
    protected $table = 'inspols';
    protected $fillable = ['loan_id', 'agent_id', 'county_id', 'crop_id', 'practice', 'plc', 'type', 'unit', 'options', 'ins_level', 'planting_days', 'ins_price', 'premium', 'stax_loss_trigger', 'stax_desired_range', 'stax_protection_factor'];
}
