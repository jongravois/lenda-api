<?php namespace App\Transformers;

use App\Loantype;
use League\Fractal\TransformerAbstract;

class LoantypeTransformer extends TransformerAbstract {
    public function transform(Loantype $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loantype' => $item->loantype,
            'abr' => $item->abr,
            'sort_order' => (integer)$item->sort_order,
            'default_due_date' => $item->default_due_date
        ];
    }
}