 <!DOCTYPE html>
<html lang="en">
<script src="https://cdn.tailwindcss.com"></script>
<head>
    <title>Kazumi School by Henry Harvin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077494apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077423favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077423favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077667android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077574android-chrome-512x512.png">
    <link rel="manifest" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077533site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,900;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
 <header class="bg-white border-b shadow-sm md:px-6 px-2 py-1 flex flex-row justify-between items-center gap-2">
    <div class="flex items-center space-x-3">
        <a href="/">
            <img class="md:h-[65px] h-[55px] w-auto" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753872845ezgif.com-crop.webp" alt="Kazumi Logo">
        </a>
    </div>
    {{-- <div class="flex items-center gap-2">
      <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1733131304School_of_Language_Logo_F_(1).png" alt="Logo" class="h-16">
      <p class="h-[45px] bg-red-700 w-[1px] p-[1px]"></p>
      <div class="text-sm text-gray-700">
        <p class="font-bold text-red-600 text-center text-[20px]">12</p>
        <p class="text-[16px] text-red-600 font-[500] text-center">Years</p>
      </div>
    </div> --}}
    <div class="text-red-600 text-sm text-center lg:text-left md:block hidden">
      <p>460,000+ Trained | 6,700+ Reviews | 7,000+ Live Classes Every Month</p>
      <p>210+ Corporate Partners | 180+ College Partners | 93% Reported Career Benefits</p>
    </div>
    <div class="flex gap-2">
      <button class="bg-red-600 text-white md:px-4 px-2 py-2 rounded-md text-[10px] md:text-sm hover:bg-red-800">Book Free Demo</button>
      <button  data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" class="bg-red-600 md:block hidden text-white px-4 py-2 rounded-md text-sm hover:bg-red-800">Get Quick Call Back</button>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-red-800 to-red-500 text-white px-6 py-10 lg:py-16">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">
      <!-- Left Content -->
        <div class="lg:col-span-2 space-y-4">
            <h1 class="text-3xl lg:text-4xl font-[600] leading-tight">French Language Certification Course - Job Guarantee Program</h1>
            <ul class="list-disc ml-5 text-lg space-y-2">
            <li>66 Hrs Training Includes (40 Hrs Training + 16 Hrs GD + 10 Hrs Exam Prep) at Each Level</li>
            <li>Master A1, A2, B1, B2, C1, C2 Levels of the French Language</li>
            <li>Ace the DELF and DALF Exam Preparation</li>
            </ul>

            <div class="mt-6 text-yellow-400 text-[22px] flex flex-col space-y-2">
            <p class=""><a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"><strong>Forbes</strong> features Henry Harvin <span class="text-white font-semibold">4.8 / 5</span> ⭐⭐⭐⭐⭐</a></p>
            <p class="text-white"><span class="text-yellow-400">★ 4.9</span> (1583 Ratings) • 2129 Learners</p>
            </div>
        </div>
        <div>
            <div class="bg-white text-gray-800 p-6 rounded shadow-md space-y-4">
                <h3 class="text-lg font-semibold text-center">Download Course Brochure</h3>
                <input type="email" placeholder="Enter email here" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-red-500" />
                <div class="flex gap-2">
                <select class="w-1/3 border border-gray-300 px-2 py-2 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
                    <option>India (+91)</option>
                    <option>US (+1)</option>
                    <option>UK (+44)</option>
                </select>
                <input type="tel" placeholder="Enter phone here" class="w-2/3 border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-red-500" />
                </div>
                <button class="w-full bg-red-600 hover:bg-red-900 text-white py-3 rounded-md font-semibold">Send Me Brochure »</button>
            </div>
            <div class="nsdc-logo mt-2" bis_skin_checked="1" style=" background: white;">
                    <img class="img-nsdc lazyloaded" data-src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1738058202msme_new_to.png" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1738058202msme_new_to.png">
                </div>
            </div>
        </div>
        <div class="swiper linearswiper max-w-7xl bg-white p-4 mt-2">
            <div class="swiper-wrapper my-4" style="transition-timing-function: linear !important;">
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[50px] sm:max-h-[60px] md:max-h-[80px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1724768847Screenshot_2024-08-27_190332.png"  loading="lazy "alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[50px] sm:max-h-[60px] md:max-h-[80px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753255971sxsssswc.PNG"  loading="lazy "alt="images-81">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[50px] sm:max-h-[60px] md:max-h-[80px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1726071455watts_we_logo_jft.png"  loading="lazy "alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[50px] sm:max-h-[60px] md:max-h-[100px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1736849226DBS_C-01.png"  loading="lazy "alt="images-82">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[50px] sm:max-h-[60px] md:max-h-[100px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753943295ezgif.com-resize_(2).webp"  loading="lazy "alt="images-83">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[50px] sm:max-h-[60px] md:max-h-[100px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1686549627AAEFL.webp"  loading="lazy "alt="images-84">
                </div>
                
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[50px] sm:max-h-[60px] md:max-h-[100px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1683959258ezgif.com-gif-maker%20-%202023-05-13T115731.582.webp"  loading="lazy "alt="images-86">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[50px] sm:max-h-[60px] md:max-h-[100px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1683959347ezgif.com-resize%20(20).webp"  loading="lazy "alt="images-88">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[50px] sm:max-h-[60px] md:max-h-[100px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753941817ezgif.com-resize_(1).webp"  loading="lazy "alt="images-87">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[50px] sm:max-h-[60px] md:max-h-[100px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1683958602ezgif.com-resize%20(16).webp"  loading="lazy "alt="images-89">
                </div>
                 
            </div>
        </div>
  </section>


  <section class="bg-gray-50 py-12 px-4">
  <div class="max-w-5xl mx-auto">
    <h2 class="text-center text-3xl font-[600] text-red-600 mb-10">
      Henry Harvin® Exclusive Course Offerings
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <!-- Card 1 -->
      <div class="relative bg-red-100 text-red-900 p-6 rounded-lg shadow overflow-hidden">
        <h3 class="text-lg font-bold mb-2">Native Experienced Trainers</h3>
        <p class="text-sm pr-12">Undertake french language course from the Certified Native French Trainers</p>
        <div class="absolute bottom-0 right-0 w-20 h-20 bg-no-repeat bg-contain bg-bottom opacity-90"
          style="background-image: url('https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772295in1.webp');">
        </div>
      </div>

      <!-- Card 2 -->
      <div class="relative bg-[#a5a2a2] text-[#220404] p-6 rounded-lg shadow overflow-hidden">
        <h3 class="text-lg font-bold mb-2">Comprehensive Curriculum</h3>
        <p class="text-sm pr-12">Enhance french learning from a curriculum designed as per CEFR Standards</p>
        <div class="absolute bottom-0 right-0 w-20 h-20 bg-no-repeat bg-contain bg-bottom opacity-90"
          style="background-image: url('https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772412in2.webp');">
        </div>
      </div>

      <!-- Card 3 -->
      <div class="relative bg-[#a8edfc] text-[#1c4980] p-6 rounded-lg shadow overflow-hidden">
        <h3 class="text-lg font-bold mb-2">Modules</h3>
        <p class="text-sm pr-12">Master all French levels in the most Hybrid french learning modules of the french language course</p>
        <div class="absolute bottom-0 right-0 w-20 h-20 bg-no-repeat bg-contain bg-bottom opacity-90"
          style="background-image: url('https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772479in3.webp');">
        </div>
      </div>

      <!-- Card 4 -->
      <div class="relative bg-yellow-100 text-yellow-800 p-6 rounded-lg shadow overflow-hidden">
        <h3 class="text-lg font-bold mb-2">100% Guidance</h3>
        <p class="text-sm pr-12">100% Guidance to ace French Language exams such as DLF, DELF, DALF, DCL, &amp; TCF</p>
        <div class="absolute bottom-0 right-0 w-20 h-20 bg-no-repeat bg-contain bg-bottom opacity-90"
          style="background-image: url('https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772546in4.webp');">
        </div>
      </div>

      <!-- Card 5 -->
      <div class="relative bg-purple-300 text-purple-900 p-6 rounded-lg shadow overflow-hidden">
        <h3 class="text-lg font-bold mb-2">Gold Membership</h3>
        <p class="text-sm pr-12">Get a 1-Year Gold Membership of Language Academy</p>
        <div class="absolute bottom-0 right-0 w-20 h-20 bg-no-repeat bg-contain bg-bottom opacity-90"
          style="background-image: url('https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772601in5.webp');">
        </div>
      </div>

      <!-- Card 6 -->
      <div class="relative bg-[#8cb9cf] text-[#125b7e] p-6 rounded-lg shadow overflow-hidden">
        <h3 class="text-lg font-bold mb-2">Career Guidance</h3>
        <p class="text-sm pr-12">Get a 1 to 1 Career Guidance Post Completing a French Level</p>
        <div class="absolute bottom-0 right-0 w-20 h-20 bg-no-repeat bg-contain bg-bottom opacity-90"
          style="background-image: url('https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772744in7.webp');">
        </div>
      </div>

      <!-- Add more cards here if needed using lms-feature8–10 -->

    </div>

    <!-- CTA Button -->
    <div class="text-center mt-10">
      <a href="#newform" class="inline-flex items-center px-6 py-3 bg-red-600 text-white rounded-md shadow hover:bg-red-800 transition">
        Get Brochure <i class="fa fa-book ml-2"></i>
      </a>
    </div>
  </div>
</section>

<section class="py-12 bg-gray-100 mx-auto px-4">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize mt-4 mb-4"> Why Kazumi Japanese &amp; Culture 文化 School?
        </h2>
        <div class="py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 text-center">
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center col-span-1 sm:col-span-1 md:col-span-1">
                     <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753789102Trainerteaching.jpg" loading="lazy " alt="wwww">
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">Native Japanese Trainers</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Learn from certified, highly 経験豊富 (keiken hōfu) and 情熱的な (jōnetsu-teki na) faculties.</p>
                </div>
                 <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                     <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753789154examsheet.jpg" loading="lazy " alt="course">
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">JLPT Intensive Course</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Excel in the JLPT with our 専門的な (Senmon-teki na) modules, mock tests, personalized coaching, and JLPT-focused materials sourced directly from Japan.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                     <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753881317elearning.jpg" loading="lazy " alt="access">
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">Access to E-learning Portal</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Kazumi partners with <span>
                        <a href="https://examopedia.com/" class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1734598082examopedia_logo.webp" loading="lazy " alt="Examopedia Logo" class="h-4">Examopedia</a></span><a href="https://examopedia.com/" class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"> </a>
                        , a comprehensive E-learning portal that provides future updates, PPTs, projects, quizzes, 模擬試験 (Mogi Shiken), question banks, assessments and interactive forums.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753789196OccupationalPrograms.jpg" loading="lazy " alt="offer">
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">Japanese Occupational Courses</h3>
                    <p class="text-gray-700 text-[14px] mt-2">At Kazumi, we offer programs that will help you build corporate, business and 職場 (shokuba) skills required to secure good 仕事 (shigoto) internationally.</p>
                </div>
                 <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                     <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753774339talking.jpg" loading="lazy " alt="">
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">Internship for Japanese Language</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Kazumi provides Internship Support via 
                        <span><a href="https://yuvaintern.com//" class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img src="https://yuvaintern.com/assets/img/logo.png" loading="lazy " alt="Yuva Intern Logo" class="h-4">Yuva Intern</a></span><a href="https://yuvaintern.com//" class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"> </a>
                                            , India’s first バーチャル (bācharu) internship platform where you get to select from the best curated internships that match your skills and interests.</p>
                </div>
                 <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                     <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753881283study.jpg" loading="lazy " alt="study">
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">Study Abroad &amp; Recruitment Services</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Kazumi offers study abroad and 就職支援 (Shūshoku Shien) via 
                        <a href="https://leochase.com/" class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img src="https://leochase.com/wp-content/uploads/2025/04/Logo_Leo-Chase_F.png" loading="lazy " alt="Leo &amp; Chase Logo" class="h-3">Leo &amp; Chase </a>
                        , no. 1 recruitment provider, assisting from visa application to settling abroad.</p>
                </div>
                 <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753881176agota2.jpg" loading="lazy " alt="Unique">
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">Unique 10 in 1 Program: Agota™ Framework</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Learn through innovative teaching methods that make learning easy and 実践的 (Jissen-teki). This framework essentially promotes the 能力 (Nōryoku) development and キャリア (Kyaria) development.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753789015orconnections.jpg" loading="lazy " alt="globle">
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">Global Presence</h3>
                    <p class="text-gray-700 text-[14px] mt-2">With offices in 4+ countries, UK, USA, Middle East, and India, Kazumi is a global brand, offering a global learning 環境 (kankyō), with around 1200+ international 学生 (gakusei).</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                     <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753774903Network.jpg" loading="lazy " alt="international">
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">International Alumni Network</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Join a diverse コミュニティ(Komyuniti) of learners and professionals from around the world.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                     <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753774206culture.jpg" loading="lazy " alt="culture two">
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">Cultural Training</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Explore 伝統 (Dentō), etiquettes, festivals, and practices used in an authentic environment.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- About the Course Section -->
<section class="py-12 bg-gray-100 mx-auto px-4">
    <div class="max-w-7xl mx-auto">
        <div x-data="{ open: false }" class="bg-red-100 p-4 rounded-md shadow-lg mb-6">

        <!-- Header -->
        <div @click="open = !open" class="cursor-pointer flex justify-between items-center bg-red-600 text-white px-4 py-3 rounded-md">
            <h2 class="text-lg font-semibold">About the Course</h2>
            <span x-text="open ? '-' : '+'"
            class="text-xl font-bold transition duration-200 transform"></span>
        </div>

        <!-- Content -->
        <div x-show="open" x-transition class="bg-white p-6 rounded-md mt-4 space-y-5 text-sm leading-relaxed text-gray-800">
            
            <h3 class="text-red-600 text-xl font-bold">French Language Course</h3>
            <p>French Language Course designed to comprehend topics and lexis. Moreover, you will learn grammatical concepts to enhance your prowess in the French language. After completion of the course, you will be able to write a variety of texts. Henry Harvin® will assist you in genuinely speaking the French language. Master the French Language and Ace the important French Language Exams such as DILF, DELF, DALF, DCL, & TCF</p>

            <div class="space-y-2">
            <p><strong class="text-red-600">A1: The Beginners Level -</strong> Basic French Vocabulary, Greetings, Grammar (Nouns, Verbs, Adjectives, etc.)</p>
            <p><strong class="text-red-600">A2: The Upper Beginners Level -</strong> Express decisions, comparisons, grammar: tenses, pronouns, adverbs, etc.</p>
            <p><strong class="text-red-600">B1: The Intermediate Level -</strong> Writing, reading, listening; structure sentences confidently.</p>
            <p><strong class="text-red-600">B2: The Upper Intermediate Level -</strong> French dialects, create speeches, explain thoughts fluently.</p>
            <p><strong class="text-red-600">C1: The Advanced Level -</strong> Understand complex texts, express fluently and spontaneously.</p>
            <p><strong class="text-red-600">C2: The Proficiency Level -</strong> Master comprehension and summary of spoken/written French.</p>
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

<section class="bg-red-50 py-10">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize mt-4 mb-4">
      Join Henry Harvin® Community of 4,60,000+ Professionals
    </h2>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide bg-white rounded-lg shadow-lg border border-red-200 flex flex-col items-center text-center">
          <img src="https://cdn.henryharvin.com/images/170030254116682440271668244027sristi.jpg"
               alt="Asha Dutta"
               class="w-32 h-32 rounded-full object-cover mt-4 shadow-md" />
          <div class="bg-yellow-100 p-4 text-sm text-gray-800">
            I had the best time with Henry Harvin! My trainer was motivating and I feel like my French got a lot better thanks to the ways of teaching. Would recommend it to everyone!
            <p class="text-red-600 font-medium mt-2">- Asha Dutta</p>
          </div>
          <div class="bg-red-700 text-white font-semibold w-full py-2">French Teacher (WLC)</div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide bg-white rounded-lg shadow-lg border border-red-200 flex flex-col items-center text-center">
          <img src="https://cdn.henryharvin.com/images/170030259216682440321668244032sharnam.jpg"
               alt="Sharnam"
               class="w-32 h-32 rounded-full object-cover mt-4 shadow-md" />
          <div class="bg-yellow-100 p-4 text-sm text-gray-800">
            I was looking to learn French online and I am glad that I joined Henry Harvin Education. Trainers here are very helpful and made me understand the basic French language concepts very quickly.
            <p class="text-red-600 font-medium mt-2">- Sharnam</p>
          </div>
          <div class="bg-red-700 text-white font-semibold w-full py-2">French Tutor</div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide bg-white rounded-lg shadow-lg border border-red-200 flex flex-col items-center text-center">
          <img src="https://cdn.henryharvin.com/images/170030263316682440371668244037ritika.jpg"
               alt="Ritika Jha"
               class="w-32 h-32 rounded-full object-cover mt-4 shadow-md" />
          <div class="bg-yellow-100 p-4 text-sm text-gray-800">
            It was incredible, I learned a lot of French Language, and had a great time not only in the classes but in the activities offered after class as well.
            <p class="text-red-600 font-medium mt-2">- Ritika Jha</p>
          </div>
          <div class="bg-red-700 text-white font-semibold w-full py-2">French (A1 to B1) Tutor</div>
        </div>

        <!-- Slide 4 -->
        <div class="swiper-slide bg-white rounded-lg shadow-lg border border-red-200 flex flex-col items-center text-center">
          <img src="https://cdn.henryharvin.com/images/170030268416682440421668244042meera.jpg"
               alt="Meera Kapoor"
               class="w-32 h-32 rounded-full object-cover mt-4 shadow-md" />
          <div class="bg-yellow-100 p-4 text-sm text-gray-800">
            Henry Harvin has one of the best learning ecosystems. I was able to speak French confidently within weeks of joining. Highly recommended.
            <p class="text-red-600 font-medium mt-2">- Meera Kapoor</p>
          </div>
          <div class="bg-red-700 text-white font-semibold w-full py-2">French Trainer</div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="py-12 mx-auto px-4">
    <div class="max-w-6xl mx-auto" bis_skin_checked="1">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-2 text-[#da2028] capitalize my-4">Agota™ Framework
        </h2>
        <p class="text-[16px] text-gray-800 font-[600] text-center">AGOTA™ Framework is a trajectory that offers complete growth of an individual incorporating the two most significant focus areas of contemporary learning:<span class="font-bold text-gray-900"> The 能力 (Nōryoku) development and キャリア (Kyaria) development. </span></p>
        <p class="text-[16px] text-gray-800 font-[600] text-center mt-4"><span class="font-bold text-gray-900">能力 (Nōryoku) development </span> is about building capabilities that not only meet current job demands but also anticipates the future needs. It includes:</p>
        <div class="relative grid md:grid-cols-2 gap-2 my-2" bis_skin_checked="1">
            <div bis_skin_checked="1">
                <ul class="disk mt-2">
                    <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                        <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple" bis_skin_checked="1">
                            <p class="col-span-2 text-red-600">1: Training
                                <span class="block text-[12px] text-gray-800 font-[600]">144 Hours of Two-Way Live Online Interactive Sessions</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2 " bis_skin_checked="1">
                                <a target="_blank" href="https://youtu.be/lMkxmdUnAPc" bis_size="{&quot;x&quot;:258,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1734}">
                                    <img id="videoThumbnail" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487194ezgif.com-resize (32).webp" loading="lazy " alt="Video Thumbnail" class="object-cover rounded-lg border-4 border-gray-300 shadow-lg" bis_size="{&quot;x&quot;:258,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1734}" bis_id="bn_k6nxes1kgls9urroq3b79m">
                                    <div id="playButton" class="absolute inset-0 flex items-center justify-center" bis_skin_checked="1">
                                        <button class="flex items-center justify-center bg-white rounded-full p-1" style="padding: 6px 7px;">
                                            <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple" bis_skin_checked="1">
                            <p class="col-span-2 text-red-600">2: Projects
                                <span class="block text-[12px] text-gray-800 font-[600]"> Facility to undergo projects along with the course</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://youtu.be/p86YBsCkb0A" bis_size="{&quot;x&quot;:580,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1734}">
                                    <img id="videoThumbnail" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719575893ezgif.com-resize - 2024-06-28T172803.379.webp" loading="lazy " alt="Video ThumbnailRE" class="object-cover rounded-lg border-4 border-gray-300 shadow-lg" bis_size="{&quot;x&quot;:580,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1734}" bis_id="bn_r7y6rulp4482rexmqhjbp6">
                                    <div id="playButton" class="absolute inset-0 flex items-center justify-center" bis_skin_checked="1">
                                        <button class="flex items-center justify-center bg-white rounded-full p-1" style="padding: 6px 7px;">
                                            <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                        <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple" bis_skin_checked="1">
                            <p class="col-span-2 text-red-600">3: Student Engagement &amp; Events
                                <span class="block text-[12px] text-gray-800 font-[600]"> Free Access to #AskHenry Hackathons and Competitions &amp; many other facilities from Henry Harvin®</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2 " bis_skin_checked="1">
                                <a target="_blank" href="https://youtu.be/K7HdNdMwOuE" bis_size="{&quot;x&quot;:258,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1847}">
                                    <img id="videoThumbnail" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719576156sxw (2).webp" loading="lazy " alt="Video ThumbnaiERl" class="object-cover rounded-lg border-4 border-gray-300 shadow-lg" bis_size="{&quot;x&quot;:258,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1847}" bis_id="bn_76rdo306qf4u6okmbjp8xc">
                                    <div id="playButton" class="absolute inset-0 flex items-center justify-center" bis_skin_checked="1">
                                        <button class="flex items-center justify-center bg-white rounded-full p-1" style="padding: 6px 7px;">
                                            <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple" bis_skin_checked="1">
                            <p class="col-span-2 text-red-600">4: Masterclass
                                <span class="block text-[12px] text-gray-800 font-[600]">Access to 52+ Masterclass Sessions for essential soft スキル (Sukiru) development</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://youtu.be/Gk3t1W3LVZ8" bis_size="{&quot;x&quot;:580,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1847}">
                                    <img id="videoThumbnail" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719577083dcwcw.webp" loading="lazy " alt="Video ThumREbnail" class="object-cover rounded-lg border-4 border-gray-300 shadow-lg" bis_size="{&quot;x&quot;:580,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1847}" bis_id="bn_d8rrolf3o360b2tlne44wh">
                                    <div id="playButton" class="absolute inset-0 flex items-center justify-center" bis_skin_checked="1">
                                        <button class="flex items-center justify-center bg-white rounded-full p-1" style="padding: 6px 7px;">
                                            <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                        <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple" bis_skin_checked="1">
                            <p class="col-span-2 text-red-600">5: Membership
                                <span class="block text-[12px] text-gray-800 font-[600]"> 30 Months Gold Membership of Henry Harvin® School of Languages</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://www.youtube.com/watch?v=bzJOMiJu_QA">
                                    <img id="videoThumbnail" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1728970566Membership_Card_Collage_(1).png" loading="lazy " alt="Video ThumbnailTTT" class="object-cover rounded-lg border-4 border-gray-300 shadow-lg">
                                    <div id="playButton" class="absolute inset-0 flex items-center justify-center" bis_skin_checked="1">
                                        <button class="flex items-center justify-center bg-white rounded-full p-1" style="padding: 6px 7px;">
                                            <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple" bis_skin_checked="1">
                            <p class="col-span-2 text-red-600">6: E-Learning Access
                                <span class="block text-[12px] text-gray-800 font-[600]">Get free access to the LMS having PPTs, projects, self-paced video-based learning, library, quizzes, question bank, practice tests, final assessments, and a forum, powered by 
                                    <a href="https://examopedia.com/" class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1734598082examopedia_logo.webp" loading="lazy " alt="Examopedia Logo" class="h-3">Examopedia</a></span><a href="https://examopedia.com/" class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"> </a>

                               
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://www.youtube.com/watch?v=XUQm0ecT6ts">
                                    <img id="videoThumbnail" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487342ezgif.com-resize (35).webp" loading="lazy " alt="Video ThumbnailQWTRT" class="object-cover rounded-lg border-4 border-gray-300 shadow-lg">
                                    <div id="playButton" class="absolute inset-0 flex items-center justify-center" bis_skin_checked="1">
                                        <button class="flex items-center justify-center bg-white rounded-full p-1" style="padding: 6px 7px;">
                                            <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    </ul>
                <p class="text-[15px] text-left my-8"><span class="font-bold text-gray-900">ア (Kyaria) development </span> lays focus on the essentials for acquiring a good career or diving into a highly competent one. It includes:</p>
                <ul class="disk">
                    <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                        <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple" bis_skin_checked="1">
                            <p class="col-span-2 text-red-600">7: 特徴 (Tokuchō) Certification + License
                                <span class="block text-[12px] text-gray-800 font-[600]">Distinguish your profile with global credentials and showcase expertise with our 特徴 (Tokuchō) Completion certificate with Professional License</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://youtu.be/LJH79vKhyXc" bis_size="{&quot;x&quot;:258,&quot;y&quot;:2242,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:2242}">
                                    <img id="videoThumbnail" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487248ezgif.com-resize (33).webp" loading="lazy " alt="Video ThumbnailWERWG" class="object-cover rounded-lg border-4 border-gray-300 shadow-lg" bis_size="{&quot;x&quot;:258,&quot;y&quot;:2242,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:2242}" bis_id="bn_0196ld4v20caat8svgsg34">
                                    <div id="playButton" class="absolute inset-0 flex items-center justify-center" bis_skin_checked="1">
                                        <button class="flex items-center justify-center bg-white rounded-full p-1" style="padding: 6px 7px;">
                                            <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple" bis_skin_checked="1">
                            <p class="col-span-2 text-red-600">8: Internship Support
                                <span class="block text-[12px] text-gray-800 font-[600]">Get Internship Support with Henry Harvin® and in top MNCs like J.P. Morgan, Accenture &amp; many more via 100X Suite and 
                                     <a href="https://yuvaintern.com//" class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img src="https://yuvaintern.com/assets/img/logo.png" loading="lazy " alt="YUVA Logo" class="h-3">Yuva Intern</a></span><a href="https://yuvaintern.com//" class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"> </a>.
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://www.youtube.com/shorts/2od0SMHat-A">
                                    <img id="videoThumbnail" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719575988d233dd23d.webp" loading="lazy " alt="Video DSSDDThumbnail" class="object-cover rounded-lg border-4 border-gray-300 shadow-lg">
                                    <div id="playButton" class="absolute inset-0 flex items-center justify-center" bis_skin_checked="1">
                                        <button class="flex items-center justify-center bg-white rounded-full p-1" style="padding: 6px 7px;">
                                            <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                        <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple" bis_skin_checked="1">
                            <p class="col-span-2 text-red-600">9: Entrepreneurship Mentorship
                                <span class="block text-[12px] text-gray-800 font-[600]">Mentorship from Young Successful Entrepreneurs to set up a sustainable &amp; scalable Business from scratch at both Freelance &amp; Entrepreneur level</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://www.youtube.com/watch?v=pdffXkaWqVg&amp;feature=youtu.be">
                                    <img id="videoThumbnail" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487388ezgif.com-resize (36).webp" loading="lazy " alt="Videodfvdfv Thumbnail" class="object-cover rounded-lg border-4 border-gray-300 shadow-lg">
                                    <div id="playButton" class="absolute inset-0 flex items-center justify-center" bis_skin_checked="1">
                                        <button class="flex items-center justify-center bg-white rounded-full p-1" style="padding: 6px 7px;">
                                            <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple" bis_skin_checked="1">
                            <p class="col-span-2 text-red-600">10: Placement Support
                                <span class="block text-[12px] text-gray-800 font-[600]">Get 3 in 1 Placement support through Placement Drives, Premium access to the Job portal &amp; Personalized Job Consulting</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://www.youtube.com/shorts/KTb2gD30FNw">
                                    <img id="videoThumbnail" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487296ezgif.com-resize (34).webp" loading="lazy " alt="Videodvdffvdf Thumbnail" class="object-cover rounded-lg border-4 border-gray-300 shadow-lg">
                                    <div id="playButton" class="absolute inset-0 flex items-center justify-center" bis_skin_checked="1">
                                        <button class="flex items-center justify-center bg-white rounded-full p-1" style="padding: 6px 7px;">
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
                <img class="agota_image sticky" loading="lazy " alt="agota ddd frame" style="width:100%; max-width:500px; top:80px; margin: auto;" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753941681ezgif.com-resize.webp">
            </div>
        </div>
    </div>
</section>
<section class="py-12 mx-auto px-4">
    <div class="max-w-6xl mx-auto" bis_skin_checked="1">
<div class="flex items-center justify-center flex-wrap gap-2 text-[30px] font-semibold text-red-700">
  <span>Still have questions?</span>

  <button
    data-modal-target="authentication-modal"
    data-modal-toggle="authentication-modal"
    type="button"
    class="bg-red-600 text-white px-5 py-2 rounded-full text-[24px] shadow-md hover:bg-red-700 transition duration-300"
  >
    Get Quick Call Back
  </button>

  <span>for answers</span>
</div>
    </div>
</section>


<div class="bg-gradient-to-r from-slate-800 via-red-800 to-red-500 text-white p-6">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
    
    <!-- Left Section -->
    <div class="text-white font-bold md:text-[40px] text-[30px] leading-tight">
      <p>Henry Harvin®
      Ranks #1 for French
      Language Training
      Institute in India by
      The Tribune</p>
    </div>

    <!-- Middle Form -->
    <div class="bg-white text-black rounded-xl p-6 shadow-md border-2 border-purple-800">
      <h3 class="text-center font-semibold mb-4">
        Book A Demo Class, <span class="text-red-600 font-bold">For 99$ Free !</span>
      </h3>
      <form class="space-y-3">
        <input type="email" placeholder="Email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-600" />
        <div class="flex gap-2">
          <select class="w-1/2 px-4 py-2 border border-gray-300 rounded-md">
            <option>India (+91)</option>
            <option>USA (+1)</option>
            <option>UK (+44)</option>
          </select>
          <input type="tel" placeholder="Phone" class="w-1/2 px-4 py-2 border border-gray-300 rounded-md" />
        </div>
        <button type="submit" class="bg-red-600 text-white w-full py-2 rounded-md shadow hover:bg-red-900 transition">
          SUBMIT »
        </button>
      </form>
    </div>

    <!-- Certificate Image -->
    <div>
      <img src="https://cdn.henryharvin.com/images/1694671240French%20B1.webp" alt="Certificate" class="rounded-lg shadow-xl w-full max-w-md mx-auto">
    </div>
    
  </div>
</div>

{{-- footer section --}}
  <footer>
<div class="bg-white py-6 px-4">
  <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-red-700 text-sm font-medium">

    <!-- USA -->
    <div>
      <h2 class="flex items-center gap-2 font-semibold mb-1">
        <img src="https://cdn.henryharvin.com/images/1690622513usa-flag48.png" alt="USA Flag" class="w-6 h-6"> Henry Harvin America Head Office
      </h2>
      <p>8 The Green, # 19614 Dover,<br>DE 19901, United States</p>
      <p><a href="tel:+12093823469" class="text-blue-700 underline">Contact +1 209-382-3469</a></p>
    </div>

    <!-- UK -->
    <div>
      <h2 class="flex items-center gap-2 font-[600] text-[14px] mb-1">
        <img src="https://cdn.henryharvin.com/images/1698991947dw2.webp" alt="UK Flag" class="w-6 h-6"> Henry Harvin United Kingdom Head Office
      </h2>
      <p class="text-[12px]">Office No: 71–75 Shelton Street Covent Garden<br>London WC2H 9JQ</p>
    </div>

    <!-- UAE -->
    <div>
      <h2 class="flex items-center gap-2 font-[600] text-[14px] mb-1">
        <img src="https://cdn.henryharvin.com/images/1690622599uae-flaf-48.png" alt="UAE Flag" class="w-6 h-6"> Henry Harvin Middle East Head Office
      </h2>
      <p class="text-[12px]">2703, Blue Matrix, 27th floor The Prime Tower,<br>Business Bay, Dubai, UAE</p>
    </div>

    <!-- India -->
    <div>
      <h2 class="flex items-center gap-2 font-[600] text-[14px] mb-1">
        <img src="https://cdn.henryharvin.com/images/1690622572india-flag-48.png" alt="India Flag" class="w-6 h-6"> Henry Harvin Asia Pacific Head Office
      </h2>
      <p class="text-[12px]">Henry Harvin House,<br>B-12 Sector-6 Noida (UP) - 201301</p>
    </div>
  </div>

  <!-- ISO Badges -->
  <div class="flex flex-wrap justify-center gap-4 mt-6">
    <span class="bg-red-800 text-white px-4 py-2 rounded-full text-sm shadow">ISO 9001:2015</span>
    <span class="bg-red-800 text-white px-4 py-2 rounded-full text-sm shadow">ISO/IEC 27001:2013</span>
  </div>

  <!-- Footer Text -->
  <p class="text-center text-sm mt-4 text-red-600 font-medium">© 2013-2025 - Kazumi . All Rights Reserved.</p>
</div>

  </footer>

  <div class="fixed bottom-0 left-0 w-full flex text-white text-sm font-semibold z-50">
  <!-- Call Section -->
  <a href="tel:+919899577620" class="w-1/2 flex items-center justify-center bg-green-700 hover:bg-green-800 py-2 transition">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h1.586a1 1 0 01.707.293l2.414 2.414a1 1 0 01.293.707V8.586a1 1 0 01-.293.707l-1.586 1.586a16.001 16.001 0 006.414 6.414l1.586-1.586a1 1 0 01.707-.293h1.172a1 1 0 01.707.293l2.414 2.414a1 1 0 01.293.707V19a2 2 0 01-2 2h-1C7.477 21 3 16.523 3 11V6a1 1 0 011-1z" />
    </svg>
    +91 9899577620
  </a>

  <!-- Free Class Section -->
  <a href="#demo-class" class="w-1/2 flex items-center justify-center bg-yellow-400 hover:bg-yellow-500 text-black py-2 transition">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
      <path d="M4 3a1 1 0 011-1h10a1 1 0 011 1v2H4V3zm0 4h12v10a1 1 0 01-1 1H5a1 1 0 01-1-1V7zm2 2v2h2V9H6zm0 4v2h2v-2H6z" />
    </svg>
    Free 1st Class
  </a>
</div>

  <div class="fixed z-20 bottom-6 left-4 hidden md:block">
    <a class="border-2 border-[#0dc143] flex items-center text-center justify-between w-[170px] bg-white relative rounded-full mb-4" href="https://wa.me/message/2YDWDUFYBSUBA1">
        <span class="text-[#0dc143] text-[17px] font-[400] ml-3">WhatsApp Us</span>
        <span class="bg-[#0dc143] w-8 h-8 rounded-full flex items-center text-center justify-center"><i class="fa fa-whatsapp text-white" id="fone" aria-hidden="true"></i></span>
        <img class="w-3 absolute animate-ping right-0 -top-2" src="https://cdn.henryharvin.com/ezgif.com-resize.webp" alt="whatsapp1" loading="lazy">
    </a>
    <a class="border-2 border-[#007bff] flex items-center text-center justify-between w-[170px] bg-white relative rounded-full mb-4" href="">
        <span class="text-[#007bff] text-[17px] font-[400] ml-3">Talk to Expert</span>
        <span class="bg-[#007bff] w-8 h-8 rounded-full flex items-center text-center justify-center"><i class="fa fa-video-camera text-white" id="fone" aria-hidden="true"></i></span>
        <img class="w-2 absolute animate-ping right-0 -top-2" src="https://cdn.henryharvin.com/images/1701330473red.1.webp" alt="talkto" loading="lazy">
    </a>
</div>

<div class="fixed z-20 bottom-[50%] rotate-90 hidden lg:block" style="right: -50px;">
    <a class="border-2 border-[#008000] flex items-center text-center justify-between w-48 bg-white relative rounded-full mb-4 dynamic_contact_href" href="tel: +91 989 957 7620">
        <span class="text-[#008000] text-[17px] font-[400] ml-2 dynamic_contact">+91 989 957 7620</span>
        <span class="bg-[#008000] w-8 h-8 rounded-full flex items-center text-center justify-center"><i class="fa fa-phone text-white" id="fone" aria-hidden="true"></i></span>
    </a>
</div>
  <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg border-2 border-red-600 shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-[24px] font-[600] text-red-600">
                        Apply Now
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l12 12M1 13L13 1"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <form class="p-4 md:p-5 space-y-4" action="https://www.henryharvin.com/admin/lead" method="POST">
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
                            <select name="countryCode" class="w-4/12 bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg p-2.5">
                                <option value="IN" value="+91" selected="">(+91)</option>
                                <option value="PK" value="+92">Pakistan (+92)</option>
                                <option value="US" value="+1">USA (+1)</option>
                                <option value="GB" value="+44">UK (+44)</option>
                                <option value="LK" value="+94">Sri Lanka (+94)</option>
                                <option value="BD" value="+880">Bangladesh (+880)</option>
                                <option value="AE" value="+971">United Arab Emirates (+971)</option>
                                    <option value="AF" value="+93">Afghanistan (+93)</option>
                                    <option value="AL" value="+355">Albania (+355)</option>
                                    <option value="DZ" value="+213">Algeria (+213)</option>
                                    <option value="AS" value="+-683">American Samoa (+-683)</option>
                                    <option value="AD" value="+376">Andorra (+376)</option>
                                    <option value="AO" value="+244">Angola (+244)</option>
                                    <option value="AI" value="+-263">Anguilla (+-263)</option>
                                    <option value="AQ" value="+672">Antarctica (+672)</option>
                                    <option value="AG" value="+-267">Antigua and Barbuda (+-267)</option>
                                    <option value="AR" value="+54">Argentina (+54)</option>
                                    <option value="AM" value="+374">Armenia (+374)</option>
                                    <option value="AW" value="+297">Aruba (+297)</option>
                                    <option value="AU" value="+61">Australia (+61)</option>
                                    <option value="AT" value="+43">Austria (+43)</option>
                                    <option value="AZ" value="+994">Azerbaijan (+994)</option>
                                    <option value="BS" value="+-241">Bahamas (+-241)</option>
                                    <option value="BH" value="+973">Bahrain (+973)</option>
                                    <option value="BB" value="+-245">Barbados (+-245)</option>
                                    <option value="BY" value="+375">Belarus (+375)</option>
                                    <option value="BE" value="+32">Belgium (+32)</option>
                                    <option value="BZ" value="+501">Belize (+501)</option>
                                    <option value="BJ" value="+229">Benin (+229)</option>
                                    <option value="BM" value="+-440">Bermuda (+-440)</option>
                                    <option value="BT" value="+975">Bhutan (+975)</option>
                                    <option value="BO" value="+591">Bolivia (+591)</option>
                                    <option value="BA" value="+387">Bosnia and Herzegovina (+387)</option>
                                    <option value="BW" value="+267">Botswana (+267)</option>
                                    <option value="BR" value="+55">Brazil (+55)</option>
                                    <option value="BN" value="+673">Brunei (+673)</option>
                                    <option value="BG" value="+359">Bulgaria (+359)</option>
                                    <option value="BF" value="+226">Burkina Faso (+226)</option>
                                    <option value="BI" value="+257">Burundi (+257)</option>
                                    <option value="KH" value="+855">Cambodia (+855)</option>
                                    <option value="CM" value="+237">Cameroon (+237)</option>
                                    <option value="CA" value="+1">Canada (+1)</option>
                                    <option value="CV" value="+238">Cape Verde (+238)</option>
                                    <option value="KY" value="+-344">Cayman Islands (+-344)</option>
                                    <option value="CF" value="+236">Central African Republic (+236)</option>
                                    <option value="TD" value="+235">Chad (+235)</option>
                                    <option value="CL" value="+56">Chile (+56)</option>
                                    <option value="CN" value="+86">China (+86)</option>
                                    <option value="CX" value="+53">Christmas Island (+53)</option>
                                    <option value="CC" value="+61">Cocos (Keeling) Islands (+61)</option>
                                    <option value="CO" value="+57">Colombia (+57)</option>
                                    <option value="KM" value="+269">Comoros (+269)</option>
                                    <option value="CD" value="+243">Congo (+243)</option>
                                    <option value="CG" value="+242">Congo (+242)</option>
                                    <option value="CK" value="+682">Cook Islands (+682)</option>
                                    <option value="CR" value="+506">Costa Rica (+506)</option>
                                    <option value="CI" value="+225">Cote D'Ivoire (+225)</option>
                                    <option value="HR" value="+385">Croatia (+385)</option>
                                    <option value="CU" value="+53">Cuba (+53)</option>
                                    <option value="CY" value="+357">Cyprus (+357)</option>
                                    <option value="CZ" value="+420">Czech Republic (+420)</option>
                                    <option value="DK" value="+45">Denmark (+45)</option>
                                    <option value="DJ" value="+253">Djiboutiof the Afars and Issas (+253)</option>
                                    <option value="DM" value="+-766">Dominica (+-766)</option>
                                    <option value="DO" value="+1-829">Dominican Republic (+1-829)</option>
                                    <option value="TP" value="+670">East Timor (+670)</option>
                                    <option value="EC" value="+593">Ecuador (+593)</option>
                                    <option value="EG" value="+20">Egypt (+20)</option>
                                    <option value="SV" value="+503">El Salvador (+503)</option>
                                    <option value="GQ" value="+240">Equatorial Guinea (+240)</option>
                                    <option value="ER" value="+291">Eritrea (+291)</option>
                                    <option value="EE" value="+372">Estonia (+372)</option>
                                    <option value="ET" value="+251">Ethiopia (+251)</option>
                                    <option value="FK" value="+500">Falkland Islands (+500)</option>
                                    <option value="FO" value="+298">Faroe Islands (+298)</option>
                                    <option value="FJ" value="+679">Fiji (+679)</option>
                                    <option value="FI" value="+358">Finland (+358)</option>
                                    <option value="FR" value="+33">France (+33)</option>
                                    <option value="GF" value="+594">French Guiana or French Guyana (+594)</option>
                                    <option value="PF" value="+689">French Polynesia (+689)</option>
                                    <option value="GA" value="+241">Gabon (+241)</option>
                                    <option value="GM" value="+220">Gambia, The (+220)</option>
                                    <option value="GE" value="+995">Georgia (+995)</option>
                                    <option value="DE" value="+49">Germany (+49)</option>
                                    <option value="GH" value="+233">Ghana (+233)</option>
                                    <option value="GI" value="+350">Gibraltar (+350)</option>
                                    <option value="GR" value="+30">Greece (+30)</option>
                                    <option value="GL" value="+299">Greenland (+299)</option>
                                    <option value="GD" value="+-472">Grenada (+-472)</option>
                                    <option value="GP" value="+590">Guadeloupe (+590)</option>
                                    <option value="GU" value="+-670">Guam (+-670)</option>
                                    <option value="GT" value="+502">Guatemala (+502)</option>
                                    <option value="GN" value="+224">Guinea (+224)</option>
                                    <option value="GW" value="+245">Guinea-Bissau (+245)</option>
                                    <option value="GY" value="+592">Guyana (+592)</option>
                                    <option value="HT" value="+509">Haiti (+509)</option>
                                    <option value="HN" value="+504">Honduras (+504)</option>
                                    <option value="HK" value="+852">Hong Kong (+852)</option>
                                    <option value="HU" value="+36">Hungary (+36)</option>
                                    <option value="IS" value="+354">Iceland (+354)</option>
                                    <option value="ID" value="+62">Indonesia (+62)</option>
                                    <option value="IR" value="+98">Iran (+98)</option>
                                    <option value="IQ" value="+964">Iraq (+964)</option>
                                    <option value="IE" value="+353">Ireland (+353)</option>
                                    <option value="IL" value="+972">Israel (+972)</option>
                                    <option value="IT" value="+39">Italy (+39)</option>
                                    <option value="JM" value="+-875">Jamaica (+-875)</option>
                                    <option value="JP" value="+81">Japan (+81)</option>
                                    <option value="JO" value="+962">Jordan (+962)</option>
                                    <option value="KZ" value="+7">Kazakhstan (+7)</option>
                                    <option value="KE" value="+254">Kenya (+254)</option>
                                    <option value="KI" value="+686">Kiribati (+686)</option>
                                    <option value="KP" value="+850">North Korea (+850)</option>
                                    <option value="KR" value="+82">South Korea (+82)</option>
                                    <option value="KW" value="+965">Kuwait (+965)</option>
                                    <option value="KG" value="+996">Kyrgyzstan (+996)</option>
                                    <option value="LA" value="+856">Lao People's Democratic Republic (Laos) (+856)</option>
                                    <option value="LV" value="+371">Latvia (+371)</option>
                                    <option value="LB" value="+961">Lebanon (+961)</option>
                                    <option value="LS" value="+266">Lesotho (+266)</option>
                                    <option value="LR" value="+231">Liberia (+231)</option>
                                    <option value="LY" value="+218">Libya (+218)</option>
                                    <option value="LI" value="+423">Liechtenstein (+423)</option>
                                    <option value="LT" value="+370">Lithuania (+370)</option>
                                    <option value="LU" value="+352">Luxembourg (+352)</option>
                                    <option value="MO" value="+853">Macau (+853)</option>
                                    <option value="MK" value="+389">Macedonia (+389)</option>
                                    <option value="MG" value="+261">Madagascar (+261)</option>
                                    <option value="MW" value="+265">Malawi (+265)</option>
                                    <option value="MY" value="+60">Malaysia (+60)</option>
                                    <option value="MV" value="+960">Maldives (+960)</option>
                                    <option value="ML" value="+223">Mali (+223)</option>
                                    <option value="MT" value="+356">Malta (+356)</option>
                                    <option value="MH" value="+692">Marshall Islands (+692)</option>
                                    <option value="MQ" value="+596">Martinique (+596)</option>
                                    <option value="MR" value="+222">Mauritania (+222)</option>
                                    <option value="MU" value="+230">Mauritius (+230)</option>
                                    <option value="YT" value="+269">Mayotte (+269)</option>
                                    <option value="MX" value="+52">Mexico (+52)</option>
                                    <option value="FM" value="+691">Micronesia (+691)</option>
                                    <option value="MD" value="+373">Moldova (+373)</option>
                                    <option value="MC" value="+377">Monaco (+377)</option>
                                    <option value="MN" value="+976">Mongolia (+976)</option>
                                    <option value="MS" value="+-663">Montserrat (+-663)</option>
                                    <option value="MA" value="+212">Morocco (+212)</option>
                                    <option value="MZ" value="+258">Mozambique (+258)</option>
                                    <option value="MM" value="+95">Myanmar (+95)</option>
                                    <option value="NA" value="+264">Namibia (+264)</option>
                                    <option value="NR" value="+674">Nauru (+674)</option>
                                    <option value="NP" value="+977">Nepal (+977)</option>
                                    <option value="NL" value="+31">Netherlands (+31)</option>
                                    <option value="AN" value="+599">Netherlands Antilles (+599)</option>
                                    <option value="NC" value="+687">New Caledonia (+687)</option>
                                    <option value="NZ" value="+64">New Zealand (+64)</option>
                                    <option value="NI" value="+505">Nicaragua (+505)</option>
                                    <option value="NE" value="+227">Niger (+227)</option>
                                    <option value="NG" value="+234">Nigeria (+234)</option>
                                    <option value="NU" value="+683">Niue (+683)</option>
                                    <option value="NF" value="+672">Norfolk Island (+672)</option>
                                    <option value="MP" value="+-669">Northern Mariana Islands (+-669)</option>
                                    <option value="NO" value="+47">Norway (+47)</option>
                                    <option value="OM" value="+968">Oman (+968)</option>
                                    <option value="PW" value="+680">Palau (+680)</option>
                                    <option value="PS" value="+970">Palestinian State (+970)</option>
                                    <option value="PA" value="+507">Panama (+507)</option>
                                    <option value="PG" value="+675">Papua New Guinea (+675)</option>
                                    <option value="PY" value="+595">Paraguay (+595)</option>
                                    <option value="PE" value="+51">Peru (+51)</option>
                                    <option value="PH" value="+63">Philippines (+63)</option>
                                    <option value="PL" value="+48">Poland (+48)</option>
                                    <option value="PT" value="+351">Portugal (+351)</option>
                                    <option value="PR" value="+1-787">Puerto Rico (+1-787)</option>
                                    <option value="QA" value="+974">Qatar (+974)</option>
                                    <option value="RE" value="+262">Reunion (+262)</option>
                                    <option value="RO" value="+40">Romania (+40)</option>
                                    <option value="RU" value="+7">Russian Federation (+7)</option>
                                    <option value="RW" value="+250">Rwanda (+250)</option>
                                    <option value="SH" value="+290">Saint Helena (+290)</option>
                                    <option value="KN" value="+-868">Saint Kitts and Nevis (+-868)</option>
                                    <option value="LC" value="+-757">Saint Lucia (+-757)</option>
                                    <option value="PM" value="+508">Saint Pierre and Miquelon (+508)</option>
                                    <option value="VC" value="+-783">Saint Vincent and the Grenadines (+-783)</option>
                                    <option value="WS" value="+685">Samoa (+685)</option>
                                    <option value="SM" value="+378">San Marino (+378)</option>
                                    <option value="ST" value="+239">Sao Tome and Principe (+239)</option>
                                    <option value="SA" value="+966">Saudi Arabia (+966)</option>
                                    <option value="SN" value="+221">Senegal (+221)</option>
                                    <option value="SC" value="+248">Seychelles (+248)</option>
                                    <option value="SL" value="+232">Sierra Leone (+232)</option>
                                    <option value="SG" value="+65">Singapore (+65)</option>
                                    <option value="SK" value="+421">Slovakia (+421)</option>
                                    <option value="SI" value="+386">Slovenia (+386)</option>
                                    <option value="SB" value="+677">Solomon Islands (+677)</option>
                                    <option value="SO" value="+252">Somalia (+252)</option>
                                    <option value="ZA" value="+27">South Africa (+27)</option>
                                    <option value="ES" value="+34">Spain (+34)</option>
                                    <option value="SD" value="+249">Sudan (+249)</option>
                                    <option value="SR" value="+597">Suriname (+597)</option>
                                    <option value="SZ" value="+268">Swaziland (+268)</option>
                                    <option value="SE" value="+46">Sweden (+46)</option>
                                    <option value="CH" value="+41">Switzerland (+41)</option>
                                    <option value="SY" value="+963">Syria (+963)</option>
                                    <option value="TW" value="+886">Taiwan (+886)</option>
                                    <option value="TJ" value="+992">Tajikistan (+992)</option>
                                    <option value="TZ" value="+255">Tanzania (+255)</option>
                                    <option value="TH" value="+66">Thailand (+66)</option>
                                    <option value="TK" value="+690">Tokelau (+690)</option>
                                    <option value="TO" value="+676">Tonga (+676)</option>
                                    <option value="TT" value="+-867">Trinidad and Tobago (+-867)</option>
                                    <option value="TN" value="+216">Tunisia (+216)</option>
                                    <option value="TR" value="+90">Turkey (+90)</option>
                                    <option value="TM" value="+993">Turkmenistan (+993)</option>
                                    <option value="TC" value="+-648">Turks and Caicos Islands (+-648)</option>
                                    <option value="TV" value="+688">Tuvalu (+688)</option>
                                    <option value="UG" value="+256">Uganda (+256)</option>
                                    <option value="UA" value="+380">Ukraine (+380)</option>
                                    <option value="UY" value="+598">Uruguay (+598)</option>
                                    <option value="UZ" value="+998">Uzbekistan (+998)</option>
                                    <option value="VU" value="+678">Vanuatu (+678)</option>
                                    <option value="VA" value="+418">Vatican City State (+418)</option>
                                    <option value="VE" value="+58">Venezuela (+58)</option>
                                    <option value="VN" value="+84">Vietnam (+84)</option>
                                    <option value="VI" value="+-283">Virgin Islands, British (+-283)</option>
                                    <option value="VQ" value="+-339">Virgin Islands, United States (+-339)</option>
                                    <option value="WF" value="+681">Wallis and Futuna Islands (+681)</option>
                                    <option value="YE" value="+967">Yemen (+967)</option>
                                    <option value="ZM" value="+260">Zambia (+260)</option>
                                    <option value="ZW" value="+263">Zimbabwe (+263)</option>
                            </select>
                            <input type="number" name="sendto" placeholder="Mobile no *" class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>
                        <span id="phone_error3" class="text-red-500 text-xs"></span>
                    </div>

                    <!-- Hidden Inputs -->
                    <input type="hidden" name="source" class="textbox" value="KAZUMI WEBSITE" placeholder="" />
                    <input type="hidden" name="lead_source_page_url" class="textbox" value="{{url()->full()}}" placeholder="" id="">
                    <input type="hidden" name="slug" value="contact-us">

                    <div class="flex justify-center pt-3">
                        <button type="submit" class="bg-red-600 text-white py-2 px-4 text-lg rounded-md">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 3000,
    },
    slidesPerView: 1,
    spaceBetween: 20,
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
</script>
<script>
// Swiper 17 - For .linearswiper1
const swiper17 = new Swiper('.linearswiper', {
    loop: true,
    spaceBetween: 10,
    speed: 5000,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
        pauseOnMouseEnter: false,
    },
    allowTouchMove: false,
    grabCursor: false,
    freeMode: true,
    freeModeMomentum: false,
    breakpoints: {
        0: {
            slidesPerView: 2,
        },
        480: {
            slidesPerView: 2,
        },
        640: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 4,
        },
        1280: {
            slidesPerView: 5,
        }
    },
});
</script>
</body>
</html>
