<?php namespace App\Transformers;

use App\Condition;
use League\Fractal\TransformerAbstract;

class ConditionTransformer extends TransformerAbstract {
    public function transform(Condition $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'loantype_id' => $item->loantype_id,
            'condition' => $item->condition
        ];
    }
}