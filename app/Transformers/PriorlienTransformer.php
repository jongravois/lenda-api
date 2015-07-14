<?php namespace App\Transformers;

use App\Priorlien;
use League\Fractal\TransformerAbstract;

class PriorlienTransformer extends TransformerAbstract {
    public function transform(Priorlien $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'lien_holder' => $item->lien_holder,
            'city_state' => $item->city_state,
            'contact' => $item->contact,
            'phone' => $item->phone,
            'email' => $item->email,
            'projected_crops' => (double)$item->projected_crops,
            'fsa_payments' => (double)$item->fsa_payments,
            'ins_over_discount' => (double)$item->ins_over_discount,
            'nonrp_discount' => (double)$item->nonrp_discount,
            'supplemental_coverage' => (double)$item->supplemental_coverage,
            'claims' => (double)$item->claims,
            'equipment' => (double)$item->equipment,
            'realestate' => (double)$item->realestate,
            'other' => (double)$item->other,
        ];
    }
}