<?php namespace App\Transformers;

use App\Prerequisite;
use League\Fractal\TransformerAbstract;

class PrerequisiteTransformer extends TransformerAbstract {
    public function transform(Prerequisite $item)
    {
        //return $item;
        //'date_requested' => $item->date_requested ? $item->date_requested->format('m/d/Y') : null,

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'is_required' => (boolean)$item->is_required,
            'document' => $item->document,
            'title' => $item->title,
            'received' => (boolean)$item->received,
            'date_requested' => $item->date_requested,
            'date_received' => $item->date_received,
            'path' => $item->path,
            'filename' => $item->filename,
            'reason_pending' => $item->reason_pending
        ];
    }
}