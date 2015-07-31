<?php namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class CommentUserTransformer extends TransformerAbstract {
    public function transform(CommentUser $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'comment_id' => $item->comment_id,
            'recipient_id' => $item->recipient_id,
            'sender_id' => $item->sender_id
        ];
    }
}