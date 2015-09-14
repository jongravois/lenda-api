<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viewfilter extends Model
{
    protected $table = 'viewfilters';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = ['user_id', 'vfAcresBeans', 'vfAcresBeansFilter', 'vfAcresBeansFAC',  'vfAcresBeansFACFilter', 'vfAcresCane', 'vfAcresCaneFilter', 'vfAcresCorn', 'vfAcresCornFilter', 'vfAcresCotton', 'vfAcresCottonFilter', 'vfAcresOther', 'vfAcresOtherFilter', 'vfAcresPeanuts', 'vfAcresPeanutsFilter', 'vfAcresRice', 'vfAcresRiceFilter', 'vfAcresSorghum', 'vfAcresSorghumFilter', 'vfAcresTotal', 'vfAcresTotalFilter', 'vfAcresWheat', 'vfAcresWheatFilter', 'vfAddedLand', 'vfAddendums', 'vfAgencies', 'vfAnalysts', 'vfAppDate', 'vfAppDateFilter', 'vfAttachments', 'vfBankruptcy', 'vfCloseDate', 'vfCloseDateFilter', 'vfCommentAccount', 'vfCommentAnalyst', 'vfCommentCommittee', 'vfCommentSystem', 'vfComments', 'vfCommitArm', 'vfCommitArmFilter', 'vfCommitDist', 'vfCommitDistFilter', 'vfCommitOther', 'vfCommitOtherFilter', 'vfCommitTotal', 'vfCommitTotalFilter', 'vfCropYears', 'vfDisbursements', 'vfDistributors', 'vfDueDateview', 'vfFarmers', 'vfFee', 'vfFeeFilter', 'vfLimitClose', 'vfLimitExceeded', 'vfLoanTypes', 'vfRateArm', 'vfRateArmFilter', 'vfRateDist', 'vfRateDistFilter', 'vfRateOther', 'vfRegions', 'vfSeasons', 'vfStatusApproved', 'vfStatusDenied', 'vfStatusInProgress', 'vfStatusPaid', 'vfStatusRecommended', 'vfStatusWithdrawn', 'vfStatusLimitClose', 'vfStatusLimitExceeded', 'vfThirdParty', 'vfIconCross', 'vfIconAddendum', 'vfIconBankruptcy', 'vfIcon3PCredit', 'vfIconAddedLand', 'vfIconControlDisbursements', 'vfIconAttachments'];

    /* CASTING */
    protected $casts = [
        'vfAddedLand' => 'boolean',
        'vfAddendums' => 'boolean',
        'vfAttachments' => 'boolean',
        'vfBankruptcy' => 'boolean',
        'vfCommentAccount' => 'boolean',
        'vfCommentAnalyst' => 'boolean',
        'vfCommentCommittee' => 'boolean',
        'vfCommentSystem' => 'boolean',
        'vfComments' => 'boolean',
        'vfDisbursements' => 'boolean',
        'vfLimitClose' => 'boolean',
        'vfLimitExceeded' => 'boolean',
        'vfThirdParty' => 'boolean'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
