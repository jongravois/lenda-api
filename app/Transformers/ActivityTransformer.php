<?php namespace App\Transformers;

use App\Activity;
use League\Fractal\TransformerAbstract;

class ActivityTransformer extends TransformerAbstract {
    public function transform(Activity $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'user_id' => $item->user_id,
            'user' => $item->user,
            'subject_id' => $item->subject_id,
            'subject_type' => $item->subject_type,
            'name' => $item->name,
        ];
    }
}