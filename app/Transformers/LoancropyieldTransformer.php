<?php namespace App\Transformers;

use App\Loancropyield;
use League\Fractal\TransformerAbstract;

class LoancropyieldTransformer extends TransformerAbstract {
    public function transform(Loancropyield $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'loancrop_id' => $item->loancrop_id,
            'p1' => (double)$item->p1,
            'p2' => (double)$item->p2,
            'p3' => (double)$item->p3,
            'p4' => (double)$item->p4,
            'p5' => (double)$item->p5,
            'p6' => (double)$item->p6
        ];
    }
}