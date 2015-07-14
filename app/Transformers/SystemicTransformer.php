<?php namespace App\Transformers;

use App\Systemic;
use League\Fractal\TransformerAbstract;

class SystemicTransformer extends TransformerAbstract {
    public function transform(Systemic $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'user' => $item->user,
            'action' => $item->action
        ];
    }
}