<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priorlien extends Model
{
    use ActivityTrait;

    protected $table = 'priorliens';
    protected $fillable = ['loan_id', 'type', 'lien_holder', 'city_state', 'contact', 'phone', 'email', 'description', 'lien_amount'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
