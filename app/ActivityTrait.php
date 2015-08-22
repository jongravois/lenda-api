<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use ReflectionClass;

trait ActivityTrait
{
    protected static function bootActivityTrait()
    {
        foreach(static::getModelEvents() as $event) {
            static::$event(function($model) use ($event) {
                $model->recordActivity($event);
            });
        }
    }

    public function recordActivity($event)
    {
        if(!Auth::id()) {
            $user = [
                'id' => 1,
                'name' => 'LENDA'
            ];
        } else {
            $user = User::find(Auth::id())->toArray();
        }

        Activity::create([
            'loan_id' => $this->loan_id,
            'user_id' => $user['id'],
            'user' => $user['name'],
            'subject_id' => $this->id,
            'subject_type' => get_class($this),
            'name' => $this->getActivityName($this, $event, $user)
        ]);
    }

    protected function getActivityName($model, $action, $user)
    {
        $name = strtolower((new ReflectionClass($model))->getShortName());

        return "{$user['name']} {$action} {$name}";
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