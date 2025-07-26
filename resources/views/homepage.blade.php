@extends('layouts.app')
@section('content')
<section>
    <div class="relative w-full h-screen overflow-hidden">
        <!-- Video Background -->
        <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover">
            <source src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175274277337088-413229662_medium.mp4"
                type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Content Overlay -->
        <div
            class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white bg-black bg-opacity-30">
            <p class="uppercase text-2xl md:text-4xl tracking-widest mb-4"
                style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.35);">Welcome to Kazumi Japanese & Culture School.</p>
            <h1 class="text-xl md:text-2xl tracking-widest mb-6">Discover a new standard of Japanese Education and
                Culture.</h1>
            <div class="flex space-x-4 mb-8">
                <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"
                    class="bg-red-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-red-600">Apply
                    Now</a>
                <!-- <a href="#" class="bg-red-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-red-600"> Learn
                    More</a> -->
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


<section id="course_section" class="py-12 px-4 max-w-7xl mx-auto">
    <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] uppercase my-4">Courses
    </h2>
    <p class="text-center text-gray-600 text-[16px] font-[600] my-2">Just like the famous Japanese proverb "継続は力なり"
        (Continuity is power), we bring a series of courses starting from Basic (N5) to Super Advanced (N1) level for
        continuous learning and growth.</p>
    <div class="w-full flex flex-wrap justify-center gap-6 my-10 px-4">
        <!-- Card 1 -->
        <div
            class="w-full sm:w-[45%] md:w-[22%] flex flex-col shadow-xl border border-red-100 rounded-xl overflow-hidden">
            <img class="w-full h-60 object-cover"
                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753098617website_image_300x300_1.png" alt="">
            <div class="flex flex-col flex-grow h-full px-4 py-4">
                <p class="text-[16px] font-[500] text-gray-900">Japanese Language N5 Level Course</p>
                <p class="text-[14px] text-gray-700 mt-2 flex-grow">Master everyday greetings, simple kanji and basic
                    conversations.</p>
                <div class="mt-4">
                    <a href="#" class="bg-red-500 text-white text-xs px-3 py-1 rounded hover:bg-red-600">Read
                        more...</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div
            class="w-full sm:w-[45%] md:w-[22%] flex flex-col shadow-xl border border-red-100 rounded-xl overflow-hidden">
            <img class="w-full h-60 object-cover"
                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753098647website_image_300x300_2.png" alt="">
            <div class="flex flex-col flex-grow h-full px-4 py-4">
                <p class="text-[16px] font-[500] text-gray-900">Japanese Language N4 Level Course</p>
                <p class="text-[14px] text-gray-700 mt-2 flex-grow">Handle daily situations, expanded vocabulary and
                    essential grammar for smooth conversations.</p>
                <div class="mt-4">
                    <a href="#" class="bg-red-500 text-white text-xs px-3 py-1 rounded hover:bg-red-600">Read
                        more...</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div
            class="w-full sm:w-[45%] md:w-[22%] flex flex-col shadow-xl border border-red-100 rounded-xl overflow-hidden">
            <img class="w-full h-60 object-cover"
                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753098744website_image_300x300_3.png" alt="">
            <div class="flex flex-col flex-grow h-full px-4 py-4">
                <p class="text-[16px] font-[500] text-gray-900">Japanese Language N3 Level Course</p>
                <p class="text-[14px] text-gray-700 mt-2 flex-grow">Understand complex sentences, express opinions and
                    interact in real life situations.</p>
                <div class="mt-4">
                    <a href="#" class="bg-red-500 text-white text-xs px-3 py-1 rounded hover:bg-red-600">Read
                        more...</a>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div
            class="w-full sm:w-[45%] md:w-[22%] flex flex-col shadow-xl border border-red-100 rounded-xl overflow-hidden">
            <img class="w-full h-60 object-cover"
                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753098769website_image_300x300_4.png" alt="">
            <div class="flex flex-col flex-grow h-full px-4 py-4">
                <p class="text-[16px] font-[500] text-gray-900">Japanese Language N2 Level Course</p>
                <p class="text-[14px] text-gray-700 mt-2 flex-grow">Achieve professional level mastery, comprehend news
                    and gain academic competency.</p>
                <div class="mt-4">
                    <a href="#" class="bg-red-500 text-white text-xs px-3 py-1 rounded hover:bg-red-600">Read
                        more...</a>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div
            class="w-full sm:w-[45%] md:w-[22%] flex flex-col shadow-xl border border-red-100 rounded-xl overflow-hidden">
            <img class="w-full h-60 object-cover"
                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753098812website_image_300x300_5.png" alt="">
            <div class="flex flex-col flex-grow h-full px-4 py-4">
                <p class="text-[16px] font-[500] text-gray-900">Japanese Language N1 Level Course</p>
                <p class="text-[14px] text-gray-700 mt-2 flex-grow">Gain near native proficiency and understand advanced
                    texts, subtleties and business vocabulary.</p>
                <div class="mt-4">
                    <a href="#" class="bg-red-500 text-white text-xs px-3 py-1 rounded hover:bg-red-600">Read
                        more...</a>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div
            class="w-full sm:w-[45%] md:w-[22%] flex flex-col shadow-xl border border-red-100 rounded-xl overflow-hidden">
            <img class="w-full h-60 object-cover"
                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753340788asian-woman-practicing-japanese-handwriting-indoors.jpg" alt="">
            <div class="flex flex-col flex-grow h-full px-4 py-4">
                <p class="text-[16px] font-[500] text-gray-900">PG Diploma in Japanese Language</p>
                <p class="text-[14px] text-gray-700 mt-2 flex-grow">Master advanced vocabulary, sentence structure,
                    grammar, and abstract comprehension.</p>
                <div class="mt-4">
                    <a href="#" class="bg-red-500 text-white text-xs px-3 py-1 rounded hover:bg-red-600">Read
                        more...</a>
                </div>
            </div>
        </div>

        <!-- Card 7 -->
        <div
            class="w-full sm:w-[45%] md:w-[22%] flex flex-col shadow-xl border border-red-100 rounded-xl overflow-hidden">
            <img class="w-full h-60 object-cover"
                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753340863man-sitting-reading-book-stairs.jpg" alt="">
            <div class="flex flex-col flex-grow h-full px-4 py-4">
                <p class="text-[16px] font-[500] text-gray-900">Master’s in Japanese Language</p>
                <p class="text-[14px] text-gray-700 mt-2 flex-grow">Achieve near native proficiency, build strong
                    foundations, and reach the highest fluency levels.</p>
                <div class="mt-4">
                    <a href="#" class="bg-red-500 text-white text-xs px-3 py-1 rounded hover:bg-red-600">Read
                        more...</a>
                </div>
            </div>
        </div>
    </div>


</section>

<section class="py-12 px-4 bg-gray-100">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] uppercase my-4">7000+ Reviews
            with 4.6/5 Avg Rating
        </h2>
        <div
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
                    alt="justdial">
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
                    alt="justdial">
            </div>
            <div
                class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                <div class="flex items-center justify-center">
                    <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.9
                        <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                            class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                            class="fa fa-star text-red-700"></i></a>
                </div>
                <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1730089884544x180-BR-300x99-1.png"
                    alt="mouthshut">
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
                    alt="edugorrilla">
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
                    alt="google">
            </div>
            <div
                class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                <div class="flex items-center justify-center">
                    <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.5
                        <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                            class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                            class="fa fa-star-half text-red-700"></i></a>
                </div>
                <img class="h-16" src="https://cdn.henryharvin.com/gooo1.webp" alt="google">
            </div>
            <div
                class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                <div class="flex items-center justify-center">
                    <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.6
                        <i class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                            class="fa fa-star text-red-700"></i><i class="fa fa-star text-red-700"></i><i
                            class="fa fa-star-half text-red-700"></i></a>
                </div>
                <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1746772870coursereport-.png"
                    alt="google">
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
                    alt="google">
            </div>
        </div>
    </div>
</section>


<section class="py-12 bg-gray-100 mx-auto px-4">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] uppercase my-4">Key Highlights
        </h2>
        <div class="max-w-6xl mx-auto py-8 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 text-center">

                <!-- Live Online Classes -->
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="text-red-600 mb-3">
                        <i class="fa fa-video-camera text-6xl"></i>
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">Live Online Classes</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Join real-time interactive classes designed for flexible
                        schedules, along with recorded lessons.</p>
                </div>

                <!-- Personalized Learning -->
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="text-red-600 mb-3">
                        <i class="fa fa-user text-6xl"></i>
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">Personalized Learning</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Get access to various tools and learning options with our
                        mobile application.</p>
                </div>

                <!-- Expert Trainers -->
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="text-red-600 mb-3">
                        <i class="fa fa-graduation-cap text-6xl"></i>
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">Expert Trainers</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Learn from certified, highly experienced and passionate
                        faculties.</p>
                </div>

                <!-- JLPT Preparation Training -->
                <div
                    class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center col-span-1 sm:col-span-1 md:col-span-1">
                    <div class="text-red-600 mb-3">
                        <i class="fa fa-pencil text-6xl"></i>
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">JLPT Preparation Training</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Excel in the JLPT with our specialized modules, mock
                        tests,
                        personalized coaching, and JLPT-focused materials sourced directly from Japan.</p>
                </div>

                <!-- Unique Learning Methods -->
                <div
                    class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center col-span-1 sm:col-span-1 md:col-span-1">
                    <div class="text-red-600 mb-3">
                        <i class="fa fa-lightbulb-o text-6xl"></i>
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">Unique Learning Methods</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Learn through innovative teaching methods that make
                        learning
                        easy and practical.</p>
                </div>

                <!-- Practical Focus -->
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="text-red-600 mb-3">
                        <i class="fa fa-cogs text-6xl"></i>
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">Practical Focus</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Focus on gaining practical linguistics skills that can be
                        applied to daily life, work and business.</p>
                </div>

                <!-- International Network -->
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="text-red-600 mb-3">
                        <i class="fa fa-globe text-6xl"></i>
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">International Network</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Join a diverse community of learners and professionals
                        from
                        around the world.</p>
                </div>

                <!-- Cultural Training -->
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="text-red-600 mb-3">
                        <i class="fa fa-university text-6xl"></i>
                    </div>
                    <h3 class="text-xl font-[600] text-red-600 mt-4">Cultural Training</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Explore traditions, etiquettes, festivals, and practices
                        used
                        in an authentic environment.</p>
                </div>

            </div>
        </div>

    </div>
</section>
<section class="py-12 mx-auto px-4">
    <div class="max-w-6xl mx-auto" bis_skin_checked="1">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] uppercase my-4">Agota™ Framework
        </h2>
        <p class="text-[16px] text-gray-800 font-[600] text-center">It is a trajectory that offers complete growth of an
            individual incorporating
            the two most significant focus areas of contemporary learning:<span class="font-[600]">The Competency
                Development and The Career Development .</span></p>
        <p class="text-[16px] text-gray-800 font-[600] text-center mt-2">Competency development is about building
            capabilities that not only meet
            current job demands but also anticipates the future needs. It includes:</p>
        <div class="relative grid md:grid-cols-2 gap-2 my-2" bis_skin_checked="1">
            <div bis_skin_checked="1">
                <ul class="disk mt-2">
                    <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                        <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                            bis_skin_checked="1">
                            <p class="col-span-2 text-red-600">1: Two-Way Live Training
                                <span class="block text-[12px] text-gray-800 font-[600]">Two-way Live Online Interactive
                                    Classroom
                                    Sessions</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2 " bis_skin_checked="1">
                                <a target="_blank" href="https://youtu.be/lMkxmdUnAPc"
                                    bis_size="{&quot;x&quot;:258,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1734}">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487194ezgif.com-resize (32).webp"
                                        alt="Video Thumbnail"
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
                                <span class="block text-[12px] text-gray-800 font-[600]">Facility to undergo various
                                    projects along
                                    with the course.</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://youtu.be/p86YBsCkb0A"
                                    bis_size="{&quot;x&quot;:580,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1734}">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719575893ezgif.com-resize - 2024-06-28T172803.379.webp"
                                        alt="Video Thumbnail"
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
                                <span class="block text-[12px] text-gray-800 font-[600]">Free Access to #AskHenry
                                    Hackathons and
                                    Competitions &amp; many other facilities from Henry Harvin®</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2 " bis_skin_checked="1">
                                <a target="_blank" href="https://youtu.be/K7HdNdMwOuE"
                                    bis_size="{&quot;x&quot;:258,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1847}">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719576156sxw (2).webp"
                                        alt="Video Thumbnail"
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
                                <span class="block text-[12px] text-gray-800 font-[600]">Access to 60+ Masterclass
                                    Sessions for
                                    essential soft skill development</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://youtu.be/Gk3t1W3LVZ8"
                                    bis_size="{&quot;x&quot;:580,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1847}">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719577083dcwcw.webp"
                                        alt="Video Thumbnail"
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
                                <span class="block text-[12px] text-gray-800 font-[600]">Get Gold Membership of Henry
                                    Harvin®</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://www.youtube.com/watch?v=bzJOMiJu_QA">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1728970566Membership_Card_Collage_(1).png"
                                        alt="Video Thumbnail"
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
                                <span class="block text-[12px] text-gray-800 font-[600]">Free access to the E-learning
                                    Portal and
                                    future updates. Get access to PPTs, Projects, Quizzes, self-paced Video-based
                                    learning, a question bank, a library, practice tests <a
                                        href="https://examopedia.com/"
                                        class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1734598082examopedia_logo.webp"
                                            alt="Examopedia Logo" class="h-3">Examopedia</span> final assessment, a
                                forum, and
                                doubt sessions.</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://www.youtube.com/watch?v=XUQm0ecT6ts">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487342ezgif.com-resize (35).webp"
                                        alt="Video Thumbnail"
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
                    <!-- <li  class="text-[15px] py-2 text-left font-[600] flex items-center justify-between border-b border-purple">1: Two-Way Live Training <span class="hidden"><a href="" class="text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded-full px-4"><i class="fa fa-play-circle text-[#ffc107]" style="font-size:24px;"></i></a></span></li>
                            <li  class="text-[15px] py-2 text-left font-[600] flex items-center justify-between border-b border-purple">2: Projects <span class="hidden"><a href="" class="text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded-full px-4"><i class="fa fa-play-circle text-[#ffc107]" style="font-size:24px;"></i></a></span></li>
                            <li  class="text-[15px] py-2 text-left font-[600] flex items-center justify-between border-b border-purple">3: Student Engagement & Events <span class="hidden"><a href="" class="text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded-full px-4"><i class="fa fa-play-circle text-[#ffc107]" style="font-size:24px;"></i></a></span></li>
                            <li  class="text-[15px] py-2 text-left font-[600] flex items-center justify-between border-b border-purple">4: Masterclasses <span class="hidden"><a href="" class="text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded-full px-4"><i class="fa fa-play-circle text-[#ffc107]" style="font-size:24px;"></i></a></span></li>
                            <li  class="text-[15px] py-2 text-left font-[600] flex items-center justify-between border-b border-purple">5: Membership Access <span class="hidden"><a href="" class="text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded-full px-4"><i class="fa fa-play-circle text-[#ffc107]" style="font-size:24px;"></i></a></span></li>
                            <li  class="text-[15px] py-2 text-left font-[600] flex items-center justify-between border-b border-purple">6: E-Learning <span class="hidden"><a href="" class="text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded-full px-4"><i class="fa fa-play-circle text-[#ffc107]" style="font-size:24px;"></i></a></span></li> -->
                </ul>
                <p class="text-[15px] text-left my-4">Career Development lays focus on the essentials for acquiring a
                    good career or diving into a highly competent one. It includes:</p>
                <ul class="disk">
                    <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                        <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                            bis_skin_checked="1">
                            <p class="col-span-2 text-red-600">7: Hallmark Certification + License
                                <span class="block text-[12px] text-gray-800 font-[600]">Distinguish your profile with
                                    global
                                    credentials and showcase expertise with our Hallmark Completion certificate with
                                    Professional License</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://youtu.be/LJH79vKhyXc"
                                    bis_size="{&quot;x&quot;:258,&quot;y&quot;:2242,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:2242}">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487248ezgif.com-resize (33).webp"
                                        alt="Video Thumbnail"
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
                            <p class="col-span-2 text-red-600">8: Guaranteed Internship
                                <span class="block text-[12px] text-gray-800 font-[600]">Get a guaranteed Internship
                                    with Henry
                                    Harvin® and in top MNCs like J.P. Morgan, Accenture &amp; many more via
                                    Yuva Intern.</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://www.youtube.com/shorts/2od0SMHat-A">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719575988d233dd23d.webp"
                                        alt="Video Thumbnail"
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
                                    Successful
                                    Entrepreneurs to set up a sustainable &amp; scalable Business from scratch at both
                                    Freelance and entrepreneur levels</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank"
                                    href="https://www.youtube.com/watch?v=pdffXkaWqVg&amp;feature=youtu.be">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487388ezgif.com-resize (36).webp"
                                        alt="Video Thumbnail"
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
                                    through
                                    Placement Drives, Premium access to Job portal &amp; Personalized Job
                                    Consulting</span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://www.youtube.com/shorts/KTb2gD30FNw">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487296ezgif.com-resize (34).webp"
                                        alt="Video Thumbnail"
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
                    <!-- <li  class="text-[15px] py-2 text-left font-[600] flex items-center justify-between border-b border-purple">7: Hallmark Certification + License <span class="hidden"><a href="" class="text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded-full px-4"><i class="fa fa-play-circle text-[#ffc107]" style="font-size:24px;"></i></a></span></li>
                            <li  class="text-[15px] py-2 text-left font-[600] flex items-center justify-between border-b border-purple">8: Internship Support <span><a href="https://www.youtube.com/shorts/2od0SMHat-A" class="text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded-full px-4"><i class="fa fa-play-circle text-[#ffc107]" style="font-size:24px;"></i></a></span></li>
                            <li  class="text-[15px] py-2 text-left font-[600] flex items-center justify-between border-b border-purple">9: Entrepreneurship Mentorship <span class="hidden"><a href="" class="text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded-full px-4"><i class="fa fa-play-circle text-[#ffc107]" style="font-size:24px;"></i></a></span></li>
                            <li  class="text-[15px] py-2 text-left font-[600] flex items-center justify-between border-b border-purple">10: Placement Support <span><a href="https://www.youtube.com/shorts/KTb2gD30FNw" class="text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded-full px-4"><i class="fa fa-play-circle text-[#ffc107]" style="font-size:24px;"></i></a></span></li> -->
                </ul>
            </div>
            <div class="mt-4 relative" bis_skin_checked="1">
                <img class="agota_image sticky" alt="agota frame"
                    style="width:100%; max-width:500px; top:80px; margin: auto;"
                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1741000572Agota_frm.webp">
            </div>
        </div>

        <!-- <div class="content-all hidden" style="display: none;"> -->
        <div class="content-all hidden" bis_skin_checked="1">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4 justify-between"
                bis_skin_checked="1">
                <div class="w-full" bis_skin_checked="1">
                    <div class="mx-2 my-4" bis_skin_checked="1">
                        <div class="bg-white px-2 pt-2 pb-6 rounded-lg shadow-lg h-48" bis_skin_checked="1">
                            <div class="items-baseline" bis_skin_checked="1">
                                <p class="text-[#61180c] text-[16px] md:text-[16px] font-[600]">Two-way Live Training
                                    Course</p>
                                <p class="mt-1 text-[#61180c] text-[12px] font-medium">Two-way Live Online Interactive
                                    Classroom Sessions</p>
                            </div>
                        </div>
                    </div>
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487194ezgif.com-resize (32).webp"
                        alt=" random imgee"
                        class="relative mx-auto h-40 object-cover object-center rounded-lg shadow-md -mt-80"
                        style="margin-top:-80px;">
                </div>
                <div class="w-full" bis_skin_checked="1">
                    <div class="mx-2 my-4" bis_skin_checked="1">
                        <div class="bg-white px-2 pt-2 pb-6 rounded-lg shadow-lg h-48" bis_skin_checked="1">
                            <div class="items-baseline" bis_skin_checked="1">
                                <p class="text-[#1c4980] text-[16px] md:text-[16px] font-[600]">Projects</p>
                                <p class="mt-1 text-[#1c4980] text-[12px] font-medium">Facility to undergo various
                                    projects
                                    along with the course.</p>
                            </div>
                        </div>
                    </div>
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719575893ezgif.com-resize - 2024-06-28T172803.379.webp"
                        alt="random imgee"
                        class="relative mx-auto h-40 object-cover object-center rounded-lg shadow-md -mt-80"
                        style="margin-top: -80px !important;">
                </div>
                <div class="w-full" bis_skin_checked="1">
                    <div class="mx-2 my-4" bis_skin_checked="1">
                        <div class="bg-white px-2 pt-2 pb-6 rounded-lg shadow-lg h-48" bis_skin_checked="1">
                            <div class="items-baseline" bis_skin_checked="1">
                                <p class="text-[#61180c] text-[16px] md:text-[16px] font-[600]">Student Engagement
                                    &amp;
                                    Events
                                </p>
                                <p class="mt-1 text-[#61180c] text-[12px] font-medium">Free Access to #AskHenry
                                    Hackathons
                                    and Competitions &amp; many other facilities from Henry Harvin®</p>

                            </div>
                        </div>
                    </div>
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719576156sxw (2).webp" alt=" random imgee"
                        class="relative mx-auto h-40 object-cover object-center rounded-lg shadow-md -mt-80"
                        style="margin-top:-80px;">
                </div>
                <div class="w-full" bis_skin_checked="1">
                    <div class="mx-2 my-4" bis_skin_checked="1">
                        <div class="bg-white px-2 pt-2 pb-6 rounded-lg shadow-lg h-48" bis_skin_checked="1">
                            <div class="items-baseline" bis_skin_checked="1">
                                <p class="text-[#125b7e] text-[16px] md:text-[16px] font-[600]">Masterclass</p>
                                <p class="mt-1 text-[#125b7e] text-[12px] font-medium"> Access to 60+ Masterclass
                                    Sessions
                                    for essential soft skill development</p>

                            </div>
                        </div>
                    </div>
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719577083dcwcw.webp" alt=" random imgee"
                        class="relative mx-auto h-40 object-cover object-center rounded-lg shadow-md -mt-80"
                        style="margin-top:-80px;">
                </div>
                <div class="w-full" bis_skin_checked="1">
                    <div class="mx-2 my-4" bis_skin_checked="1">
                        <div class="bg-white px-2 pt-2 pb-6 rounded-lg shadow-lg h-48" bis_skin_checked="1">
                            <div class="items-baseline" bis_skin_checked="1">
                                <p class="text-[#575e0d] text-[16px] md:text-[16px] font-[600]">Membership</p>
                                <p class="mt-1 text-[#575e0d] text-[12px] font-medium">Get Gold Membership of Henry
                                    Harvin® </p>

                            </div>
                        </div>
                    </div>
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1728970566Membership_Card_Collage_(1).png"
                        alt=" random imgee"
                        class="relative mx-auto w-60 bg-[#3d0561] h-40 object-cover border-2 border-[#3d0561] object-center rounded-lg shadow-md -mt-80"
                        style="margin-top:-80px;">
                </div>
                <div class="w-full" bis_skin_checked="1">
                    <div class="mx-2 my-4" bis_skin_checked="1">
                        <div class="bg-white px-2 pt-2 pb-6 rounded-lg shadow-lg h-48" bis_skin_checked="1">
                            <div class="items-baseline" bis_skin_checked="1">
                                <p class="text-[#451e68] text-[16px] md:text-[16px] font-[600]">E-Learning Access</p>
                                <p class="mt-1 text-[#451e68] text-[12px] font-medium">Free access to the
                                    E-learning Portal and future updates. Get access to PPTs, Projects, Quizzes,
                                    self-paced
                                    Video-based learning, a question bank, a library, practice tests <span
                                        class="text-[12px] font-bold text-orange-500"><img
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1734598082examopedia_logo.webp"
                                            alt="Examopedia Logo" class="h-4">Examopedia</span> final assessment,
                                    a
                                    forum, and doubt sessions.</p>

                            </div>
                        </div>
                    </div>
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487342ezgif.com-resize (35).webp"
                        alt=" random imgee"
                        class="relative mx-auto h-40 object-cover object-center rounded-lg shadow-md -mt-80"
                        style="margin-top:-80px;">
                </div>
                <div class="w-full" bis_skin_checked="1">
                    <div class="mx-2 my-4" bis_skin_checked="1">
                        <div class="bg-white px-2 pt-2 pb-6 rounded-lg shadow-lg h-48" bis_skin_checked="1">
                            <div class="items-baseline" bis_skin_checked="1">
                                <p class="text-[#61180c] text-[16px] md:text-[16px] font-[600]">Hallmark Certification
                                    + License</p>
                                <p class="mt-1 text-[#220404] text-[12px] font-medium"> Distinguish your profile with
                                    global credentials and showcase expertise with our Hallmark Completion certificate
                                    with Professional License</p>
                            </div>
                        </div>
                    </div>
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487248ezgif.com-resize (33).webp"
                        alt=" random imgee"
                        class="relative mx-auto h-40 object-cover object-center rounded-lg shadow-md -mt-80"
                        style="margin-top:-80px;">
                </div>
                <div class="w-full" bis_skin_checked="1">
                    <div class="mx-2 my-4" bis_skin_checked="1">
                        <div class="bg-white px-2 pt-2 pb-6 rounded-lg shadow-lg h-48" bis_skin_checked="1">
                            <div class="items-baseline" bis_skin_checked="1">
                                <p class="text-[#2d6a2d] text-[16px] md:text-[16px] font-[600]">Internship Support</p>
                                <p class="mt-1 text-[#2d6a2d] text-[12px] font-medium">Get Internship Support with
                                    Henry Harvin® and in top MNCs like J.P. Morgan, Accenture &amp; many more via Forage
                                    &amp; 100X Suite.</p>

                            </div>
                        </div>
                    </div>
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719575988d233dd23d.webp" alt=" random imgee"
                        class="relative mx-auto h-40 object-cover object-center rounded-lg shadow-md -mt-80"
                        style="margin-top:-80px;">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 justify-between" bis_skin_checked="1">
                <div class="lg:flex w-full" bis_skin_checked="1">
                    <div class="mx-2 my-4" bis_skin_checked="1">
                        <div class="bg-white px-2 pt-2 pb-6 rounded-lg shadow-lg h-48" bis_skin_checked="1">
                            <div class="items-baseline" bis_skin_checked="1">
                                <p class="text-[#367249] text-[16px] md:text-[16px] font-[600]">Entrepreneurship
                                    Mentorship</p>
                                <p class="mt-1 text-[#367249] text-[12px] font-medium md:w-9/12"> Mentorship from Young
                                    Successful Entrepreneurs to set up a sustainable &amp; scalable Business from
                                    scratch at
                                    both Freelance and entrepreneur levels</p>

                            </div>
                        </div>
                    </div>
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487388ezgif.com-resize (36).webp"
                        alt=" random imgee"
                        class="relative mx-auto h-40 object-cover object-center rounded-lg shadow-md lft-items mt-[-80px] sm:mt-0">
                </div>
                <div class="lg:flex w-full" bis_skin_checked="1">
                    <div class="mx-2 my-4" bis_skin_checked="1">
                        <div class="bg-white px-2 pt-2 pb-6 rounded-lg shadow-lg h-48 h-48" bis_skin_checked="1">
                            <div class="items-baseline" bis_skin_checked="1">
                                <p class="text-[#685200] text-[16px] md:text-[16px] font-[600]">Placement Support</p>
                                <p class="mt-1 text-[#685200] text-[12px] font-medium md:w-9/12">Get 3 in 1 Placement
                                    support
                                    through
                                    Placement Drives, Premium access to Job portal &amp; Personalized Job Consulting</p>

                            </div>
                        </div>
                    </div>
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487296ezgif.com-resize (34).webp"
                        alt=" random imgee"
                        class="relative mx-auto h-40 object-cover object-center rounded-lg shadow-md lft-items mt-[-80px] sm:mt-0">
                </div>
            </div>
        </div>
        <div class="mx-auto mt-4 hidden" bis_skin_checked="1">
            <button class="relative  mx-auto flex items-center text-white">
                <span class="rounded-md bg-[#3d0561] px-4 py-2" style="width: 142px; padding: 11px 29px 11px 0px;"
                    id="toggleText">Show More</span>
                <span class="mx-auto rounded-md h-full am-am animate-bounceVertical pl-2 absolute right-2 z-20"
                    style="pointer-events: none;">
                    <i class="fa fa-angle-down text-[#ffc107] text-[24px] " id="arrowIcon"></i>
                </span>
            </button>
        </div>
    </div>
</section>

<section id="stats" class="py-12 bg-red-600 mx-auto px-4">
    <div class="max-w-6xl mx-auto">
        <!-- <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] uppercase my-4">Key Highlight
        </h2> -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">

            <!-- Countries -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-4xl font-semibold text-center text-gray-800 mb-4">Countries</h3>
                <div class="flex items-center justify-center gap-2">
                    <p class="text-5xl font-bold text-red-600 count-up" data-count="97">0</p>
                    <span class="text-6xl font-[600] text-red-600">+</span>
                </div>
            </div>

            <!-- Enrolled Students -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-4xl font-semibold text-center text-gray-800 mb-4">Enrolled Students</h3>
                <div class="flex items-center justify-center gap-2">
                    <p class="text-5xl font-bold text-red-600 count-up" data-count="460000">0</p>
                    <span class="text-6xl font-[600] text-red-600">+</span>
                </div>

            </div>

            <!-- Established In -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-4xl font-semibold text-center text-gray-800 mb-4">Established in</h3>
                <div class="flex items-center justify-center gap-2">
                    <p class="text-5xl font-bold text-red-600 count-up" data-count="2013">0</p>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] uppercase my-4">Accreditations &
            Affiliations
        </h2>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1724768847Screenshot_2024-08-27_190332.png"
                        alt="AAEFL" class="h-28 w-auto">
                </div>

            </div>

            <!-- Card 2 -->
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753255971sxsssswc.PNG" alt="AAEFL"
                        class=" h-28 w-auto">
                </div>

            </div>

            <!-- Card 3 -->
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1726071455watts_we_logo_jft.png" alt="AAEFL"
                        class=" h-28 w-auto">
                </div>

            </div>

            <!-- Card 4 -->
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1736849226DBS_C-01.png" alt="AAEFL"
                        class=" h-28 w-auto">
                </div>

            </div>
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://flism.org/wp-content/uploads/2025/01/Logo_Florida_7.jpg" alt="AAEFL"
                        class=" h-16 w-auto">
                </div>
            </div>
            <!-- Card 5 -->
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753256081hhlogo.png" alt="AAEFL"
                        class=" h-16 w-auto">
                </div>
            </div>
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://kodakco.sgp1.cdn.digitaloceanspaces.com/1702461434kodacko.webp" alt="AAEFL"
                        class=" h-16 w-auto">
                </div>
            </div>
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1744023905ezgif.com-crop_(7).webp" alt="AAEFL"
                        class=" h-24 w-auto">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] uppercase my-4">Testimonial
            Videos
        </h2>
        <div class="relative">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2">
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HAI_ZAMooLk?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Language Course Review By Sachet | Best Japanese Course Institute | Henry Harvin" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                           <iframe width="100%" height="100%" src="https://www.youtube.com/embed/K4NAAHCtbo8?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Language Course Review By Anupam | Best Japanese Course Institute | Henry Harvin" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/mZkFP1ZWJv4?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Language Course Review | Best Japanese Course Institute | Henry Harvin" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/YqdggC5M90s?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Language Course Review by Khushi Goswami | Best Japanese Course Institute | Henry Harvin" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/L9QZCK1P5O0?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Language Course Review by Khushi Jain | Best Japanese Course Institute | Henry Harvin" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/JYPNfkyyx08?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Language Course Review by Vandana | Best Japanese Course Institute | Henry Harvin" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/BooTihSy8dA?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Course Review by Tarni | Best Japanese Course Institute | Henry Harvin Reviews" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                           <iframe width="100%" height="100%" src="https://www.youtube.com/embed/h2558oOB2GM?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Language Course Review by  Rayajiri Kumar | Best Japanese Course Institute | Henry Harvin" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/uggeKrYDD1s?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Language Course Review by Mayuresh | Best Japanese Course Institute | Henry Harvin Reviews" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RvJ-DSVFVv4?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Course Review by Vasundhara | Best Japanese Course Institute | Henry Harvin Reviews" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/2vKgb2MJlzI?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Course Review by Pravallika | Best Japanese Course Institute | Henry Harvin Reviews" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                           <iframe width="100%" height="100%" src="https://www.youtube.com/embed/LCPhZuc1RqQ?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Course Review by Tanisha | Best Japanese Course Institute | Henry Harvin Reviews" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                           <iframe width="100%" height="100%" src="https://www.youtube.com/embed/TQM2QkyQ9eE?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Course Review by Vivek Saini | Best Japanese Course Institute | Henry Harvin Reviews" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                           <iframe width="100%" height="100%" src="https://www.youtube.com/embed/_BMlRAi9dK8?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Course Reviews | Best Japanese Language Course Online | Henry Harvin Reviews" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/pfkbInIwD6Q?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Course Reviews | Best Japanese Language Course Online  | Henry Harvin Reviews" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/5rIlYy7SO08?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Language Course Review By Muskan | Best Japanese Language Institute | Henry Harvin Reviews" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/O_yLL2aNXTY?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Course Reviews | Best Japanese Language Course Online  | Henry Harvin Reviews" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/bsPvt3xJTEc?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra" title="Japanese Course Review by Prashub | Best Japanese Course Institute | Henry Harvin Reviews" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>

    </div>
</section>

<section class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] uppercase my-4">Placement
            Partners
        </h2>
        <div class="swiper linearswiper">
            <div class="swiper-wrapper my-4" style="transition-timing-function: linear !important;">
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1698213063honeywell.webp" alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1698212200bosch.webp" alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1698212278cognizant.webp" alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1698212335dell.webp" alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1698212440pepsico.webp" alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1698212146ibm.webp" alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1697883856ACCENTURE.webp" alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1698211994xerox.webp" alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1698212083techm.webp" alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1698212946fargo.webp" alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1698212496itc.webp" alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://cdn.henryharvin.com/images/1698212545mindtree.webp" alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1750141320ezgif.com-webp-maker_(9).webp"
                        alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1750141282ezgif.com-webp-maker_(12).webp"
                        alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1750141263ezgif.com-webp-maker_(13).webp"
                        alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1750141398ezgif.com-webp-maker_(6).webp"
                        alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1750141500ezgif.com-webp-maker_(4).webp"
                        alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1750141519aws.png" alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1750141551issa.png" alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1750141068ezgif.com-webp-maker_(21).webp"
                        alt="images-8">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1750141094ezgif.com-webp-maker_(19).webp"
                        alt="images-8">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-12">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] uppercase my-4">Esteemed Faculty
        </h2>
        <div class="relative w-wull mx-auto flex flex-row py-10">

            <!-- Prev Button -->
            <div class="absolute inset-y-0 left-0 z-10 flex items-center">
                <div class="swiper-button-prev flex justify-center items-center text-[14px] text-red-600 custom">
                </div>
            </div>

            <!-- Swiper -->
            <div class="swiper mySwiper swiper-container w-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide p-8 lg:p-8">
                        <div class="grid mx-2 p-2 gap-4 place-items-center rounded-2xl"
                            style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                            <div class="rounded-2xl">
                                <img class="h-full w-full object-cover rounded-2xl"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753522620Varsha_Mehroliya.jpg" alt="">
                            </div>
                            <div class="p-2 ">
                                <h2 class="text-white text-center text-[16px] md:text-[20px] pb-4">Varsha Mehroliya
                                </h2>
                                <h2 class="text-white text-[16px] text-center md:text-[18px] font-[600] py-2">5+ Years
                                    Of Experience</h2>
                                <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-8 lg:p-8">
                        <div class="grid mx-2 p-2 gap-4 place-items-center rounded-2xl"
                            style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                            <div class="rounded-2xl">
                                <img class="h-full w-full object-cover rounded-2xl"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753522683Sonali_Srivastava_(1).jpg" alt="">
                            </div>
                            <div class="p-2 ">
                                <h2 class="text-white text-center text-[16px] md:text-[20px] pb-4">Sonali Srivastava
                                </h2>
                                <h2 class="text-white text-[16px] text-center md:text-[18px] font-[600] py-2">6+ Years
                                    Of Experience</h2>
                                <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-slide p-8 lg:p-8">
                        <div class="grid mx-2 p-2 gap-4 place-items-center rounded-2xl"
                            style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                            <div class="rounded-2xl">
                                <img class="h-full w-full object-cover rounded-2xl"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17532613282nd.webp" alt="">
                            </div>
                            <div class="p-2 ">
                                <h2 class="text-white text-center text-[16px] md:text-[20px] pb-4">Sonali Srivastava
                                </h2>
                                <h2 class="text-white text-[16px] text-center md:text-[18px] font-[600] py-2">3+ Years
                                    Of Experience</h2>
                                <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                            </div>
                        </div>
                    </div> -->
                    <div class="swiper-slide p-8 lg:p-8">
                        <div class="grid mx-2 p-2 gap-4 place-items-center rounded-2xl"
                            style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                            <div class="rounded-2xl">
                                <img class="h-full w-full object-cover rounded-2xl"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17532671153rd.webp" alt="">
                            </div>
                            <div class="p-2 ">
                                <h2 class="text-white text-center text-[16px] md:text-[20px] pb-4">Claire</h2>
                                <h2 class="text-white text-[16px] text-center md:text-[18px] font-[600] py-2">6+ Years
                                    Of Experience</h2>
                                <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-8 lg:p-8">
                        <div class="grid mx-2 p-2 gap-4 place-items-center rounded-2xl"
                            style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                            <div class="rounded-2xl">
                                <img class="h-full w-full object-cover rounded-2xl"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753523883sucheta_(1).jpg" alt="">
                            </div>
                            <div class="p-2 ">
                                <h2 class="text-white text-center text-[16px] md:text-[20px] pb-4">Sucheta Patil</h2>
                                <h2 class="text-white text-[16px] text-center md:text-[18px] font-[600] py-2">9+ Years
                                    Of Experience</h2>
                                <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-8 lg:p-8">
                        <div class="grid mx-2 p-2 gap-4 place-items-center rounded-2xl"
                            style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                            <div class="rounded-2xl">
                                <img class="h-full w-full object-cover rounded-2xl"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753523973Swagata.jpg" alt="">
                            </div>
                            <div class="p-2 ">
                                <h2 class="text-white text-center text-[16px] md:text-[20px] pb-4">Swagata</h2>
                                <h2 class="text-white text-[16px] text-center md:text-[18px] font-[600] py-2">5+ Years
                                    Of Experience</h2>
                                <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-8 lg:p-8">
                        <div class="grid mx-2 p-2 gap-4 place-items-center rounded-2xl"
                            style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                            <div class="rounded-2xl">
                                <img class="h-full w-full object-cover rounded-2xl"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753524020siddharth.jpg" alt="">
                            </div>
                            <div class="p-2 ">
                                <h2 class="text-white text-center text-[16px] md:text-[20px] pb-4">Siddharth Chopra</h2>
                                <h2 class="text-white text-[16px] text-center md:text-[18px] font-[600] py-2">6+ Years
                                    Of Experience</h2>
                                <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-8 lg:p-8">
                        <div class="grid mx-2 p-2 gap-4 place-items-center rounded-2xl"
                            style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                            <div class="rounded-2xl">
                                <img class="h-full w-full object-cover rounded-2xl"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753524020siddharth.jpg" alt="">
                            </div>
                            <div class="p-2 ">
                                <h2 class="text-white text-center text-[16px] md:text-[20px] pb-4">Saniya Parchure</h2>
                                <h2 class="text-white text-[16px] text-center md:text-[18px] font-[600] py-2">7+ Years
                                    Of Experience</h2>
                                <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-8 lg:p-8">
                        <div class="grid mx-2 p-2 gap-4 place-items-center rounded-2xl"
                            style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                            <div class="rounded-2xl">
                                <img class="h-full w-full object-cover rounded-2xl"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753524020siddharth.jpg" alt="">
                            </div>
                            <div class="p-2 ">
                                <h2 class="text-white text-center text-[16px] md:text-[20px] pb-4">Aditya</h2>
                                <h2 class="text-white text-[16px] text-center md:text-[18px] font-[600] py-2">3+ Years
                                    Of Experience</h2>
                                <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-8 lg:p-8">
                        <div class="grid mx-2 p-2 gap-4 place-items-center rounded-2xl"
                            style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                            <div class="rounded-2xl">
                                <img class="h-full w-full object-cover rounded-2xl"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753524195Apeksha.jpg" alt="">
                            </div>
                            <div class="p-2 ">
                                <h2 class="text-white text-center text-[16px] md:text-[20px] pb-4">Apeksha</h2>
                                <h2 class="text-white text-[16px] text-center md:text-[18px] font-[600] py-2">4+ Years
                                    Of Experience</h2>
                                <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-8 lg:p-8">
                        <div class="grid mx-2 p-2 gap-4 place-items-center rounded-2xl"
                            style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                            <div class="rounded-2xl">
                                <img class="h-full w-full object-cover rounded-2xl"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17532613282nd.webp" alt="">
                            </div>
                            <div class="p-2 ">
                                <h2 class="text-white text-center text-[16px] md:text-[20px] pb-4">Hiroshi Matano</h2>
                                <h2 class="text-white text-[16px] text-center md:text-[18px] font-[600] py-2">6+ Years
                                    Of Experience</h2>
                                <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-8 lg:p-8">
                        <div class="grid mx-2 p-2 gap-4 place-items-center rounded-2xl"
                            style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                            <div class="rounded-2xl">
                                <img class="h-full w-full object-cover rounded-2xl"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753524239Prachi.jpg" alt="">
                            </div>
                            <div class="p-2 ">
                                <h2 class="text-white text-center text-[16px] md:text-[20px] pb-4">Prachi</h2>
                                <h2 class="text-white text-[16px] text-center md:text-[18px] font-[600] py-2">3+ Years
                                    Of Experience</h2>
                                <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-8 lg:p-8">
                        <div class="grid mx-2 p-2 gap-4 place-items-center rounded-2xl"
                            style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                            <div class="rounded-2xl">
                                <img class="h-full w-full object-cover rounded-2xl"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753268519abha.webp" alt="">
                            </div>
                            <div class="p-2 ">
                                <h2 class="text-white text-center text-[16px] md:text-[20px] pb-4">Abha</h2>
                                <h2 class="text-white text-[16px] text-center md:text-[18px] font-[600] py-2">3+ Years
                                    Of Experience</h2>
                                <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-8 lg:p-8">
                        <div class="grid mx-2 p-2 gap-4 place-items-center rounded-2xl"
                            style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                            <div class="rounded-2xl">
                                <img class="h-full w-full object-cover rounded-2xl"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753268551malini.webp" alt="">
                            </div>
                            <div class="p-2 ">
                                <h2 class="text-white text-center text-[16px] md:text-[20px] pb-4">Malini</h2>
                                <h2 class="text-white text-[16px] text-center md:text-[18px] font-[600] py-2">3+ Years
                                    Of Experience</h2>
                                <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-8 lg:p-8">
                        <div class="grid mx-2 p-2 gap-4 place-items-center rounded-2xl"
                            style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                            <div class="rounded-2xl">
                                <img class="h-full w-full object-cover rounded-2xl"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753268583shivalika.webp" alt="">
                            </div>
                            <div class="p-2 ">
                                <h2 class="text-white text-center text-[16px] md:text-[20px] pb-4">Shivalika</h2>
                                <h2 class="text-white text-[16px] text-center md:text-[18px] font-[600] py-2">3+ Years
                                    Of Experience</h2>
                                <p class="text-white text-[14px] text-center md:text-[16px] leading-8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Next Button -->
            <div class="absolute inset-y-0 right-0 z-10 flex items-center">
                <div class="swiper-button-next flex justify-center items-center text-[14px] text-red-600 custom">
                </div>
            </div>
        </div>
        <div class="mt-4 flex justify-center items-center">
            <a href="/esteemed-faculty" class="bg-red-500 text-white text-[14px] px-6 py-2 rounded hover:bg-red-600">View More</a>
        </div>
    </div>
</section>

<section class="py-12 px-4 bgpgray-100">
    <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] uppercase my-4">Our Latest Updates!
    </h2>
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 py-4 md:px-2">
        <!-- Card 1 -->
        <div class="bg-white rounded shadow overflow-hidden">
            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175274331911667691_20945544.jpg" alt="Okinawa Branch"
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
            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175274331911667691_20945544.jpg" alt="Okinawa Branch"
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
            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175274331911667691_20945544.jpg" alt="Okinawa Branch"
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
            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175274331911667691_20945544.jpg" alt="Okinawa Branch"
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
</section>


@endsection