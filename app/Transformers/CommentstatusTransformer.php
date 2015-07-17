<?php namespace App\Transformers;

use App\Commentstatus;
use League\Fractal\TransformerAbstract;

class CommentstatusTransformer extends TransformerAbstract {
    public function transform(Commentstatus $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'status' => $item->status

        ];
    }
}