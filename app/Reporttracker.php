<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporttracker extends Model
{
    protected $table = 'reporttrackers';
    protected $fillable = ['report_id','user_id', 'cnt_warned', 'cnt_alerted', 'made_required', 'last_acknowledged'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    public function report()
    {
        return $this->belongsTo('App\Report', 'report_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
