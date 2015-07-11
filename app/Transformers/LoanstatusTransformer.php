<?php namespace App\Transformers;

use App\Loanstatus;
use League\Fractal\TransformerAbstract;

class LoanstatusTransformer extends TransformerAbstract {
    public function transform(Loanstatus $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'status' => $item->status,
            'iconClass' => $item->iconClass,
            'iconColor' => $item->iconColor
        ];
    }
}