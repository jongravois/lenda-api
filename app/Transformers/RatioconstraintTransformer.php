<?php namespace App\Transformers;

use App\Ratioconstraint;
use League\Fractal\TransformerAbstract;

class RatioconstraintTransformer extends TransformerAbstract {
    public function transform(Ratioconstraint $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'constraint' => $item->constraint,
            'gradeA' => $item->gradeA,
            'gradeB' => $item->gradeB,
            'gradeC' => $item->gradeC,
            'gradeD' => $item->gradeD,
        ];
    }
}