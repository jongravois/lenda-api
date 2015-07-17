<?php namespace App\Transformers;

use App\Loanquestion;
use League\Fractal\TransformerAbstract;

class LoanquestionTransformer extends TransformerAbstract {
    public function transform(Loanquestion $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id'	=> 	(integer) $item->loan_id,
            'amount_requested' => (double) $item->amount_requested,
            'plant_own'	=>	(boolean) $item->plant_own,
            'plant_own_details'	=>	$item->plant_own_details,
            'harvest_own'	=>	(boolean) $item->harvest_own,
            'harvest_own_details'	=>	$item->harvest_own_details,
            'equip_obligations'	=>	(boolean) $item->equip_obligations,
            'equip_obligations_details'	=>	$item->equip_obligations_details,
            'other_cash'	=>	(boolean) $item->other_cash,
            'other_cash_details'	=>	$item->other_cash_details,
            'fsa_good'	=>	(boolean) $item->fsa_good,
            'fsa_good_details'	=>	$item->fsa_good_details,
            'insInPlace'	=>	(boolean) $item->insInPlace,
            'insInPlace_details'	=>	$item->insInPlace_details,
            'fci_good'	=>	(boolean) $item->fci_good,
            'fci_good_details'	=>	$item->fci_good_details,
            'premiums_past'	=>	(boolean) $item->premiums_past,
            'premiums_details'	=>	$item->premiums_details,
            'legal_defendant'	=>	(boolean) $item->legal_defendant,
            'defendant_details'	=>	$item->defendant_details,
            'judgements'	=>	(boolean) $item->judgements,
            'judgement_details'	=>	$item->judgement_details,
            'bankruptcy'	=>	(boolean) $item->bankruptcy,
            'bankruptcy_details' =>	$item->bankruptcy_details,
            'bankruptcy_order' => (boolean) $item->bankruptch_order,
            'liens'	=>	(boolean) $item->liens,
            'liens_details'	=>	$item->liens_details,
            'fsa_direct_pay'	=>	(boolean) $item->fsa_direct_pay,
            'fsa_direct_pay_details'	=>	$item->fsa_direct_pay_details,
            'future_liabilities'	=>	(boolean) $item->future_liabilities,
            'credit_3p_available'	=>	(boolean) $item->credit_3p_available,
            'credit_3p_details'	=>	$item->credit_3p_details,
            'income_percent'	=>	(double) $item->income_percent,
            'income_distribution_details' =>	$item->income_distribution_details,
            'distributor'	=>	$item->distributor,
            'pesticide_number'	=>	$item->pesticide_number,
            'pest_num_expiration'	=>	$item->pest_num_expiration,
            'credit_score'	=>	$item->credit_score,
            'affiliates' =>	(boolean) $item->affiliates,
            'affiliated_entities'	=>	$item->affiliated_entities,
            'farm_supplier_creditors'	=>	$item->farm_supplier_creditors
        ];
    }
}   