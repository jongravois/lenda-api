<?php namespace App\Transformers;

use App\Loanexception;
use League\Fractal\TransformerAbstract;

class LoanexceptionTransformer extends TransformerAbstract {
    public function transform(Loanexception $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'exception_id' => $item->exception_id,
            'exception' => $item->exceptions_id,
            'msg' => $item->msg
        ];
    }
}   