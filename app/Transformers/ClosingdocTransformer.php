<?php namespace App\Transformers;

use App\Closingdoc;
use League\Fractal\TransformerAbstract;

class ClosingdocTransformer extends TransformerAbstract {
    public function transform(Closingdoc $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'is_required' => (boolean)$item->is_required,
            'name' => $item->name,
            'path' => $item->path,
            'status' => $item->status
        ];
    }
}