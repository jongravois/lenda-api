<?php namespace App\Transformers;

use App\Notification;
use League\Fractal\TransformerAbstract;

class NotificationTransformer extends TransformerAbstract {
    public function transform(Notification $item)
    {
        //return $item;

        return [
            'id' => $item->id,
            'user_id' => $item->user_id,
            'user' => $item->user['name'],
            'user_email' => $item->user['email'],
            'loan_id' => $item->loan_id,
            'report_id' => $item->report_id,
            'notification_type' => $item->notification_type,
            'task' => $item->task,
            'status' => $item->status
        ];
    }
}