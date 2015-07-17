<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reportfilter extends Model
{
    protected $table = 'reportfilters';
    protected $fillable = ['user_id', 'filterRegions', 'filterFarmers', 'filterAnalysts', 'filterCropYears', 'filterSeasons', 'filterLoanTypes', 'filterDistributors', 'filterAgencies', 'filterAddendums', 'filterComments', 'filterBankruptcy', 'filterThirdParty', 'filterAddedLand', 'filterControlledDisbursements', 'filterAttachments', 'filterFilterLimitClose', 'filterFilterLimitExceeded', 'togAppDate', 'togCloseDate', 'togCommitTotal', 'togCommitArm', 'togCommitDist', 'togCommitOther', 'togFee', 'togRateArm', 'togRateDist', 'togRateOther', 'togAcresTotal', 'togAcresCorn', 'togAcresBeans', 'togAcresBeansFAC', 'togAcresSorghum', 'togAcresWheat', 'togAcresCotton', 'togAcresRice', 'togAcresPeanuts', 'togAcresCane', 'togAcresOther'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
