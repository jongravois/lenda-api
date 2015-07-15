<?php namespace App\Transformers;

use App\Exception;
use League\Fractal\TransformerAbstract;

class ExceptionTransformer extends TransformerAbstract {
    public function transform(Exception $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'title' => $item->title,
            'message' => $item->message
        ];
    }
}