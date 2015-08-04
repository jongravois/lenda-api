<?php namespace App\Transformers;

use App\Role;
use League\Fractal\TransformerAbstract;

class RoleTransformer extends TransformerAbstract {
    public function transform(Role $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'abr' => $item->abr,
            'role' => $item->role,
            'description' => $item->description,
            'matrix' => $item->matrix
        ];
    }
}