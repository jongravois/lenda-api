<?php namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract {
    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'app_id' => (integer) $user->app_id,
            'name' => $user->name,
            'email' => $user->email
         ];
    }
}