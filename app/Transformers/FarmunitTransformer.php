<?php namespace App\Transformers;

use App\Farmunit;
use League\Fractal\TransformerAbstract;

class FarmunitTransformer extends TransformerAbstract {
    public function transform(Farmunit $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'unit_type' => $item->unit_type,
            'loan_id' => $item->loan_id,
            'farm_id' => $item->farm_id,
            'practice' => $item->practice,
            'acres' => (double)$item->acres,
            'farm' => $item->farm,
            'database' => $item->database,
            'practices' => $item->practices
        ];
    }
}