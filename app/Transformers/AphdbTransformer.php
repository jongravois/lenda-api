<?php namespace App\Transformers;

use App\Aphdb;
use League\Fractal\TransformerAbstract;

class AphdbTransformer extends TransformerAbstract {
    public function transform(Aphdb $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'inspol_id' => $item->inspol_id,
            'farm_id' => $item->farm_id,
            'ins_share' => (double)$item->ins_share,
            'aph' => (double)$item->aph
        ];
    }
}