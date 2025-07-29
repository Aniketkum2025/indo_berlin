@extends('layouts.app')
@section('content')


<section class="py-12 px-4 max-w-7xl mx-auto">
  <div class="bg-red-600 text-white max-w-4xl mx-auto p-8 rounded-xl shadow-xl space-y-6">
    <h3 class="text-2xl text-yellow-300 font-semibold">Recognition & Awards</h3>
    <p>
      <span class="font-semibold">Kazumi Japanese & Culture School</span> is a branch of Henry Harvin, which upholds its legacy while providing exclusively Japanese language courses. Kazumi’s values reflect the harmony between Japanese educational philosophy and international teaching standards.
    </p>
  </div>
</section>

<section class="py-16 bg-gray-100">
  <div class="max-w-7xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-red-700 mb-12">Why Choose Kazumi?</h2>
    
    <!-- Grid Container -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 justify-items-center">
      <!-- Card 1 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition w-full h-full">
        <h3 class="text-xl font-semibold text-red-600 mb-2">1. Academic Excellence</h3>
        <p class="text-gray-700 text-sm">
          Kazumi's academic excellence is drawn from Henry Harvin, integrating pedagogical principles and innovative methods for global employability.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition w-full h-full">
        <h3 class="text-xl font-semibold text-red-600 mb-2">2. Structured Curriculum</h3>
        <p class="text-gray-700 text-sm">
          Courses follow industry-valued curriculum tailored for learners from beginner to advanced levels including occupational training.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition w-full h-full">
        <h3 class="text-xl font-semibold text-red-600 mb-2">3. Industry-Relevant Courses</h3>
        <p class="text-gray-700 text-sm">
          Programs are aligned with real-life industry needs, helping learners gain practical and professional skills.
        </p>
      </div>

      <!-- Card 4 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition w-full h-full">
        <h3 class="text-xl font-semibold text-red-600 mb-2">4. Global Recognition</h3>
        <p class="text-gray-700 text-sm">
          Recognized and affiliated with global organizations like UKAF, ISO, and MSME—making certifications globally respected.
        </p>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 justify-items-center mt-8">
      <!-- Card 5 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition w-full h-full">
        <h3 class="text-xl font-semibold text-red-600 mb-2">5. Technological Infrastructure</h3>
        <p class="text-gray-700 text-sm">
          Offers 24x7 access to LMS, digital resources, and online platforms to ensure a seamless learning experience.
        </p>
      </div>

      <!-- Card 6 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition w-full h-full">
        <h3 class="text-xl font-semibold text-red-600 mb-2">6. Career Development</h3>
        <p class="text-gray-700 text-sm">
          Placement support, internships via Yuva Intern, and workshops help learners build job-oriented skills.
        </p>
      </div>

      <!-- Card 7 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition w-full h-full">
        <h3 class="text-xl font-semibold text-red-600 mb-2">7. Lifelong Alumni Support</h3>
        <p class="text-gray-700 text-sm">
          Global networking and upskilling with lifetime access to resources, events, and professional mentorship.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="bg-red-600 py-12 px-4">
  <div class="max-w-4xl mx-auto bg-white text-red-700 p-8 rounded-xl shadow-xl text-center space-y-6">
    
    <p class="text-xl md:text-2xl font-semibold">
      Our clientele
    </p>

    <h2 class="text-3xl md:text-4xl font-bold text-red-800 capitalize">
     Start Your Journey at Kazumi
    </h2>

    <button  data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" class="bg-red-600 text-white px-4 py-2 rounded-md text-[16px]">Apply</button>

  </div>
</section>
@endsection