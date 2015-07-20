<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viewoption extends Model
{
    protected $table = 'viewoptions';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = ['user_id', 'voAcresBeansFAC', 'voAcresCorn', 'voAcresCotton', 'voAcresOther', 'voAcresPeanuts', 'voAcresRice', 'voAcresSorghum', 'voAcresSoybeans', 'voAcresSugarcane', 'voAcresTotal', 'voAcresWheat', 'voAgency', 'voBalanceDue', 'voCloseDate', 'voCommitArm', 'voCommitDistributor', 'voCommitOther', 'voCommitTotal', 'voDistributor', 'voDueDate', 'voFeePercentage', 'voFeeTotal', 'voIcon3pcredit', 'voIconAddedland', 'voIconAddendum', 'voIconAttachments', 'voIconBankruptcy', 'voIconCross', 'voIconDisbursement', 'voRateArm', 'voRateDist', 'voRegion', 'voSeason'];

    /* CASTING */
    protected $casts = [
        'voAcresBeansFAC' => 'boolean',
        'voAcresCorn' => 'boolean',
        'voAcresCotton' => 'boolean',
        'voAcresOther' => 'boolean',
        'voAcresPeanuts' => 'boolean',
        'voAcresRice' => 'boolean',
        'voAcresSorghum' => 'boolean',
        'voAcresSoybeans' => 'boolean',
        'voAcresSugarcane' => 'boolean',
        'voAcresTotal' => 'boolean',
        'voAcresWheat' => 'boolean',
        'voAgency' => 'boolean',
        'voBalanceDue' => 'boolean',
        'voCloseDate' => 'boolean',
        'voCommitArm' => 'boolean',
        'voCommitDistributor' => 'boolean',
        'voCommitOther' => 'boolean',
        'voCommitTotal' => 'boolean',
        'voDistributor' => 'boolean',
        'voDueDate' => 'boolean',
        'voFeePercentage' => 'boolean',
        'voFeeTotal' => 'boolean',
        'voIcon3pcredit' => 'boolean',
        'voIconAddedland' => 'boolean',
        'voIconAddendum' => 'boolean',
        'voIconAttachments' => 'boolean',
        'voIconBankruptcy' => 'boolean',
        'voIconCross' => 'boolean',
        'voIconDisbursement' => 'boolean',
        'voRateArm' => 'boolean',
        'voRateDist' => 'boolean',
        'voRegion' => 'boolean',
        'voSeason' => 'boolean'
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
