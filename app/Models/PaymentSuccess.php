<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class PaymentSuccess extends Model
{
    protected $connection = 'mysql_website';
    public function afterPayment($gatewayPaymentId, $referenceId)
    {
        $payment = CRMPayment::where('reference_id', $referenceId)
            ->with('lswsheet', 'paymentCourses.course:id,course_name')
            ->first();
        $payment->update([
            'payment_id' => $gatewayPaymentId,
            'is_manual_payment' => 1,
            'status' => 'PAID',
            'request_status' => 'APPROVED'
        ]);

        $course_name = '';
        $crm_course_id = '';
        $count = 0;
        foreach ($payment->paymentCourses as $paymentCourse) {
            if($count == 0)
            {
                $crm_course_id = $paymentCourse->course->crm_course_id;
                $course_name = $paymentCourse->course->course_name;
                session()->put(['crm_course_id' => $crm_course_id, 'course_name' => $course_name]);
            }
            if ($paymentCourse->course) {
                $course_name .= $paymentCourse->course->course_name . ', ';
            }
            $count++;
        }

        $ltPayment = CRMLtPayment::create([
            'name' => $payment->lswsheet->name,
            'email' => $payment->lswsheet->email,
            'mobile' => $payment->lswsheet->mobile,
            'course' => $course_name,
            'mem_id' => $payment->member_id,
            'total' => $payment->offer_amount,
            'currency' => $payment->currency_type,
            'pending' => $payment->offer_amount,
            'payment_date' => $payment->created_at,
            'fresh_pending' => $payment->fresh_pending,
        ]);

        $CRMLtAmount = CRMLtAmount::create([
            'lt_id' => $ltPayment->id,
            'amount' => $payment->amount,
            'currency' => $payment->currency_type,
            'payment_id' => $payment->id,
            'pay_mode' => $payment->method,
            'remarks' => 'Website',
            'payment_date' => $payment->created_at,
            'created_by' => $payment->member_id,
            'p_mem_id' => $payment->member_id,
            'department' => $payment->department
        ]);

        $registration = CRMRegistration::where('email', $payment->lswsheet->email)->orWhere('mobile', $payment->lswsheet->mobile)->first();
        if (!$registration) {
            $registration = CRMRegistration::create([
                'first_name' => $payment->lswsheet->name,
                'email' => $payment->lswsheet->email,
                'mobile' => $payment->lswsheet->mobile,
                'lead_id' => $payment->lswsheet->id
            ]);
        }

        $payment->update([
            'registration_id' => $registration->id
        ]);

        // $expiry_date = date('Y-m-d H:i:s', strtotime("+1 year", strtotime($payment->created_at)));
        $expiry_date_dynamic = session()->get('year') ? session()->get('year') : 1;
        $expiry_date = date('Y-m-d H:i:s', strtotime("+".$expiry_date_dynamic. "year", strtotime($payment->created_at)));
        foreach ($payment->paymentCourses as $paymentCourse) {
            CRMEnrollment::create([
                'type' => $paymentCourse->course_type,
                'payment_reference_id' => $payment->reference_id,
                'registration_id' => $registration->id,
                'course_id' => $paymentCourse->course_id,
                'batch_id' => -1,
                'member_id' => $payment->member_id,
                'created_by' => $payment->member_id,
                'created_at' => date('Y-m-d H:i:s'),
                'is_hall_ticket_sent' => 0,
                'expiry_at' => $expiry_date,
            ]);
        }

        Http::post('https://crm.henryharvin.com/portal-new/api/send_welcome_mail', ['email' => $payment->lswsheet->email]);
    }
}
