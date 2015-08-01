<?php namespace App\Transformers;

use App\Agent;
use League\Fractal\TransformerAbstract;

class AgentTransformer extends TransformerAbstract {
    public function transform(Agent $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'agency_id' => $item->agency_id,
            'agent' => $item->agent,
            'agent_phone' => $item->agent_phone,
            'agent_email' => $item->agent_email,
            'agency' => $item->agency
        ];
    }
}