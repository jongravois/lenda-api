<?php namespace App\Transformers;

use App\Libraryfiletype;
use League\Fractal\TransformerAbstract;

class LibraryfiletypeTransformer extends TransformerAbstract {
    public function transform(Libraryfiletype $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'filetype' => $item->filetype
        ];
    }
}