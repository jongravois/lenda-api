<?php namespace App\Transformers;

use App\Tabstatus;
use League\Fractal\TransformerAbstract;

class TabstatusTransformer extends TransformerAbstract {
    public function transform(Tabstatus $item)
    {
        //return $item->toArray();

        return [
            'id' => $item->id,
            'loan_id' => $item->loan_id,
            'summary' => (boolean)$item->summary,
            'underwriting' => (boolean)$item->underwriting,
            'terms' => (boolean)$item->terms,
            'committee' => (boolean)$item->committee,
            'comments' => (boolean)$item->comments,
            'applicant' => (boolean)$item->applicant,
            'quests' => (boolean)$item->quests,
            'references' => (boolean)$item->references,
            'financials' => (boolean)$item->financials,
            'crops' => (boolean)$item->crops,
            'farms' => (boolean)$item->farms,
            'fsa' => (boolean)$item->fsa,
            'insurance' => (boolean)$item->insurance,
            'budget' => (boolean)$item->budget,
            'collateral' => (boolean)$item->collateral,
            'prereqs' => (boolean)$item->prereqs
        ];
    }
}