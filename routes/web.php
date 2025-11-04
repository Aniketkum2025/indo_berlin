<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpcController;
use App\Http\Controllers\ThankyouController;
use App\Http\Controllers\AccountDeleteController;
use App\Http\Controllers\PlacedstudentshowController;

use App\Models\Course;
use App\Models\LeadQueue;

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
Route::get('kazumi-app-account-delete', [AccountDeleteController::class, 'index']);
Route::post('otp-app-account-delete', [AccountDeleteController::class, 'otpVerify'])->name('otp-app-account-delete');
Route::post('kazumi-app-account-delete', [AccountDeleteController::class, 'store'])->name('otp-app-account-delete.store');

Route::get('test/test', function(){
     $lead = LeadQueue::take(1)->get();
     dd($lead);
});
Route::get('test/test/course', function(){
     $lead = Course::take(1)->get();
     dd($lead);
});
Route::get('/', function () {
    return view('homepage');
});
Route::get('courses', function () {
    return view('courses');
});
Route::get('about-us', function () {
    return view('about_us');
});

Route::get('contact-us', function () {
    return view('contact_us');
});
Route::get('cancellation-&-refund-policy', function () {
    return view('cancellation_&_refund_policy');
});
Route::get('terms-&-conditions', function () {
    return view('terms_&_conditions');
});
Route::get('privacy-policy', function () {
    return view('privacy_policy');
});
Route::get('values', function () {
    return view('values');
});
Route::get('esteemed-faculty', function () {
    return view('esteemed_faculty');
});

Route::get('admission-process', function () {
    return view('admission_process');
});

Route::get('existing-students', function () {
    return view('existing_students');
});

Route::get('request-certificate', function () {
    return view('request_certificate');
});
Route::get('accreditation', function () {
    return view('accreditation');
});
Route::get('media', function () {
    return view('media');
});
Route::get('our-affiliations', function () {
    return view('our_affiliations');
});
Route::get('careers', function () {
    return view('careers');
});
Route::get('our-customers', function () {
    return view('our_customers');
});

Route::get('thankyou', function () {
    return view('thankyou');
});
Route::get('placed-students-list', [PlacedstudentshowController::class, 'index']);

Route::get('ppc', function () {
    return view('ppc');
});

Route::prefix('ppc')->name('ppc.')->controller(PpcController::class)->group(function () {
    Route::get('japanese-language-course-test', 'japaneseLanguageCourse')->name('japanese_language_course');
    
});

Route::get('media', [MediaController::class, 'index'])->name('media.index');
Route::get('thank-you/{slug}', [ThankyouController::class, 'index'])->name('get.slug');
Route::resource('admin/lead', LeadController::class);
Route::get('{slug}', [CourseController::class, 'index'])->name('course.index');
Route::get('placed-students-list', [PlacedstudentshowController::class, 'index']);

