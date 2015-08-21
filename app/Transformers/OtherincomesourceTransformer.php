<?php namespace App\Transformers;

use App\Otherincomesource;
use League\Fractal\TransformerAbstract;

class OtherincomesourceTransformer extends TransformerAbstract {
    public function transform(Otherincomesource $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'source' => $item->source,
            'description' => $item->description
        ];
    }
}