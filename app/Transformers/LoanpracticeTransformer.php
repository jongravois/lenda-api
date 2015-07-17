<?php namespace App\Transformers;

use App\Loanpractice;
use League\Fractal\TransformerAbstract;

class LoanpracticeTransformer extends TransformerAbstract {
    public function transform(Loanpractice $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'crop_year' => (integer) $item->crop_year,
            'loan_id' => (integer) $item->loan_id,
            'crop_id' => (integer) $item->crop_id,
            'crop' => $item->crop,
            'is_active' => (boolean) $item->is_active,
            'ins_type' => $item->ins_type,
            'ins_option' => $item->ins_option,
            'ins_price' => (double) $item->ins_price,
            'ins_level' => (double) $item->ins_level,
            'aph' => (double) $item->aph,
            'ins_premium' => (double) $item->ins_premium,
            'acres' => (double) $item->acres,
            'ins_share' => (double) $item->ins_share,
            'guaranty' => (double) $item->guaranty,
            'value' => (double) $item->value
        ];
    }
}