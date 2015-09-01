<?php namespace App\Transformers;

use App\Libraryfileclass;
use League\Fractal\TransformerAbstract;

class LibraryfileclassTransformer extends TransformerAbstract {
    public function transform(Libraryfileclass $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'fileclass' => $item->fileclass
        ];
    }
}