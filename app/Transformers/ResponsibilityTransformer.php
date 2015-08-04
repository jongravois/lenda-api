<?php namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class ResponsibilityTransformer extends TransformerAbstract {
    public function transform(Responsibility $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'cat_id' => $item->cat_id,
            'task' => $item->task
        ];
    }
}