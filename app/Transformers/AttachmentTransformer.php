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
            'user_id' => $item->user_id,
            'status' => $item->status,
            'title' => $item->title,
            'filename' => $item->filename,
            'path' => $item->path,
            'filetype' => $item->filetype,
            'original_filename' => $item->original_filename,
            'description' => $item->description,
            'date_requested' => $item->date_requested,
            'date_received' => $item->date_received
        ];
    }
}