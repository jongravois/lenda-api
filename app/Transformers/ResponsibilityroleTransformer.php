<?php namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class ResponsibilityroleTransformer extends TransformerAbstract {
    public function transform(ResponsibilityroleTransformer $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'responsibility_id' => $item->responsibility_id,
            'role_id' => $item->role_id,
            'level' => $item->level

        ];
    }
}