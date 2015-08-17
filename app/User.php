<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $table = 'users';

    protected $fillable = ['name', 'email', 'outlook', 'password', 'app', 'nick', 'phone', 'loc_id', 'manager_id', 'closer_id', 'role_id', 'is_active', 'is_admin', 'is_manager', 'is_approver', 'full_sidebar', 'comms_email', 'comms_sms', 'comms_outlook', 'comms_online'];

    protected $hidden = ['password', 'remember_token'];

    public function locations()
    {
        return $this->hasOne('App\Location', 'id', 'loc_id');
    }

    public function notifications()
    {
        return $this->hasMany('App\Notification');
    }

    public function optimizerviewoptions()
    {
        return $this->hasOne('App\Optimizerviewoption');
    }

    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function viewfilters()
    {
        return $this->hasOne('App\Viewfilter');
    }

    public function viewoptions()
    {
        return $this->hasOne('App\Viewoption');
    }
}
