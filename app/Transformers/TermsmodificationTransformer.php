<?php namespace App\Transformers;

use App\Termsmodification;
use League\Fractal\TransformerAbstract;

class TermsmodificationTransformer extends TransformerAbstract {
    public function transform(Termsmodification $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'modification_date' => $item->modification_date,
            'due_date' => $item->due_date,
            'est_days' => $item->est_days,
            'int_percent_arm' => $item->int_percent_arm,
            'int_percent_dist' => $item->int_percent_dist,
            'fee_processing_arm' => $item->fee_processing_arm,
            'fee_service_arm' => $item->fee_service_arm,
            'fee_processing_dist' => $item->fee_processing_dist,
            'fee_service_dist' => $item->fee_service_dist,
            'fee_processing_borrower' => $item->fee_processing_borrower,
            'fee_service_borrower' => $item->fee_service_borrower
        ];
    }
}