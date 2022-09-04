<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\AppointmentSchedule;
use App\Notifications\smsNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\Appointment;

class NotificationController extends Controller
{
    public function sendnotification($id) {
        $app = appointment::find($id);

            if ($app->app_status == 'Approved') {
                if($app->enddate == null || $app->date == $app->enddate) {
                $details = [
                    'greeting' => 'Good Day, '.$app->name,
                    'body' => 'Your request to use the '.$app->facility.' has been '.$app->app_status.' for '.$app->lim_slot.' slot/s. '
                    .date('g:i A', strtotime($app->app_start_time)).' until '.date('g:i A', strtotime($app->app_end_time)).' on the date/s of '.date('F j, Y', strtotime($app->date)).'.',
                    'detailText' => 'Go to Homepage ',
                    'url' => url('/'),
                    'thankyou' => 'Thank you for using this application.'
                ];
            } else {
                $details = [
                    'greeting' => 'Good Day, '.$app->name,
                    'body' => 'Your request to use the '.$app->facility.' has been '.$app->app_status.' for '.$app->lim_slot.' slot/s. '
                    .date('g:i A', strtotime($app->app_start_time)).' until '.date('g:i A', strtotime($app->app_end_time)).' on the date/s of '.date('F j, Y', strtotime($app->date)).' - '.date('F j, Y', strtotime($app->enddate)).'.',
                    'detailText' => 'Go to Homepage ',
                    'url' => url('/'),
                    'thankyou' => 'Thank you for using this application.'
                ];
            }
            } elseif ($app->app_status == "Cancelled") {
                    $details = [
                        'greeting' => 'Good Day, '.$app->name,
                        'body' => 'Your request to use the '.$app->facility.' has been '.$app->app_status.'. We are sorry for the inconvenience. 
                        If you would like to contact us, please go to our homepage by clicking the button below. ',
                        'detailText' => 'Go to Homepage ',
                        'url' => url('/'),
                        'thankyou' => 'Thank you for using this application.'
                    ];
            } else {
                return redirect()->back()->with('message', 'Must approve/cancel appointment first');
            }
    
    Notification::send($app, new AppointmentSchedule($details));

    return redirect()->back()->with('message2', 'Notification email has been sent');
    }
}