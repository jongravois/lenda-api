<?php namespace App\Transformers;

use App\Storagecontract;
use League\Fractal\TransformerAbstract;

class StoragecontractTransformer extends TransformerAbstract {
    public function transform(Storagecontract $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'contract_number' => $item->contract_number,
            'contract_date' => $item->contract_date,
            'delivery_date' => $item->delivery_date,
            'commodity' => $item->commodity,
            'grain_buyer' => $item->grain_buyer,
            'lien_holder' => $item->lien_holder,
            'advance_percent' => (double) $item->advance_percent,
            'contract_amount' => (double) $item->contract_amount,
            'contract_price' => (double) $item->contract_price,
            'owner_share' => (double) $item->owner_share,
            'amount_requested' => (double) $item->amount_requested,
            'revenue' => (double) $item->revenue,
            'eligible_proceeds' => (double) $item->eligible_proceeds,
            'payment_terms' => (double) $item->payment_terms
        ];
    }
}