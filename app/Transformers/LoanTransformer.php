<?php namespace App\Transformers;

use App\Loan;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class LoanTransformer extends TransformerAbstract {
    public function transform(Loan $item)
    {
        return $item;
    }
}