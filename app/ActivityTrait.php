<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use ReflectionClass;

trait ActivityTrait
{
    protected static function boot()
    {
        parent::boot();

        foreach(static::getModelEvents() as $event) {
            static::$event(function($model) use ($event) {
                $model->addActivity($event);
            });
        }
    }

    protected function addActivity($event)
    {
        Activity::create([
            'loan_id' => $this->loan_id,
            'user_id' => (Auth::id() ? Auth::id() : 1),
            //'user' => (Auth::user()->user ? Auth::user()->user : 'LENDA'),
            'subject_id' => $this->id,
            'subject_type' => get_class($this),
            'name' => $this->getActivityName($this, $event)
        ]);
    }

    protected function getActivityName($model, $action)
    {
        $name = strtolower((new ReflectionClass($model))->getShortName());

        return "{$action}_{$name}";
    }

    protected static function getModelEvents()
    {
        if(isset(static::$recordEvents)) {
            return static::$recordEvents;
        }

        return [
            'created', 'deleted', 'updated'
        ];
    }
}