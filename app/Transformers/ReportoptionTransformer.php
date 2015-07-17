<?php namespace App\Transformers;

use App\Reportoption;
use League\Fractal\TransformerAbstract;

class ReportoptionTransformer extends TransformerAbstract {
    public function transform(Reportoption $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'user_id' => $item->user_id,
            'report_region' => (boolean) $item->report_region,
            'report_season' => (boolean) $item->report_season,
            'report_distributor' => (boolean) $item->report_distributor,
            'report_agency' => (boolean) $item->report_agency,
            'report_close_date' => (boolean) $item->report_close_date,
            'report_commit_total' => (boolean) $item->report_commit_total,
            'report_commit_arm' => (boolean) $item->report_commit_arm,
            'report_commit_distributor' => (boolean) $item->report_commit_distributor,
            'report_commit_other' => (boolean) $item->report_commit_other,
            'report_fee_percentage' => (boolean) $item->report_fee_percentage,
            'report_fee_total' => (boolean) $item->report_fee_total,
            'report_rate_arm' => (boolean) $item->report_rate_arm,
            'report_rate_dist' => (boolean) $item->report_rate_dist,
            'report_balance_due' => (boolean) $item->report_balance_due,
            'report_acres_total' => (boolean) $item->report_acres_total,
            'report_acres_corn' => (boolean) $item->report_acres_corn,
            'report_acres_soybeans' => (boolean) $item->report_acres_soybeans,
            'report_acres_sorghum' => (boolean) $item->report_acres_sorghum,
            'report_acres_wheat' => (boolean) $item->report_acres_wheat,
            'report_acres_cotton' => (boolean) $item->report_acres_cotton,
            'report_acres_rice' => (boolean) $item->report_acres_rice,
            'report_acres_peanuts' => (boolean) $item->report_acres_peanuts,
            'report_acres_sugar_cane' => (boolean) $item->report_acres_sugar_cane,
            'report_acres_other' => (boolean) $item->report_acres_other,
            'report_icon_addendum' => (boolean) $item->report_icon_addendum,
            'report_icon_cross' => (boolean) $item->report_icon_cross,
            'report_icon_bankruptcy' => (boolean) $item->report_icon_bankruptcy,
            'report_icon_3pcredit' => (boolean) $item->report_icon_3pcredit,
            'report_icon_addedland' => (boolean) $item->report_icon_addedland,
            'report_icon_disbursement' => (boolean) $item->report_icon_disbursement,
            'report_icon_attachments' => (boolean) $item->report_icon_attachments
        ];
    }
}