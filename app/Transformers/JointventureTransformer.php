<?php namespace App\Transformers;

use App\Jointventure;
use League\Fractal\TransformerAbstract;

class JointventureTransformer extends TransformerAbstract {
    public function transform(Jointventure $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'partner' => $item->partner,
            'title' => $item->title,
            'location' => $item->location,
            'email' => $item->email,
            'phone' => $item->phone
        ];
    }
}