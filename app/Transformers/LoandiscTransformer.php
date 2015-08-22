<?php namespace App\Transformers;

use App\Loandisc;
use League\Fractal\TransformerAbstract;

class LoandiscTransformer extends TransformerAbstract {
    public function transform(Loandisc $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'disc_percent_crop' => (double)$item->disc_percent_crop,
            'disc_percent_fsa' => (double)$item->disc_percent_fsa,
            'disc_percent_ins' => (double)$item->disc_percent_ins,
            'disc_percent_insoyield' => (double)$item->disc_percent_insoyield,
            'disc_percent_nonrp' => (double)$item->disc_percent_nonrp,
            'disc_percent_rphpe' => (double)$item->disc_percent_rphpe,
            'disc_percent_suppins' => (double)$item->disc_percent_suppins,
            'disc_percent_prod' => (double)$item->disc_percent_prod,
            'disc_percent_equipment' => (double)$item->disc_percent_equipment,
            'disc_percent_realestate' => (double)$item->disc_percent_realestate,
            'disc_percent_other' => (double)$item->disc_percent_other
        ];
    }
}