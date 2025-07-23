@extends('layouts.app')
@section('content')
<section class="py-12 px-4 max-w-7xl mx-auto">
  <div>
    <div class="bg-red-600 text-white max-w-4xl mx-auto p-8 rounded-xl shadow-xl space-y-4">
      <h2 class="text-3xl font-bold mb-2">Cancellation & Refund <span class="text-yellow-300">Policy</span></h2>

      <p>
        Thank you for enrolling for the <span class="font-semibold">Kazumi Japanese & Culture School by Henry Harvin</span>.
        We ensure that our learners have a rewarding experience while they discover, assess, and purchase our programs,
        whether instructor-led, online, or self-paced.
      </p>

      <p>
        As with any purchase experience, some terms and conditions govern the refund policy.
        Refund requests can be entertained within 7 days of the course purchase only if <span class="font-semibold">no services</span> are provided including LMS access, masterclass sessions, or soft skill sessions.
      </p>

      <h3 class="text-2xl font-semibold mt-4 text-yellow-300">Cancellation & Refunds</h3>
      <ul class="list-disc ml-6 space-y-1">
        <li>Raise refund request within 7 days of course purchase.</li>
        <li>Money-back guarantee is void if the participant has accessed LMS or attended any classes/recordings for more than 1 day.</li>
        <li>No refunds after 7 days from the course purchase.</li>
        <li>No refund on discounted/subsidized courses. Only option: course change.</li>
        <li>No refund if batch rescheduled by participant.</li>
        <li>Eligible refunds: Full fee minus taxes and LMS cost.</li>
      </ul>

      <h3 class="text-2xl font-semibold mt-4 text-yellow-300">Event Cancellations</h3>
      <ul class="list-disc ml-6 space-y-1">
        <li>
          Kazumi Japanese & Culture School by Henry Harvin may cancel/postpone an event due to low enrollments, instructor illness, or force majeure (e.g., floods, earthquakes, political unrest).
        </li>
        <li>
          If event canceled within 10 days of course purchase: 100% refund (excluding travel/logistics/personal costs).
        </li>
        <li>
          If beyond 10 days: learner rescheduled to next batch or virtual class at no extra cost.
        </li>
        <li>
          Delegate cancellations ≥10 business days before event: 10% fee deducted, rest refunded.
        </li>
        <li>
          Delegate cancellations &lt;10 business days before event: no refund.
        </li>
        <li>
          No refunds for absentees across full course days.
        </li>
        <li>
          No refund on discounted/subsidized course fees. Only course change allowed.
        </li>
        <li>No refund if batch rescheduled by participant.</li>
      </ul>
    </div>
  </div>
</section>

@endsection