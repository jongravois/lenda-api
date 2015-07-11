<?php namespace App\Transformers;

use App\Measure;
use League\Fractal\TransformerAbstract;

class MeasureTransformer extends TransformerAbstract {
    public function transform(Measure $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'unit' => $item->unit,
            'abr' => $item->abr,
            'toPounds' => $item->toPounds,
            'fromPounds' => $item->fromPounds
        ];
    }
}