@extends('layouts.app')
@section('content')
<script>
  gtag('event', 'conversion', {'send_to': 'AW-957633606/3BDTCLnJ1cIBEMao0cgD'});
</script>
    <div class="bg-white text-center p-8 rounded-lg shadow-lg max-w-6xl mx-auto w-full border border-orange-300 my-8">
        <h2 class="text-4xl font-bold mb-2 text-orange-700">Final Step</h2>
        <p class="text-lg font-semibold mb-1">Join Meeting & Talk with a Senior Consultant [LIVE]</p>
        <p class="mb-6 text-gray-600">To connect with a dedicated expert counselor, please let us know which course you are
            interested in inquiring about.</p>

        <!-- Custom Select Dropdown -->
        {{-- <div class="w-full max-w-md mx-auto text-left text-orange-600" x-data="dropdown()">
            <label class="block text-[20px] font-medium text-orange-700 mb-1">Select Course</label>
            <div class="relative">
                <button @click="toggle"
                    class="w-full border border-gray-300 bg-white text-black rounded-md px-4 py-3 text-left shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500 flex justify-between items-center">
                    <span x-text="selected || 'Please Select Course'"></span>
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition
                    class="absolute z-10 mt-2 w-full bg-white border border-gray-300 rounded-md shadow-lg">
                    <div class="p-2">
                        <input type="text" placeholder="Search..." x-model="search"
                            class="w-full border border-gray-300 px-3 py-2 rounded-md text-sm focus:outline-none focus:ring-1 focus:ring-orange-500" />
                    </div>
                    <ul class="max-h-60 overflow-y-auto text-sm">
                        <template x-for="item in filteredCourses" :key="item">
                            <li @click="select(item)" class="px-4 py-2 cursor-pointer hover:bg-orange-100" x-text="item"></li>
                        </template>
                        <li x-show="filteredCourses.length === 0" class="px-4 py-2 text-gray-400">No matches found.</li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="text-center my-6">
        <a href="https://zoom.us/j/93024133145?pwd=QfibdAB6meQtEtyQlaPaePkXqaDLqG.1"
            class="bg-orange-600 py-2 px-6 text-white text-xl rounded-3xl border border-white">
            JOIN NOW <i class="fa fa-video-camera text-white text-xl ml-2" aria-hidden="true" id="zoom-call-1"></i>
        </a>
    </div>
    @if(isset($course))
        @php
            $course_brochure = $course->courseBrochure ? $course->courseBrochure->generic_ind_close : 'null';
        @endphp
        @if($course->slug != 'contact-us' && $course_brochure !='null')
        <div class="text-center my-6">
            <a href="{{$course_brochure}}" target="_blank"
                class="bg-orange-600 py-2 px-6 text-white text-xl rounded-3xl border border-white">
                DOWNLOAD BROCHURE
            </a>
        </div>
        @endif
    @endif
    {{-- Agota™ Framework section --}}
    <section class="py-12 mx-auto px-4">
        <div class="max-w-6xl mx-auto" bis_skin_checked="1">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-2 text-orange-600 capitalize my-4">Agota™ Framework
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
                                <p class="col-span-2 text-orange-600">1: Training
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
                                <p class="col-span-2 text-orange-600">2: Projects
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
                                <p class="col-span-2 text-orange-600">3: Student Engagement &amp; Events
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
                                <p class="col-span-2 text-orange-600">4: Masterclass
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
                                <p class="col-span-2 text-orange-600">5: Membership
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
                                <p class="col-span-2 text-orange-600">6: E-Learning Access
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
                                <p class="col-span-2 text-orange-600">7: 特徴 (Tokuchō) Certification + License
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
                                <p class="col-span-2 text-orange-600">8: Internship Support
                                    <span class="block text-[12px] text-gray-800 font-[600]">Get Internship Support with
                                        Henry Harvin® and in top MNCs like J.P. Morgan, Accenture & many more via 100X Suite
                                        and
                                        <a href="https://yuvaintern.com//"
                                            class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                                src="https://yuvaintern.com/assets/img/logo.png"
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
                                <p class="col-span-2 text-orange-600">9: Entrepreneurship Mentorship
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
                                <p class="col-span-2 text-orange-600">10: Placement Support
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
    <section class="py-12 bg-gray-100 mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <h2 style="place-self: center;"
                class="text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 capitalize my-4">
                Henry Harvin® Course Inquiry
            </h2>
            <div class=" w-full" bis_skin_checked="1">
                <div class="grid grid-cols-2 gap-1 md:gap-7 mt-3" bis_skin_checked="1">
                    <a href="tel:  +971 585 857 811"
                        class="rounded-md hover:bg-gray-100 flex text-[12px] md:text-[20px] items-center justify-center p-2 md:p-4 bg-white text-gray-900 border-2 border-[#ffc107] font-[600] rounded-md ">
                        <img class="mr-2 md:mr-4" src="https://cdn.henryharvin.com/images/1690622599uae-flaf-48.png"
                            alt="IN Flag" width="20" height="13" loading="lazy">+971 585 857 811
                    </a>
                    <a href="tel:  +44 7700 139617"
                        class="rounded-md hover:bg-gray-100 flex text-[12px] md:text-[20px] items-center justify-center p-2 md:p-4 bg-white text-gray-900 border-2 border-[#ffc107] font-[600] rounded-md ">
                        <img class="mr-2 md:mr-4"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1718866377ukflag-ezgif.com-resize (1).webp"
                            alt="IN Flag" width="20" height="13" loading="lazy">+44 7700 139617
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-1 md:gap-7 mt-3" bis_skin_checked="1">
                    <a href="tel: +12093823469"
                        class="rounded-md hover:bg-gray-100 flex text-[12px] md:text-[20px] items-center justify-center p-2 md:p-4 bg-white text-gray-900 border-2 border-[#ffc107] font-[600] rounded-md">
                        <img class="mr-2 md:mr-4"
                            src="https://cdn.henryharvin.com/16697124741669712473ezgif.com-gif-maker(5).png"
                            alt="IN Flag" width="30" height="13" loading="lazy"> +1 209 904 4552
                    </a>
                    <a href="tel: 9899577620"
                        class="rounded-md hover:bg-gray-100 flex text-[12px] md:text-[20px] items-center justify-center p-2 md:p-4 bg-white text-gray-900 border-2 border-[#ffc107] font-[600] rounded-md ">
                        <img class="mr-2 md:mr-4"
                            src="https://cdn.henryharvin.com/images/1605779019255px-Flag_of_India.svg.png" alt="IN Flag"
                            width="20" height="13" loading="lazy">+91 9899577620
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-1 md:gap-7 mt-3" bis_skin_checked="1">
                    <a href="https://wa.me/message/2YDWDUFYBSUBA1"
                        class="rounded-md hover:bg-gray-100 flex text-[12px] md:text-[20px] items-center justify-center p-2 md:p-4 bg-white text-gray-900 border-2 border-[#ffc107] font-[600] rounded-md ">
                        <img class="mr-2 md:mr-4"
                            src="https://cdn.henryharvin.com/images/1689315333ezgif.com-gif-maker - 2023-07-14T114523.588.webp"
                            alt="IN Flag" width="20" height="13" loading="lazy"> WhatsApp Us
                    </a>
                    <a href="mailto:Hello@henryharvin.com"
                        class="rounded-md hover:bg-gray-100 flex text-[12px] md:text-[20px] items-center justify-center p-2 md:p-4 bg-white text-gray-900 border-2 border-[#ffc107] font-[600] rounded-md ">
                        <img class="mr-2 md:mr-4" src="https://cdn.henryharvin.com/16753246751675324675unnamed(12).png"
                            alt="IN Flag" width="20" height="13" loading="lazy">
                        hello@henryharvin.com
                    </a>
                </div>
                <div class="grid grid-row mt-3" bis_skin_checked="1">

                </div>
            </div>

            <h2 style="place-self: center;"
                class="mt-2 text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 capitalize my-4">
                Henry Harvin® Customer Support
            </h2>
            <div class="w-full" bis_skin_checked="1">

                <div class="grid grid-cols-2 gap-4 md:gap-7 mt-3" bis_skin_checked="1">
                    <a href="tel: +971 585 857 811"
                        class="rounded-md hover:bg-gray-100 flex text-[12px] md:text-[20px] items-center justify-center p-2 md:p-4 bg-white text-gray-900 border-2 border-[#ffc107] font-[600] rounded-md  ">
                        <img class="mr-2 md:mr-4" src="https://cdn.henryharvin.com/images/1690622599uae-flaf-48.png"
                            alt="IN Flag" width="20" height="13" loading="lazy">
                        +971 585 857 811
                    </a>
                    <a href="tel: 9899577620"
                        class="rounded-md hover:bg-gray-100 flex text-[12px] md:text-[20px] items-center justify-center p-2 md:p-4 bg-white text-gray-900 border-2 border-[#ffc107] font-[600] rounded-md ">

                        <img class="mr-2 md:mr-4"
                            src="https://cdn.henryharvin.com/images/1605779019255px-Flag_of_India.svg.png" alt="IN Flag"
                            width="20" height="13" loading="lazy">
                        +91 9266621544
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-1 md:gap-7 mt-3" bis_skin_checked="1">
                    <a href="tel: +12093823469"
                        class="rounded-md hover:bg-gray-100 flex text-[12px] md:text-[20px] items-center justify-center p-2 md:p-4 bg-white text-gray-900 border-2 border-[#ffc107] font-[600] rounded-md">
                        <img class="mr-2 md:mr-4"
                            src="https://cdn.henryharvin.com/16697124741669712473ezgif.com-gif-maker(5).png"
                            alt="IN Flag" width="30" height="13" loading="lazy"> +1 209 904 4552
                    </a>
                    <a href="tel: 9899577620"
                        class="rounded-md hover:bg-gray-100 flex text-[12px] md:text-[20px] items-center justify-center p-2 md:p-4 bg-white text-gray-900 border-2 border-[#ffc107] font-[600] rounded-md ">
                        <img class="mr-2 md:mr-4"
                            src="https://cdn.henryharvin.com/images/1605779019255px-Flag_of_India.svg.png" alt="IN Flag"
                            width="20" height="13" loading="lazy">+91 9899577620
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-7 mt-3" bis_skin_checked="1">
                    <a href="https://wa.me/message/2YDWDUFYBSUBA1"
                        class="rounded-md hover:bg-gray-100 flex text-[12px] md:text-[20px] items-center justify-center p-2 md:p-4 bg-white text-gray-900 border-2 border-[#ffc107] font-[600] rounded-md  dynamic_whatsapp_href">
                        START LIVE CHAT
                    </a>
                    <a href="mailto:Hello@henryharvin.com"
                        class="rounded-md hover:bg-gray-100 flex text-[12px] md:text-[20px] items-center justify-center p-2 md:p-4 bg-white text-gray-900 border-2 border-[#ffc107] font-[600] rounded-md ">
                        <img class="mr-2 md:mr-4" src="https://cdn.henryharvin.com/16753246751675324675unnamed(12).png"
                            alt="IN Flag" width="20" height="13" loading="lazy">
                        support@henryharvin.com
                    </a>
                </div>
            </div>

        </div>
    </section>

    <script>
        function dropdown() {
            return {
                open: false,
                search: '',
                selected: '',
                courses: [
                    "Japanese for Beginners Course",
                    "Japanese Language N5 Level Course",
                    "Japanese Language N4 Level Course",
                    "Japanese Language N3 Level Course",
                    "Japanese Language N1 Level Course",
                    "Post Graduate Diploma in Japanese Language by Dunster Business School, Switzerland",
                    "Post Graduate Diploma Professional in Japanese Language by Dunster Business School, Switzerland",
                    "Master's in Japanese Language",
                    "Migrate to Japan Course",
                    "Business Japanese Course",
                    "Corporate Business Japanese Course",
                    "Career Japanese Course",
                    "Business Japanese for Beginners Course",
                    "Intercultural Business Japanese Course",
                    "Japanese for Work - Hospitality / Nursing / IT",
                    "Rocket Japanese",
                    "Japanese for the Workplace Course",
                    "Pre Departure Orientation Training & Placement Course",
                    "Japanese Management Course",
                    "Cross-Cultural Sensitization for Engineers, Businessmen & Professionals",
                    "Crash Course for Japanese Language"
                ],
                toggle() {
                    this.open = !this.open;
                },
                select(course) {
                    this.selected = course;
                    this.open = false;
                    this.search = '';
                },
                get filteredCourses() {
                    return this.courses.filter(c => c.toLowerCase().includes(this.search.toLowerCase()));
                }
            }
        }
    </script>
@endsection
