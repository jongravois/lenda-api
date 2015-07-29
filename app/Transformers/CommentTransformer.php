<?php namespace App\Transformers;

use App\Comment;
use League\Fractal\TransformerAbstract;

class CommentTransformer extends TransformerAbstract {
    public function transform(Comment $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'type' => $item->type,
            'user_id' => $item->user_id,
            'user' => $item->user_id,
            'dtCom' => $item->created_at->format('m/d/Y'),
            'comment' => $item->comment,
            'responses' => $item->responses,
            'status' => $item->status
        ];
    }
}