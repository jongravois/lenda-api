<?php namespace App\Transformers;

use App\Report;
use League\Fractal\TransformerAbstract;

class ReportTransformer extends TransformerAbstract {
    public function transform(Report $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'report' => $item->report,
            'rptPath' => $item->rptPath,
            'is_required' => (boolean)$item->is_required,
            'days_to_warn' => (integer)$item->days_to_warn,
            'days_to_alert' => (integer)$item->days_to_alert
        ];
    }
}