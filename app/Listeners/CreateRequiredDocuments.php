<?php

namespace App\Listeners;

use App\Attachment;
use App\Events\LoanWasCreated;
use App\Requireddocument;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateRequiredDocuments
{
    public function __construct()
    {
        //
    }

    public function handle(LoanWasCreated $event)
    {
        $docs = Requireddocument::where('loantype_id', $event->loan->loan_type_id)->get();

        foreach ($docs as $doc) {
            Attachment::create([
                'loan_id' => $event->loan->id,
                'title' => $doc->document
            ]);
        }
    }
}
