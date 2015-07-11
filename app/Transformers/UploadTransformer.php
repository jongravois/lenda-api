<?php namespace App\Transformers;

use App\Upload;
use League\Fractal\TransformerAbstract;

class UploadTransformer extends TransformerAbstract {
    public function transform(Upload $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'user_id' => $item->user_id,
            'document' => $item->document,
            'filename' => $item->filename,
            'path' => $item->path,
            'filetype' => $item->filetype,
            'original_filename' => $item->original_filename
        ];
    }
}