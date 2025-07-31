@extends('layouts.app')
@section('content')
<section class="py-12 px-4 max-w-7xl mx-auto">
  <div>
    <div class="bg-red-600 text-white max-w-4xl mx-auto p-8 rounded-xl shadow-xl space-y-6">
      
      <div>
        <h2 class="text-3xl font-bold mb-2">Vision</h2>
        <p>
          To become a <span class="text-yellow-300 font-semibold">globally valued pioneer</span> in Japanese language and 
          <span class="italic">文化教育 (bunka kyōiku)</span>, transforming learning through 
          <span class="underline">innovation</span>, <span class="underline">quality</span>, and the trusted legacy of 
          <span class="font-semibold text-yellow-300">Henry Harvin</span>.
        </p>
      </div>

      <div>
        <h2 class="text-3xl font-bold mb-2">Mission</h2>
        <p>
          Nurturing and encouraging our learners with immersive 
          <span class="font-semibold">Japanese language training</span>, <span class="font-semibold">fluency</span>, 
          <span class="font-semibold">cultural understanding</span>, and high quality instruction 
          in <span class="underline">academic standards</span>.
        </p>
      </div>

    </div>
  </div>
</section>
<section class="py-12 px-4 max-w-6xl mx-auto">
  <div class="grid md:grid-cols-2 gap-8">

    <!-- 1. Providing Quality -->
    <div class="flex items-start space-x-4">
      <svg class="w-10 h-10 text-red-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
        d="M12 20h9" /><path stroke-linecap="round" stroke-linejoin="round"
        d="M6 4h12M6 8h12M6 12h12M6 16h12M4 20h.01" /></svg>
      <div>
        <h3 class="text-xl font-[600] text-red-600 mb-1">Providing Quality</h3>
        <p class="text-gray-700">
          Kazumi is committed to delivering top quality education to its learners. The goal of quality education is reached with the help of industry valued curriculums, immersive methods and expert faculty.
        </p>
      </div>
    </div>

    <!-- 2. Meeting Global Standards -->
    <div class="flex items-start space-x-4">
      <svg class="w-10 h-10 text-red-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
        d="M12 3v18m9-9H3" /></svg>
      <div>
        <h3 class="text-xl font-[600] text-red-600 mb-1">Meeting Global Standards</h3>
        <p class="text-gray-700">
          Our courses follow global frameworks, that set us apart. Kazumi, a branch of Henry Harvin, promotes Japanese culture, aligned with JLPT and backed by ISO, UKAF, MSME, and top education platforms.
        </p>
      </div>
    </div>

    <!-- 3. Respect for Culture and Learners -->
    <div class="flex items-start space-x-4">
      <svg class="w-10 h-10 text-red-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
        d="M5 13l4 4L19 7" /></svg>
      <div>
        <h3 class="text-xl font-[600] text-red-600 mb-1">Respect for Culture and Learners</h3>
        <p class="text-gray-700">
          Kazumi upholds the Japanese spirit of harmony—'Wa'—by fostering inclusive, respectful learning spaces. We value every learner's background and support cultural growth.
        </p>
      </div>
    </div>

    <!-- 4. Learn by Doing -->
    <div class="flex items-start space-x-4">
      <svg class="w-10 h-10 text-red-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
        d="M8 16h8M8 12h8m-8-4h8M4 6h16M4 6v12M4 18h16" /></svg>
      <div>
        <h3 class="text-xl font-[600] text-red-600 mb-1">Learn by Doing</h3>
        <p class="text-gray-700">
          Learning is meaningful when applied. With Examopedia, mock tests, and practical assignments, learners build skills while preparing for JLPT and gaining a real-world advantage.
        </p>
      </div>
    </div>

    <!-- 5. Improving Learning Effectiveness -->
    <div class="flex items-start space-x-4">
      <svg class="w-10 h-10 text-red-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" /><path stroke-linecap="round" stroke-linejoin="round"
        d="M12 6v6l4 2" /></svg>
      <div>
        <h3 class="text-xl font-[600] text-red-600 mb-1">Improving Learning Effectiveness</h3>
        <p class="text-gray-700">
          Kazumi enhances learning through personalized methods, making lessons practical for life and business. We bridge the gap between education and employability.
        </p>
      </div>
    </div>

    <!-- 6. Integrity and Accountability -->
    <div class="flex items-start space-x-4">
      <svg class="w-10 h-10 text-red-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
        d="M12 4v16m0-16L4 8m8-4l8 4" /></svg>
      <div>
        <h3 class="text-xl font-[600] text-red-600 mb-1">Integrity and Accountability</h3>
        <p class="text-gray-700">
          Transparency and professionalism are core at Kazumi. We guide learners clearly from enrollment to completion, upholding high standards every step of the way.
        </p>
      </div>
    </div>

  </div>
</section>


@endsection