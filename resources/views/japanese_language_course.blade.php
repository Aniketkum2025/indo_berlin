@extends('layouts.app')
@section('content')
<style>
.custome h3 {
    color: #dc2626;
}

.custome strong {
    color: #4f2d7f;
}

.text-container {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    /* Limit to 3 lines */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

@keyframes bounceVertical {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(4px);
    }
}

@layer utilities {
    .animate-bounceVertical {
        animation: bounceVertical 1s infinite;
    }
}
</style>
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
            <p class="capitalize text-2xl md:text-4xl tracking-widest mb-4"
                style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.35);">private online lessons</p>
            <!-- <h1 class="text-xl md:text-2xl tracking-widest mb-6">Discover a new standard of Japanese Education and
                Culture.</h1> -->
            <div class="flex space-x-4 mb-8">
                <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"
                    class="bg-red-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-red-600">Download
                    Brochure</a>
                <a href="#" class="bg-red-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-red-600"> Apply
                    Now</a>
            </div>
        </div>
    </div>
</section>


<section class="py-12 px-4">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 mt-2">
        <div class="md:col-span-2">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-red-600 capitalize">Key Highlights</h2>
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 mx-auto gap-2">
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(1609)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711777063icon (1).png"
                                alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">670 Hours
                            of
                            Instructor-Led Sessions</h5>
                    </div>
                </div>
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(1610)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711779552Doubt%20solving%20session.png"
                                alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">224 Hours
                            of
                            Live Interactive Doubt Solving Sessions</h5>
                    </div>
                </div>
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(1611)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711779671Industry%20expert%20sessions.png"
                                alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">112 Hours
                            of
                            Live Master Sessions by Industry Experts</h5>
                    </div>
                </div>
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(1612)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711779837Self paced.png"
                                alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">576 Hours
                            of
                            Self-Paced Learning</h5>
                    </div>
                </div>
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(1613)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711780067Capstone.png"
                                alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">Job-Ready
                            Portfolio of 67+ Capstone Projects</h5>
                    </div>
                </div>
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(1614)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711780133assesments.png"
                                alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">290
                            Auto-Graded
                            Assessments powered by Examopedia</h5>
                    </div>
                </div>
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(11507)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1713174360icon-1.png" alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">134+
                            Industry
                            Case Studies</h5>
                    </div>
                </div>
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(11508)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1712051679hands on excercise (2).png"
                                alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">1005 Guided
                            Hands-On Exercises</h5>
                    </div>
                </div>
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(11509)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711780980Assignments.png"
                                alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">67+
                            Assignments
                            and Mini Projects</h5>
                    </div>
                </div>
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(11510)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711781074Hackathons.png"
                                alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">2 Mock
                            Interviews and 3 Hackathons</h5>
                    </div>
                </div>
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(11514)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711781459Mentorship.png"
                                alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">15 Hours of
                            Mentorship by Industry Experts</h5>
                    </div>
                </div>
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(19860)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1739631998icon_2.png" alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">Upgradation
                            to
                            Sector Skill Council Certification</h5>
                    </div>
                </div>
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(11511)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1712569767GM-Logo (1).png"
                                alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">Get 36
                            Months
                            Gold Membership of Henry Harvin® School of Languages</h5>
                    </div>
                </div>
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(11512)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711781357Internship.png"
                                alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">Get a
                            guaranteed Internship with Henry Harvin® and in top MNCs like J.P. Morgan, Accenture &amp;
                            many
                            more via Forage</h5>
                    </div>
                </div>
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(11513)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711781409Placements.png"
                                alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">Get 3 in 1
                            Placement support through Placement Drives, Premium access to Job portal &amp; Personalized
                            Job
                            Consulting</h5>
                    </div>
                </div>

                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(11515)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711781642Hallmark%20certification.png"
                                alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">Earn
                            Certification of Course from Henry Harvin®, Govt of India recognized &amp; Award-Winning
                            Institute and NSDC Certification</h5>
                    </div>
                </div>
                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(19859)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1737087801dbs.png" alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">Upgradation
                            to
                            globally recognized Swiss Certification from Dunster Business School, Switzerland</h5>
                    </div>
                </div>

                <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2 " x-data="accordion(19861)">
                    <div @click="handleClick()" class="flex items-start gap-2">
                        <div class="w-2/12">
                            <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1739632069icon_3.png" alt="images37">
                        </div>
                        <h5 class="w-9/12 text-[14px] font-medium text-red-700 " style="font-style: italic;">Upgrade to
                            SAMADHAN Govt. Certifications and earn credits for related jobs</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="lg:w-12/12 sticky top-4 md:top-[70px]">
                <div class="relative bg-white rounded-lg border-2 border-red-600 shadow mb-2">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between px-4 py-2 border-b rounded-t">
                        <h3 class="text-[20px] font-[600] text-red-600 text-center">
                            Book a Live Class
                        </h3>

                    </div>

                    <!-- Modal body -->
                    <form class="p-2 md:p-2 space-y-2">
                        <div>
                            <label for="name" class="block text-sm mb-1 font-[600] text-red-600">Name</label>
                            <input type="text" name="name" id="name" placeholder="Name" required=""
                                class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-1">
                            <span id="name_error3" class="text-red-500 text-xs"></span>
                        </div>

                        <div>
                            <label for="email" class="block text-sm mb-1 font-[600] text-red-600">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" required=""
                                class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-1">
                            <span id="email_error3" class="text-red-500 text-xs"></span>
                        </div>

                        <div>
                            <label for="countryCode" class="block text-sm mb-1 font-[600] text-red-600">Country
                                Code</label>
                            <div class="flex gap-2">
                                <select name="countryCode"
                                    class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg p-1">
                                    <option value="(+971)" selected="">UAE (+971)</option>
                                    <option value="(+91)">India (+91)</option>
                                    <option value="(+1)">USA (+1)</option>
                                </select>
                                <input type="number" name="phone" placeholder="Mobile no *"
                                    class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-1">
                            </div>
                            <span id="phone_error3" class="text-red-500 text-xs"></span>
                        </div>

                        <!-- Hidden Inputs -->
                        <input type="hidden" name="description2"
                            value="SAP FICO Training (Power User Program) Course Certification">
                        <input type="hidden" name="academy" value="20">
                        <input type="hidden" name="source" value="FORM Henry Harvin UAE">
                        <input type="hidden" name="lead_source_page_url"
                            value="https://henryharvin.ae/sap-fico-training">
                        <input type="hidden" name="slug" value="sap-fico-training">
                        <input type="hidden" name="crm_course_id" value="SAP-FICO">

                        <div class="flex justify-center pt-2">
                            <button type="submit"
                                class="bg-red-600 text-white px-2 py-1 text-lg rounded-md">Submit</button>
                        </div>
                    </form>

                </div>
                <div class="w-full flex items-center justify-center relative">
                    <a target="_blank" href="https://www.youtube.com/watch?v=bdK4xBJpox0"
                        class="relative w-full max-w-2xl">
                        <img src="https://cdn.henryharvin.com/images/1686982429japa.jpg"
                            class="w-full object-cover rounded-lg" style="height:220px;">

                        <svg version="1.1" viewBox="0 0 68 48" width="68"
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <path d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 
                                    C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 
                                    C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24
                                    S67.94,13.05,66.52,7.74z" fill="#f00">
                            </path>
                            <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                        </svg>
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

<section class="py-12 px-4 bg-gray-100">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="md:col-span-2">
            <div class="md:px-4 p-3 border-2 border-red-700">
                <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">About
                    Japanese Language Course
                </h2>
                <div class="custome prose prose-sm mt-4 max-w-none mx-auto 
                            prose-strong:text-[13px] prose-strong:font-[600]
                            prose-h2:text-red-700 prose-h3:text-red-700 prose-h4:text-red-700
                            prose-h2:text-[16px] prose-h3:text-[16px] prose-h4:text-[16px]
                            prose-h2:font-[500] prose-h3:font-[500] prose-h4:font-[500]
                            prose-p:text-white prose-p:font-[500] prose-p:text-[16px]
                            prose-li:text-white prose-li:font-[500] prose-li:text-[16px]
                            prose-a:text-white prose-a:font-[500] prose-a:text-[16px]  text-container"
                    id="textContainer">
                    <h3>Japanese Language Course</h3>
                    <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Learn
                                    the most
                                    fast-paced spoken language of the world in Henry HarvinⓇ. Japanese language course
                                    in Henry
                                    HarvinⓇ aims to develop the interpersonal skills of the candidates.&nbsp; The course
                                    is
                                    designed to gain an excellent knowledge of the Japanese language at 5 different
                                    levels. The
                                    training program is divided into 5 levels.</span></span></span></p>

                    <p><span style="font-size:11pt"><span style="font-family:Arial"><span
                                    style="color:#000000"><strong>Elementary level- N5:
                                    </strong></span></span></span><span style="font-size:11pt"><span
                                style="font-family:Arial"><span style="color:#000000">This is the basic
                                    level of the Japanese language test. This level will help you to know the basics of
                                    Japanese
                                    i.e sentence structure, typical expressions written in hiragana, katakana, and basic
                                    kanji
                                    as well as spoken conversation.&nbsp;</span></span></span></p>

                    <p><span style="font-size:11pt"><span style="font-family:Arial"><span
                                    style="color:#000000"><strong>Pre-Intermediate level- N4:
                                    </strong></span></span></span><span style="font-size:11pt"><span
                                style="font-family:Arial"><span style="color:#000000">This level is the second level of
                                    the
                                    Japanese Language Proficiency Test. This level consists of grammar and
                                    vocabulary.</span></span></span></p>

                    <p><span style="font-size:11pt"><span style="font-family:Arial"><span
                                    style="color:#000000"><strong>Intermediate Level- N3:
                                    </strong></span></span></span><span style="font-size:11pt"><span
                                style="font-family:Arial"><span style="color:#000000">This level is the
                                    bridging level. It teaches linguistic skills expressed in terms of language
                                    activities like
                                    reading and writing.</span></span></span></p>

                    <p><span style="font-size:11pt"><span style="font-family:Arial"><span
                                    style="color:#000000"><strong>Pre-Advanced level-N2:
                                    </strong></span></span></span><span style="font-size:11pt"><span
                                style="font-family:Arial"><span style="color:#000000">This level is
                                    divided into three sections i.e reading comprehension, language knowledge, and
                                    listening
                                    comprehension.&nbsp;</span></span></span></p>

                    <p><span style="font-size:11pt"><span style="font-family:Arial"><span
                                    style="color:#000000"><strong>Advanced
                                        level-N1: </strong></span></span></span><span style="font-size:11pt"><span
                                style="font-family:Arial"><span style="color:#000000">This level seems to be difficult.
                                    It
                                    consists of reading kanji, books, magazines, and newspapers in Japanese. This level
                                    will
                                    give you complete knowledge of the Japanese language</span></span></span></p>
                    <h3>AGOTA™ Framework</h3>
                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                    style="color:#000000"><strong>Agota™ Framework is a versatile 10-in-1 program that
                                        includes
                                        various aspects of competency development and career
                                        development.</strong></span></span></span></p>

                    <ul>
                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                    style="font-family:Roboto,sans-serif"><span
                                        style="color:#000000"><strong>Training</strong></span></span></span><span
                                style="font-size:11pt"><span style="font-family:Roboto,sans-serif"><span
                                        style="color:#000000">:
                                        670 Hours of Two-Way Live Online Interactive Sessions</span></span></span></li>
                    </ul>

                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                style="font-family:Roboto,sans-serif"><span style="color:#000000">N5 -&nbsp; 98
                                    hours</span></span></span></p>

                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                style="font-family:Roboto,sans-serif"><span style="color:#000000">N4 - 98
                                    hours</span></span></span></p>

                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                style="font-family:Roboto,sans-serif"><span style="color:#000000">N3 - 138
                                    hours</span></span></span></p>

                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                style="font-family:Roboto,sans-serif"><span style="color:#000000">N2 - 158
                                    hours</span></span></span></p>

                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                style="font-family:Roboto,sans-serif"><span style="color:#000000">N1 - 178
                                    hours&nbsp;</span></span></span></p>

                    <ul>
                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                    style="font-family:Roboto,sans-serif"><span
                                        style="color:#000000"><strong>Projects</strong></span></span></span><span
                                style="font-size:11pt"><span style="font-family:Roboto,sans-serif"><span
                                        style="color:#000000">:
                                    </span></span></span><span style="font-size:11pt"><span
                                    style="font-family:Arial,sans-serif"><span style="color:#000000">Facility to undergo
                                        projects in japanese grammar, vocabulary, comprehension and
                                        more</span></span></span>
                        </li>
                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                    style="font-family:Roboto,sans-serif"><span
                                        style="color:#000000"><strong>Masterclass</strong></span></span></span><span
                                style="font-size:11pt"><span style="font-family:Roboto,sans-serif"><span
                                        style="color:#000000">:
                                        Access to 52+ Masterclass Sessions for essential soft skill
                                        development</span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                    style="font-family:Roboto,sans-serif"><span style="color:#000000"><strong>Student
                                            Engagement
                                            &amp; Events: </strong></span></span></span><span
                                style="font-size:11pt"><span style="font-family:Roboto,sans-serif"><span
                                        style="color:#000000">Free Access to #AskHenry
                                        Hackathons and Competitions &amp; many other facilities from&nbsp; Henry
                                        Harvin®</span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                    style="font-family:Roboto,sans-serif"><span
                                        style="color:#000000"><strong>Membership:</strong></span></span></span><span
                                style="font-size:11pt"><span style="font-family:Roboto,sans-serif"><span
                                        style="color:#000000">
                                    </span></span></span><span style="font-size:11pt"><span
                                    style="font-family:Arial,sans-serif"><span style="color:#000000"><span
                                            style="background-color:#ffffff">30 Months Gold Membership of Henry
                                            Harvin®&nbsp;
                                            School of Languages for the Japanese Language
                                            Course</span></span></span></span>
                        </li>
                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                    style="font-family:Roboto,sans-serif"><span
                                        style="color:#000000"><strong>E-Learning:</strong></span></span></span><span
                                style="font-size:11pt"><span style="font-family:Roboto,sans-serif"><span
                                        style="color:#000000">
                                    </span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Roboto,sans-serif"><span style="color:#000000">Get free access to
                                        the LMS
                                        having PPTs, projects, self-paced video-based learning, library, quizzes,
                                        question bank,
                                        practice tests, final assessments, and a forum, powered by
                                        Examopedia</span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                    style="font-family:Roboto,sans-serif"><span style="color:#000000"><strong>Hallmark
                                            Certification + License</strong></span></span></span><span
                                style="font-size:11pt"><span style="font-family:Roboto,sans-serif"><span
                                        style="color:#000000">:
                                    </span></span></span><span style="font-size:11pt"><span
                                    style="font-family:Arial,sans-serif"><span style="color:#000000"><span
                                            style="background-color:#ffffff">Get course completion Certification and
                                            License of
                                            Japanese Language Course from Henry Harvin® Govt of India recognized &amp;
                                            Award-Winning Institute, and showcase expertise</span></span></span></span>
                        </li>
                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                    style="font-family:Roboto,sans-serif"><span style="color:#000000"><strong>Internship
                                            Support</strong></span></span></span><span style="font-size:11pt"><span
                                    style="font-family:Roboto,sans-serif"><span style="color:#000000">: Get Internship
                                        Support
                                        with Henry Harvin® and in top MNCs like J.P. Morgan, Accenture &amp; many more
                                        via 100X
                                        Suite and Yuva Intern</span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                    style="font-family:Roboto,sans-serif"><span
                                        style="color:#000000"><strong>Entrepreneurship
                                            Mentorship: </strong></span></span></span><span style="font-size:11pt"><span
                                    style="font-family:Roboto,sans-serif"><span style="color:#000000">Mentorship from
                                        Young
                                        Successful Entrepreneurs to set up a sustainable &amp; scalable Business from
                                        scratch at
                                        both Freelance &amp; Entrepreneur level</span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                    style="font-family:Roboto,sans-serif"><span style="color:#000000"><strong>Placement
                                            Support:</strong></span></span></span><span style="font-size:11pt"><span
                                    style="font-family:Roboto,sans-serif"><span style="color:#000000"> Get 3 in 1
                                        Placement
                                        support through Placement Drives, Premium access to the Job portal &amp;
                                        Personalized
                                        Job Consulting</span></span></span></li>
                    </ul>
                    <h3>Trainers at Henry Harvin®</h3>
                    <ul>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">Most renowned industry
                                        trainers with </span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong>11+
                                            years of working experience</strong></span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">Have been invited for
                                    </span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong>120+ keynotes
                                        </strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">classes for
                                        the Japanese Language course</span></span></span></li>
                        <li><span style="font-size:10.5pt"><span style="font-family:Arial"><span
                                        style="color:#434343">Have
                                        delivered <strong>155+&nbsp;lectures </strong>and are currently impaneled as
                                        domain
                                        experts with Henry Harvin® School of Languages</span></span></span></li>
                    </ul>
                    <h3>Gold Membership Benefits</h3>
                    <ul>
                        <li><span style="font-size:10.5pt"><span style="font-family:Arial"><span
                                        style="color:#434343">Avail 36
                                        Months Gold Membership of Henry Harvin® School
                                        of&nbsp;</span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span
                                        style="color:#434343">Languages</span></span></span><span
                                style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">
                                        that includes
                                    </span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong>E-Learning Access
                                        </strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">through
                                        recorded videos, games, projects CPDSPe studies powered by
                                        Examopedia&nbsp;</span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span
                                        style="color:#434343">Attend&nbsp;</span></span></span><span
                                style="font-size:10.5pt"><span style="font-family:Arial"><span
                                        style="color:#434343"><strong>Masterclass
                                            Session</strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"> for 1
                                        year</span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">Earn
                                        the</span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong> Prestigious Henry
                                            Harvin</strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">®</span></span></span><span
                                style="font-size:10.5pt"><span style="font-family:Arial"><span
                                        style="color:#434343"><strong>
                                            Alumni Status</strong></span></span></span><span
                                style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">
                                        and become one of the reputed
                                    </span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span
                                        style="color:#434343"><strong>&nbsp;</strong>46</span></span></span><span
                                style="font-size:10.5pt"><span style="font-family:Arial"><span
                                        style="color:#434343">0,000 +
                                        Alumni across the Globe </span></span></span><span
                                style="font-size:10.5pt"><span style="font-family:Arial"><span
                                        style="color:#434343"><strong>Guaranteed Internship
                                        </strong>with Henry Harvin</span></span></span><span
                                style="font-size:8.5pt"><span style="font-family:Arial"><span
                                        style="color:#434343">Ⓡ&nbsp;</span></span></span><span
                                style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">via
                                        Yuva
                                        Intern</span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">Weekly
                                    </span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong>10+ job opportunities
                                        </strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">offered</span></span></span>
                        </li>
                        <li><span style="font-size:10.5pt"><span style="font-family:Arial"><span
                                        style="color:#434343"><strong>Experience industry projects
                                        </strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">during the
                                        Training</span></span></span></li>
                    </ul>
                    <h3>Learning Benefits</h3>
                    <ul>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">Learning Japanese aims to
                                    </span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong>develop competence in
                                            accomplishing
                                            tasks</strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"> in
                                        Japanese</span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong>Broaden your
                                            perspective</strong></span></span></span><span
                                style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343"> on
                                        Japanese culture and understand it
                                        with clarity</span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">Learn
                                    </span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong>Japanese
                                            language</strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"> </span></span></span><span
                                style="font-size:10.5pt"><span style="font-family:Arial"><span
                                        style="color:#434343"><strong>fonts.</strong></span></span></span></li>
                    </ul>

                    <ul>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">Become a
                                    </span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong>confident speaker by
                                            enhancing
                                            your reading, writing, listening, and
                                            speaking</strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"> skills in
                                        the Japanese language</span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong>Communicate habitual
                                            actions
                                        </strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">in a better
                                        way</span></span></span>
                        </li>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">The Japanese language will
                                        help greater with
                                    </span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong>greater language
                                            sensitivity</strong></span></span></span>
                        </li>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">Speaking Japanese
                                    </span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span
                                        style="color:#434343"><strong>fluently</strong></span></span></span><span
                                style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">
                                        will make
                                        you</span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong> stand
                                            out</strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"> and offer you a unique
                                        perspective as
                                        compared to your peers</span></span></span></li>
                        <li><span style="font-size:10.5pt"><span style="font-family:Arial"><span
                                        style="color:#434343"><strong>Advance cross-cultural skills
                                        </strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">and get familiar with cultural
                                        dimensions</span></span></span></li>
                    </ul>
                    <h3>Career Benefits</h3>
                    <ul>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">On learning the Japanese
                                        language get</span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong>
                                            better scope for jobs </strong></span></span></span><span
                                style="font-size:10.5pt"><span style="font-family:Arial"><span
                                        style="color:#434343">such as
                                        Translator, Interpreter or a Trainer</span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">Learn Japanese with less
                                        competition, a high competitive edge,
                                        and</span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong> better
                                            pay</strong></span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span
                                        style="color:#434343"><strong>Boost</strong>&nbsp;your professional value by
                                        understanding <strong>Linguistics and Translation</strong></span></span></span>
                        </li>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong>Distinguish your
                                            profile</strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"> from peers and
                                    </span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong>get
                                            promoted</strong></span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">Get</span></span></span><span
                                style="font-size:10.5pt"><span style="font-family:Arial"><span
                                        style="color:#434343"><strong> hired by international brands
                                        </strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">like Amazon, Google, JP
                                        Morgan, and
                                        other topmost industries</span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"><strong>Improve your CV and
                                            Linkedin profile
                                        </strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">with professional and
                                        technical
                                        development</span></span></span></li>
                        <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343">Get</span></span></span><span
                                style="font-size:10.5pt"><span style="font-family:Arial"><span
                                        style="color:#434343"><strong> job
                                            security</strong></span></span></span><span style="font-size:10.5pt"><span
                                    style="font-family:Arial"><span style="color:#434343"> with exceptional career
                                        growth</span></span></span></li>
                        <li><span style="font-size:10.5pt"><span style="font-family:Arial"><span
                                        style="color:#434343"><strong>Connect </strong></span></span></span><span
                                style="font-size:10.5pt"><span style="font-family:Arial"><span
                                        style="color:#434343">with people
                                        globally in the arena of Japanese Language</span></span></span></li>
                    </ul>
                    <h3>Alumni Status</h3>
                    <p>Become a part of the <strong>Elite School of Languages </strong>of Henry Harvin®&nbsp; and join
                        the
                        4,60,000+ strong Alumni Network Worldwide.</p>
                    <h3>Recognitions of Henry Harvin® Education</h3>
                    <ul>
                        <li>Winner of Top Corporate Training Award, Game-Based Learning Company of the under 40 Business
                            World
                            Award</li>
                        <li>Affiliated with the American Association of EFL, Ministry of Corporate Affairs, MSME, UKAF,
                            UKCert,
                            Project Management Institute(PMI), and ISO 29990:2010 certified</li>
                        <li>Reviews: 3425+ Google Reviews, 1100+Youtube Testimonials with 4.5+ Rating Rated on Go aboard
                            Trustpilot, Go Overseas &amp; more</li>
                    </ul>
                </div>
                <button class="relative  mx-auto flex items-center text-white mt-4">
                    <span class="rounded-md bg-red-700 px-4 py-2" style="width: 142px; padding: 11px 29px 11px 0px;"
                        id="toggleButton" onclick="toggleText()">Show More</span>
                    <span class="mx-auto rounded-md h-full am-am animate-bounceVertical pl-2 absolute right-2 z-20"
                        style="pointer-events: none; right:10px; top:6px;">
                        <i class="fa fa-angle-down text-[#ffc107] text-[24px] " id="arrowIcon"></i>
                    </span>
                </button>
            </div>
            <div class="text-center py-10">
                <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">COURSE
                    FEATURES </h2>

                <div
                    class="bg-red-700 text-white mt-6 px-6 py-6 rounded-lg flex flex-col sm:flex-row items-center justify-between space-y-4 sm:space-y-0 sm:space-x-8 max-w-6xl mx-auto">

                    <!-- Duration -->
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 4h-1V2h-2v2H8V2H6v2H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2zM5 20V9h14v11H5z">
                            </path>
                        </svg>
                        <span class="font-[600]">Duration : 4 Months - 24 Months</span>
                    </div>

                    <!-- Timing -->
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 1a11 11 0 1011 11A11.013 11.013 0 0012 1zm1 17h-2v-6h6v2h-4z"></path>
                        </svg>
                        <span class="font-[600]">Timing : 08 AM - 11.00 PM</span>
                    </div>

                    <!-- Batch Size -->
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05A5.96 5.96 0 0120 17v2h4v-2.5c0-2.33-4.67-3.5-8-3.5z">
                            </path>
                        </svg>
                        <span class="font-[600]">Batch Size : 3-10 Students</span>
                    </div>

                </div>
            </div>
        </div>
        <div class="relative">
            <div class="lg:w-12/12 sticky top-4 md:top-[100px]">
                <div class="bg-white border border-red-300 rounded-2xl shadow-lg p-6 text-red-600 max-w-md">
                    <h2 class="text-2xl font-bold border-b border-red-200 pb-3 mb-4">📘 COURSE DETAILS</h2>

                    <ul class="space-y-4">
                        <li class="flex items-start gap-2 text-gray-600 font-[600]">
                            <svg class="w-5 h-5 text-red-500 mt-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 20h9" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 4h14v16H5z" />
                            </svg>
                            20 lessons per week
                        </li>

                        <li class="flex items-start gap-2 text-gray-600 font-[600]">
                            <svg class="w-5 h-5 text-red-500 mt-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 7V3m8 4V3M3 11h18M5 19h14M5 15h14" />
                            </svg>
                            Held on weekdays (Monday - Friday)
                        </li>

                        <li class="flex items-start gap-2 text-gray-600 font-[600]">
                            <svg class="w-5 h-5 text-red-500 mt-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                            </svg>
                            Starts every Monday, all year long
                        </li>

                        <li class="flex items-start gap-2 text-gray-600 font-[600]">
                            <svg class="w-5 h-5 text-red-500 mt-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h18v18H3V3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 9h18M9 3v18" />
                            </svg>
                            Available to all levels
                        </li>

                        <li class="flex items-start gap-2 text-gray-600 font-[600]">
                            <svg class="w-5 h-5 text-red-500 mt-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                            </svg>
                            Possible to add modules / add-ons
                        </li>

                        <li class="flex items-start gap-2 text-gray-600 font-[600]">
                            <svg class="w-5 h-5 text-red-500 mt-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 2l2 7h7l-5.5 4 2 7L12 16l-5.5 4 2-7L3 9h7l2-7z" />
                            </svg>
                            <span class="font-semibold">Complete beginners</span> start on the first Monday of the month
                            (or the 1st & 3rd Mondays of June, July & August)
                        </li>
                    </ul>

                    <div class="border-t border-red-200 mt-5 pt-4">
                        <div class="flex items-center justify-between ">
                            <p class="text-2xl font-bold text-red-700">¥ 36,000 <span
                                    class="text-sm font-medium text-red-500">per
                                    week</span></p>
                            <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                                type="button"
                                class="bg-red-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-red-600">Apply
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="py-12 px-4">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-red-600 capitalize">Japanese Language Course
            Curriculum</h2>

        <ul class="flex flex-col max-w-5xl mx-auto space-y-3">

            <!-- Module 1 -->
            <li class="bg-red-600 shadow-lg rounded" x-data="{ open: false }">
                <h3 @click="open = !open"
                    class="flex text-white justify-between items-center font-semibold px-4 py-4 cursor-pointer">
                    <div class="flex gap-2 items-center">
                        <img src="https://img.icons8.com/color/48/000000/japan-circular.png" class="w-8"
                            alt="Japan Flag">
                        Module 1: Basic Japanese & Hiragana/Katakana
                    </div>
                    <svg :class="{ 'rotate-180': open }" class="h-5 w-5 transform transition-transform duration-300"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </h3>
                <div x-show="open" x-transition class="bg-white text-black p-4 text-sm">
                    <p>Learn the fundamentals of Japanese, starting with:</p>
                    <ul class="list-disc ml-6 mt-2 space-y-1">
                        <li>Introduction to Japanese Language & Culture</li>
                        <li>Mastering Hiragana</li>
                        <li>Mastering Katakana</li>
                        <li>Basic Greetings and Daily Expressions</li>
                        <li>Self Introduction in Japanese</li>
                        <li>Simple Numbers & Counting</li>
                    </ul>
                </div>
            </li>

            <!-- Module 2 -->
            <li class="bg-red-600 shadow-lg rounded" x-data="{ open: false }">
                <h3 @click="open = !open"
                    class="flex text-white justify-between items-center font-semibold px-4 py-4 cursor-pointer">
                    <div class="flex gap-2 items-center">
                        <img src="https://img.icons8.com/fluency/48/000000/open-book--v2.png" class="w-8"
                            alt="Book Icon">
                        Module 2: Basic Grammar & Vocabulary
                    </div>
                    <svg :class="{ 'rotate-180': open }" class="h-5 w-5 transform transition-transform duration-300"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </h3>
                <div x-show="open" x-transition class="bg-white text-black p-4 text-sm">
                    <p>Enhance your grammar and vocabulary with:</p>
                    <ul class="list-disc ml-6 mt-2 space-y-1">
                        <li>Basic Sentence Structure</li>
                        <li>Common Nouns, Verbs, and Adjectives</li>
                        <li>Particles (は, を, が, に)</li>
                        <li>Questions and Interrogatives</li>
                        <li>Conjugation of Verbs (Present, Past)</li>
                        <li>Simple Conversations</li>
                    </ul>
                </div>
            </li>

            <!-- Module 3 -->
            <li class="bg-red-600 shadow-lg rounded" x-data="{ open: false }">
                <h3 @click="open = !open"
                    class="flex text-white justify-between items-center font-semibold px-4 py-4 cursor-pointer">
                    <div class="flex gap-2 items-center">
                        <img src="https://img.icons8.com/color/48/000000/japan-circular.png" class="w-8"
                            alt="Tokyo Tower">
                        Module 3: Kanji & Everyday Conversation
                    </div>
                    <svg :class="{ 'rotate-180': open }" class="h-5 w-5 transform transition-transform duration-300"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </h3>
                <div x-show="open" x-transition class="bg-white text-black p-4 text-sm">
                    <p>Dive deeper into Kanji and real-life conversations:</p>
                    <ul class="list-disc ml-6 mt-2 space-y-1">
                        <li>Introduction to Basic Kanji (First 100 Characters)</li>
                        <li>Reading & Writing Practice</li>
                        <li>Shopping and Restaurant Phrases</li>
                        <li>Directions and Transportation</li>
                        <li>Polite Speech & Honorifics</li>
                        <li>Role-plays and Situational Dialogues</li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</section>
<section class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Placed Learners
        </h2>
        <div class="swiper linearswiper">
            <div class="swiper-wrapper my-4" style="transition-timing-function: linear !important;">
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658990804165899080411.webp"
                        alt="Image 4" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658990847165899084712.webp"
                        alt="Image 5" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658990870165899087013.webp"
                        alt="Image 6" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658990891165899089114.webp"
                        alt="Image 7" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991692165899169215.webp"
                        alt="Image 8" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991716165899171616.webp"
                        alt="Image 9" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991741165899174117.webp"
                        alt="Image 10" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991760165899176018.webp"
                        alt="Image 11" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991784165899178419.webp"
                        alt="Image 12" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991811165899181120.webp"
                        alt="Image 13" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991839165899183921.webp"
                        alt="Image 14" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991861165899186122.webp"
                        alt="Image 15" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991985165899198523.webp"
                        alt="Image 16" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992005165899200524.webp"
                        alt="Image 17" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992032165899203225.webp"
                        alt="Image 18" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992054165899205426.webp"
                        alt="Image 19" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992073165899207327.webp"
                        alt="Image 20" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992092165899209228.webp"
                        alt="Image 21" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992113165899211329.webp"
                        alt="Image 22" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992133165899213330.webp"
                        alt="Image 23" loading="lazy">
                </div>
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[100px] sm:max-h-[100px] md:max-h-[120px] object-contain mx-auto"
                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992158165899215831.webp"
                        alt="Image 24" loading="lazy">
                </div>

            </div>
        </div>
    </div>
</section>
<section class="py-12 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4" x-data="{ activeTab: 'tab1' }">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-red-600 capitalize">Our Certification </h2>

        <div class="bg-white shadow-lg rounded-xl p-6">
            <!-- Tabs -->
            <div class="flex flex-col md:flex-row justify-center items-center gap-4 mb-6">
                <!-- Tab 1 Button -->
                <button
                    :class="activeTab === 'tab1' ? 'bg-red-800 text-white border-purple-700' : 'bg-white text-gray-700 border-gray-300'"
                    class="flex items-center gap-4 px-6 py-3 border-2 rounded-lg shadow transition-all duration-200 bg-red-800 text-white border-purple-700"
                    @click="activeTab = 'tab1'">
                    <img src="https://cdn.henryharvin.com/images/1704868318hhicon.webp" alt="Henry Harvin"
                        class="h-10 w-auto bg-white rounded-full">
                    Henry Harvin® Certificate
                </button>

                <!-- Tab 2 Button -->
                <button
                    :class="activeTab === 'tab2' ? 'bg-red-800 text-white border-purple-700' : 'bg-white text-gray-700 border-gray-300'"
                    class="flex items-center gap-4 px-6 py-3 border-2 rounded-lg shadow transition-all duration-200 bg-white text-gray-700 border-gray-300"
                    @click="activeTab = 'tab2'">
                    <img src="https://login.henryharvin.com/storage/app/public/images/16590090861659009086nsdc(1).png"
                        alt="NSDC" class="h-10 w-auto bg-white rounded-full">
                    NSDC Certificate
                </button>
            </div>

            <!-- Tab Content -->
            <div class="mt-6 text-center md:text-left">
                <!-- Tab 1 Content -->
                <div x-show="activeTab === 'tab1'" x-transition="">
                    <h3 class="text-xl font-[500] text-center mb-2 text-red-700">Henry Harvin® Certification</h3>
                    <div class="flex justify-center items-center">
                        <img style="margin: auto; max-height: 400px;" loading="lazy"
                            src="https://login.henryharvin.com/storage/app/public/images/16771460551677146055JAPANESELANGUAGECOURSE(collage).jpg"
                            alt="certificate1">
                    </div>
                </div>

                <!-- Tab 2 Content -->
                <div x-show="activeTab === 'tab2'" x-transition="" style="display: none;">
                    <h3 class="text-xl font-[500] text-center mb-2 text-red-700">NSDC Certification</h3>
                    <div class="flex justify-center items-center">
                        <img style="margin: auto; max-height: 400px;" loading="lazy"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1712121396NSDC Henry Harvin Govt Certificate.png"
                            alt="certificate1">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-red-600 capitalize">Skills Covered</h2>
        <div class="grid md:grid-cols-3 gap-4">
            <div class="flex items-start space-x-3">
                <i
                    class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                <p class="text-gray-700 font-medium"> Japanese Writing</p>
            </div>
            <div class="flex items-start space-x-3">
                <i
                    class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                <p class="text-gray-700 font-medium">Japanese Listening and Speaking</p>
            </div>
            <div class="flex items-start space-x-3">
                <i
                    class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                <p class="text-gray-700 font-medium">Basic Japanese Grammar</p>
            </div>
            <div class="flex items-start space-x-3">
                <i
                    class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                <p class="text-gray-700 font-medium">Forming Simple Sentences</p>
            </div>
            <div class="flex items-start space-x-3">
                <i
                    class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                <p class="text-gray-700 font-medium">Japanese Vocabulary</p>
            </div>
            <div class="flex items-start space-x-3">
                <i
                    class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                <p class="text-gray-700 font-medium">Japanese Vocabulary</p>
            </div>

        </div>
    </div>
</section>
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-red-600 capitalize">Job Profiles</h2>
        <div class="grid md:grid-cols-3 gap-4">
            <div class="flex items-start space-x-3">
                <i
                    class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                <p class="text-gray-700 font-medium">Translator / Interpreter</p>
            </div>
            <div class="flex items-start space-x-3">
                <i
                    class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                <p class="text-gray-700 font-medium">Language Teacher</p>
            </div>
            <div class="flex items-start space-x-3">
                <i
                    class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                <p class="text-gray-700 font-medium">Tour Guide</p>
            </div>
            <div class="flex items-start space-x-3">
                <i
                    class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                <p class="text-gray-700 font-medium">International Relations Specialist</p>
            </div>
            <div class="flex items-start space-x-3">
                <i
                    class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                <p class="text-gray-700 font-medium">International Business</p>
            </div>
            <div class="flex items-start space-x-3">
                <i
                    class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                <p class="text-gray-700 font-medium">Localization Specialist</p>
            </div>
            <div class="flex items-start space-x-3">
                <i
                    class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                <p class="text-gray-700 font-medium">Cultural Liaison Officer</p>
            </div>
            <div class="flex items-start space-x-3">
                <i
                    class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                <p class="text-gray-700 font-medium">Language Analyst</p>
            </div>
            <div class="flex items-start space-x-3">
                <i
                    class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                <p class="text-gray-700 font-medium">Diplomatic Services</p>
            </div>
        </div>
    </div>
</section>
<section class="py-12 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-red-600 capitalize">FAQ</h2>
        <div class="my-6">
            <ul class="flex flex-col border-2 shadow-lg" x-data="{ selected: null }">
                <!-- FAQ Item 1 -->
                <li class="bg-white border-b">
                    <h2 @click="selected !== 1 ? selected = 1 : selected = null"
                        class="flex flex-row justify-between items-center font-semibold px-4 py-4 cursor-pointer bg-red-700 text-white">
                        <span>Who is this course for?</span>
                        <svg :class="selected === 1 ? 'rotate-180' : ''"
                            class="fill-current text-white h-6 w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20">
                            <path d="M5.23 7.21l4.77 4.77 4.77-4.77"></path>
                        </svg>
                    </h2>
                    <div x-show="selected === 1" x-transition class="border-l-2 ml-3 pl-3 border-red-700 bg-white">
                        <p class="p-3 text-gray-900">
                            This course is ideal for aspiring media managers, advertising professionals, marketing
                            strategists, and business owners looking to manage and optimize advertising portfolios
                            effectively.
                        </p>
                    </div>
                </li>

                <!-- FAQ Item 2 -->
                <li class="bg-white border-b">
                    <h2 @click="selected !== 2 ? selected = 2 : selected = null"
                        class="flex flex-row justify-between items-center font-semibold px-4 py-4 cursor-pointer bg-red-700 text-white">
                        <span>Do I need prior experience?</span>
                        <svg :class="selected === 2 ? 'rotate-180' : ''"
                            class="fill-current text-white h-6 w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20">
                            <path d="M5.23 7.21l4.77 4.77 4.77-4.77"></path>
                        </svg>
                    </h2>
                    <div x-show="selected === 2" x-transition class="border-l-2 ml-3 pl-3 border-red-700 bg-white">
                        <p class="p-3 text-gray-900">
                            Yes, prior experience is required depending on a professional's last highest qualification.
                        </p>
                    </div>
                </li>

                <!-- FAQ Item 3 -->
                <li class="bg-white border-b">
                    <h2 @click="selected !== 3 ? selected = 3 : selected = null"
                        class="flex flex-row justify-between items-center font-semibold px-4 py-4 cursor-pointer bg-red-700 text-white">
                        <span>What will I receive upon completion?</span>
                        <svg :class="selected === 3 ? 'rotate-180' : ''"
                            class="fill-current text-white h-6 w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20">
                            <path d="M5.23 7.21l4.77 4.77 4.77-4.77"></path>
                        </svg>
                    </h2>
                    <div x-show="selected === 3" x-transition class="border-l-2 ml-3 pl-3 border-red-700 bg-white">
                        <p class="p-3 text-gray-900">
                            You will receive a certificate of completion validating your skills in media account
                            management.
                        </p>
                    </div>
                </li>

                <!-- FAQ Item 4 -->
                <li class="bg-white border-b">
                    <h2 @click="selected !== 4 ? selected = 4 : selected = null"
                        class="flex flex-row justify-between items-center font-semibold px-4 py-4 cursor-pointer bg-red-700 text-white">
                        <span>Can I take this course online?</span>
                        <svg :class="selected === 4 ? 'rotate-180' : ''"
                            class="fill-current text-white h-6 w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20">
                            <path d="M5.23 7.21l4.77 4.77 4.77-4.77"></path>
                        </svg>
                    </h2>
                    <div x-show="selected === 4" x-transition class="border-l-2 ml-3 pl-3 border-red-700 bg-white">
                        <p class="p-3 text-gray-900">
                            Yes! This course is available both online and in-person, allowing for flexible learning.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="py-12 mx-auto px-4">
    <div class="max-w-6xl mx-auto" bis_skin_checked="1">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Agota™ Framework
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
                                <span class="block text-[12px] text-gray-800 font-[600]">Access to 52+ Masterclass
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
                                    learning, a question bank, a library, practice tests, final assessment, a forum, and
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
                                    Forage.</span>
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
                                <p class="mt-1 text-[#125b7e] text-[12px] font-medium"> Access to 52+ Masterclass
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
                                    Video-based learning, a question bank, a library, practice tests, final assessment,
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

<script>
let isExpanded = false;

function toggleText() {
    const textContainer = document.getElementById("textContainer");
    const toggleButton = document.getElementById("toggleButton");
    const arrowIcon = document.getElementById("arrowIcon");

    if (isExpanded) {
        // Show truncated text (3 lines)
        textContainer.style.display = "-webkit-box";
        toggleButton.innerText = "Show more";
        arrowIcon.classList.remove("rotate-180"); // Arrow points down
    } else {
        // Show full text
        textContainer.style.display = "block";
        toggleButton.innerText = "Show less";
        arrowIcon.classList.add("rotate-180"); // Arrow points up
    }

    isExpanded = !isExpanded;
}
</script>
@endsection