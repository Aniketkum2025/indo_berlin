@extends('semippc.layouts.main')
@section('title')Japanese Language course @endsection
@section('main-section')
{{-- main section --}}
    <section class="text-white" style="background: radial-gradient(circle, #BC002D 20%, #FFFFFF 20%);">
        <div class="px-6 py-10 lg:py-16" style="background-color:#000000b0">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">
                <div class="lg:col-span-2 space-y-4">
                    <h1 class="text-3xl lg:text-4xl font-[600] leading-tight">French Language Certification Course - Job Guarantee Program</h1>
                    <ul class="list-disc ml-5 text-lg space-y-2">
                        <li>66 Hrs Training Includes (40 Hrs Training + 16 Hrs GD + 10 Hrs Exam Prep) at Each Level</li>
                        <li>Master A1, A2, B1, B2, C1, C2 Levels of the French Language</li>
                        <li>Ace the DELF and DALF Exam Preparation</li>
                    </ul>
                    <div class="mt-6 text-yellow-400 text-[22px] flex flex-col space-y-2">
                        <p class="">
                            <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button">
                                <strong>Forbes</strong> 
                                features Henry Harvin 
                                <span class="text-white font-semibold">4.8 / 5</span> ⭐⭐⭐⭐⭐
                            </a>
                        </p>
                        <p class="text-white"><span class="text-yellow-400">★ 4.9</span> (1583 Ratings) • 2129 Learners</p>
                    </div>
                </div>
                <div>
                    <div class="bg-white text-gray-800 p-6 rounded shadow-md space-y-4">
                        <h3 class="text-lg font-semibold text-center">Download Course Brochure</h3>
                        <input type="email" placeholder="Enter email here"
                            class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-red-500" />
                        <div class="flex gap-2">
                            <select
                                class="w-1/3 border border-gray-300 px-2 py-2 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
                                @include('semippc.component.number')
                            </select>
                            <input type="tel" placeholder="Enter phone here" class="w-2/3 border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-red-500" />
                        </div>
                        <button class="w-full bg-red-600 hover:bg-red-900 text-white py-3 rounded-md font-semibold">Send Me Brochure »</button>
                    </div>
                @include('semippc.component.nsdc-logo')
                </div>
            </div>
        @include('semippc.component.logo')
         </div>
    </section>

    @include('semippc.component.exclusive-course', [
        'cards' => [
            [
                'title' => 'Native Experienced Trainers',
                'description' => 'Undertake french language course from the Certified Native French Trainers',
                'bgColor' => '#fca5a5',
                'textColor' => '#7f1d1d',
                'imageUrl' => 'https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772295in1.webp'
            ],
            [
                'title' => 'Comprehensive Curriculum',
                'description' => 'Enhance french learning from a curriculum designed as per CEFR Standards',
                'bgColor' => '#a5a2a2',
                'textColor' => '#220404',
                'imageUrl' => 'https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772412in2.webp'
            ],
            [
                'title' => 'Modules',
                'description' => 'Master all French levels in the most Hybrid french learning modules of the french language course',
                'bgColor' => '#a8edfc',
                'textColor' => '#1c4980',
                'imageUrl' => 'https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772479in3.webp'
            ],
            [
                'title' => '100% Guidance',
                'description' => '100% Guidance to ace French Language exams such as DLF, DELF, DALF, DCL, & TCF',
                'bgColor' => '#fef9c3',
                'textColor' => '#854d0e',
                'imageUrl' => 'https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772546in4.webp'
            ],
            [
                'title' => 'Gold Membership',
                'description' => 'Get a 1-Year Gold Membership of Language Academy',
                'bgColor' => '#d8b4fe',
                'textColor' => '#581c87',
                'imageUrl' => 'https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772601in5.webp'
            ],
            [
                'title' => 'Career Guidance',
                'description' => 'Get a 1 to 1 Career Guidance Post Completing a French Level',
                'bgColor' => '#8cb9cf',
                'textColor' => '#125b7e',
                'imageUrl' => 'https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772744in7.webp'
            ]
        ]
    ])
    @include('semippc.component.why-us')

    <!-- About the Course Section -->
    <section class="py-12 bg-gray-100 mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <div x-data="{ open: false }" class="bg-red-100 p-4 rounded-md shadow-lg mb-6">

                <!-- Header -->
                <div @click="open = !open"
                    class="cursor-pointer flex justify-between items-center bg-red-600 text-white px-4 py-3 rounded-md">
                    <h2 class="text-lg font-semibold">About the Course</h2>
                    <span x-text="open ? '-' : '+'" class="text-xl font-bold transition duration-200 transform"></span>
                </div>

                <!-- Content -->
                <div x-show="open" x-transition
                    class="bg-white p-6 rounded-md mt-4 space-y-5 text-sm leading-relaxed text-gray-800">

                    <h3 class="text-red-600 text-xl font-bold">French Language Course</h3>
                    <p>French Language Course designed to comprehend topics and lexis. Moreover, you will learn grammatical
                        concepts to enhance your prowess in the French language. After completion of the course, you will be
                        able to write a variety of texts. Henry Harvin® will assist you in genuinely speaking the French
                        language. Master the French Language and Ace the important French Language Exams such as DILF, DELF,
                        DALF, DCL, & TCF</p>

                    <div class="space-y-2">
                        <p><strong class="text-red-600">A1: The Beginners Level -</strong> Basic French Vocabulary,
                            Greetings, Grammar (Nouns, Verbs, Adjectives, etc.)</p>
                        <p><strong class="text-red-600">A2: The Upper Beginners Level -</strong> Express decisions,
                            comparisons, grammar: tenses, pronouns, adverbs, etc.</p>
                        <p><strong class="text-red-600">B1: The Intermediate Level -</strong> Writing, reading, listening;
                            structure sentences confidently.</p>
                        <p><strong class="text-red-600">B2: The Upper Intermediate Level -</strong> French dialects, create
                            speeches, explain thoughts fluently.</p>
                        <p><strong class="text-red-600">C1: The Advanced Level -</strong> Understand complex texts, express
                            fluently and spontaneously.</p>
                        <p><strong class="text-red-600">C2: The Proficiency Level -</strong> Master comprehension and
                            summary of spoken/written French.</p>
                    </div>

                    <h3 class="text-red-600 text-lg font-semibold mt-6">9 in 1 Course</h3>
                    <ul class="list-disc ml-5">
                        <li><strong>Training:</strong> Two-way Live Online Interactive Sessions</li>
                        <li><strong>Projects:</strong> Real-world French Language Applications</li>
                        <li><strong>Internship:</strong> Get experiential learning through internship support</li>
                        <li><strong>Certification:</strong> Govt. of India recognized certificate</li>
                        <li><strong>Placement:</strong> 1-Year 100% placement assistance</li>
                        <li><strong>E-Learning:</strong> Access tools, assessments, videos & more</li>
                        <li><strong>Masterclass:</strong> 52+ sessions for soft skill development</li>
                        <li><strong>Hackathons:</strong> Free entry to #AskHenry Competitions</li>
                        <li><strong>Membership:</strong> 1-Year Gold Membership in Language Academy</li>
                    </ul>

                    <h3 class="text-red-600 text-lg font-semibold mt-6">Trainers at Henry Harvin®</h3>
                    <ul class="list-disc ml-5">
                        <li>15+ years of industry experience</li>
                        <li>Recognized by multiple global organizations</li>
                        <li>Invited for 100+ Keynote sessions</li>
                        <li>350+ lectures delivered in French Language</li>
                    </ul>

                    <h3 class="text-red-600 text-lg font-semibold mt-6">Gold Membership Benefits</h3>
                    <ul class="list-disc ml-5">
                        <li>Access to e-learning tools and videos</li>
                        <li>Masterclass sessions included</li>
                        <li>Alumni status across 3,00,000+ members</li>
                        <li>Guaranteed internships & job offers</li>
                    </ul>

                    <h3 class="text-red-600 text-lg font-semibold mt-6">Learning Benefits</h3>
                    <ul class="list-disc ml-5">
                        <li>Talk about past, present & future events</li>
                        <li>Explain habitual actions & memories</li>
                        <li>Describe emotions and express wishes</li>
                        <li>Learn sentence structure and vocabulary</li>
                        <li>Debate and express opinions clearly</li>
                        <li>Master grammar, tenses, doubts, hypotheses</li>
                    </ul>

                    <h3 class="text-red-600 text-lg font-semibold mt-6">Recognitions</h3>
                    <ul class="list-disc ml-5">
                        <li>Top Corporate Training Award winner</li>
                        <li>Affiliations with PMI, UKCert, ISO, MSME</li>
                        <li>3400+ Google reviews, 4.5+ rated</li>
                    </ul>

                    <h3 class="text-red-600 text-lg font-semibold mt-6">Career Benefits</h3>
                    <ul class="list-disc ml-5">
                        <li>Global job opportunities in French Language</li>
                        <li>Boosted LinkedIn and Resume profile</li>
                        <li>Higher job security and income growth</li>
                        <li>Work for companies like Google, Amazon, JPMorgan</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('semippc.component.feedback', [
        'feedbacks' => [
            [
                'name' => 'Asha Dutta',
                'text' => 'I had the best time with Henry Harvin! My trainer was motivating and I feel like my French got a lot better thanks to the ways of teaching. Would recommend it to everyone!',
                'role' => 'French Teacher (WLC)',
                'image' => 'https://cdn.henryharvin.com/images/170030254116682440271668244027sristi.jpg'
            ],
            [
                'name' => 'Sharnam',
                'text' => 'I was looking to learn French online and I am glad that I joined Henry Harvin Education. Trainers here are very helpful and made me understand the basic French language concepts very quickly.',
                'role' => 'French Tutor',
                'image' => 'https://cdn.henryharvin.com/images/170030259216682440321668244032sharnam.jpg'
            ],
            [
                'name' => 'Ritika Jha',
                'text' => 'It was incredible, I learned a lot of French Language, and had a great time not only in the classes but in the activities offered after class as well.',
                'role' => 'French (A1 to B1) Tutor',
                'image' => 'https://cdn.henryharvin.com/images/170030263316682440371668244037ritika.jpg'
            ],
            [
                'name' => 'Meera Kapoor',
                'text' => 'Henry Harvin has one of the best learning ecosystems. I was able to speak French confidently within weeks of joining. Highly recommended.',
                'role' => 'French Trainer',
                'image' => 'https://cdn.henryharvin.com/images/170030268416682440421668244042meera.jpg'
            ]
        ]
    ])
    @include('semippc.component.agota-frame')
    <section class="py-12 mx-auto px-4">
        <div class="max-w-6xl mx-auto" bis_skin_checked="1">
            <div class="flex items-center justify-center flex-wrap gap-2 text-[30px] font-semibold text-red-700">
                <span>Still have questions?</span>
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"
                    class="bg-red-600 text-white px-5 py-2 rounded-full text-[24px] shadow-md hover:bg-red-700 transition duration-300">
                    Get Quick Call Back
                </button>
                <span>for answers</span>
            </div>
        </div>
    </section>

    <div class="bg-gradient-to-r from-slate-800 via-red-800 to-red-500 text-white p-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 items-center">

            <div class="text-white font-bold md:text-[40px] text-[30px] leading-tight">
                <p>Henry Harvin® Ranks #1 for Japanese Language Training Institute in India by The Tribune</p>
            </div>

            <div class="bg-white text-black rounded-xl p-6 shadow-md border-2 border-purple-800">
                <h3 class="text-center font-semibold mb-4">
                    Book A Demo Class, <span class="text-red-600 font-bold">For 99$ Free !</span>
                </h3>
                <form class="space-y-3">
                    <input type="email" placeholder="Email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-600" />
                    <div class="flex gap-2">
                        <select class="w-1/2 px-4 py-2 border border-gray-300 rounded-md">
                            @include('semippc.component.number')
                        </select>
                        <input type="tel" placeholder="Phone"class="w-1/2 px-4 py-2 border border-gray-300 rounded-md" />
                    </div>
                    <button type="submit" class="bg-red-600 text-white w-full py-2 rounded-md shadow hover:bg-red-900 transition">
                        SUBMIT »
                    </button>
                </form>
            </div>
            <div>
                <img src="https://cdn.henryharvin.com/images/1694671240French%20B1.webp" alt="Certificate" class="rounded-lg shadow-xl w-full max-w-md mx-auto">
            </div>
        </div>
    </div>
    <!-- Modal  -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg border-2 border-red-600 shadow">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-[24px] font-[600] text-red-600">
                        Apply Now
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l12 12M1 13L13 1" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form class="p-4 md:p-5 space-y-4" action="" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm mb-1 font-[600] text-red-600">Name</label>
                        <input type="text" name="name" id="name" placeholder="Name" required class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        <span id="name_error3" class="text-red-500 text-xs"></span>
                    </div>
                    <div>
                        <label for="email" class="block text-sm mb-1 font-[600] text-red-600">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" required class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        <span id="email_error3" class="text-red-500 text-xs"></span>
                    </div>
                    <div>
                        <label for="countryCode" class="block text-sm mb-1 font-[600] text-red-600">Country Code</label>
                        <div class="flex gap-2">
                            <select name="countryCode"class="w-4/12 bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg p-2.5">
                                @include('semippc.component.number')
                            </select>
                            <input type="number" name="sendto" placeholder="Mobile no *"class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>
                        <span id="phone_error3" class="text-red-500 text-xs"></span>
                    </div>
                    <!-- Hidden Inputs -->
                    <input type="hidden" name="source" class="textbox" value="KAZUMI WEBSITE" placeholder="" />
                    <input type="hidden" name="lead_source_page_url" class="textbox" value="{{ url()->full() }}" placeholder="" id="">
                    <input type="hidden" name="slug" value="contact-us">
                    <div class="flex justify-center pt-3">
                        <button type="submit" class="bg-red-600 text-white py-2 px-4 text-lg rounded-md">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
