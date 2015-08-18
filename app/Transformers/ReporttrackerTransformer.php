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
            'report' => $item->report,
            'user_id' => $item->user_id,
            'user' => $item->user,
            'cnt_warned' => (integer)$item->cnt_warned,
            'cnt_alerted' => (integer)$item->cnt_alerted,
            'made_required' => $item->made_required,
            'last_acknowledged' => $item->last_acknowledged
        ];
    }
}