<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Facility;
use App\Models\Appointment;
use App\Models\Event;
class CalendarController extends Controller
{
    public function showcalendar() {
        if(Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $facility = facility::all();
                $event = Event::all();
                $app = Appointment::where('App_status', '=', 'Approved')->get();

                return view('admin.fullCalendar', compact('facility', 'event', 'app',));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
}
