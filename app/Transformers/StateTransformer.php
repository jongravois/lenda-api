<?php namespace App\Transformers;

use App\State;
use League\Fractal\TransformerAbstract;

class StateTransformer extends TransformerAbstract {
    public function transform(State $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'abr' => $item->abr,
            'state' => $item->state,
        ];
    }
}