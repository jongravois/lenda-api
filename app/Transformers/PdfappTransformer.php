<?php namespace App\Transformers;

use App\Pdfapp;
use League\Fractal\TransformerAbstract;

class PdfappTransformer extends TransformerAbstract {
    public function transform(Pdfapp $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'title' => $item->title,
            'description' => $item->description,
            'pdfLink' => $item->pdfLink,
            'rank' => (integer) $item->rank,
            'visible' => (boolean) $item->isVisible
        ];
    }
}