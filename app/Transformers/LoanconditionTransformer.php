<?php namespace App\Transformers;

use App\Loancondition;
use League\Fractal\TransformerAbstract;

class LoanconditionTransformer extends TransformerAbstract {
    public function transform(Loancondition $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'crop_year' => $item->crop_year,
            'loan_id' => $item->loan_id,
            'category' => $item->category,
            'condition' => $item->condition,
            'status' => $item->status,
            'action_date' => $item->action_date
        ];
    }
}