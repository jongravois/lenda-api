<?php namespace App\Transformers;

use App\Recomment;
use League\Fractal\TransformerAbstract;

class RecommentTransformer extends TransformerAbstract {
    public function transform(Recomment $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'comment_id' => $item->comment_id,
            'user_id' => $item->user_id,
            'body' => $item->body
        ];
    }
}