<?php namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract {
    public function transform(User $user)
    {
        //return $user;

        if( ! $user->notifications ) {
            $notificator = [];
        } else {
            $pending_actions = 0;
            $management_required = 0;
            $review_reports = 0;

            foreach($user->notifications as $notif) {
                switch($notif['notification_type']) {
                    case 'comment':
                        $pending_actions++;
                        break;
                    case 'office':
                        $management_required++;
                        break;
                    case 'report':
                        $review_reports++;
                        break;
                    case 'vote':
                        $pending_actions++;
                        break;
                }
                $notificator = [
                    'count' => count($user->notifications),
                    'pending_actions' => $pending_actions,
                    'management_required' => $management_required,
                    'review_reports' => $review_reports
                ];
            }
        } // end if

        return [
            'id' => $user->id,
            'name' => $user->name,
            'nick' => $user->nick,
            'app' => $user->app,
            'is_active' => (boolean)$user->is_active,
            'is_admin' => (boolean)$user->is_admin,
            'is_manager' => (boolean)$user->is_manager,
            'is_approver' => (boolean)$user->is_approver,
            'loc_id' => (integer) $user->loc_id,
            'loc_abr' => $user->locations->loc_abr,
            'manager_id' => (integer) $user->manager_id,
            'closer_id' => (integer) $user->closer_id,
            'role_id' => (integer) $user->role_id,
            'email' => $user->email,
            'outlook' => $user->outlook,
            'phone' => $user->phone,
            'full_sidebar' => (boolean)$user->full_sidebar,
            'comms_email' => (boolean)$user->comms_email,
            'comms_sms' => (boolean)$user->comms_sms,
            'comms_outlook' => (boolean)$user->comms_outlook,
            'comms_online' => (boolean)$user->comms_online,
            'notifications' => $user->notifications,
            'notificator' => $notificator,
            'optimopts' => $user->optimizerviewoptions,
            'viewfilters' => $user->viewfilters,
            'viewopts' => $user->viewoptions
        ];
    }
}