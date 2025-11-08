@extends('layouts.app')
@section('title', 'Japanese Language Institute In India | Kazumi School')
@section('meta_description',
    'Kazumi School is a leading Japanese language institute in India, offers expert-led courses from beginner (N5) to advanced (N1) levels. Start learning Japanese today!')
@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Kazumi Japanese & Culture School",
  "alternateName": "Kazumischool",
  "url": "https://kazumischool.com/",
  "logo": "https://d1d5cy0fmpy9m8.cloudfront.net/images/1755407733logo.webp",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91 989 957 7620",
    "contactType": "customer service",
    "contactOption": ["TollFree","HearingImpairedSupported"],
    "areaServed": "IN",
    "availableLanguage": ["en","Japanese"]
  },
  "sameAs": "https://kazumischool.com/contact-us"
}
</script>
@endsection
@section('content')
    
    <section>
        <div class="relative w-full h-screen overflow-hidden"
            style="background-size: cover; background-repeat: no-repeat; background-image: url(https://d1d5cy0fmpy9m8.cloudfront.net/images/1755338858banner1.webp); background-position: top;">
            <div
                class="relative z-10 flex flex-col justify-center space-y-4 items-center h-full text-center text-white bg-black bg-opacity-30">
                <h1 class="text-2xl md:text-[48px] tracking-widest mb-10 leading-8 font-[600] md:leading-[60px] leading-[30px]"
                    style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.35);">Welcome to Kazumi Japanese & Culture School learn
                    With Expert </h1>
                <p class="capitalize text-xl md:text-3xl tracking-widest font-[600]"
                    style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.95);"
                    style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.35);">新しい日本語教育と文化の基準を体験しましょう</p>
                <p class="capitalize text-xl md:text-3xl tracking-widest mt-4 font-[600]"
                    style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.35);"
                    style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.35);">Discover a new standard of Japanese Education and
                    Culture</p>
                <div class="flex space-x-4 mb-8 items-center justify-center">
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"
                        class="bg-red-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-red-600 cursor-pointer">Apply
                        Now</button>
                    <a href="/about-us"
                        class="bg-red-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-red-600"> Learn
                        More</a>
                </div>
                <div>
                    <style>
                        @keyframes bounceY {

                            0%,
                            100% {
                                transform: translateY(0);
                            }

                            50% {
                                transform: translateY(10px);
                            }
                        }

                        .animate-bounceY {
                            animation: bounceY 1s infinite;
                        }
                    </style>
                    <button class="bg-white bg-opacity-50 text-red-800 p-4 rounded-full hover:bg-opacity-40 shadow-md"
                        onclick="document.getElementById('course_section').scrollIntoView({ behavior: 'smooth' });">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 animate-bounceY" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7M19 5l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- courses section --}}
    <section id="course_section" class="py-12 px-4 max-w-7xl mx-auto">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Courses
        </h2>
        <p class="text-center text-gray-600 text-[16px] font-[600] my-2">Just like the famous Japanese proverb "継続は力なり"
            (Continuity is power), we bring a series of courses starting from Basic (N5) to Super Advanced (N1) level for
            continuous learning and growth.</p>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 my-10">
            <div class="w-full flex flex-col rounded-xl overflow-hidden">
                <img class="w-full h-60 object-cover"
                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755328587japan-language.webp"
                    loading="lazy "alt="Japanese Language Courses All Levels" loading="lazy">
                <div class=" h-full py-4">
                    <h3 class="text-[18px] font-[500] text-gray-900">Japanese Language Courses</h3>
                    <p class="text-[16px] text-gray-700 mt-2 flex-grow">Extensive & intensive modules 平日 (Heijitsu) and 週末
                        (Shūmatsu) batch</p>
                    <div class="mt-2">
                        <ul class="">
                            <li><a href="/japanese-beginners-course"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Japanese for Beginners
                                    Course</a></li>
                            <li><a href="/japanese-language-course"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Japanese Language N5 Level
                                    Course</a></li>
                            <li><a href="/japanese-language-course"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Japanese Language N4 Level
                                    Course</a></li>
                            <li><a href="/japanese-language-course"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Japanese Language N3 Level
                                    Course</a></li>
                            <li><a href="/japanese-language-course"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Japanese Language N3 Level
                                    Course</a></li>
                            <li><a href="/japanese-language-course"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Japanese Language N1 Level
                                    Course</a></li>
                            <li><a href="/post-graduate-diploma-in-japanese-language-by-dbs"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Post Graduate Diploma in
                                    Japanese Language by Dunster Business School, Switzerland</a></li>
                            <li><a href="/post-graduate-diploma-professional-in-japanese-language-by-dbs"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Post Graduate Diploma
                                    Professional in Japanese Language by Dunster Business School, Switzerland</a></li>
                            <li><a href="/masters-in-japanese-language"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Master’s in Japanese
                                    Language</a></li>
                            <li><a href="/migrate-japan" class="text-red-600 hover:underline text-[14px] font-[600]">Migrate
                                    to Japan Course</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="w-full flex flex-col rounded-xl overflow-hidden">
                <img class="w-full h-60 object-cover"
                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755328425occupational.webp"
                    loading="lazy "alt="Japanese Occupational Courses" loading="lazy">
                <div class=" h-full py-4">
                    <h3 class="text-[18px] font-[500] text-gray-900">Japanese Occupational Courses</h3>
                    <p class="text-[16px] text-gray-700 mt-2 flex-grow">Extensive & Intensive courses for 個人 (Kojin) in
                        corporate and business sector</p>
                    <div class="mt-4">
                        <ul class="">
                            <li><a href="/business-japanese-course"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Business
                                    Japanese Course</a></li>
                            <li><a href="/corporate-business-japanese-course"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Corporate
                                    Business Japanese Course</a></li>
                            <li><a href="/career-japanese-course"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Career
                                    Japanese Course</a></li>
                            <li><a href="/business-japanese-for-beginners-course"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Business
                                    Japanese for Beginners Course</a></li>
                            <li><a href="/intercultural-business-japanese-course"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Intercultural
                                    Business Japanese Course</a></li>
                            <li><a href="/japanese-for-work–hospitality-nursing-it"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Japanese for
                                    Work – Hospitality / Nursing / IT</a></li>
                            {{-- <li><a href="#" class="text-red-600 hover:underline text-[14px] font-[600]">Rocket
                                    Japanese</a></li> --}}
                            <li><a href="/japanese-for-the-workplace-course"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Japanese for
                                    the Workplace Course</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col rounded-xl overflow-hidden">
                <img class="w-full h-60 object-cover"
                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753943372ezgif.com-png-to-webp-converter_(1).webp"
                    loading="lazy "alt="Cross-Cultural Japanese Courses" loading="lazy">
                <div class=" h-full py-4">
                    <h3 class="text-[18px] font-[500] text-gray-900">Japanese Cross-Cultural Courses</h3>
                    <p class="text-[16px] text-gray-700 mt-2 flex-grow">Extensive & Intensive courses for 個人 (Kojin) in
                        corporate and business sector</p>
                    <div class="mt-4">
                        <ul class="">
                            {{-- <li><a href="/pre-departure-orientation-training-and-placement-course" class="text-red-600 hover:underline text-[14px] font-[600]">Pre Departure
                                    Orientation Training & Placement Course</a></li> --}}
                            <li><a href="/japanese-management-course"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Japanese
                                    Management Course</a></li>
                            {{-- <li>
                                <a href="/cross-cultural-sensitization-for-engineers-businessmen-and-professionals-course"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Cross-Cultural
                                    Sensitization for Engineers, Businessmen & Professionals</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col rounded-xl overflow-hidden">
                <img class="w-full h-60 object-cover"
                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755328153japan-book.webp"
                    loading="lazy "alt="Crash Course in Japanese Language , N5 to N1" loading="lazy">
                <div class=" h-full py-4">
                    <h3 class="text-[18px] font-[500] text-gray-900">Crash Course in Japanese Language</h3>
                    <p class="text-[16px] text-gray-700 mt-2 flex-grow">Cover all the topics from N5 (basic) to N1
                        (advance) level, understand important and useful Japanese 伝統（Dentō) and etiquettes</p>
                    <div class="mt-4">
                        <ul class="">
                            <li><a href="/crash-course-for-japanese-language"
                                    class="text-red-600 hover:underline text-[14px] font-[600]">Crash Course for Japanese
                                    Language</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- vedio section --}}
    <section class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Testimonial
                Videos
            </h2>
            <div class="relative">
                <!-- Video Grid -->
                <div id="videoGrid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2">

                   
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755500037review-vedeo1.webp"
                            data-video="https://www.youtube.com/embed/HAI_ZAMooLk?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review By Sachet">
                    </div>

                   
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755500240anupam.webp"
                            data-video="https://www.youtube.com/embed/K4NAAHCtbo8?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review By Anupam">
                    </div>

                   
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/mZkFP1ZWJv4/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/mZkFP1ZWJv4?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review">
                    </div>

                   
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/YqdggC5M90s/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/YqdggC5M90s?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review by Khushi Goswami">
                    </div>

                    
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/L9QZCK1P5O0/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/L9QZCK1P5O0?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review by Khushi Jain">
                    </div>

                   
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/JYPNfkyyx08/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/JYPNfkyyx08?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review by Vandana">
                    </div>

                    
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/BooTihSy8dA/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/BooTihSy8dA?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Review by Tarni">
                    </div>

                    
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/h2558oOB2GM/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/h2558oOB2GM?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review by Rayajiri Kumar">
                    </div>

                   
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/uggeKrYDD1s/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/uggeKrYDD1s?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review by Mayuresh">
                    </div>

                   
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/RvJ-DSVFVv4/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/RvJ-DSVFVv4?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Review by Vasundhara">
                    </div>

                    
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/2vKgb2MJlzI/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/2vKgb2MJlzI?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Review by Pravallika">
                    </div>

                   
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/LCPhZuc1RqQ/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/LCPhZuc1RqQ?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Review by Tanisha">
                    </div>

{{--                     
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/TQM2QkyQ9eE/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/TQM2QkyQ9eE?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Review by Vivek Saini">
                    </div>

                    
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/_BMlRAi9dK8/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/_BMlRAi9dK8?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Reviews">
                    </div>

                   
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/pfkbInIwD6Q/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/pfkbInIwD6Q?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Reviews">
                    </div>

                    
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/5rIlYy7SO08/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/5rIlYy7SO08?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Review By Muskan">
                    </div>

                   
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/O_yLL2aNXTY/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/O_yLL2aNXTY?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Reviews">
                    </div>

                 
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/bsPvt3xJTEc/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/bsPvt3xJTEc?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Review by Prashub">
                    </div> --}}

                </div>



            </div>
        </div>
    </section>

     <section class="max-w-[1300px] mx-auto md:px-4 px-2 py-10">
    <h3 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4]">
        Read Learner's Experience on WhatsApp
    </h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
        @foreach ($review as $rl)
            <div
                class="bg-white rounded-xl shadow-xl overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1 group">
                <div class="relative">
                    <img src="{{ $rl->file }}" alt="Review Proof"
                        class="w-full object-scale-down" style="height:150px;">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                        <a href="{{ $rl->file }}" target="_blank" rel="noopener noreferrer"
                            class="px-2 py-1 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-sm font-medium rounded-lg shadow-md hover:from-blue-700 hover:to-indigo-700 transition">
                            Click to Open Proof
                        </a>
                    </div>
                </div>



                    <div class="p-2 text-center border-t-2 border-[#ffc107]">
                            <h2 class="text-[14px] md:text-[16px] font-[600] text-purple mb-1">
                        {{ $rl->name }}
                    </h3>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="max-w-[1500px] mx-auto  px-2 py-10">
    {{-- @if($academy_name->academy_url != 'fellowship-courses') --}}
        <div class="bg-[#dce2e9] pb-6 pt-4" id="reviews">
            <div class="md:mx-[100px] mx-[1rem]" style="" id="linkedin_review_course_section">
                <p class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4]">
                    Checkout Learner's Experiences on LinkedIn
                    {{-- Check out Henry Harvin® {{ $course->course_name }} alumna on LinkedIn --}}
                </p>
                {{-- LinkedIn Reviews Section --}}
                {{-- @if(isset($linkdinData) && $linkdinData->isNotEmpty())
                    <div class="max-w-full m-auto border-purple my-2 py-2">
                        <div class="swiper swiper-slider-linked mt-4">
                            <div class="swiper-wrapper">
                                @foreach ($linkdinData as $item)
                                    <div class="rounded swiper-slide bg-white shadow-2xl">
                                        <div class="h-30 w-full relative flex items-center justify-center">
                                            <img style="height: 200px;" class="w-full" src="{{ $item->image }}" alt="LinkedIn Review Image">
                                            <a aria-label="linkedin" 
                                               class="absolute bottom-6 right-4 text-white bg-[#0e76a8] shadow-lg font-normal h-10 w-10 flex items-center justify-center rounded-full" 
                                               href="{{ $item->linkedin_url }}" 
                                               target="_blank" 
                                               rel="noopener noreferrer">
                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="p-2">
                                            <p class="text-[20px] font-[500] text-center">{{ $item->name }}</p>
                                        </div>
                                        <div class="flex p-2 border-t-2 items-center gap-2 justify-center">
                                            <img class="object-scale-down w-full h-14 p-2 overflow-hidden" src="{{ $item->company_logo }}" alt="Company Logo">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif --}}

                {{-- User Feedback Section --}}
                @if(isset($userFeedback) && $userFeedback->isNotEmpty())
                    @php
                        $count = $userFeedback->slice(0, 9)->count();
                        $chunks = $count > 0 
                            ? $userFeedback->slice(0, 20)->split(ceil($count / 3)) 
                            : $userFeedback->slice(0, 20)->split(1);
                    @endphp

                    @foreach($chunks as $chunk)
                        <div class="courseSwiper swiper-course-all mx-[1rem] overflow-hidden">
                            <div class="swiper-wrapper">
                                @foreach ($chunk as $rev)
                                    <div class="mt-4 swiper-slide">
                                        <div class="shadow-lg bg-white py-2 px-2 md:px-4 rounded-md border-b-2 border-b-purple-800">
                                            <div class="flex justify-between items-center">
                                                 <div>
                                                    <img class="h-14 w-14 rounded-full" 
                                                         src="{{ urldecode($rev->image) }}" 
                                                         onerror='this.src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719480745ded3d.webp"' 
                                                         alt="User Image" 
                                                         loading="lazy" />
                                                </div> 

                                                <div>
                                                    <span>{{ $rev->first_name }}</span><br>
                                                    <span class="text-[#F5AB40] text-xl">★ ★ ★ ★ ★</span>
                                                </div>
                                                <div class="text-blue-500">
                                                    <a href="{{ $rev->linkedin_url }}" target="_blank" rel="noopener noreferrer">
                                                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17194808473rrf3rf3f.webp" alt="LinkedIn Icon" width="30px">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                @else
                    @php
                        $count = $review->slice(0, 9)->count();
                        $divisionResult = $count > 0 ? ceil($count / 3) : 1;
                        $rowsss = $review->slice(0, 20)->split($divisionResult);
                    @endphp

                    @foreach($rowsss as $rowss)
                        <div class="courseSwiper swiper-course-all mx-[1rem] overflow-hidden">
                            <div class="swiper-wrapper">
                                @foreach ($rowss as $rev)
                                    <div class="mt-4 swiper-slide">
                                        <div class="shadow-lg bg-white py-2 px-2 md:px-4 rounded-md border-b-2 border-b-purple-800">
                                            <div class="flex justify-between items-center">
                                                <div>
                                                    <img class="h-14 w-14 rounded-full" 
                                                         src="{{ $rev->review_image }}" 
                                                         onerror='this.src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719480745ded3d.webp"' 
                                                         alt="Reviewer Image" 
                                                         loading="lazy" />
                                                </div>
                                                <div>
                                                    <span>{{ $rev->review_name }}</span><br>
                                                    <span class="text-[#F5AB40] text-xl">★ ★ ★ ★ ★</span>
                                                </div>
                                                <div class="text-blue-500">
                                                    <a href="{{ $rev->review_link ? $rev->review_link : 'https://www.henryharvin.com/reviews/' }}" 
                                                       target="_blank" 
                                                       rel="noopener noreferrer">
                                                        {{ $rev->review_link ? 'Check Proof' : 'See Proof' }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    {{-- @endif --}}
</section>
    {{-- reviews section --}}
    <section class="py-12 px-4 bg-gray-100">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4"> <span class="text-gray-800 text-3xl md:text-4xl font-[700] italic">7000+ </span> Reviews
                with <span class="text-gray-800 text-3xl md:text-4xl font-[700] italic"> 4.6/5 </span> Average Rating
            </h2>
            {{-- <div
                class="relative max-w-[1200px] mx-auto grid lg:grid-cols-4 md:grid-cols-2 grid-cols-2 py-4 gap-4 md:gap-8 my-1 rounded-lg">
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.8
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star-half text-red-700"></i></a>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1733730860forbes.webp"
                        loading="lazy "alt="justdial1" loading="lazy">
                </div>
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.5
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star-half text-red-700"></i></a>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1746770909ezgif.com-resize.png"
                        loading="lazy "alt="justdial" loading="lazy">
                </div>
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.9
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i></a>
                    </div>
                    <img class="h-16"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1730089884544x180-BR-300x99-1.png"
                        loading="lazy "alt="mouthshut2" loading="lazy">
                </div>
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">5.0
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i></a>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1752832498wwd2e1.png"
                        loading="lazy "alt="edugorrilla" loading="lazy">
                </div>
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">5.0
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i></a>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17196452202d2d (2).webp"
                        loading="lazy "alt="google" loading="lazy">
                </div>
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.5
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star-half text-red-700"></i></a>
                    </div>
                    <img class="h-16" src="https://cdn.henryharvin.com/gooo1.webp" loading="lazy "alt="google2"
                        loading="lazy">
                </div>
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.6
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star-half text-red-700"></i></a>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755412282course-report.webp"
                        loading="lazy "alt="course report">
                </div>
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.5
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star-half text-red-700"></i></a>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/171964550223e23e23.webp"
                        loading="lazy "alt="google4">
                </div>
            </div> --}}
            <div
                class="relative max-w-[1200px] mx-auto grid lg:grid-cols-4 md:grid-cols-2 grid-cols-2 py-4 gap-4 md:gap-8 my-1 rounded-lg">
                <a href="https://www.forbesindia.com/article/brand-connect/henry-harvin-reviews-485-across-the-web/94745/1"
                    class="cursor-pointer grid block place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <p class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.8
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star-half text-red-700"></i>
                        </p>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1733730860forbes.webp"
                        loading="lazy "alt="justdial1" loading="lazy">
                </a>
                <a href="https://www.justdial.com/Delhi/Henry-Harvin-India-Education-LLP-Near-Noida-Authority-Noida-Sector-6/011PXX11-XX11-181022173738-G2E3_BZDET/reviews"
                    class="cursor-pointer grid block place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <p class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.5
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star-half text-red-700"></i>
                        </p>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1746770909ezgif.com-resize.png"
                        loading="lazy "alt="justdial" loading="lazy">
                </a>
                <a href="https://reviewsreporter.com/"
                    class="cursor-pointer grid block place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <p class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.9
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i>
                        </p>
                    </div>
                    <img class="h-16"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1730089884544x180-BR-300x99-1.png"
                        loading="lazy "alt="mouthshut2" loading="lazy">
                </a>
                <a href="https://www.mouthshut.com/product-reviews/henryharvin-reviews-926062756"
                    class="cursor-pointer grid block place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <p class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">5.0
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i>
                        </p>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1752832498wwd2e1.png"
                        loading="lazy "alt="edugorrilla" loading="lazy">
                </a>
                <a href="https://www.google.com/search?q=HenryHarvin"
                    class="cursor-pointer grid block place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <p class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">5.0
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i>
                        </p>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17196452202d2d (2).webp"
                        loading="lazy "alt="google" loading="lazy">
                </a>
                <a href="https://www.gooverseas.com/organization/henry-harvin-tefl-academy-reviews"
                    class="cursor-pointer grid block place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <p class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.5
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star-half text-red-700"></i>
                        </p>
                    </div>
                    <img class="h-16" src="https://cdn.henryharvin.com/gooo1.webp" loading="lazy "alt="google2"
                        loading="lazy">
                </a>
                <a href="https://www.coursereport.com/schools/henry-harvin-education"
                    class="cursor-pointer grid block place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <p class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.6
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star-half text-red-700"></i>
                        </p>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755412282course-report.webp"
                        loading="lazy "alt="course report">
                </a>
                <a href="https://www.urbanpro.com/noida/henry-harvin-education-sector-18/6237579"
                    class="cursor-pointer grid block place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <p class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.5
                            <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                                class="fa fa-star-half text-red-700"></i>
                        </p>
                    </div>
                    <img class="h-8 md:h-10"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1761911090ezgif.com-webp-maker_(2).webp"
                        loading="lazy "alt="google4">
                </a>
            </div>
        </div>
    </section>
    <section id="stats" class="py-4 bg-red-600 mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                <div class="bg-white shadow-md rounded-lg p-2">
                    <h3 class="text-[32px] font-semibold text-center text-gray-800 mb-1">Countries</h3>
                    <div class="flex items-center justify-center gap-2">
                        <p class="text-[32px] font-bold text-red-600 count-up" data-count="97">97</p>
                        <span class="text-5xl font-[600] text-red-600">+</span>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg p-2">
                    <h3 class="text-[32px] font-semibold text-center text-gray-800 mb-1">Enrolled Students</h3>
                    <div class="flex items-center justify-center gap-2">
                        <p class="text-[32px] font-bold text-red-600">4,60,000</p>
                        <span class="text-5xl font-[600] text-red-600">+</span>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg p-2">
                    <h3 class="text-[32px] font-semibold text-center text-gray-800 mb-1">Established in</h3>
                    <div class="flex items-center justify-center gap-2">
                        <p class="text-[32px] font-bold text-red-600 count-up" data-count="2013">2013</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- why kazumi section --}}
    <section class="py-12 bg-gray-100 mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize mt-4 mb-4"> Why
                Kazumi Japanese & Culture 文化 School?
            </h2>
            <div class="py-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 text-center">
                    <div
                        class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center col-span-1 sm:col-span-1 md:col-span-1">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755412161fi-200.webp"
                                loading="lazy "alt="Native Trainers, Kazumi School">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Native Japanese Trainers</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Learn from certified, highly 経験豊富 (keiken hōfu) and 情熱的な
                            (jōnetsu-teki na) faculties.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753789154examsheet.jpg"
                                loading="lazy "alt="JLPT Intensive Course">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">JLPT Intensive Course</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Excel in the JLPT with our 専門的な (Senmon-teki na) modules,
                            mock tests, personalized coaching, and JLPT-focused materials sourced directly from Japan.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755407988ewcd.webp"
                                loading="lazy "alt=" E-learning Portal, Kazumi School">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Access to E-learning Portal</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Kazumi partners with <span>
                                <a href="https://examopedia.com/"
                                    class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1734598082examopedia_logo.webp"
                                        loading="lazy "alt="Examopedia Logo" class="h-4">Examopedia</span> </a>
                            , a comprehensive E-learning portal that provides future updates, PPTs, projects, quizzes, 模擬試験
                            (Mogi Shiken), question banks, assessments and interactive forums.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753789196OccupationalPrograms.jpg"
                                loading="lazy "alt="Japanese Occupational Courses">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Japanese Occupational Courses</h3>
                        <p class="text-gray-700 text-[14px] mt-2">At Kazumi, we offer programs that will help you build
                            corporate, business and 職場 (shokuba) skills required to secure good 仕事 (shigoto)
                            internationally.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753774339talking.jpg"
                                loading="lazy "alt=" Internship for Japanese, Kazumi School">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Internship for Japanese Language</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Kazumi provides Internship Support via
                            <span><a href="https://yuvaintern.com//"
                                    class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755412491yuvaintern.webp"
                                        loading="lazy "alt="Yuva Intern Logo" class="h-4">Yuva Intern</span> </a>
                            , India’s first バーチャル (bācharu) internship platform where you get to select from the best
                            curated internships that match your skills and interests.
                        </p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755408524ezgif.com-resize_(5).webp"
                                loading="lazy "alt="Study Abroad, Kazumi School">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Study Abroad & Recruitment Services</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Kazumi offers study abroad and 就職支援 (Shūshoku Shien) via
                            <a href="https://leochase.com/"
                                class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                    src="https://leochase.com/wp-content/uploads/2025/04/Logo_Leo-Chase_F.png"
                                    loading="lazy "alt="Leo & Chase Logo" class="h-3">Leo & Chase</span> </a>
                            , no. 1 recruitment provider, assisting from visa application to settling abroad.
                        </p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755408255agota_kazumi.webp"
                                loading="lazy "alt="Agota Framework, Kazumi School">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Unique 10 in 1 Program: Agota™ Framework</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Learn through innovative teaching methods that make
                            learning easy and 実践的 (Jissen-teki). This framework essentially promotes the 能力 (Nōryoku)
                            development and キャリア (Kyaria) development.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753789015orconnections.jpg"
                                loading="lazy "alt="Global Presence, Kazumi School">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Global Presence</h3>
                        <p class="text-gray-700 text-[14px] mt-2">With offices in 4+ countries, UK, USA, Middle East, and
                            India, Kazumi is a global brand, offering a global learning 環境 (kankyō), with around 1200+
                            international 学生 (gakusei).</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753774903Network.jpg"
                                loading="lazy "alt=" International Alumni, Kazumi School">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">International Alumni Network</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Join a diverse コミュニティ(Komyuniti) of learners and
                            professionals from around the world.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753774206culture.jpg"
                                loading="lazy "alt="Japanese Cultural Training">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Cultural Training</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Explore 伝統 (Dentō), etiquettes, festivals, and practices
                            used in an authentic environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Accreditations & Affiliations section --}}
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Accreditations
                &
                Affiliations
            </h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                    <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1724768847Screenshot_2024-08-27_190332.png"
                            loading="lazy "alt="AAEFL" class="h-28 w-auto">
                    </div>
                </div>
                <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                    <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753255971sxsssswc.PNG"
                            loading="lazy "alt="AAEFL56" class=" h-28 w-auto">
                    </div>
                </div>
                <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                    <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1726071455watts_we_logo_jft.png"
                            loading="lazy "alt="AAEF565L" class=" h-28 w-auto">
                    </div>
                </div>
                <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                    <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1736849226DBS_C-01.png"
                            loading="lazy "alt="AAEFLewe" class=" h-28 w-auto">
                    </div>
                </div>
                <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                    <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753943295ezgif.com-resize_(2).webp"
                            loading="lazy "alt="AAEFdfhL" class=" h-16 w-auto">
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                    <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755412756aaefl.webp"
                            loading="lazy "alt="AAEFL897" class=" h-24 w-auto">
                    </div>
                </div>
                <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                    <div class="w-full mx-auto text-center overflow-hidden flex gap-2 justify-center">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755413236nsdc.webp"
                            loading="lazy "alt="AAEFLfsdf" class=" h-16 w-auto">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753882471skills.svg"
                            loading="lazy "alt="AAEFLsde" class=" h-16 w-auto">

                    </div>
                </div>
                <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                    <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755412903ukaf.webp"
                            loading="lazy "alt="AAEFL" class=" h-24 w-auto">
                    </div>
                </div>
                <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                    <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                        <img src="https://cdn.henryharvin.com/images/1683959347ezgif.com-resize%20(20).webp"
                            loading="lazy "alt="AAEFLcxcvcxz" class=" h-24 w-auto">
                    </div>
                </div>
                <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                    <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753941817ezgif.com-resize_(1).webp"
                            loading="lazy "alt="AAEFLqwdD" class=" h-24 w-auto">
                    </div>
                </div>
                <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                    <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755413059ministry.webp"
                            loading="lazy "alt="AAEFLFGEFF" class=" h-24 w-auto">
                    </div>
                </div>
                <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                    <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753941817ezgif.com-resize_(1).webp"
                            loading="lazy "alt="AAEFDFEEGEL" class=" h-24 w-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- placement partners section --}}
    <section class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Placement
                Partners
            </h2>
            <div class="swiper linearswiper">
                <div class="swiper-wrapper my-4" style="transition-timing-function: linear !important;">
                    <div
                        class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                        <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755327998tatat.webp"
                            loading="lazy "alt="images-8">
                    </div>
                    <div
                        class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                        <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753867955images.png"
                            loading="lazy "alt="images-81">
                    </div>
                    <div
                        class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                        <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753868038images_(1).png"
                            loading="lazy "alt="images-8">
                    </div>
                    <div
                        class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                        <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753868067images_(2).png"
                            loading="lazy "alt="images-82">
                    </div>
                    <div
                        class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                        <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753868099sdl-logo-png_seeklogo-347042.png"
                            loading="lazy "alt="images-83">
                    </div>
                    <div
                        class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                        <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175386813502c4095c-f9fa-4d70-be49-63ba162289e2_thumb.jpg"
                            loading="lazy "alt="images-84">
                    </div>
                    <div
                        class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                        <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753868252images_(3).png"
                            loading="lazy "alt="images-85">
                    </div>
                    <div
                        class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                        <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753868291images_(4).png"
                            loading="lazy "alt="images-86">
                    </div>
                    <div
                        class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                        <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753868344images_(5).png"
                            loading="lazy "alt="images-88">
                    </div>
                    <div
                        class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                        <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753868383images_(6).png"
                            loading="lazy "alt="images-87">
                    </div>
                    <div
                        class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                        <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753868430FirstStudy.jpg"
                            loading="lazy "alt="images-89">
                    </div>
                    <div
                        class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                        <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753868553Hotsuma.jpg"
                            loading="lazy "alt="images-809">
                    </div>
                    <div
                        class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                        <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753868596Human.jpg"
                            loading="lazy "alt="images-8FDF">
                    </div>
                    <div
                        class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                        <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753868637Linguage.jpg"
                            loading="lazy "alt="images-8DFD">
                    </div>
                    <div
                        class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                        <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753868755JCCIC.png"
                            loading="lazy "alt="images-8DFD">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- esteemed faculty section --}}
    <section class="py-12">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Esteemed
                Faculty
            </h2>


            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 px-2">
                <div class="">
                    <div class="grid p-2 gap-2 place-items-center rounded-2xl"
                        style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                        <div class="rounded-2xl">
                            <img class="h-full w-full object-cover rounded-2xl"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753875885212w-ezgif.com-resize.webp"
                                loading="lazy "alt="FEFE">
                        </div>
                        <div class="px-2">
                            <h2 class="text-white text-center text-[16px] md:text-[16px] pb-2">Seema
                            </h2>
                            <h2 class="text-white text-[14px] text-center md:text-[14px] font-[500]">21+ Years
                                Of Experience</h2>
                            <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="grid p-2 gap-2 place-items-center rounded-2xl"
                        style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                        <div class="rounded-2xl">
                            <img class="h-full w-full object-cover rounded-2xl"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753522620Varsha_Mehroliya.jpg"
                                loading="lazy "alt="Varsha Mehroliya">
                        </div>
                        <div class="px-2">
                            <h2 class="text-white text-center text-[16px] md:text-[16px] pb-2">Varsha Mehroliya
                            </h2>
                            <h2 class="text-white text-[14px] text-center md:text-[14px] font-[500]">5+ Years
                                Of Experience</h2>
                            <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="grid p-2 gap-2 place-items-center rounded-2xl"
                        style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                        <div class="rounded-2xl">
                            <img class="h-full w-full object-cover rounded-2xl"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753522683Sonali_Srivastava_(1).jpg"
                                loading="lazy "alt="Sonali Srivastava">
                        </div>
                        <div class="px-2 ">
                            <h2 class="text-white text-center text-[16px] md:text-[16px] pb-2">Sonali Srivastava
                            </h2>
                            <h2 class="text-white text-[14px] text-center md:text-[14px] font-[500]">6+ Years
                                Of Experience</h2>
                            <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="grid p-2 gap-2 place-items-center rounded-2xl"
                        style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                        <div class="rounded-2xl">
                            <img class="h-full w-full object-cover rounded-2xl"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17532671153rd.webp"
                                loading="lazy "alt="Claire">
                        </div>
                        <div class="px-2 ">
                            <h2 class="text-white text-center text-[16px] md:text-[16px] pb-2">Claire</h2>
                            <h2 class="text-white text-[14px] text-center md:text-[14px] font-[500]">6+ Years
                                Of Experience</h2>
                            <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                        </div>
                    </div>
                </div>

            </div>
            <div class="mt-4 flex justify-center items-center">
                <a href="/esteemed-faculty"
                    class="bg-red-500 text-white text-[14px] px-6 py-2 rounded hover:bg-red-600">View More</a>
            </div>
        </div>
    </section>
    <section class="py-12">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Kazumi Advisory
                Board Members</h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-2 place-items-center px-2">

                <div
                    class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                    <div class="rounded-2xl">
                        <img class="h-full w-full object-cover rounded-2xl"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1754287214a.jpg"
                            alt="Toshiyuki Takayasu – Board Advisor">
                    </div>
                    <div class="px-2">
                        <h3 class="text-white text-center text-[16px] pb-2">Toshiyuki Takayasu</h3>
                        {{-- <p class="text-white text-[14px] text-center font-[500]">Head of Faculty</p> --}}
                        <p class="text-white text-[14px] text-center">Board Advisor</p>
                    </div>
                </div>
                <div
                    class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                    <div class="rounded-2xl">
                        <img class="h-full w-full object-cover rounded-2xl"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1754310784qsd.jpg"
                            alt="Chinami Yamamoto – Board Advisor">
                    </div>
                    <div class="px-2">
                        <h3 class="text-white text-center text-[16px] pb-2">Chinami Yamamoto</h3>
                        {{-- <p class="text-white text-[14px] text-center font-[500]">Head of Faculty</p> --}}
                        <p class="text-white text-[14px] text-center">Board Advisor</p>
                    </div>
                </div>
                <div
                    class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                    <div class="rounded-2xl">
                        <img class="h-full w-full object-cover rounded-2xl"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755152043Daisuke-Yamanaka.webp"
                            alt="Daisuke Yamanaka – Board Advisor">
                    </div>
                    <div class="px-2">
                        <h3 class="text-white text-center text-[16px] pb-2">Daisuke Yamanaka</h3>
                        {{-- <p class="text-white text-[14px] text-center font-[500]">Head of Faculty</p> --}}
                        <p class="text-white text-[14px] text-center">Board Advisor</p>
                    </div>
                </div>
                <div
                    class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                    <div class="rounded-2xl">
                        <img class="h-full w-full object-cover rounded-2xl"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753961856seemarampal.jpg"
                            alt="Seema Rampal – Head of Faculty">
                    </div>
                    <div class="px-2">
                        <h3 class="text-white text-center text-[16px] pb-2">Mrs. Seema Rampal</h3>
                        <p class="text-white text-[14px] text-center font-[500]">Head of Faculty</p>
                        {{-- <p class="text-white text-[14px] text-center">Board Advisor</p> --}}
                    </div>
                </div>
                <div
                    class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                    <div class="rounded-2xl">
                        <img class="h-full w-full object-cover rounded-2xl"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753961907IshuJain.jpg"
                            alt=" Ishu Jain – Head of Academics">
                    </div>
                    <div class="px-2">
                        <h3 class="text-white text-center text-[16px] pb-2">Mrs. Ishu Jain</h3>
                        <p class="text-white text-[14px] text-center font-[500]">Head of Academics</p>
                        {{-- <p class="text-white text-[14px] text-center">Board Advisor</p> --}}
                    </div>
                </div>

                <!-- Mr. Kounal Gupta -->
                <div
                    class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                    <div class="rounded-2xl">
                        <img class="h-full w-full object-cover bg-white rounded-2xl"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1758794864kounal_gupta-removebg-preview.png"
                            alt="Kounal Gupta – CEO & Founder Kazumi Japanese & Culture School">
                    </div>
                    <div class="px-2">
                        <h3 class="text-white text-center text-[16px] pb-2">Mr. Kounal Gupta</h3>
                        <p class="text-white text-[14px] text-center font-[500]">CEO, Henry Harvin Education</p>
                        {{-- <p class="text-white text-[14px] text-center">Board Advisor</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Agota™ Framework section --}}
    <section class="py-12 mx-auto px-4">
        <div class="max-w-6xl mx-auto" bis_skin_checked="1">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-2 text-[#da2028] capitalize my-4">Agota™ Framework
            </h2>
            <p class="text-[16px] text-gray-800 font-[600] text-center">AGOTA™ Framework is a trajectory that offers
                complete growth of an individual incorporating the two most significant focus areas of contemporary
                learning:<span class="font-bold text-gray-900"> The 能力 (Nōryoku) development and キャリア (Kyaria) development.
                </span></p>
            <p class="text-[16px] text-gray-800 font-[600] text-center mt-4"><span class="font-bold text-gray-900">能力
                    (Nōryoku) development </span> is about building capabilities that not only meet current job demands but
                also anticipates the future needs. It includes:</p>
            <div class="relative grid md:grid-cols-2 gap-2 my-2" bis_skin_checked="1">
                <div bis_skin_checked="1">
                    <ul class="disk mt-2">
                        <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">1: Training
                                    <span class="block text-[12px] text-gray-800 font-[600]">144 Hours of Two-Way Live
                                        Online Interactive Sessions</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2 " bis_skin_checked="1">
                                    <a target="_blank" href="https://youtu.be/lMkxmdUnAPc"
                                        bis_size="{&quot;x&quot;:258,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1734}">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487194ezgif.com-resize (32).webp"
                                            loading="lazy "alt="Video Thumbnail"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg"
                                            bis_size="{&quot;x&quot;:258,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1734}"
                                            bis_id="bn_k6nxes1kgls9urroq3b79m">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">2: Projects
                                    <span class="block text-[12px] text-gray-800 font-[600]"> Facility to undergo projects
                                        along with the course</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank" href="https://youtu.be/p86YBsCkb0A"
                                        bis_size="{&quot;x&quot;:580,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1734}">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719575893ezgif.com-resize - 2024-06-28T172803.379.webp"
                                            loading="lazy "alt="Video ThumbnailRE"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg"
                                            bis_size="{&quot;x&quot;:580,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1734}"
                                            bis_id="bn_r7y6rulp4482rexmqhjbp6">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">3: Student Engagement &amp; Events
                                    <span class="block text-[12px] text-gray-800 font-[600]"> Free Access to #AskHenry
                                        Hackathons and Competitions & many other facilities from Henry Harvin®</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2 " bis_skin_checked="1">
                                    <a target="_blank" href="https://youtu.be/K7HdNdMwOuE"
                                        bis_size="{&quot;x&quot;:258,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1847}">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719576156sxw (2).webp"
                                            loading="lazy "alt="Video ThumbnaiERl"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg"
                                            bis_size="{&quot;x&quot;:258,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1847}"
                                            bis_id="bn_76rdo306qf4u6okmbjp8xc">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">4: Masterclass
                                    <span class="block text-[12px] text-gray-800 font-[600]">Access to 52+ Masterclass
                                        Sessions for essential soft スキル (Sukiru) development</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank" href="https://youtu.be/Gk3t1W3LVZ8"
                                        bis_size="{&quot;x&quot;:580,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1847}">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719577083dcwcw.webp"
                                            loading="lazy "alt="Video ThumREbnail"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg"
                                            bis_size="{&quot;x&quot;:580,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1847}"
                                            bis_id="bn_d8rrolf3o360b2tlne44wh">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">5: Membership
                                    <span class="block text-[12px] text-gray-800 font-[600]"> 30 Months Gold Membership of
                                        Henry Harvin® School of Languages</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank" href="https://www.youtube.com/watch?v=bzJOMiJu_QA">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1728970566Membership_Card_Collage_(1).png"
                                            loading="lazy "alt="Video ThumbnailTTT"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">6: E-Learning Access
                                    <span class="block text-[12px] text-gray-800 font-[600]">Get free access to the LMS
                                        having PPTs, projects, self-paced video-based learning, library, quizzes, question
                                        bank, practice tests, final assessments, and a forum, powered by
                                        <a href="https://examopedia.com/"
                                            class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1734598082examopedia_logo.webp"
                                                loading="lazy "alt="Examopedia Logo" class="h-3">Examopedia</span> </a>

                                    </span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank" href="https://www.youtube.com/watch?v=XUQm0ecT6ts">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487342ezgif.com-resize (35).webp"
                                            loading="lazy "alt="Video ThumbnailQWTRT"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <p class="text-[15px] text-left my-8"><span class="font-bold text-gray-900">ア (Kyaria) development
                        </span> lays focus on the essentials for acquiring a good career or diving into a highly competent
                        one. It includes:</p>
                    <ul class="disk">
                        <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">7: 特徴 (Tokuchō) Certification + License
                                    <span class="block text-[12px] text-gray-800 font-[600]">Distinguish your profile with
                                        global credentials and showcase expertise with our 特徴 (Tokuchō) Completion
                                        certificate with Professional License</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank" href="https://youtu.be/LJH79vKhyXc"
                                        bis_size="{&quot;x&quot;:258,&quot;y&quot;:2242,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:2242}">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487248ezgif.com-resize (33).webp"
                                            loading="lazy "alt="Video ThumbnailWERWG"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg"
                                            bis_size="{&quot;x&quot;:258,&quot;y&quot;:2242,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:2242}"
                                            bis_id="bn_0196ld4v20caat8svgsg34">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">8: Internship Support
                                    <span class="block text-[12px] text-gray-800 font-[600]">Get Internship Support with
                                        Henry Harvin® and in top MNCs like J.P. Morgan, Accenture & many more via 100X Suite
                                        and
                                        <a href="https://yuvaintern.com//"
                                            class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755412491yuvaintern.webp"
                                                loading="lazy "alt="YUVA Logo" class="h-3">Yuva Intern</span>
                                    </a>.</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank" href="https://www.youtube.com/shorts/2od0SMHat-A">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719575988d233dd23d.webp"
                                            loading="lazy "alt="Video DSSDDThumbnail"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">9: Entrepreneurship Mentorship
                                    <span class="block text-[12px] text-gray-800 font-[600]">Mentorship from Young
                                        Successful Entrepreneurs to set up a sustainable & scalable Business from scratch at
                                        both Freelance & Entrepreneur level</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank"
                                        href="https://www.youtube.com/watch?v=pdffXkaWqVg&amp;feature=youtu.be">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487388ezgif.com-resize (36).webp"
                                            loading="lazy "alt="Videodfvdfv Thumbnail"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">10: Placement Support
                                    <span class="block text-[12px] text-gray-800 font-[600]">Get 3 in 1 Placement support
                                        through Placement Drives, Premium access to the Job portal & Personalized Job
                                        Consulting</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank" href="https://www.youtube.com/shorts/KTb2gD30FNw">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487296ezgif.com-resize (34).webp"
                                            loading="lazy "alt="Videodvdffvdf Thumbnail"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mt-4 relative" bis_skin_checked="1">
                    <img class="agota_image sticky" loading="lazy "alt="agota ddd frame"
                        style="width:100%; max-width:500px; top:80px; margin: auto;"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753941681ezgif.com-resize.webp">
                </div>
            </div>
        </div>
    </section>

    {{-- life in japan section --}}
    <section class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize mt-4 mb-2">Life in
                Japan
            </h2>
            <p class="text-[16px] font-[600] text-gray-800 mb-2 text-center">
                日本での生活 (Nihon de no seikatsu)
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="mt-4 relative">
                    <img class="agota_image sticky" loading="lazy "alt="agota frame2"
                        style="width:100%; max-width:500px; top:80px; margin: auto;"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755327584ezgif.com-png-to-webp-converter_(2).webp"
                        loading="lazy "alt="Japan’s National Day">
                </div>
                <div class="mt-6">
                    <p class="text-[14px] text-gray-700 mb-2">
                        As of 2025, Japan ranks 11th in the world for quality of life, while coming 3rd in the world for
                        quality of healthcare, and 6th for safety. The Japanese landscape offers a little bit of everything.
                        The northernmost region (Hokkaido) is renowned for its mountains and winter sports. In the southern
                        part, the sandy beaches of the Okinawan island are a delight comparable to Hawaii and Mauritius.
                        In-between is the mainland of Honshu, where major metropolitan cities dominate the landscape.
                    </p>
                    <p class="text-[14px] text-gray-700 mb-2">
                        Culture Japan can paradoxically be described as both traditional and modern. Especially in major
                        cities, Japan is a technological wonderland, the land of bullet trains and hot food vending
                        machines.
                    </p>
                    <p class="text-[14px] text-gray-700 mb-2">
                        Homes in Japan tend to be built to a high standard of quality, offering plenty of modern
                        conveniences, while outside you will find many shops, bars and restaurants to keep you entertained.
                        Living and studying in Japan, is an experience that extends beyond academics, students are provided
                        with guidance on subjects ranging from housing and health insurance to resident status and job
                        permits. Dormitories are essential for maintaining a budget, students are often seen to save money
                        by visiting 100-yen stores, using transportation and taking advantage of school meal support. The
                        weekly expenses are then expected to be around ¥5,000–5,500 (~USD 40–50).
                    </p>
                    <p class="text-[14px] text-gray-700 mb-2">
                        There various 文化祭 (bunkasai) organised by Japanese campuses to help the international students
                        connect and showcase their talents. The technological advancements in Japan are built for smart
                        usage, from travelling to using vendor machines and accessing libraries and ports.
                    </p>
                    <ass=""/div>
                </div>
            </div>
    </section>

    {{-- Jobs & Careers in Japan --}}
    <section class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize mt-4 mb-2">Jobs &
                Careers in Japan
            </h2>
            <p class="text-[16px] font-[600] text-gray-800 mb-4 text-center">
                日本での仕事とキャリア(Nihon de no shigoto to kyaria)
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                <div>
                    <p class="text-[14px] text-gray-700 mb-4">
                        Japan is actively expanding opportunities for international talent. Japanese employers prioritize
                        candidates who can provide immediate expertise, possess strong communication skills, independence,
                        and a cooperative attitude.
                    </p>
                    <div class="mb-4">
                        <h3 class="text-[16px] font-[600] text-gray-800 mb-2">Job Hunting (Shūkatsu) in Japan</h3>
                        <p class="text-[14px] text-gray-700">
                            The job hunting process in Japan follows formal procedures, and it is highly recommended for
                            students to begin their search from April 1, as it aligns with Japan's undergraduate and
                            master's programs. When applying for jobs, candidates must undergo written exams in languages,
                            mathematics, and other relevant assessments. After passing the exams, candidates participate in
                            interview rounds to ensure their profile aligns with the roles and company culture.
                        </p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-[16px] font-[600] text-gray-800 mb-2">Visa & Part-Time Work</h3>
                        <p class="text-[14px] text-gray-700">
                            International students wishing to work in Japan must transition from a "Student" visa to a
                            work-eligible status such as Engineer or Specialist in Humanities & International Studies
                            Services. The part-time work rules in Japan state that, while studying, students can only work
                            up to 28 hours per week after obtaining permission.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-[16px] font-[600] text-gray-800 mb-2">人気 (Ninki) Sectors for International Hires
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <ul class="list-disc list-inside space-y-1 text-[14px] text-gray-700">
                                <li>Information Technology</li>
                                <li>Finance</li>
                                <li>Education</li>
                                <li>Translation & Interpretations</li>
                                <li>Government and Diplomatic Roles</li>
                            </ul>
                            <ul class="list-disc list-inside space-y-1 text-[14px] text-gray-700">
                                <li>Travel, Tourism, and Hospitality</li>
                                <li>International Business</li>
                                <li>Research & Publishing</li>
                                <li>Journalism</li>
                                <li>Entertainment</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-4 relative" bis_skin_checked="1">
                    <img class="agota_image sticky" loading="lazy "alt="agota new frame"
                        style="width:100%; max-width:500px; top:80px; margin: auto;"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753942112ezgif.com-png-to-webp-converter.webp"
                        loading="lazy "alt="Jobs & Careers in Japan">
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="py-12 px-4 bgpgray-100">
    <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Our Latest Updates!
    </h2>
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 py-4 md:px-2">
        <!-- Card 1 -->
        <div class="bg-white rounded shadow overflow-hidden">
            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175274331911667691_20945544.jpg"  loading="lazy "alt="Okinawa Branch"
                class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-lg mb-2">Okinawa Branch is Almost Ready</h3>
                <p class="text-sm text-gray-600 mb-4">Our Okinawa Branch is Almost Ready! Okinawa Building With only one
                    week left until the opening of our new Japanese school in Okinawa...</p>
                <button class="bg-red-500 text-white text-xs px-3 py-1 rounded hover:bg-red-600">Read more...</button>

            </div>
            <p class="text-xs text-gray-500 border-t border-red-500 bg-gray-200 mt-2 p-1">📅 June 9, 2025</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded shadow overflow-hidden">
            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175274331911667691_20945544.jpg"  loading="lazy "alt="Okinawa Branch"
                class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-lg mb-2">Okinawa Branch is Almost Ready</h3>
                <p class="text-sm text-gray-600 mb-4">Our Okinawa Branch is Almost Ready! Okinawa Building With only one
                    week left until the opening of our new Japanese school in Okinawa...</p>
                <button class="bg-red-500 text-white text-xs px-3 py-1 rounded hover:bg-red-600">Read more...</button>

            </div>
            <p class="text-xs text-gray-500 border-t border-red-500 bg-gray-200 mt-2 p-1">📅 June 9, 2025</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded shadow overflow-hidden">
            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175274331911667691_20945544.jpg"  loading="lazy "alt="Okinawa Branch"
                class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-lg mb-2">Okinawa Branch is Almost Ready</h3>
                <p class="text-sm text-gray-600 mb-4">Our Okinawa Branch is Almost Ready! Okinawa Building With only one
                    week left until the opening of our new Japanese school in Okinawa...</p>
                <button class="bg-red-500 text-white text-xs px-3 py-1 rounded hover:bg-red-600">Read more...</button>

            </div>
            <p class="text-xs text-gray-500 border-t border-red-500 bg-gray-200 mt-2 p-1">📅 June 9, 2025</p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded shadow overflow-hidden">
            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175274331911667691_20945544.jpg"  loading="lazy "alt="Okinawa Branch"
                class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-lg mb-2">Okinawa Branch is Almost Ready</h3>
                <p class="text-sm text-gray-600 mb-4">Our Okinawa Branch is Almost Ready! Okinawa Building With only one
                    week left until the opening of our new Japanese school in Okinawa...</p>
                <button class="bg-red-500 text-white text-xs px-3 py-1 rounded hover:bg-red-600">Read more...</button>

            </div>
            <p class="text-xs text-gray-500 border-t border-red-500 bg-gray-200 mt-2 p-1">📅 June 9, 2025</p>
        </div>
    </div>
</section> --}}
@endsection
