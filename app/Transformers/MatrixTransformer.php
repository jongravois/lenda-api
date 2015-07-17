<?php namespace App\Transformers;

use App\Matrix;
use League\Fractal\TransformerAbstract;

class MatrixTransformer extends TransformerAbstract {
    public function transform(Matrix $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'group_heading' =>	$item->group_heading,
            'responsibility' =>	$item->responsibility,
            'CEO' =>	$item->CEO,
            'ABM' =>	$item->ABM,
            'MGR' =>	$item->MGR,
            'OAS' =>	$item->OAS,
            'LBM' =>	$item->LBM,
            'LOF' =>	$item->LOF,
            'LAN' =>	$item->LAN,
            'CON' =>	$item->CON,
            'HRM' =>	$item->HRM,
            'IBM' =>	$item->IBM,
            'IAS' =>	$item->IAS,
            'COM' =>	$item->COM
        ];
    }
}