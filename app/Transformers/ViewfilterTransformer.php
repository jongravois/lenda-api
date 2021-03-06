<?php namespace App\Transformers;

use App\Viewfilter;
use League\Fractal\TransformerAbstract;

class ViewfilterTransformer extends TransformerAbstract {
    public function transform(Viewfilter $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'user_id' => $item->user_id,
            'vfAcresBeans' => $item->vfAcresBeans,
            'vfAcresBeansFilter' => $item->vfAcresBeansFilter,
            'vfAcresBeansFAC' => $item->vfAcresBeansFAC,
            'vfAcresBeansFACFilter' => $item->vfAcresBeansFACFilter,
            'vfAcresCane' => $item->vfAcresCane,
            'vfAcresCaneFilter' => $item->vfAcresCaneFilter,
            'vfAcresCorn' => $item->vfAcresCorn,
            'vfAcresCornFilter' => $item->vfAcresCornFilter,
            'vfAcresCotton' => $item->vfAcresCotton,
            'vfAcresCottonFilter' => $item->vfAcresCottonFilter,
            'vfAcresOther' => $item->vfAcresOther,
            'vfAcresOtherFilter' => $item->vfAcresOtherFilter,
            'vfAcresPeanuts' => $item->vfAcresPeanuts,
            'vfAcresPeanutsFilter' => $item->vfAcresPeanutsFilter,
            'vfAcresRice' => $item->vfAcresRice,
            'vfAcresRiceFilter' => $item->vfAcresRiceFilter,
            'vfAcresSorghum' => $item->vfAcresSorghum,
            'vfAcresSorghumFilter' => $item->vfAcresSorghumFilter,
            'vfAcresTotal' => $item->vfAcresTotal,
            'vfAcresTotalFilter' => $item->vfAcresTotalFilter,
            'vfAcresWheat' => $item->vfAcresWheat,
            'vfAcresWheatFilter' => $item->vfAcresWheatFilter,
            'vfAddedLand' => (boolean)$item->vfAddedLand,
            'vfAddendums' => (boolean)$item->vfAddendums,
            'vfAgencies' => $item->vfAgencies,
            'vfAnalysts' => $item->vfAnalysts,
            'vfAppDate' => $item->vfAppDate,
            'vfAppDateFilter' => $item->vfAppDateFilter,
            'vfAttachments' => (boolean)$item->vfAttachments,
            'vfBankruptcy' => (boolean)$item->vfBankruptcy,
            'vfCloseDate' => $item->vfCloseDate,
            'vfCloseDateFilter' => $item->vfCloseDateFilter,
            'vfCommentAccount' => (boolean)$item->vfCommentAccount,
            'vfCommentAnalyst' => (boolean)$item->vfCommentAnalyst,
            'vfCommentCommittee' => (boolean)$item->vfCommentCommittee,
            'vfCommentSystem' => (boolean)$item->vfCommentSystem,
            'vfComments' => (boolean)$item->vfComments,
            'vfCommitArm' => $item->vfCommitArm,
            'vfCommitArmFilter' => $item->vfCommitArmFilter,
            'vfCommitDist' => $item->vfCommitDist,
            'vfCommitDistFilter' => $item->vfCommitDistFilter,
            'vfCommitOther' => $item->vfCommitOther,
            'vfCommitOtherFilter' => $item->vfCommitOtherFilter,
            'vfCommitTotal' => $item->vfCommitTotal,
            'vfCommitTotalFilter' => $item->vfCommitTotalFilter,
            'vfCropYears' => $item->vfCropYears,
            'vfDisbursements' => (boolean)$item->vfDisbursements,
            'vfDistributors' => $item->vfDistributors,
            'vfDueDateview' => $item->vfDueDateview,
            'vfFarmers' => $item->vfFarmers,
            'vfFee' => $item->vfFee,
            'vfFeeFilter' => $item->vfFeeFilter,
            'vfLimitClose' => (boolean)$item->vfLimitClose,
            'vfLimitExceeded' => (boolean)$item->vfLimitExceeded,
            'vfLoanTypes' => $item->vfLoanTypes,
            'vfRateArm' => $item->vfRateArm,
            'vfRateArmFilter' => $item->vfRateArmFilter,
            'vfRateDist' => $item->vfRateDist,
            'vfRateDistFilter' => $item->vfRateDistFilter,
            'vfRateOther' => $item->vfRateOther,
            'vfRegions' => $item->vfRegions,
            'vfSeasons' => $item->vfSeasons,
            'vfThirdParty' => (boolean)$item->vfThirdParty,
            'vfStatusApproved' => $item->vfStatusApproved,
            'vfStatusDenied' => $item->vfStatusDenied,
            'vfStatusInProgress' => $item->vfStatusInProgress,
            'vfStatusPaid' => $item->vfStatusPaid,
            'vfStatusRecommended' => $item->vfStatusRecommended,
            'vfStatusWithdrawn' => $item->vfStatusWithdrawn,
            'vfStatusLimitClose' => $item->vfStatusLimitClose,
            'vfStatusLimitExceeded' => $item->vfStatusLimitExceeded,
            'vfIconCross' => $item->vfIconCross,
            'vfIconAddendum' => $item->vfIconAddendum,
            'vfIconBankruptcy' => $item->vfIconBankruptcy,
            'vfIcon3PCredit' => $item->vfIcon3PCredit,
            'vfIconAddedLand' => $item->vfIconAddedLand,
            'vfIconControlDisbursements' => $item->vfIconControlDisbursements,
            'vfIconAttachments' => $item->vfIconAttachments
        ];
    }
}