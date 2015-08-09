<?php namespace App\Transformers;

use App\Loanpractice;
use League\Fractal\TransformerAbstract;

class LoanpracticeTransformer extends TransformerAbstract {
    public function transform(Loanpractice $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'crop_year' => (integer)$item->crop_year,
            'loan_id' => (integer)$item->loan_id,
            'farm_id' => (integer)$item->farm_id,
            'crop_id' => (integer)$item->crop_id,
            'loancrop_id' => (integer)$item->loancrop_id,
            'practice' => $item->practice,
            'is_active' => (boolean)$item->is_active,
            'plc' => (boolean)$item->plc,
            'ins_price' => (double)$item->ins_price,
            'ins_share' => (double)$item->ins_share,
            'ins_premium' => (double)$item->ins_premium,
            'ins_type' => $item->ins_type,
            'ins_option' => $item->ins_option,
            'ins_level' => $item->ins_level,
            'acres' => (double)$item->acres,
            'prod_price' => (double)$item->prod_price,
            'prod_share' => (double)$item->prod_share,
            'prod_yield' => (double)$item->prod_yield
        ];
    }
}