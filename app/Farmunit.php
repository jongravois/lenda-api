<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmunit extends Model
{
    protected $table = 'farmunits';
    protected $fillable = ['unit_type', 'farm_id', 'county_id', 'owner', 'share_rent', 'perm_to_insure', 'IR', 'NI'];
    protected $hidden = ['created_at', 'updated_at'];

    /* CASTING */
    protected $casts = [
        'perm_to_insure' => 'boolean',
        'share_rent' => 'double',
        'IR' => 'double',
        'NI' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function county()
    {
        return $this->belongsTo('App\County', 'county_id');
    }
    public function farms()
    {
        return $this->belongsTo('App\Farm', 'farm_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
