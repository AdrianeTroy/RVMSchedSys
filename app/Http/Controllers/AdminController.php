<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Facility;
use App\Models\Appointment;
use App\Models\Event;
use App\Models\User;

class AdminController extends Controller
{
    public function index() {
        if(Auth::id()){
            if (Auth::user()->usertype == 1) {
                return redirect('home');
            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }
    public function addfacilityview() {
        if(Auth::id()) {
            if (Auth::user()->usertype == 1) {
                return view('admin.add_facility');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }

    }
    public function addeventview() {
        if(Auth::id()) {
            if (Auth::user()->usertype == 1) {
                return view('admin.add_event');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function addappview() {
        if(Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $facility = Facility::all();
                return view('admin.add_appointment', compact('facility'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
    
    public function uploadapp(Request $request) {
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
            $data->app_status='Approved';

            if ($request->letter !== null) {
                $rqletter = $request->letter;
                $lettername = time().'.'.$rqletter->getClientOriginalExtension();
                $request->letter->move('requestletters', $lettername);
                $data->letter = $lettername;
            }

            $data->save();
            return redirect()->back()->with('message', 'Appointment has been set, Please check the Calendar.');  
        }

    }

    public function upload(Request $request) {
        $facility = new Facility;

        $image = $request->facility_img;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->facility_img->move('facilityimage', $imagename);
        $facility->facility_img = $imagename;

        $facility->facility_name = $request->facility_name;
        $facility->description = $request->description;
        $facility->number_limit = $request->number_limit;
        $facility->	facility_color = $request->	facility_color;
        $facility->start_time = $request->start_time;
        $facility->end_time = $request->end_time;

        $facility->save();

        return redirect()->back()->with('message', 'Facility Added Successfully');

    }

    public function uploadevent(Request $request) {
        $event = new Event;

        $image_event = $request->event_img;
        $image_eventname = time().'.'.$image_event->getClientOriginalExtension();
        $request->event_img->move('eventimage', $image_eventname);
        $event->event_img = $image_eventname;

        $event->event_name = $request->event_name;
        $event->event_desc = $request->event_desc;
       // $event->event_lim = $request->event_lim;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->event_start_time = $request->event_start_time;
        $event->event_end_time = $request->event_end_time;

        $event->save();

        return redirect()->back()->with('message', 'Event Added Successfully');
    }

    public function showapp() {
        $data = Appointment::all();
        $data = Appointment::paginate(9);

        if(Auth::id()) {
            if (Auth::user()->usertype == 1) {
                return view('admin.showapp', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
        
    }
    public function showfacilities() {
        $facility = Facility::all();
        $facility = Facility::paginate(9);

        if(Auth::id()) {
            if (Auth::user()->usertype == 1) {
                return view('admin.show_facilities', compact('facility'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }

    }

    public function deletefacility($id) {
        $data = Facility::find($id);

        $data->delete();
        return redirect()->back();
    }
    
    public function showevents() {
        $event = Event::all();
        $event = Event::paginate(9);

        if(Auth::id()) {
            if (Auth::user()->usertype == 1) {
                return view('admin.show_events', compact('event'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function deleteevent($id) {
        $data = Event::find($id);

        $data->delete();
        return redirect()->back();
    }

    public function showusers() {
        $user = User::all();
        $user = User::paginate(9);

        if(Auth::id()) {
            if (Auth::user()->usertype == 1) {
                return view('admin.show_users', compact('user'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function deleteuser($id) {
        $data = User::find($id);

        $data->delete();
        return redirect()->back();
    }
    
    public function updateevent($id) {
        $data = Event::find($id);

        if(Auth::id()) {
            if (Auth::user()->usertype == 1) {
                return view('admin.update_event', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function updatefacility($id) {
        $data = Facility::find($id);
        
        if(Auth::id()) {
            if (Auth::user()->usertype == 1) {
                return view('admin.update_facility', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function updateuser($id) {
        $data = User::find($id);

        if(Auth::id()) {
            if (Auth::user()->usertype == 1) {
                return view('admin.update_user', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function event_edit(Request $request, $id) {
        $event = Event::find($id);

        $event->event_name = $request->event_name;
        $event->event_desc = $request->event_desc;
        //$event->event_lim = $request->event_lim;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->event_start_time = $request->event_start_time;
        $event->event_end_time = $request->event_end_time;

        $image = $request->event_img;
        if ($image) {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->event_img->move('eventimage', $imagename);
            $event->event_img = $imagename;    
        }

        $event->save();

        return redirect()->back()->with('message', 'Event Updated Successfully');

    }

    public function facility_edit(Request $request, $id) {
        $facility = Facility::find($id);

        $facility->facility_name = $request->facility_name;
        $facility->description = $request->description;
        $facility->number_limit = $request->number_limit;
        $facility->start_time = $request->start_time;
        $facility->end_time = $request->end_time;

        $image = $request->facility_img;
        if ($image) {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->facility_img->move('facilitytimage', $imagename);
            $facility->facility_img = $imagename;    
        }

        $facility->save();

        return redirect()->back()->with('message', 'Facility Updated Successfully');
    }

    public function user_edit(Request $request, $id) {
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        $user->save();

        return redirect()->back()->with('message', 'User Updated Successfully');
    }

    public function approve($id) {
        $data = Appointment::find($id);

        $data->app_status = 'Approved';
        $data->save();
        
        return redirect()->back()->with('message3', 'Appointment has been Approved');
    }

    public function cancel($id) {
        $data = Appointment::find($id);

        $data->app_status = 'Cancelled';
        $data->save();
        
        return redirect()->back()->with('message4', 'Appointment has been Cancelled');
    }

}
