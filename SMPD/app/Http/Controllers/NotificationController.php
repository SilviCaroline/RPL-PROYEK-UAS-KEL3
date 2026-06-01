<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Routing\Controller as BaseController;

class NotificationController extends BaseController
{
    public function index()
    {
        $notifications = Notification::latest()->paginate(10);

        Notification::query()
            ->where('is_read', false)
            ->update([
                'is_read' => true
            ]);

        return view(
            'anggota.notifications.index',
            compact('notifications')
        );
    }
}
