<?php namespace App\Transformers;

use App\Librarydoctype;
use League\Fractal\TransformerAbstract;

class LibrarydoctypeTransformer extends TransformerAbstract {
    public function transform(Librarydoctype $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'doctype' => $item->doctype
        ];
    }
}