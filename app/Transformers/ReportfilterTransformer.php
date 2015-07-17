<?php namespace App\Transformers;

use App\Reportfilter;
use League\Fractal\TransformerAbstract;

class ReportfilterTransformer extends TransformerAbstract {
    public function transform(Reportfilter $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'user_id' => $item->user_id,
            'filterRegions' => $item->filterRegions,
            'filterFarmers' => $item->filterFarmers,
            'filterAnalysts' => $item->filterAnalysts,
            'filterCropYears' => $item->filterCropYears,
            'filterSeasons' => $item->filterSeasons,
            'filterLoanTypes' => $item->filterLoanTypes,
            'filterDistributors' => $item->filterDistributors,
            'filterAgencies' => $item->filterAgencies,
            'filterAddendums' => $item->filterAddendums,
            'filterComments' => $item->filterComments,
            'filterBankruptcy' => $item->filterBankruptcy,
            'filterThirdParty' => $item->filterThirdParty,
            'filterAddedLand' => $item->filterAddedLand,
            'filterControlledDisbursements' => $item->filterControlledDisbursements,
            'filterAttachments' => $item->filterAttachments,
            'filterFilterLimitClose' => $item->filterFilterLimitClose,
            'filterFilterLimitExceeded' => $item->filterFilterLimitExceeded,
            'togAppDate' => $item->togAppDate,
            'togCloseDate' => $item->togCloseDate,
            'togCommitTotal' => $item->togCommitTotal,
            'togCommitArm' => $item->togCommitArm,
            'togCommitDist' => $item->togCommitDist,
            'togCommitOther' => $item->togCommitOther,
            'togFee' => $item->togFee,
            'togRateArm' => $item->togRateArm,
            'togRateDist' => $item->togRateDist,
            'togRateOther' => $item->togRateOther,
            'togAcresTotal' => $item->togAcresTotal,
            'togAcresCorn' => $item->togAcresCorn,
            'togAcresBeans' => $item->togAcresBeans,
            'togAcresBeansFAC' => $item->togAcresBeansFAC,
            'togAcresSorghum' => $item->togAcresSorghum,
            'togAcresWheat' => $item->togAcresWheat,
            'togAcresCotton' => $item->togAcresCotton,
            'togAcresRice' => $item->togAcresRice,
            'togAcresPeanuts' => $item->togAcresPeanuts,
            'togAcresCane' => $item->togAcresCane,
            'togAcresOther' => $item->togAcresOther,
        ];
    }
}