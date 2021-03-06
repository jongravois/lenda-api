<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\LoanWasCreated' => [
            'App\Listeners\CreateLoanQuestions',
            'App\Listeners\CreateLoanFinancials',
            'App\Listeners\CreateLoanDiscounts',
            'App\Listeners\CreateRequiredDocuments',
            'App\Listeners\CreateLoanConditions',
            'App\Listeners\CreateEmptyCommittee',
            'App\Listeners\CreateEmptyLoanComment',
            'App\Listeners\CreateTermMod',
            'App\Listeners\CreatePlannedCrops'
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
