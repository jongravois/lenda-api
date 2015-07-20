<?php namespace App\Transformers;

use App\Viewoption;
use League\Fractal\Resource\Collection;
use League\Fractal\TransformerAbstract;

class ViewoptionTransformer extends TransformerAbstract {
    public function transform(Viewoption $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'user_id' => $item->user_id,
            'voAcresBeansFAC' => (boolean)$item->voAcresBeansFAC,
            'voAcresCorn' => (boolean)$item->voAcresCorn,
            'voAcresCotton' => (boolean)$item->voAcresCotton,
            'voAcresOther' => (boolean)$item->voAcresOther,
            'voAcresPeanuts' => (boolean)$item->voAcresPeanuts,
            'voAcresRice' => (boolean)$item->voAcresRice,
            'voAcresSorghum' => (boolean)$item->voAcresSorghum,
            'voAcresSoybeans' => (boolean)$item->voAcresSoybeans,
            'voAcresSugarcane' => (boolean)$item->voAcresSugarcane,
            'voAcresTotal' => (boolean)$item->voAcresTotal,
            'voAcresWheat' => (boolean)$item->voAcresWheat,
            'voAgency' => (boolean)$item->voAgency,
            'voBalanceDue' => (boolean)$item->voBalanceDue,
            'voCloseDate' => (boolean)$item->voCloseDate,
            'voCommitArm' => (boolean)$item->voCommitArm,
            'voCommitDistributor' => (boolean)$item->voCommitDistributor,
            'voCommitOther' => (boolean)$item->voCommitOther,
            'voCommitTotal' => (boolean)$item->voCommitTotal,
            'voDistributor' => (boolean)$item->voDistributor,
            'voDueDate' => (boolean)$item->voDueDate,
            'voFeePercentage' => (boolean)$item->voFeePercentage,
            'voFeeTotal' => (boolean)$item->voFeeTotal,
            'voIcon3pcredit' => (boolean)$item->voIcon3pcredit,
            'voIconAddedland' => (boolean)$item->voIconAddedland,
            'voIconAddendum' => (boolean)$item->voIconAddendum,
            'voIconAttachments' => (boolean)$item->voIconAttachments,
            'voIconBankruptcy' => (boolean)$item->voIconBankruptcy,
            'voIconCross' => (boolean)$item->voIconCross,
            'voIconDisbursement' => (boolean)$item->voIconDisbursement,
            'voRateArm' => (boolean)$item->voRateArm,
            'voRateDist' => (boolean)$item->voRateDist,
            'voRegion' => (boolean)$item->voRegion,
            'voSeason' => (boolean)$item->voSeason,
        ];
    }
}