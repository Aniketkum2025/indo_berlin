@extends('layouts.app')
@section('content')
<section class="py-12 px-4 max-w-7xl mx-auto">
  <div class="bg-red-600 text-white max-w-4xl mx-auto p-8 rounded-xl shadow-xl space-y-6">
    <h2 class="text-3xl font-bold mb-4">Kazumi <span class="text-yellow-300">Community</span></h2>

    <p>
      <span class="font-semibold">Kazumi Japanese & Culture School</span> bridges a gap between culture and global opportunity. The Kazumi community inspires learners, educators, alumni, and language enthusiasts to explore and create opportunities related to the Japanese language and culture across the globe.
    </p>

    <h3 class="text-2xl text-yellow-300 font-semibold mt-4">Alumni Benefits</h3>
    <p>
      Stay connected to Kazumi's alumni network that offers exclusive benefits to its members. Enjoy lifetime access to mentorship programs and selected resources, including certificate updates, career guidance, placement support, and more. Our alumni also receive discounts on advanced professional programs and invitations to traditional and authentic Japan Foundation events — fostering both growth and a strong bond within the Kazumi community.
    </p>

    <h3 class="text-2xl text-yellow-300 font-semibold mt-4">Membership Benefits</h3>
    <p>
      Our learners can opt for the Gold Membership, which includes E-Learning through recorded videos, games, projects, CPDSPe studies powered by Examopedia, and Masterclass sessions.
    </p>
    <p>
      You will earn the prestigious Kazumi and Henry Harvin® Alumni Status, joining the esteemed network of over <span class="font-semibold">4,60,000+ alumni</span> across the globe. You are also guaranteed an internship with Henry Harvin® or via Yuva Intern, along with the opportunity to work on industry projects during training and access to weekly 10+ job opportunities.
    </p>

    <h3 class="text-2xl text-yellow-300 font-semibold mt-4">Networking Opportunities</h3>
    <ul class="list-disc ml-6 space-y-2">
      <li>Connect with fellow students and alumni</li>
      <li>Attend social and cultural activities</li>
      <li>Reunions and business events</li>
      <li>Conferences and webinars</li>
      <li>Internship opportunities</li>
    </ul>
  </div>
</section>
<section class="bg-red-600 py-12 px-4">
  <div class="max-w-4xl mx-auto bg-white text-red-700 p-8 rounded-xl shadow-xl text-center space-y-6">
    
    <p class="text-xl md:text-2xl font-semibold">
      Foster a global mindset, fuel career ambitions and celebrate diversity.
    </p>

    <h2 class="text-3xl md:text-4xl font-bold text-red-800 capitalize">
      Join Kazumi Community
    </h2>

    <button  data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" class="bg-red-600 text-white px-4 py-2 rounded-md text-[16px]">Apply</button>

  </div>
</section>


@endsection