@php
    $mytime = Carbon\Carbon::now();
    $test = $mytime->toDateTimeString();
@endphp
@if ($test <= '2025-08-16 00:00:00')
    <section class="bg-[#4f2d7f] top-0 z-50 offer-header" style="background: #FF9800;">
        <style>
            .offer-header {
                position: sticky;
                top: 0;
            }

            #stickyy {
                top: 40px !important;
            }

            #stickey-event {
                top: 100px !important;
            }

            @media (max-width: 767px) {
                .ppp {
                    display: block;
                }
            }

            @media (max-width: 640px) {
                #stickyy {
                    top: 64px !important;
                }
            }
        </style>

        <div class="py-2 sm:flex sm:gap-2 md:gap-4 max-w-full items-center justify-center" bis_skin_checked="1">
            <div class="flex" bis_skin_checked="1">
                <p class="mx-auto text-[11px] font-[500] px-2 text-white md:text-[14px] text-center sm:font-[600]">
                    <span class="block">BIG FREEDOM OFFER LIVE: Enroll Now & Unlock Premium Deals</span> <span
                        class="ppp"></span>
                </p>
                <!-- <span style="">Don’t Miss Out! Save Big with Scholarships Before Fees Revise on 1st Jan 2025!</p> -->
            </div>
            <div class="mt-2 sm:mt-0 flex sm:gap-1 md:gap-4 gap-1 justify-center items-center sm:mx-0 text-[12px] sm:text-[10px] md:text-[12px]"
                bis_skin_checked="1">
                <p class="flex gap-1 shadow-sm items-center text-[#fbf7ff] px-1"><strong id="days1"
                        class="w-6 h-6 rounded-full flex items-center justify-center font-[500] bg-[#ffc107]"
                        style="background-color: #e50914;">0</strong> <span class="flex text-[12px] font-[600]">D<span
                            class="hidden lg:block"></span></span>
                </p>
                <p class="flex gap-1 shadow-sm items-center text-[#fbf7ff] px-1"><strong id="hours1"
                        class="w-6 h-6 rounded-full flex items-center justify-center font-[500] bg-[#ffc107]"
                        style="background-color: #e50914;">12</strong> <span class="flex text-[12px] font-[600]">H<span
                            class="hidden lg:block"></span></span>
                </p>
                <p class="flex gap-1 shadow-sm items-center text-[#fbf7ff] px-1"><strong id="mins1"
                        class="w-6 h-6 rounded-full flex items-center justify-center font-[500] bg-[#ffc107]"
                        style="background-color: #e50914;">59</strong> <span class="flex text-[12px] font-[600]">M<span
                            class="hidden lg:block"></span></span>
                </p>
                <p class="flex gap-1 shadow-sm items-center text-[#fbf7ff] px-1"><strong id="seconds1"
                        class="w-6 h-6 rounded-full flex items-center justify-center font-[500] bg-[#ffc107]"
                        style="background-color: #e50914;">45</strong> <span class="flex text-[12px] font-[600]">S<span
                            class="hidden lg:block"></span></span>
                </p>
                <!-- <div class="text-center ml-2" bis_skin_checked="1">
                    <a href="/offers" target="_blank" class="hidden md:block text-gray-900 relative text-[12px] font-[600] bg-white px-2 py-1 rounded-md"   style="background: linear-gradient(to right, #E50914 , #FF8A00 ) !important; color: white !important;">View Offer </a>
                    <a href="/offers" target="_blank" class="text-[#212529] relative w-20 mr-2 text-[10px] font-[500] bg-white px-2 py-1 rounded-md block md:hidden">View Offer</a>
                </div> -->
                <div class="text-center ml-2" bis_skin_checked="1">
                    <button data-modal-target="authentication-modal2" data-modal-toggle="authentication-modal2"
                        type="button"
                        class="hidden md:block text-gray-900 relative text-[11px] font-[600] bg-white px-2 py-1 rounded-md"
                        style="background: linear-gradient(to right, #E50914 , #FF8A00 ) !important; color: white !important;">Check
                        Now</button>
                    <a href="https://api.whatsapp.com/send?phone=919910990543&amp;text=Grab%20Month-End%20Scholarship%20+%20Register%20with%20Best%20Offers"
                        class="text-[#212529] relative w-20 mr-2 text-[10px] font-[500] bg-white px-2 py-1 rounded-md block md:hidden">Check
                        Now</a>
                </div>
            </div>
        </div>
    </section>
@endif
<style>
    .submenu {
        display: none;
    }

    .group:hover .submenu {
        display: block;
    }
</style>
<!-- Navbar -->
<nav id="stickyy" class="bg-white sticky top-0 z-40 w-full bg-background/50 border-b border-white backdrop-blur-2xl"
    style="box-shadow: 0px -1px 28px -11px red;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center ">
            <div class="flex items-center space-x-3">
                <a href="/">
                    <img class="md:h-[65px] h-[60px] w-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753872845ezgif.com-crop.webp"
                        alt="Kazumi Logo">
                </a>
            </div>

            <div class="hidden md:flex md:space-x-6">
                <a href="/" class="text-[#da2028] font-[600] text-[14px] py-6">家</a>
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false"
                    class="relative group">
                    <!-- Menu Button -->
                    <a class="flex items-center text-[#da2028] font-[600] text-[14px] space-x-1 py-6 cursor-pointer">
                        <span>Courses</span>
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M5.23 7.21a.75.75 0 011.06-.02L10 10.67l3.71-3.48a.75.75 0 111.04 1.08l-4.25 4a.75.75 0 01-1.04 0l-4.25-4a.75.75 0 01-.02-1.06z" />
                        </svg>
                    </a>

                    <!-- First-Level Submenu -->
                    <div x-show="open" x-transition
                        class="absolute top-full left-0 mt-0 w-72 bg-white border rounded-md shadow-lg p-2 z-50 h-[300px] overflow-auto">

                        <!-- Japanese Language Courses with second-level menu -->
                        {{-- <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false"
                            class="relative group">
                            <a
                                class="flex justify-between items-center px-3 py-2 text-sm text-gray-700 font-medium hover:text-[#da2028] hover:bg-gray-100 rounded cursor-pointer">
                                Japanese Language Courses
                                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 111.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" />
                                </svg>
                            </a>

                            <!-- Second-Level Submenu -->
                            <div x-show="open" x-transition
                                class="absolute top-0 left-full ml-2 w-[300px] bg-white border rounded-md shadow-lg p-2 space-y-1 z-50">

                                <a href="https://www.henryharvin.com/japanese-language-course"
                                    class="block text-gray-700 hover:text-[#da2028] text-sm font-medium hover:bg-gray-100 px-3 py-2 rounded">Japanese
                                    Language Course</a>

                                <a href="https://www.henryharvin.com/japanese-beginners-course"
                                    class="block text-gray-700 hover:text-[#da2028] text-sm font-medium hover:bg-gray-100 px-3 py-2 rounded">Japanese
                                    for Beginners Course</a>

                                <a href="https://www.henryharvin.com/japanese-language-course"
                                    class="block text-gray-700 hover:text-[#da2028] text-sm font-medium hover:bg-gray-100 px-3 py-2 rounded">Japanese
                                    Language N5 Level Course</a>

                                <a href="https://www.henryharvin.com/japanese-language-course"
                                    class="block text-gray-700 hover:text-[#da2028] text-sm font-medium hover:bg-gray-100 px-3 py-2 rounded">Japanese
                                    Language N4 Level Course</a>

                                <a href="https://www.henryharvin.com/japanese-language-course"
                                    class="block text-gray-700 hover:text-[#da2028] text-sm font-medium hover:bg-gray-100 px-3 py-2 rounded">Japanese
                                    Language N3 Level Course</a>

                                <a href="https://www.henryharvin.com/japanese-language-course"
                                    class="block text-gray-700 hover:text-[#da2028] text-sm font-medium hover:bg-gray-100 px-3 py-2 rounded">Japanese
                                    Language N1 Level Course</a>

                                <a href="https://www.henryharvin.com/post-graduate-diploma-in-japanese-language-by-dbs"
                                    class="block text-gray-700 hover:text-[#da2028] text-sm font-medium hover:bg-gray-100 px-3 py-2 rounded">Post
                                    Graduate Diploma in Japanese Language (DBS)</a>

                                <a href="https://www.henryharvin.com/post-graduate-diploma-professional-in-japanese-language-by-dbs"
                                    class="block text-gray-700 hover:text-[#da2028] text-sm font-medium hover:bg-gray-100 px-3 py-2 rounded">Post
                                    Graduate Diploma Professional in Japanese (DBS)</a>

                                <a href="https://www.henryharvin.com/masters-in-japanese-language"
                                    class="block text-gray-700 hover:text-[#da2028] text-sm font-medium hover:bg-gray-100 px-3 py-2 rounded">Master’s
                                    in Japanese Language</a>

                                <a href="https://www.henryharvin.com/migrate-japan"
                                    class="block text-gray-700 hover:text-[#da2028] text-sm font-medium hover:bg-gray-100 px-3 py-2 rounded">Migrate
                                    to Japan Course</a>
                            </div>
                        </div> --}}

                        <!-- Other Main Submenu Items -->
                        <a href="https://www.henryharvin.com/japanese-language-course"
                            class="block px-3 py-1 text-[13px] text-gray-700 font-medium hover:text-[#da2028] hover:bg-gray-100 rounded">Japanese
                            Language Course</a>

                        <a href="https://www.henryharvin.com/japanese-beginners-course"
                            class="block px-3 py-1 text-[13px] text-gray-700 font-medium hover:text-[#da2028] hover:bg-gray-100 rounded">Japanese
                            for Beginners Course</a>

                        <a href="https://www.henryharvin.com/japanese-language-course"
                            class="block px-3 py-1 text-[13px] text-gray-700 font-medium hover:text-[#da2028] hover:bg-gray-100 rounded">Japanese
                            Language N5 Level Course</a>

                        <a href="https://www.henryharvin.com/japanese-language-course"
                            class="block px-3 py-1 text-[13px] text-gray-700 font-medium hover:text-[#da2028] hover:bg-gray-100 rounded">Japanese
                            Language N4 Level Course</a>

                        <a href="https://www.henryharvin.com/japanese-language-course"
                            class="block px-3 py-1 text-[13px] text-gray-700 font-medium hover:text-[#da2028] hover:bg-gray-100 rounded">Japanese
                            Language N3 Level Course</a>

                        <a href="https://www.henryharvin.com/japanese-language-course"
                            class="block px-3 py-1 text-[13px] text-gray-700 font-medium hover:text-[#da2028] hover:bg-gray-100 rounded">Japanese
                            Language N1 Level Course</a>

                        <a href="https://www.henryharvin.com/post-graduate-diploma-in-japanese-language-by-dbs"
                            class="block px-3 py-1 text-[13px] text-gray-700 font-medium hover:text-[#da2028] hover:bg-gray-100 rounded">Post
                            Graduate Diploma in Japanese Language (DBS)</a>

                        <a href="https://www.henryharvin.com/post-graduate-diploma-professional-in-japanese-language-by-dbs"
                            class="block px-3 py-1 text-[13px] text-gray-700 font-medium hover:text-[#da2028] hover:bg-gray-100 rounded">Post
                            Graduate Diploma Professional in Japanese (DBS)</a>

                        <a href="https://www.henryharvin.com/masters-in-japanese-language"
                            class="block px-3 py-1 text-[13px] text-gray-700 font-medium hover:text-[#da2028] hover:bg-gray-100 rounded">Master’s
                            in Japanese Language</a>

                        <a href="https://www.henryharvin.com/migrate-japan"
                            class="block px-3 py-1 text-[13px] text-gray-700 font-medium hover:text-[#da2028] hover:bg-gray-100 rounded">Migrate
                            to Japan Course</a>

                        <a href="https://www.henryharvin.com/business-japanese-for-beginners-course"
                            class="block px-3 py-1 text-sm text-gray-700 font-medium hover:text-[#da2028] hover:bg-gray-100 rounded">Business
                            Japanese for Beginners Course</a>
                        <a href="https://www.henryharvin.com/career-japanese-course"
                            class="block px-3 py-1 text-sm text-gray-700 font-medium hover:text-[#da2028] hover:bg-gray-100 rounded">Career
                            Japanese Course</a>
                        <a href="https://www.henryharvin.com/corporate-business-japanese-course"
                            class="block px-3 py-1 text-sm text-gray-700 font-medium hover:text-[#da2028] hover:bg-gray-100 rounded">Corporate
                            Business Japanese Course</a>
                        <a href="https://www.henryharvin.com/business-japanese-course"
                            class="block px-3 py-1 text-sm text-gray-700 font-medium hover:text-[#da2028] hover:bg-gray-100 rounded">Business
                            Japanese Course</a>
                    </div>
                </div>
                <div class="group relative">
                    <a class="flex items-center text-[#da2028] font-[600] text-[14px] space-x-1 py-6">
                        <span>Admission</span>
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M5.23 7.21a.75.75 0 011.06-.02L10 10.67l3.71-3.48a.75.75 0 111.04 1.08l-4.25 4a.75.75 0 01-1.04 0l-4.25-4a.75.75 0 01-.02-1.06z" />
                        </svg>
                    </a>
                    <div
                        class="absolute top-full -left-2 z-30 w-48 bg-white shadow-lg border rounded-md p-2 space-y-1 submenu">
                        {{-- <a href="why-kazumi"
                                class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Why Kazumi?</a> --}}
                        <a href="admission-process"
                            class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Admission
                            Process</a>

                        <a href="https://www.henryharvin.com/pay-fee"
                            class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Online
                            Payment</a>
                        <a href="existing-students"
                            class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Existing
                            Students</a>
                        <a href="https://www.henryharvin.com/request-certificate"
                            class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Request
                            Certificate</a>
                    </div>
                </div>
                <a href="https://yuvaintern.com/" class="text-[#da2028] font-[600] text-[14px] py-6">Internship</a>
                <a href="accreditation" class="text-[#da2028] font-[600] text-[14px] py-6">Accreditation</a>
                <div class="group relative">
                    <a class="flex items-center text-[#da2028] font-[600] text-[14px] space-x-1 py-6">
                        <span>About Us</span>
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M5.23 7.21a.75.75 0 011.06-.02L10 10.67l3.71-3.48a.75.75 0 111.04 1.08l-4.25 4a.75.75 0 01-1.04 0l-4.25-4a.75.75 0 01-.02-1.06z" />
                        </svg>
                    </a>
                    <div
                        class="absolute top-full -left-2 z-30 w-48 bg-white shadow-lg border rounded-md p-2 space-y-1 submenu">
                        <a href="about-us"
                            class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Knowing
                            Kazumi</a>

                        <a href="values"
                            class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Values</a>
                        {{-- <a href="media"
                                class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Media</a> --}}

                        <a href="/our-affiliations"
                            class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Our
                            Affiliations</a>
                        {{-- <a href="quality-assurance"
                                class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Quality Assurance</a> --}}
                        <a href="esteemed-faculty"
                            class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Esteemed
                            Faculty</a>
                        <a href="/careers"
                            class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Careers
                        </a>
                        <a href="/our-customers"
                            class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Our
                            Customers</a>
                        <a href="https://www.henryharvin.com/placed-students-list"
                            class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Placed
                            Student List</a>

                        {{-- <a href="kazumi-community"
                                class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Kazumi Community</a> --}}
                        <a href="contact-us"
                            class="block text-gray-700 hover:text-[#da2028] text-[14px] font-[600] hover:bg-gray-100 px-2 py-1">Contact
                            Us</a>

                    </div>
                </div>
                {{-- <a href="/contact-us" class="text-[#da2028] font-[600] text-[14px] py-6">Contact Us</a> --}}
            </div>

            @if (str_contains(request()->path(), 'japan'))
                <div class="hidden md:flex md:items-center space-x-4">
                    <button data-modal-target="course-modal" data-modal-toggle="course-modal" type="button"
                        class="bg-red-600 text-white px-4 py-2 rounded-md text-sm"
                        onclick="openApplyNowModal()">Apply</button>
                </div>
            @else
                <div class="hidden md:flex md:items-center space-x-4">
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                        type="button" class="bg-red-600 text-white px-4 py-2 rounded-md text-sm">Apply</button>
                </div>
            @endif

            <div class="md:hidden">
                <button id="mobile-menu-toggle" class="text-gray-600 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="md:hidden hidden bg-white border-t">
        <a href="/" class="block px-4 py-2 text-[#da2028] font-[600] hover:bg-gray-100">家</a>

        <div class="px-4 py-2">
            <!-- Main Courses Toggle -->
            <button onclick="toggleMobileSubmenu('courses')"
                class="flex items-center justify-between w-full text-[#da2028] font-[600]">
                <span>Courses</span>
                <svg id="arrow-courses" class="w-4 h-4 ml-2 transition-transform duration-200" fill="none"
                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <!-- Courses Main Submenu -->
            <div id="mobile-submenu-courses" class="hidden ml-4 mt-2 space-y-3">

                <!-- Japanese Language Courses -->
                <div>
                    {{-- <button onclick="toggleMobileSubmenu('language-courses')"
                        class="flex justify-between items-center w-full text-sm font-semibold text-gray-800">
                        <span>Japanese Language Courses</span>
                        <svg id="arrow-language-courses" class="w-4 h-4 transition-transform" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M6 8l4 4 4-4" />
                        </svg>
                    </button> --}}
                    {{-- <div  id="mobile-submenu-language-courses" class="hidden ml-4 mt-1 space-y-1 text-sm"> --}}
                    <a href="https://www.henryharvin.com/japanese-language-course"
                        class="block text-gray-700">Japanese Language Course</a>
                    <a href="https://www.henryharvin.com/japanese-beginners-course"
                        class="block text-gray-700">Japanese for Beginners Course</a>
                    <a href="https://www.henryharvin.com/japanese-language-course"
                        class="block text-gray-700">Japanese Language N5 Level Course</a>
                    <a href="https://www.henryharvin.com/japanese-language-course"
                        class="block text-gray-700">Japanese Language N4 Level Course</a>
                    <a href="https://www.henryharvin.com/japanese-language-course"
                        class="block text-gray-700">Japanese Language N3 Level Course</a>
                    <a href="https://www.henryharvin.com/japanese-language-course"
                        class="block text-gray-700">Japanese Language N1 Level Course</a>
                    <a href="https://www.henryharvin.com/post-graduate-diploma-in-japanese-language-by-dbs"
                        class="block text-gray-700">PG Diploma in Japanese Language (DBS)</a>
                    <a href="https://www.henryharvin.com/post-graduate-diploma-professional-in-japanese-language-by-dbs"
                        class="block text-gray-700">PG Diploma Professional (DBS)</a>
                    <a href="https://www.henryharvin.com/masters-in-japanese-language"
                        class="block text-gray-700">Master’s in Japanese Language</a>
                    <a href="https://www.henryharvin.com/migrate-japan" class="block text-gray-700">Migrate to
                        Japan Course</a>
                    <a href="https://www.henryharvin.com/business-japanese-for-beginners-course"
                        class="block text-gray-700">Business Japanese for Beginners Course</a>
                    <a href="https://www.henryharvin.com/career-japanese-course" class="block text-gray-700">Career
                        Japanese Course</a>
                    <a href="https://www.henryharvin.com/corporate-business-japanese-course"
                        class="block text-gray-700">Corporate Business Japanese Course</a>
                    <a href="https://www.henryharvin.com/business-japanese-course"
                        class="block text-gray-700">Business Japanese Course</a>
                    {{-- </div> --}}
                </div>
            </div>
        </div>


        <!-- Mobile Admission Menu with Arrow -->
        <div class="px-4 py-2">
            <button onclick="toggleMobileSubmenu('admission')"
                class="flex items-center justify-between w-full text-[#da2028] font-[600]">
                <span>Admission</span>
                <svg id="arrow-admission" class="w-4 h-4 ml-2 transition-transform duration-200" fill="none"
                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div id="mobile-submenu-admission" class="hidden mt-2 ml-4 space-y-1">
                <!-- <a href="why-kazumi" class="block py-1 text-gray-700">Why Kazumi?</a> -->
                <a href="admission-process" class="block py-1 text-gray-700">Admission Process</a>
                <a href="https://www.henryharvin.com/pay-fee" class="block py-1 text-gray-700">Online Payment</a>
                <a href="existing-students" class="block py-1 text-gray-700">Existing Students</a>
                <a href="https://www.henryharvin.com/request-certificate" class="block py-1 text-gray-700">Request
                    Certificate</a>
                <a href="contact-us" class="block py-1 text-gray-700">Contact Us</a>
            </div>
        </div>

        <script>
            function toggleMobileSubmenu(id) {
                const submenu = document.getElementById(`mobile-submenu-${id}`);
                const arrow = document.getElementById(`arrow-${id}`);
                submenu.classList.toggle('hidden');
                arrow.classList.toggle('rotate-180');
            }
        </script>

        <a href="https://yuvaintern.com/"
            class="block px-4 py-2 text-[#da2028] font-[600] hover:bg-gray-100">Internship</a>
        <a href="accreditation" class="block px-4 py-2 text-[#da2028] font-[600] hover:bg-gray-100">Accreditation</a>

        <!-- Mobile About Us Menu with Arrow -->
        <div class="px-4 py-2">
            <button onclick="toggleMobileSubmenu('about')"
                class="flex items-center justify-between w-full text-[#da2028] font-[600]">
                <span>About Us</span>
                <svg id="arrow-about" class="w-4 h-4 ml-2 transition-transform duration-200" fill="none"
                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div id="mobile-submenu-about" class="hidden mt-2 ml-4 space-y-1">
                <a href="about-us" class="block py-1 text-gray-700">Knowing Kazumi</a>
                <a href="values" class="block py-1 text-gray-700">Values</a>
                <a href="media" class="block py-1 text-gray-700">Media</a>
                <a href="/our-affiliations" class="block py-1 text-gray-700">Our Affiliations</a>
                <a href="esteemed-faculty" class="block py-1 text-gray-700">Esteemed Faculty</a>
                <a href="/careers" class="block py-1 text-gray-700">Careers</a>
                <a href="/our-customer" class="block py-1 text-gray-700">Our Customers</a>
                <a href="https://www.henryharvin.com/placed-students-list" class="block py-1 text-gray-700">Placed
                    Student List</a>
            </div>
        </div>

        <!-- JS toggle function (use once globally) -->
        <script>
            function toggleMobileSubmenu(id) {
                const submenu = document.getElementById(`mobile-submenu-${id}`);
                const arrow = document.getElementById(`arrow-${id}`);
                submenu.classList.toggle('hidden');
                arrow.classList.toggle('rotate-180');
            }
        </script>


        <a href="/contact-us" class="block px-4 py-2 text-[#da2028] font-[600] hover:bg-gray-100">Contact Us</a>

        @if (str_contains(request()->path(), 'japan'))
            <div class="flex space-x-4 px-4 py-2">
                <button data-modal-target="course-modal" data-modal-toggle="course-modal" type="button"
                    class="bg-red-600 text-white px-4 py-2 rounded-md text-sm"
                    onclick="openApplyNowModal()">Apply</button>
            </div>
        @else
            <div class="flex space-x-4 px-4 py-2">
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                    type="button" class="bg-red-600 text-white px-4 py-2 rounded-md text-sm">Apply</button>
            </div>
        @endif
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-toggle').addEventListener('click', () => {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    function toggleMobileSubmenu(menu) {
        document.querySelectorAll('#mobile-menu div[id^="mobile-submenu-"]').forEach(el => {
            if (el.id === `mobile-submenu-${menu}`) {
                el.classList.toggle('hidden');
            } else {
                el.classList.add('hidden');
            }
        });
    }
</script>
<script>
    function toggleMobileSubmenu(id) {
        const submenu = document.getElementById(`mobile-submenu-${id}`);
        const arrow = document.getElementById(`arrow-${id}`);

        if (submenu && arrow) {
            submenu.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        }
    }
</script>
