<?php namespace App\Transformers;

use App\Requireddocument;
use League\Fractal\TransformerAbstract;

class RequireddocumentTransformer extends TransformerAbstract {
    public function transform(Requireddocument $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loantype_id' => $item->loantype_id,
            'document' => $item->document
        ];
    }
}