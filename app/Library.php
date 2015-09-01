<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    public $timestamps = false;
    protected $table = 'libraries';
    protected $fillable = ['fileclass_id', 'title', 'filename', 'version', 'description', 'state_id', 'path', 'doctype_id', 'filetype_id', 'distributor_id', 'is_visible'];

    /* CASTING */
    protected $casts = [
        'is_visible' => 'boolean'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function distributors()
    {
        return $this->belongsTo('App\Distributor', 'distributor_id');
    }
    public function doctypes()
    {
        return $this->belongsTo('App\Librarydoctype', 'doctype_id');
    }
    public function fileclasses()
    {
        return $this->belongsTo('App\Libraryfileclass', 'fileclass_id');
    }
    public function filetypes()
    {
        return $this->belongsTo('App\Libraryfiletype', 'filetype_id');
    }
    public function states()
    {
        return $this->belongsTo('App\State', 'state_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
