<?php namespace App\Transformers;

use App\Committee;
use League\Fractal\TransformerAbstract;

class CommitteeTransformer extends TransformerAbstract {
    public function transform(Committee $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => (integer) $item->loan_id,
            'user_id' => (integer) $item->user_id,
            'username' => $item->user_id,
            'role_id' => (integer) $item->role_id,
            'role' => $item->role_id,
            'vote_status' => $item->vote_status,
            'vote_id' => (integer) $item->vote_id,
            'vote' => $item->vote,
            'vote_request_date' => $item->vote_request_date,
            'vote_received_date' => $item->vote_received_date
        ];
    }
}