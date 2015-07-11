<?php namespace App\Transformers;

use App\Entitytype;
use League\Fractal\TransformerAbstract;

class EntitytypeTransformer extends TransformerAbstract {
    public function transform(Entitytype $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'type' => $item->entitytype
        ];
    }
}