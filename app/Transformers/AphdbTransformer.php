<?php namespace App\Transformers;

use App\Aphdb;
use League\Fractal\TransformerAbstract;

class AphdbTransformer extends TransformerAbstract {
    public function transform(Aphdb $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'loan' => $item->loan,
            'inspol_id' => $item->inspol_id,
            'inspols' => $item->inspols,
            'farm_id' => $item->farm_id,
            'farms' => $item->farms,
            'ins_share' => (double)$item->ins_share,
            'aph' => (double)$item->aph
        ];
    }
}