<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response as FacadeResponse;
use Illuminate\Support\Facades\DB;
use App\Notifications\AppointmentSchedule;
use App\Notifications\smsNotification;
use Illuminate\Support\Facades\Notification;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Facility;
use App\Models\Appointment;
use App\Models\Event;
class HomeController extends Controller
{
    public function redirect() {
        if(Auth::id()) {
            if(Auth::user()->usertype=='0') {
                $facility = facility::all();
                $event = event::all();

                return view('user.home', compact('facility', 'event'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index() {
        if(Auth::id()){
            return redirect('home');
        } else {
            $facility = facility::all();
            $event = event::all();

            return view('user.home', compact('facility', 'event'));
        }
    }

    public function addapp() {
        $facility = Facility::all();

        return view('user.appointment', compact('facility'));
    }

    public function appointment(Request $request) {
        $data = new Appointment;

        if(Auth::id()) {
            $data->user_id=Auth::user()->id;
            $data->name=Auth::user()->name;
            $data->email=Auth::user()->email;
            $data->contact_num=Auth::user()->phone;
            $data->lim_slot=$request->lim_slot;
            $data->facility=$request->facility;
            $data->fac_color=Facility::where('facility_name', '=', $data->facility)->value('facility_color');
            $data->date=$request->date;
            $data->enddate=$request->enddate;
            $data->app_start_time=$request->app_start_time;
            $data->app_end_time=$request->app_end_time;
            $data->app_status='Pending';

            if ($request->letter !== null) {
                $rqletter = $request->letter;
                $lettername = time().'.'.$rqletter->getClientOriginalExtension();
                $request->letter->move('requestletters', $lettername);
                $data->letter = $lettername;
            }

            $data->save();

            //$basic  = new \Vonage\Client\Credentials\Basic("c2a99957", "UWBZLtDSexOK24wv");
            //$client = new \Vonage\Client($basic);
    
            //$response = $client->sms()->send(
                //$data->contact_num=Auth::user()->phone // This code requires a Vonage upgraded account to allow outbound traffic to any number (user phone num)
           //    new \Vonage\SMS\Message\SMS('639638617821', 'RVMSCSchedSys', 'Good Day, '.$data->name=Auth::user()->name.'. Your request has been received, please wait for an email notification to see if your request has been approved/cancelled, or check your appointments in your RVMSCSchedSys account. Thank you for you patience.')
           // );
            
            //$message = $response->current();
            return redirect()->back()->with('message', 'Appointment Request Sent. Please wait for approval.');    
        }
    }

    public function myappointments() {
        if(Auth::id()) {

            if(Auth::user()->usertype == 0) {
                $userid = Auth::user()->id;
                $now = Carbon::now();
                $appoint = Appointment::where('user_id', $userid)->paginate(9);
                return view('user.my_appointments', compact('appoint', 'now'));    
            } else {
                return view('user.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function facilityview() {
        $facility = Facility::all();
        $appoint = Appointment::where('app_status', '=', 'Approved')->where('facility', '=', Facility::value('facility_name'))->get();
        if ($facility || $appoint  != null) {
            return view('user.facility_view', compact('facility', 'appoint'));
        } else {
            return redirect()->back();
        }
    }

    public function eventview() {
        $event = Event::all();

        if ($event != null) {
            return view('user.events_view', compact('event'));
        } else {
            return redirect()->back();
        }
    }

    public function aboutus() {

        return view('user.aboutus');
    }

    public function eventdetails($id) {
        $event = Event::find($id);
        if ($event != null) {
            return view('user.eventdetails', compact('event'));
        } else {
            return redirect()->back();
        }
    }

    public function facilitydetails($id) {
        $facility = Facility::find($id);
        if ($facility != null) {
            return view('user.facilitydetails', compact('facility'));
        } else {
            return redirect()->back();
        }
        
    }

    public function cancel_appoint($id) {
        $data = Appointment::find($id);

        $data->delete();
        return redirect()->back()->with('message', 'Appointment has been cancelled.');
    }

    public function download($id) {
        $data = Appointment::find($id);

            $file = public_path().'/requestletters/'.$data->letter;
            $headers = array(
                'Content-Type: application/pdf',
                'Content-Type: application/docx',
                'Content-Type: image/jpg',
            );
    
            return FacadeResponse::download($file, $data->letter, $headers);
    }

    public function showcalendaruser() {
        if(Auth::id()) {

            if(Auth::user()->usertype == 0) {
                $facility = facility::all();
                $event = Event::all();
                $app = Appointment::where('App_status', '=', 'Approved')->get();
        
                return view('user.fullCalendarUser', compact('facility', 'event', 'app'));
                    } else {
                return view('user.home');
            }
        } else {
            return redirect()->back();
        }
    }
}
