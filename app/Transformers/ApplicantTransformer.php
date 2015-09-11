<?php namespace App\Transformers;

use App\Applicant;
use League\Fractal\TransformerAbstract;

class ApplicantTransformer extends TransformerAbstract {
    public function transform(Applicant $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'applicant' => $item->applicant,
            'grade' => $item->grade,
            'entity_id' => $item->entity_id,
            'entity' => $item->entitytype,
            'loc_id' =>  $item->loc_id,
            'location' => $item->loc_id,
            'loc_abr' => $item->loc_id,
            'ssn' => $item->ssn,
            'email' => $item->email,
            'phone' => $item->phone,
            'address' => $item->address,
            'city' => $item->city,
            'state_id' => $item->state_id,
            'state' => $item->state_id,
            'state_abr' =>	 $item->state_id,
            'zip' => $item->zip,
            'dob' => $item->dob,
            'spouse' =>	$item->spouse,
            'spouse_ssn' =>	$item->spouse_ssn,
            'spouse_phone' => $item->spouse_phone,
            'spouse_email' => $item->spouse_email,
            'corps' => $item->corps,
            'joints' => $item->joints,
            'partners' => $item->partners,
            'fins' => $item->fins
        ];
    }
}