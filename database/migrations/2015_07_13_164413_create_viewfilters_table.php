<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewfiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viewfilters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('vfAcresBeans')->default('all');
            $table->string('vfAcresBeansFilter')->nullable();
            $table->string('vfAcresBeansFAC')->default('all');
            $table->string('vfAcresBeansFACFilter')->nullable();
            $table->string('vfAcresCane')->default('all');
            $table->string('vfAcresCaneFilter')->nullable();
            $table->string('vfAcresCorn')->default('all');
            $table->string('vfAcresCornFilter')->nullable();
            $table->string('vfAcresCotton')->default('all');
            $table->string('vfAcresCottonFilter')->nullable();
            $table->string('vfAcresOther')->default('all');
            $table->string('vfAcresOtherFilter')->nullable();
            $table->string('vfAcresPeanuts')->default('all');
            $table->string('vfAcresPeanutsFilter')->nullable();
            $table->string('vfAcresRice')->default('all');
            $table->string('vfAcresRiceFilter')->nullable();
            $table->string('vfAcresSorghum')->default('all');
            $table->string('vfAcresSorghumFilter')->nullable();
            $table->string('vfAcresTotal')->default('all');
            $table->string('vfAcresTotalFilter')->nullable();
            $table->string('vfAcresWheat')->default('all');
            $table->string('vfAcresWheatFilter')->default('all');
            $table->boolean('vfAddedLand')->default(0);
            $table->boolean('vfAddendums')->default(0);
            $table->string('vfAgencies')->default('all');
            $table->string('vfAnalysts')->default('all');
            $table->string('vfAppDate')->default('all');
            $table->string('vfAppDateFilter')->nullable();
            $table->boolean('vfAttachments')->default(0);
            $table->boolean('vfBankruptcy')->default(0);
            $table->string('vfCloseDate')->default('all');
            $table->string('vfCloseDateFilter')->nullable();
            $table->string('vfDueDate')->default('all');
            $table->string('vfDueDateFilter')->nullable();
            $table->boolean('vfCommentAccount')->default(1);
            $table->boolean('vfCommentAnalyst')->default(1);
            $table->boolean('vfCommentCommittee')->default(1);
            $table->boolean('vfCommentSystem')->default(1);
            $table->boolean('vfComments')->default(0);
            $table->string('vfCommitArm')->default('all');
            $table->string('vfCommitArmFilter')->nullable();
            $table->string('vfCommitDist')->default('all');
            $table->string('vfCommitDistFilter')->default('all');
            $table->string('vfCommitOther')->default('all');
            $table->string('vfCommitOtherFilter')->default('all');
            $table->string('vfCommitTotal')->default('all');
            $table->string('vfCommitTotalFilter')->nullable();
            $table->string('vfCropYears')->default('all');
            $table->boolean('vfDisbursements')->default(0);
            $table->string('vfDistributors')->default('all');
            $table->string('vfDueDateview')->default('all');
            $table->string('vfFarmers')->default('all');
            $table->string('vfFee')->default('all');
            $table->string('vfFeeFilter')->nullable();
            $table->boolean('vfLimitClose')->default(0);
            $table->boolean('vfLimitExceeded')->default(0);
            $table->string('vfLoanTypes')->default('all');
            $table->string('vfRateArm')->default('all');
            $table->string('vfRateArmFilter')->nullable();
            $table->string('vfRateDist')->default('all');
            $table->string('vfRateDistFilter')->nullable();
            $table->string('vfRateOther')->default('all');
            $table->string('vfRegions')->default('all');
            $table->string('vfSeasons')->default('all');
            $table->boolean('vfThirdParty')->default(0);

            $table->string('vfStatusApproved')->default('none');
            $table->string('vfStatusDenied')->default('none');
            $table->string('vfStatusInProgress')->default('none');
            $table->string('vfStatusPaid')->default('none');
            $table->string('vfStatusRecommended')->default('none');
            $table->string('vfStatusWithdrawn')->default('none');
            $table->string('vfStatusLimitClose')->default('none');
            $table->string('vfStatusLimitExceeded')->default('none');
            $table->string('vfIconCross')->default('none');
            $table->string('vfIconAddendum')->default('none');
            $table->string('vfIconBankruptcy')->default('none');
            $table->string('vfIcon3PCredit')->default('none');
            $table->string('vfIconAddedLand')->default('none');
            $table->string('vfIconControlDisbursements')->default('none');
            $table->string('vfIconAttachments')->default('none');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('viewfilters');
    }
}
