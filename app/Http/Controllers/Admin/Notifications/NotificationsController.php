<?php

namespace App\Http\Controllers\Admin\Notifications;

use App\Http\Controllers\Controller;
use App\Notifications\WebsiteEditNotification;
use App\Notifications\WebsitesNotification;
use App\User;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function read(Request $request)
    {
        $notify = $request->notify;

        // Users Notifications....
        if ($notify == 1) {
            User::find(1)->unreadNotifications->where('type', '=', 'App\Notifications\UserNotification')->markAsRead();

        }

        //Websites Notifications....
        if ($notify == 2) {
            User::find(1)->unreadNotifications->where('type', '=', 'App\Notifications\WebsitesNotification')->markAsRead();
        }

        // Websites Edit Notifications....
        if ($notify == 3) {
            User::find(1)->unreadNotifications->where('type', '=', 'App\Notifications\WebsiteEditNotification')->markAsRead();
        }
    }
}
