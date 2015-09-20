<?php namespace App\Transformers;

use App\Agent;
use League\Fractal\TransformerAbstract;

class AgentTransformer extends TransformerAbstract {
    public function transform(Agent $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'agency' => $item->agency,
            'agent' => $item->agent,
            'city_state' => $item->city_state,
            'phone' => $item->phone,
            'email' => $item->email
        ];
    }
}