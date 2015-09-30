<?php

namespace App\Listeners;

use App\Crop;
use App\Events\LoanWasCreated;
use App\Loantype;
use App\Plannedcrop;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreatePlannedCrops
{
    public function __construct()
    {
        //
    }

    public function handle(LoanWasCreated $event)
    {
        if( (integer)$event->loan->loan_type_id < 4 ) { return; }

        $crops = Crop::all();

        foreach( $crops as $crop) {
            Plannedcrop::create([
                'loan_id' => $event->loan->id,
                'crop_id' => $crop->id,
                'crop' => $crop->name,
                'acres' => 0,
                'tea' => (double)getPlannedCropTea($crop->id)
            ]);
        }
    }
}
