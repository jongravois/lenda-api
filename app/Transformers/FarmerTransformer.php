<?php namespace App\Transformers;

use App\Farmer;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class FarmerTransformer extends TransformerAbstract {
    public function transform(Farmer $item)
    {
        //return $item;

        $dtToday = Carbon::now();
        $dtDOB = Carbon::createFromFormat('Y-m-d', $item->dob);
        if(!$dtDOB){
            $dob = null;
            $age_of_farmer = 0;
        } else {
            $dob = $dtDOB->format('m/d/Y');
            $age_of_farmer = $dtToday->diffInYears($dtDOB);
        }


        return [
            'id' => $item->id,
            'farmer' => $item->farmer,
            'nick' => $item->nick,
            'address' => $item->address,
            'city' =>	$item->city,
            'state_id' =>	$item->state_id,
            'state' => $item->state_id,
            'zip' => $item->zip,
            'email' => $item->email,
            'phone' => $item->phone,
            'ssn' => $item->ssn,
            'dob' => $dob,
            'age' => $age_of_farmer,
            'first_year_farmer' => $item->first_year_farmer,
            'farm_exp' => (integer)$item->farm_exp,
            'new_client' => (boolean) $item->new_client,
            'applicants' => $item->applicants
        ];
    }
}