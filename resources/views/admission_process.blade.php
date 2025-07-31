@extends('layouts.app')
@section('content')
<section class="py-12 px-4 max-w-7xl mx-auto">
  <div>
    <div class="bg-red-600 text-white max-w-4xl mx-auto p-8 rounded-xl shadow-xl space-y-4">
      <h2 class="text-3xl font-bold mb-2">Admissions <span class="text-yellow-300">Overview</span></h2>

      <p>
        <span class="font-semibold">Kazumi Japanese & Culture School by Henry Harvin</span> welcomes those who wish to learn and enhance their Japanese language skills through our comprehensive programs.
      </p>

      <p>
        The application procedure remains the same across all courses. However, course fees and certain admission requirements may vary depending on the specific course selected.
      </p>
    </div>
  </div>
</section>

<section class="py-12 px-4 max-w-7xl mx-auto">
  <div class="max-w-4xl mx-auto space-y-6">
    <h2 class="text-3xl font-bold text-red-600">Admission <span class="text-yellow-500">Requirements</span></h2>

    <p>
      Carefully review the following documents before you submit them for the program you are applying for:
    </p>

    <ul class="list-disc ml-6 space-y-2 text-gray-800">
      <li>
        <span class="font-semibold">Your Photo:</span> Submit a recent photograph in JPG or PDF format.
      </li>
      <li>
        <span class="font-semibold">ID Document:</span> Passport, government-issued ID, or driver's license (JPG or PDF).
      </li>
      <li>
        <span class="font-semibold">Transcripts:</span> Marksheet and pass certificates (JPG or PDF).
      </li>
      <li>
        <span class="font-semibold">Your CV/Resume:</span> A professional resume in PDF format.
      </li>
    </ul>
  </div>
</section>
<section class="py-12 px-4 max-w-4xl mx-auto hidden">
  <div class="bg-white shadow-2xl rounded-xl p-8 space-y-6 border border-gray-200">
    <h2 class="text-3xl font-bold text-red-600">Apply for <span class="text-yellow-500">Admission</span></h2>
    <p class="text-gray-600">Please fill out the form below to begin your application process for Kazumi Japanese & Culture School by Henry Harvin.</p>

    <form action="#" method="POST" class="space-y-6">

     
      <div>
        <label class="block text-gray-700 font-semibold mb-1" for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="e.g. Aisha Tanaka"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-400">
      </div>

      <!-- Email -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1" for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="e.g. yourname@example.com"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-400">
      </div>

      <!-- Phone Number -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1" for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="e.g. +91 9876543210"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-400">
      </div>

      <!-- Select Course -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1" for="course">Select Course</label>
        <select id="course" name="course"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-400">
          <option value="">-- Choose your course --</option>
          <option value="basic">Japanese Language - N5 (Beginner)</option>
          <option value="intermediate">Japanese Language - N4/N3 (Intermediate)</option>
          <option value="advanced">Japanese Language - N2/N1 (Advanced)</option>
        </select>
      </div>

      <!-- Upload Documents -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1" for="documents">Upload Required Documents (ZIP or PDF)</label>
        <input type="file" id="documents" name="documents"
          class="w-full px-4 py-2 border border-gray-300 rounded-md file:bg-red-600 file:text-white file:px-4 file:py-2 file:rounded-md file:border-0 file:cursor-pointer hover:file:bg-red-700">
      </div>

      <!-- Message -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1" for="message">Your Message (Optional)</label>
        <textarea id="message" name="message" rows="4" placeholder="Let us know why you're applying..."
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-400"></textarea>
      </div>

      <!-- Submit Button -->
      <div class="pt-4">
        <button type="submit"
          class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-300">
          Submit Application
        </button>
      </div>
    </form>
  </div>
</section>
<section class="py-16 px-4 max-w-7xl mx-auto">
  <div class="text-center mb-12">
    <h2 class="text-4xl font-bold text-red-600 mb-4">Admissions <span class="text-yellow-500">Process</span></h2>
    <p class="text-gray-600 text-lg">Follow these easy steps to complete your application to Kazumi Japanese & Culture School by Henry Harvin.</p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-center">
    
    <!-- Step 1 -->
    <div class="flex flex-col items-center space-y-4 p-6 border rounded-lg shadow-md">
      <div class="text-red-600">
        <svg class="w-16 h-16" fill="none" stroke="currentColor" stroke-width="1.5"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M12 6V4m0 2v2m0 0c2.28 0 4.308.858 5.657 2.243A8 8 0 0112 20a8 8 0 01-5.657-13.757A7.978 7.978 0 0112 8z" />
        </svg>
      </div>
      <h3 class="text-xl font-semibold">Step 1</h3>
      <p class="text-gray-600">Gather all the required documents</p>
    </div>

    <!-- Step 2 -->
    <div class="flex flex-col items-center space-y-4 p-6 border rounded-lg shadow-md">
      <div class="text-red-600">
        <svg class="w-16 h-16" fill="none" stroke="currentColor" stroke-width="1.5"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M4 6h16M4 10h16M4 14h16M4 18h16" />
        </svg>
      </div>
      <h3 class="text-xl font-semibold">Step 2</h3>
      <p class="text-gray-600">Fill in the admission form carefully</p>
    </div>

    <!-- Step 3 -->
    <div class="flex flex-col items-center space-y-4 p-6 border rounded-lg shadow-md">
      <div class="text-red-600">
        <svg class="w-16 h-16" fill="none" stroke="currentColor" stroke-width="1.5"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M12 4v16m8-8H4" />
        </svg>
      </div>
      <h3 class="text-xl font-semibold">Step 3</h3>
      <p class="text-gray-600">Upload documents in JPG or PDF format</p>
    </div>

    <!-- Step 4 -->
    <div class="flex flex-col items-center space-y-4 p-6 border rounded-lg shadow-md">
      <div class="text-red-600">
        <svg class="w-16 h-16" fill="none" stroke="currentColor" stroke-width="1.5"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M5 10h14M12 6l4 4-4 4" />
        </svg>
      </div>
      <h3 class="text-xl font-semibold">Step 4</h3>
      <p class="text-gray-600">Choose your preferred course</p>
    </div>

    <!-- Step 5 -->
    <div class="flex flex-col items-center space-y-4 p-6 border rounded-lg shadow-md">
      <div class="text-red-600">
        <svg class="w-16 h-16" fill="none" stroke="currentColor" stroke-width="1.5"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3m0 0c1.657 0 3 1.343 3 3m-3-3c1.657 0 3-1.343 3-3s-1.343-3-3-3m0 0V4m0 16v-4" />
        </svg>
      </div>
      <h3 class="text-xl font-semibold">Step 5</h3>
      <p class="text-gray-600">Choose your payment method</p>
    </div>

    <!-- Step 6 -->
    <div class="flex flex-col items-center space-y-4 p-6 border rounded-lg shadow-md">
      <div class="text-red-600">
        <svg class="w-16 h-16" fill="none" stroke="currentColor" stroke-width="1.5"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M9 12l2 2 4-4M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z" />
        </svg>
      </div>
      <h3 class="text-xl font-semibold">Step 6</h3>
      <p class="text-gray-600">Complete admission with online payment</p>
    </div>

  </div>

  <div class="mt-12 text-center text-gray-600 text-base">
    <p>The entire process should take approximately <span class="font-semibold text-red-600">10 minutes</span>. After submission, our team may take up to <span class="font-semibold text-yellow-500">48 hours</span> to review your application.</p>
  </div>
</section>

@endsection