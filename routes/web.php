<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\NotificationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

// User Controllers
Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified');
Route::get('/add_appointment_view', [HomeController::class, 'addapp']);
Route::get('/myappointments', [HomeController::class, 'myappointments']);
Route::get('/events_view', [HomeController::class, 'eventview']);
Route::get('/facility_view', [HomeController::class, 'facilityview']);
Route::get('/aboutus', [HomeController::class, 'aboutus']);
Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);
Route::get('/download/{id}', [HomeController::class, 'download']);
Route::get('/event_details/{id}', [HomeController::class, 'eventdetails']);
Route::get('/facility_details/{id}', [HomeController::class, 'facilitydetails']);
Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/show_calendar_user', [HomeController::class, 'showcalendaruser']);

// Admin Controllers
Route::get('/add_facility_view', [AdminController::class, 'addfacilityview']);
Route::get('/add_event_view', [AdminController::class, 'addeventview']);
Route::get('/add_app_view', [AdminController::class, 'addappview']);
Route::get('/show_appointments', [AdminController::class, 'showapp']);
Route::get('/show_facilities', [AdminController::class, 'showfacilities']);
Route::get('/show_events', [AdminController::class, 'showevents']);
Route::get('/show_users', [AdminController::class, 'showusers']);
Route::get('/update_event/{id}', [AdminController::class, 'updateevent']);
Route::get('/update_facility/{id}', [AdminController::class, 'updatefacility']);
Route::get('/update_user/{id}', [AdminController::class, 'updateuser']);
Route::get('/approve/{id}', [AdminController::class, 'approve']);
Route::get('/cancel/{id}', [AdminController::class, 'cancel']);
Route::get('/deleteevent/{id}', [AdminController::class, 'deleteevent']);
Route::get('/deletefacility/{id}', [AdminController::class, 'deletefacility']);
Route::get('/deleteuser/{usertype}', [AdminController::class, 'deleteuser']);
Route::get('/editevent/{id}', [AdminController::class, 'editevent']);
Route::post('/upload_facility', [AdminController::class, 'upload']);
Route::post('/upload_event', [AdminController::class, 'uploadevent']);
Route::post('/upload_app', [AdminController::class, 'uploadapp']);
Route::post('/event_change/{id}', [AdminController::class, 'event_edit']);
Route::post('/facility_change/{id}', [AdminController::class, 'facility_edit']);
Route::post('/user_change/{id}', [AdminController::class, 'user_edit']);

// EmailNotification Controllers
Route::get('/send_mail/{id}', [NotificationController::class, 'sendnotification']);

// Calendar Controller
Route::get('/show_calendar', [CalendarController::class, 'showcalendar']);






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/*
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/profile', function () {
    // Only verified users may access this route...
})->middleware('verified');
*/