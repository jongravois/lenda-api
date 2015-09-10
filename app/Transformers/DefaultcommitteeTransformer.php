<?php namespace App\Transformers;

use App\Defaultcommittee;
use League\Fractal\TransformerAbstract;

class DefaultcommitteeTransformer extends TransformerAbstract {
    public function transform(Defaultcommittee $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'loantype_id' => $item->loantype_id,
            'committeerole' => $item->committeerole
        ];
    }
}