<?php namespace App\Transformers;

use App\Commentstatus;
use League\Fractal\TransformerAbstract;

class CommentstatusTransformer extends TransformerAbstract {
    public function transform(Commentstatus $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'comment_id' => $item->comment_id,
            'recipient_id' => $item->recipient_id,
            'status' => $item->status

        ];
    }
}