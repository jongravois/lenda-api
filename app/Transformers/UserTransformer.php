<?php namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract {
    public function transform(User $user)
    {
        //return $user;

        return [
            'id' => $user->id,
            'name' => $user->name,
            'nick' => $user->nick,
            'app' => $user->app,
            'is_active' => (boolean)$user->is_active,
            'is_admin' => (boolean)$user->is_admin,
            'is_manager' => (boolean)$user->is_manager,
            'is_approver' => (boolean)$user->is_approver,
            'loc_id' => (integer) $user->loc_id,
            'loc_abr' => $user->locations->loc_abr,
            'manager_id' => (integer) $user->manager_id,
            'closer_id' => (integer) $user->closer_id,
            'role_id' => (integer) $user->role_id,
            'email' => $user->email,
            'outlook' => $user->outlook,
            'phone' => $user->phone,
            'full_sidebar' => (boolean)$user->full_sidebar,
            'comms_email' => (boolean)$user->comms_email,
            'comms_sms' => (boolean)$user->comms_sms,
            'comms_outlook' => (boolean)$user->comms_outlook,
            'comms_online' => (boolean)$user->comms_online,

        ];
    }
}