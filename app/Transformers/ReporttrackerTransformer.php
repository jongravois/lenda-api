<?php namespace App\Transformers;

use App\Reporttracker;
use League\Fractal\TransformerAbstract;

class ReporttrackerTransformer extends TransformerAbstract {
    public function transform(Reporttracker $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'report_id' => $item->report_id,
            'user_id' => $item->user_id,
            'cnt_warned' => (integer)$item->cnt_warned,
            'cnt_alerted' => (integer)$item->cnt_alerted,
            'made_required' => $item->made_required,
            'last_acknowledged' => $item->last_acknowledged,
            'report' => $item->report,
            'user' => $item->user
        ];
    }
}