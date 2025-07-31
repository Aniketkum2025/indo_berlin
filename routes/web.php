<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('homepage');
});
Route::get('courses', function () {
    return view('courses');
});
Route::get('about-us', function () {
    return view('about_us');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('contact-us', function () {
    return view('contact_us');
});
Route::get('cancellation-&-refund-policy', function () {
    return view('cancellation_&_refund_policy');
});
Route::get('faq', function () {
    return view('faq');
});
Route::get('links', function () {
    return view('links');
});
Route::get('photo-gallery', function () {
    return view('photo-gallery');
});
Route::get('message-from-the-president', function () {
    return view('message_from_the_president');
});
Route::get('privacy-policy', function () {
    return view('privacy_policy');
});
Route::get('refund-policy', function () {
    return view('refund_policy');
});

Route::get('terms-&-conditions', function () {
    return view('terms_&_conditions');
});
Route::get('terms-of-use', function () {
    return view('terms_of_use');
});
Route::get('values', function () {
    return view('values');
});
Route::get('facts-and-figures', function () {
    return view('facts_and_figures');
});
Route::get('quality-assurance', function () {
    return view('quality_assurance');
});
Route::get('operations-and-future-plans', function () {
    return view('operations_and_future_plans');
});
Route::get('research-activities', function () {
    return view('research_activities');
});
Route::get('esteemed-faculty', function () {
    return view('esteemed_faculty');
});

Route::get('admission-process', function () {
    return view('admission_process');
});
Route::get('prospective-students', function () {
    return view('prospective_students');
});
Route::get('existing-students', function () {
    return view('existing_students');
});
Route::get('online-payment', function () {
    return view('online_payment');
});
Route::get('request-certificate', function () {
    return view('request_certificate');
});
Route::get('accreditation', function () {
    return view('accreditation');
});
Route::get('kazumi-community', function () {
    return view('kazumi_community');
});
Route::get('why-kazumi', function () {
    return view('why_kazumi');
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
Route::get('placed-student-list', function () {
    return view('placed_student_list');
});

// all courses
Route::get('japanese-language-course', function () {
    return view('japanese_language_course');
});

