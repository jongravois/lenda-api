<?php namespace App\Transformers;

use App\Attachment;
use League\Fractal\TransformerAbstract;

class AttachmentTransformer extends TransformerAbstract {
    public function transform(Attachment $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => (integer) $item->loan_id,
            'title' => $item->title,
            'filename' => $item->filename,
            'filetype' => $item->filetype,
            'description' => $item->description,
            'uploaded' => $item->created_at
        ];
    }
}