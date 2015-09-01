<?php namespace App\Transformers;

use App\Library;
use League\Fractal\TransformerAbstract;

class LibraryTransformer extends TransformerAbstract {
    public function transform(Library $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'fileclass_id' => $item->fileclass_id,
            'fileclass' => $item->fileclasses->fileclass,
            'title' => $item->title,
            'filename' => $item->filename,
            'version' => (double)$item->version,
            'description' => $item->description,
            'state_id' => $item->state_id,
            'state_abr' => ($item->states ? $item->states->abr : null),
            'path' => $item->path,
            'doctype_id' => $item->doctype_id,
            'doctype' => $item->doctypes->doctype,
            'filetype_id' => $item->filetype_id,
            'filetype' => $item->filetypes->filetype,
            'distributor_id' => $item->distributor_id,
            'distributor' => $item->distributors,
            'is_visible' => (boolean)$item->is_visible
        ];
    }
}