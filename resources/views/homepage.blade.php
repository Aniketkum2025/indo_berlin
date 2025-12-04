@extends('layouts.app')
@section('title', 'Japanese Language Institute In India | Kazumi School')
@section('meta_description',
'Kazumi School is a leading Japanese language institute in India, offers expert-led courses
from beginner (N5) to advanced (N1) levels. Start learning Japanese today!')
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
        "contactOption": ["TollFree", "HearingImpairedSupported"],
        "areaServed": "IN",
        "availableLanguage": ["en", "Japanese"]
    },
    "sameAs": "https://kazumischool.com/contact-us"
}
</script>
@endsection
@section('content')
<style>
.myBannerSwiper .swiper-pagination {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 14px;
    display: flex;
    justify-content: center;
    z-index: 20;
    pointer-events: auto;
}

.myBannerSwiper .swiper-pagination-bullet {
    width: 10px;
    height: 10px;
    margin: 0 6px;
    opacity: 1;
    /* ensure visible */
    background: rgba(245, 129, 129, 0.6);
    border-radius: 9999px;
    transition: background .2s, transform .2s;
}

.myBannerSwiper .swiper-pagination-bullet-active {
    background: #ffffff;
    transform: scale(1.15);
}
</style>
<style>
.swiper-button-prev:after,
.swiper-rtl .swiper-button-next:after {
    font-size: 14px;
    content: 'prev';
    font-weight: 900;
}

.swiper-button-next:after,
.swiper-rtl .swiper-button-prev:after {
    content: 'next';
    font-size: 14px;
    font-weight: 900;
}

.pad-1 {
    padding: 25%;
}

.pad-2 {
    padding: 14%;
}

@media (max-width: 640px) {
    .pad-1 {
        padding: 25%;
    }

    .pad-2 {
        padding: 30%;
    }
}
</style>
<section class="">
    <div class="swiper myBannerSwiper" style="position:relative;">
        <div class="swiper-wrapper">
            {{-- <div class="swiper-slide">
                    <div class="relative w-full max-h-[424px] md:h-[424px] overflow-hidden"
                        style="background-size: cover; background-repeat: no-repeat; background-image: url(https://d1d5cy0fmpy9m8.cloudfront.net/images/1755338858banner1.webp); background-position: top;">
                        <div
                            class="relative z-10 flex flex-col justify-center space-y-4 items-center h-full text-center text-white bg-black bg-opacity-30 py-4">
                            <h1 class="text-xl md:text-[36px] p-4 tracking-widest mb-4 leading-8 font-[600] md:leading-[60px] leading-[30px]"
                                style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.35);">Japanese Language Course In Classroom
                                or at Home
                            </h1>
                            <p class="capitalize px-4 text-lg md:text-[30px] tracking-widest font-[600] md:leading-[40px] leading-[25px]"
                                style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.95);"
                                style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.35);">With 73+ faculties, 9+ native
                                teachers, 12000+
                                alumni, Kazumi Japanese & Culture School is the Most Popular Platform to Learn Japanese
                                Language</p>

                            <div class="flex space-x-4 mb-8 items-center justify-center">
                                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                                    type="button"
                                    class="bg-orange-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-orange-600 cursor-pointer">Apply
                                    Now</button>
                                <a href="/about-us"
                                    class="bg-orange-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-orange-600">
                                    Learn
                                    More</a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                </div> --}}

            <div class="swiper-slide">
                <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1762846824kazumi_Website_Banner_2_(1).png"
                    alt="Banner 2" class="w-full md:h-full" style="object-fit:cover; display:block;">
            </div>
            <div class="swiper-slide">
                <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1762846866kazumi_Website_Banner_(1).png"
                    alt="Banner 1" class="w-full md:h-full" style="object:cover; display:block;">
            </div>
            <div class="swiper-slide">
                <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1762846896kazumi_Website_Banner_4.png"
                    alt="Banner 3" class="w-full md:h-full" style="object:cover; display:block;">
            </div>
            <div class="swiper-slide">
                <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1762846923kazumi_Website_Banner_3_(1).png"
                    alt="Banner 4" class="w-full md:h-full" style=" display:block;">
            </div>
        </div>
        <div class="swiper-pagination" aria-hidden="true"></div>
    </div>
</section>

{{-- <section>
        <div class="relative w-full overflow-hidden"
            style="background-size: cover; background-repeat: no-repeat; background-image: url(https://d1d5cy0fmpy9m8.cloudfront.net/images/1755338858banner1.webp); background-position: top;">
            <div
                class="relative z-10 flex flex-col justify-center space-y-4 items-center h-full text-center text-white bg-black bg-opacity-30 py-4">
                <h1 class="text-xl md:text-[36px] p-4 tracking-widest mb-4 leading-8 font-[600] md:leading-[60px] leading-[30px]"
                    style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.35);">Japanese Language Course In Classroom or at Home
                </h1>
                <p class="capitalize px-4 text-lg md:text-[30px] tracking-widest font-[600] md:leading-[40px] leading-[25px]"
                    style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.95);"
                    style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.35);">With 73+ faculties, 9+ native teachers, 12000+
                    alumni, Kazumi Japanese & Culture School is the Most Popular Platform to Learn Japanese Language</p>
                
                <div class="flex space-x-4 mb-8 items-center justify-center">
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"
                        class="bg-orange-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-orange-600 cursor-pointer">Apply
                        Now</button>
                    <a href="/about-us"
                        class="bg-orange-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-orange-600"> Learn
                        More</a>
                </div>
                <div>
                    
                </div>
            </div>
        </div>
    </section> --}}

<section id="course_section" class="pt-8 pb-6 px-4 max-w-7xl mx-auto">
    <h2 class="text-center text-2xl md:text-3xl font-bold my-6 text-orange-500 tracking-wide">
        Master German with Indo Berlin Language & Culture School
    </h2>

    <p id="japaneseText"
        class="text-center text-gray-700 text-[15px] leading-relaxed font-medium my-3 overflow-hidden transition-all duration-500">
        Step into the world of fluent communication with Indo Berlin Language & Culture School — your premier
        destination for learning German with excellence. Guided by experienced native instructors, our programs help
        you develop strong listening, speaking, reading, and writing skills.
        <br><br>
        Our interactive online learning environment brings Germany’s culture and language together for an immersive
        learning experience. We also provide expert preparation for globally recognized certification exams including
        <span class="font-semibold text-orange-600">Goethe-Zertifikat, TestDaF, and TELC</span>.
        <br><br>
        Gain an internationally valued German language certification and unlock exciting academic, professional, and
        cultural opportunities across Germany and the world.
    </p>
</section>


<!-- <div class="text-center mt-4">
            <button id="toggleButton"
                class="text-orange-600 text-[12px] font-bold hover:underline border-orange-600 p-1 border rounded-md">
                View More
            </button>
        </div>
        <script>
            const text = document.getElementById("japaneseText");
            const button = document.getElementById("toggleButton");

            button.addEventListener("click", () => {
                if (text.classList.contains("line-clamp-3")) {
                    text.classList.remove("line-clamp-3");
                    button.textContent = "View Less";
                } else {
                    text.classList.add("line-clamp-3");
                    button.textContent = "View More";
                }
            });
        </script> -->
</section>

{{-- courses section --}}
<section id="course_section" class="pt-2 pb-12 px-4 max-w-7xl mx-auto">
    <!-- {{-- <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 capitalize my-4">Courses
        </h2>
        <p class="text-center text-gray-600 text-[16px] font-[600] my-2">Just like the famous Japanese proverb "継続は力なり"
            (Continuity is power), we bring a series of courses starting from Basic (N5) to Super Advanced (N1) level for
            continuous learning and growth.</p> --}} -->
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 my-10">
        <div class="w-full flex flex-col rounded-xl overflow-hidden">
            <img class="w-full h-60 object-cover"
                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1764418055German_Language_Courses.jpg" loading="lazy "
                alt="Japanese Language Courses All Levels" loading="lazy">
            <div class=" h-full py-4">
                <h3 class="text-[18px] font-[500] text-gray-900">German Language Courses</h3>
                <!-- <p class="text-[16px] text-gray-700 mt-2 flex-grow">Extensive & intensive modules 平日 (Heijitsu) and 週末
                    (Shūmatsu) batch</p> -->
                <div class="mt-2">
                    <ul class="space-y-1">
                        <li><a href="https://www.henryharvin.com/german-language-course"
                                class="text-orange-600 hover:underline text-[14px] font-[600]">German Language
                                Course</a></li>
                        <li><a href="https://www.henryharvin.com/post-graduate-diploma-in-german-language-by-dbs"
                                class="text-orange-600 hover:underline text-[14px] font-[600]">Post Graduate Diploma in
                                German Language by Dunster Business School, Switzerland</a></li>
                        <li><a href="https://www.henryharvin.com/post-graduate-diploma-professional-in-german-language-by-dbs"
                                class="text-orange-600 hover:underline text-[14px] font-[600]">Post Graduate Diploma
                                Professional in German Language by Dunster Business School, Switzerland</a></li>
                        <li><a href="https://www.henryharvin.com/masters-in-german-language"
                                class="text-orange-600 hover:underline text-[14px] font-[600]">Master’s (MS) in German
                                Language</a></li>
                    </ul>
                </div>


            </div>
        </div>


        <div class="w-full flex flex-col rounded-xl overflow-hidden">
            <img class="w-full h-60 object-cover"
                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1764418081German_Occupational_Courses.jpg"
                loading="lazy " alt="Japanese Occupational Courses" loading="lazy">
            <div class=" h-full py-4">
                <h3 class="text-[18px] font-[500] text-gray-900">German Occupational Courses</h3>
                <!-- <p class="text-[16px] text-gray-700 mt-2 flex-grow">Extensive & Intensive courses for 個人 (Kojin) in
                    corporate and business sector</p> -->
                <div class="mt-2">
                    <ul>
                        <li><a href="https://www.henryharvin.com/content-writing-in-german-course"
                                class="text-orange-600 hover:underline text-[14px] font-[600]">Content Writing in German
                                Language Course</a></li>

                        <li><a href="https://www.henryharvin.com/migrate-germany"
                                class="text-orange-600 hover:underline text-[14px] font-[600]">Migrate to Germany
                                Course</a></li>

                        <!-- <li><a href="/german-course-for-doctors"
                                class="text-orange-600 hover:underline text-[14px] font-[600]">German Course for
                                Doctors</a></li>

                        <li><a href="/german-course-for-engineers"
                                class="text-orange-600 hover:underline text-[14px] font-[600]">German Course for
                                Engineers</a></li>

                        <li><a href="/german-course-for-tourism"
                                class="text-orange-600 hover:underline text-[14px] font-[600]">German Course for
                                Tourism</a></li>

                        <li><a href="/german-course-for-nursing-staff-i"
                                class="text-orange-600 hover:underline text-[14px] font-[600]">German Course for Nursing
                                Staff I</a></li>

                        <li><a href="/german-course-for-nursing-staff-ii"
                                class="text-orange-600 hover:underline text-[14px] font-[600]">German Course for Nursing
                                Staff II</a></li> -->
                    </ul>
                </div>

            </div>
        </div>
        <div class="w-full flex flex-col rounded-xl overflow-hidden">
            <img class="w-full h-60 object-cover"
                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1764418100German_Language_For_Kids.jpg"
                loading="lazy " alt="Cross-Cultural Japanese Courses" loading="lazy">
            <div class=" h-full py-4">
                <h3 class="text-[18px] font-[500] text-gray-900">German Language For Kids</h3>
                <!-- <p class="text-[16px] text-gray-700 mt-2 flex-grow">Extensive & Intensive courses for 個人 (Kojin) in
                    corporate and business sector</p> -->
                <div class="mt-2">
                    <ul>
                        <li><a href="https://www.henryharvin.com/german-language-summer-school"
                                class="text-orange-600 hover:underline text-[14px] font-[600]">German Language Summer
                                School Program - 2026</a></li>

                        <li><a href="https://www.henryharvin.com/german-language-course-for-kids"
                                class="text-orange-600 hover:underline text-[14px] font-[600]">German Language Course
                                for Kids</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="w-full flex flex-col rounded-xl overflow-hidden">
            <img class="w-full h-60 object-cover"
                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755328153japan-book.webp" loading="lazy "
                alt="Crash Course in Japanese Language , N5 to N1" loading="lazy">
            <div class=" h-full py-4">
                <h3 class="text-[18px] font-[500] text-gray-900">Exam Focused Courses</h3>
                <!-- <p class="text-[16px] text-gray-700 mt-2 flex-grow">Cover all the topics from N5 (basic) to N1
                    (advance) level, understand important and useful Japanese 伝統（Dentō) and etiquettes</p> -->
                <div class="mt-2">
                    <ul>
                        <li><a href="https://www.henryharvin.com/goethe-exam-preparation-course"
                                class="text-orange-600 hover:underline text-[14px] font-[600]">Goethe Zertikifat
                                Exam</a></li>

                        <li><a href="https://www.henryharvin.com/crash-course-for-german-language"
                                class="text-orange-600 hover:underline text-[14px] font-[600]">Crash Course for German
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
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 my-4">Checkout Kazumi School
            Reviews on Youtube
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
    <h3 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 my-4]">
        Checkout Kazumi School Reviews on WhatsApp
    </h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
        @foreach ($review as $rl)
        <div
            class="bg-white rounded-xl shadow-xl overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1 group">
            <div class="relative">
                <img src="{{ $rl->file }}" alt="Review Proof" class="w-full object-scale-down" style="height:150px;">
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
    {{-- @if ($academy_name->academy_url != 'fellowship-courses') --}}
    <div class="bg-[#dce2e9] pb-6 pt-4" id="reviews">
        <div class="md:mx-[100px] mx-[1rem]" style="" id="linkedin_review_course_section">
            <p class="text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 my-4]">
                Checkout Kazumi School alumni on Linkdin
                {{-- Check out Henry Harvin® {{ $course->course_name }} alumna on LinkedIn --}}
            </p>
            {{-- LinkedIn Reviews Section --}}
            {{-- @if (isset($linkdinData) && $linkdinData->isNotEmpty())
                    <div class="max-w-full m-auto border-purple my-2 py-2">
                        <div class="swiper swiper-slider-linked mt-4">
                            <div class="swiper-wrapper">
                                @foreach ($linkdinData as $item)
                                    <div class="rounded swiper-slide bg-white shadow-2xl">
                                        <div class="h-30 w-full relative flex items-center justify-center">
                                            <img style="height: 200px;" class="w-full" src="{{ $item->image }}"
            alt="LinkedIn Review Image">
            <a aria-label="linkedin"
                class="absolute bottom-6 right-4 text-white bg-[#0e76a8] shadow-lg font-normal h-10 w-10 flex items-center justify-center rounded-full"
                href="{{ $item->linkedin_url }}" target="_blank" rel="noopener noreferrer">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
        </div>
        <div class="p-2">
            <p class="text-[20px] font-[500] text-center">{{ $item->name }}</p>
        </div>
        <div class="flex p-2 border-t-2 items-center gap-2 justify-center">
            <img class="object-scale-down w-full h-14 p-2 overflow-hidden" src="{{ $item->company_logo }}"
                alt="Company Logo">
        </div>
    </div>
    @endforeach
    </div>
    </div>
    </div>
    @endif --}}

    {{-- User Feedback Section --}}
    @if (isset($userFeedback) && $userFeedback->isNotEmpty())
    @php
    $count = $userFeedback->slice(0, 9)->count();
    $chunks =
    $count > 0
    ? $userFeedback->slice(0, 20)->split(ceil($count / 3))
    : $userFeedback->slice(0, 20)->split(1);
    @endphp

    @foreach ($chunks as $chunk)
    <div class="courseSwiper swiper-course-all mx-[1rem] overflow-hidden">
        <div class="swiper-wrapper">
            @foreach ($chunk as $rev)
            <div class="mt-4 swiper-slide">
                <div class="shadow-lg bg-white py-2 px-2 md:px-4 rounded-md border-b-2 border-b-purple-800">
                    <div class="flex justify-between items-center">
                        <div>
                            <img class="h-14 w-14 rounded-full" src="{{ urldecode($rev->image) }}"
                                onerror='this.src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719480745ded3d.webp"'
                                alt="User Image" loading="lazy" />
                        </div>

                        <div>
                            <span>{{ $rev->first_name }}</span><br>
                            <span class="text-[#F5AB40] text-xl">★ ★ ★ ★ ★</span>
                        </div>
                        <div class="text-blue-500">
                            <a href="{{ $rev->linkedin_url }}" target="_blank" rel="noopener noreferrer">
                                <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17194808473rrf3rf3f.webp"
                                    alt="LinkedIn Icon" width="30px">
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

    @foreach ($rowsss as $rowss)
    <div class="courseSwiper swiper-course-all mx-[1rem] overflow-hidden">
        <div class="swiper-wrapper">
            @foreach ($rowss as $rev)
            <div class="mt-4 swiper-slide">
                <div class="shadow-lg bg-white py-2 px-2 md:px-4 rounded-md border-b-2 border-b-purple-800">
                    <div class="flex justify-between items-center">
                        <div>
                            <img class="h-14 w-14 rounded-full" src="{{ $rev->review_image }}"
                                onerror='this.src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719480745ded3d.webp"'
                                alt="Reviewer Image" loading="lazy" />
                        </div>
                        <div>
                            <span>{{ $rev->review_name }}</span><br>
                            <span class="text-[#F5AB40] text-xl">★ ★ ★ ★ ★</span>
                        </div>
                        <div class="text-blue-500">
                            <a href="{{ $rev->review_link ? $rev->review_link : 'https://www.henryharvin.com/reviews/' }}"
                                target="_blank" rel="noopener noreferrer">
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
<style>
.pad-1 {
    padding: 25%;
}

.pad-2 {
    padding: 13%;
}

@media (max-width: 640px) {
    .pad-1 {
        padding: 25%;
    }

    .pad-2 {
        padding: 30%;
    }
}
</style>
<section>
    <h2 class="text-center text-2xl md:text-3xl font-semibold text-orange-600 my-4 px-4">
        The Inspiring Journey of Japanese Trainer Seema
    </h2>

    <div class="bg-white rounded-xl p-4 md:p-6 flex justify-center items-center gap-6 relative">
        <div class="relative w-full max-w-2xl video-container pad-2">

            <!-- Thumbnail (cover) -->
            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1762755514WhatsApp_Image_2025-11-10_at_11.42.16_AM.jpeg"
                alt="Video Thumbnail"
                class="absolute inset-0 w-full max-h-[350px] object-cover cursor-pointer video-thumb"
                onclick="playVideo(this)" />

            <!-- Play Overlay -->
            <div class="absolute inset-0 flex items-center justify-center bg-black/30 hover:bg-black/40 transition duration-300 cursor-pointer play-overlay"
                onclick="playVideo(this)">
                <div class="w-16 h-16 bg-white/95 rounded-full flex items-center justify-center shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-orange-600" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l4.5-2.5a.5.5 0 0 0 0-.814l-4.5-2.5z" />
                    </svg>
                </div>
            </div>

            <!-- YouTube Video -->
            <iframe class="absolute inset-0 w-full h-[240px] md:h-[350px] hidden" src=""
                title="The Inspiring Journey of Cardiologist Dr. Abhinav Aggarwal" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
</section>



{{-- reviews section --}}
<section class="py-12 px-4 bg-gray-100">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 capitalize my-4"> <span
                class="text-gray-800 text-3xl md:text-4xl font-[700] italic">7000+ </span> Reviews
            with <span class="text-gray-800 text-3xl md:text-4xl font-[700] italic"> 4.6/5 </span> Average Rating
        </h2>
        {{-- <div
                class="relative max-w-[1200px] mx-auto grid lg:grid-cols-4 md:grid-cols-2 grid-cols-2 py-4 gap-4 md:gap-8 my-1 rounded-lg">
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.8
                            <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star-half text-orange-700"></i></a>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1733730860forbes.webp"
                        loading="lazy "alt="justdial1" loading="lazy">
                </div>
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.5
                            <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star-half text-orange-700"></i></a>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1746770909ezgif.com-resize.png"
                        loading="lazy "alt="justdial" loading="lazy">
                </div>
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.9
                            <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star text-orange-700"></i></a>
                    </div>
                    <img class="h-16"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1730089884544x180-BR-300x99-1.png"
                        loading="lazy "alt="mouthshut2" loading="lazy">
                </div>
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">5.0
                            <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star text-orange-700"></i></a>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1752832498wwd2e1.png"
                        loading="lazy "alt="edugorrilla" loading="lazy">
                </div>
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">5.0
                            <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star text-orange-700"></i></a>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17196452202d2d (2).webp"
                        loading="lazy "alt="google" loading="lazy">
                </div>
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.5
                            <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star-half text-orange-700"></i></a>
                    </div>
                    <img class="h-16" src="https://cdn.henryharvin.com/gooo1.webp" loading="lazy "alt="google2"
                        loading="lazy">
                </div>
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.6
                            <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star-half text-orange-700"></i></a>
                    </div>
                    <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755412282course-report.webp"
                        loading="lazy "alt="course report">
                </div>
                <div
                    class="cursor-pointer grid place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                    <div class="flex items-center justify-center">
                        <a class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.5
                            <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                                class="fa fa-star-half text-orange-700"></i></a>
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
                        <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star-half text-orange-700"></i>
                    </p>
                </div>
                <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1733730860forbes.webp"
                    loading="lazy " alt="justdial1" loading="lazy">
            </a>
            <a href="https://www.justdial.com/Delhi/Henry-Harvin-India-Education-LLP-Near-Noida-Authority-Noida-Sector-6/011PXX11-XX11-181022173738-G2E3_BZDET/reviews"
                class="cursor-pointer grid block place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                <div class="flex items-center justify-center">
                    <p class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.5
                        <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star-half text-orange-700"></i>
                    </p>
                </div>
                <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1746770909ezgif.com-resize.png"
                    loading="lazy " alt="justdial" loading="lazy">
            </a>
            <a href="https://reviewsreporter.com/"
                class="cursor-pointer grid block place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                <div class="flex items-center justify-center">
                    <p class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.9
                        <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star text-orange-700"></i>
                    </p>
                </div>
                <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1730089884544x180-BR-300x99-1.png"
                    loading="lazy " alt="mouthshut2" loading="lazy">
            </a>
            <a href="https://www.mouthshut.com/product-reviews/henryharvin-reviews-926062756"
                class="cursor-pointer grid block place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                <div class="flex items-center justify-center">
                    <p class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">5.0
                        <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star text-orange-700"></i>
                    </p>
                </div>
                <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1752832498wwd2e1.png"
                    loading="lazy " alt="edugorrilla" loading="lazy">
            </a>
            <a href="https://www.google.com/search?q=HenryHarvin"
                class="cursor-pointer grid block place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                <div class="flex items-center justify-center">
                    <p class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">5.0
                        <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star text-orange-700"></i>
                    </p>
                </div>
                <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17196452202d2d (2).webp"
                    loading="lazy " alt="google" loading="lazy">
            </a>
            <a href="https://www.gooverseas.com/organization/henry-harvin-tefl-academy-reviews"
                class="cursor-pointer grid block place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                <div class="flex items-center justify-center">
                    <p class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.5
                        <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star-half text-orange-700"></i>
                    </p>
                </div>
                <img class="h-16" src="https://cdn.henryharvin.com/gooo1.webp" loading="lazy " alt="google2"
                    loading="lazy">
            </a>
            <a href="https://www.coursereport.com/schools/henry-harvin-education"
                class="cursor-pointer grid block place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                <div class="flex items-center justify-center">
                    <p class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.6
                        <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star-half text-orange-700"></i>
                    </p>
                </div>
                <img class="h-16" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755412282course-report.webp"
                    loading="lazy " alt="course report">
            </a>
            <a href="https://www.urbanpro.com/noida/henry-harvin-education-sector-18/6237579"
                class="cursor-pointer grid block place-content-center gap-4 border-red-100 border p-3 lg:my-0 rounded-xl bg-white">
                <div class="flex items-center justify-center">
                    <p class="bg-[#F6F8FB] px-4 py-3 text-[24px] rounded-md text-gray-800 font-[600]">4.5
                        <i class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star text-orange-700"></i><i class="fa fa-star text-orange-700"></i><i
                            class="fa fa-star-half text-orange-700"></i>
                    </p>
                </div>
                <img class="h-8 md:h-10"
                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1761911090ezgif.com-webp-maker_(2).webp"
                    loading="lazy " alt="google4">
            </a>
        </div>
    </div>
</section>
<section class="py-12">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 capitalize my-4">Esteemed
            Faculty
        </h2>


        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 px-2">
            <div class="">
                <div class="grid p-2 gap-2 place-items-center rounded-2xl"
                    style="background: linear-gradient(90deg, #efd5ff 0%, #da2028 100%);">
                    <div class="rounded-2xl">
                        <img class="h-full w-full object-cover rounded-2xl"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753875885212w-ezgif.com-resize.webp"
                            loading="lazy " alt="FEFE">
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
                            loading="lazy " alt="Varsha Mehroliya">
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
                            loading="lazy " alt="Sonali Srivastava">
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
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17532671153rd.webp" loading="lazy "
                            alt="Claire">
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
                class="bg-orange-500 text-white text-[14px] px-6 py-2 rounded hover:bg-orange-600">View More</a>
        </div>
    </div>
</section>
<section class="py-12">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 capitalize my-4">Kazumi Advisory
            Board Members</h2>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-2 place-items-center px-2">

            <div
                class="group bg-black border border-orange-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-orange-600 hover:shadow-xl">
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
                class="group bg-black border border-orange-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-orange-600 hover:shadow-xl">
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
                class="group bg-black border border-orange-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-orange-600 hover:shadow-xl">
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
                class="group bg-black border border-orange-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-orange-600 hover:shadow-xl">
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
                class="group bg-black border border-orange-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-orange-600 hover:shadow-xl">
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
                class="group bg-black border border-orange-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-orange-600 hover:shadow-xl">
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
<section id="stats" class="py-4 bg-orange-600 mx-auto px-4">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
            <div class="bg-white shadow-md rounded-lg p-2">
                <h3 class="text-[32px] font-semibold text-center text-gray-800 mb-1">Countries</h3>
                <div class="flex items-center justify-center gap-2">
                    <p class="text-[32px] font-bold text-orange-600 count-up" data-count="97">97</p>
                    <span class="text-5xl font-[600] text-orange-600">+</span>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-2">
                <h3 class="text-[32px] font-semibold text-center text-gray-800 mb-1">Enrolled Students</h3>
                <div class="flex items-center justify-center gap-2">
                    <p class="text-[32px] font-bold text-orange-600">4,60,000</p>
                    <span class="text-5xl font-[600] text-orange-600">+</span>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-2">
                <h3 class="text-[32px] font-semibold text-center text-gray-800 mb-1">Established in</h3>
                <div class="flex items-center justify-center gap-2">
                    <p class="text-[32px] font-bold text-orange-600 count-up" data-count="2013">2013</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- why kazumi section --}}
<section class="py-12 bg-gray-100 mx-auto px-4">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 capitalize mt-4 mb-4"> Why Indo
            Berlin?
        </h2>
        <div class="py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 text-center">
                <!-- card 1 -->
                <div
                    class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center col-span-1 sm:col-span-1 md:col-span-1">
                    <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1764569258Native_German_Trainers_(1).jpg"
                            loading="lazy " alt="Native Trainers, Kazumi School">
                    </div>
                    <h3 class="text-xl font-[600] text-orange-600 mt-4">Native German Trainers</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Learn from certified, highly erfahren (experienced) and
                        leidenschaftlich (passionate) faculty members who bring authentic German teaching methods to
                        every class.</p>
                </div>
                <!-- card 2 -->
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1764569428Exam-Focused_Training.jpg"
                            loading="lazy " alt="JLPT Intensive Course">
                    </div>
                    <h3 class="text-xl font-[600] text-orange-600 mt-4">Exam Focused Training </h3>
                    <p class="text-gray-700 text-[14px] mt-2">Excel in the Goethe, TELC, and TestDaF exams with our
                        fachspezifische (specialized) modules, mock tests, personalized coaching, and study materials
                        sourced directly from Germany.</p>
                </div>
                <!-- card 3 -->
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1764569445Access_to_E-Learning_Portal.jpg"
                            loading="lazy " alt=" E-learning Portal, Kazumi School">
                    </div>
                    <h3 class="text-xl font-[600] text-orange-600 mt-4">Access to E-learning Portal</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Indo Berlin Language & Culture School partners with
                        Examopedia, a comprehensive e-learning portal that provides regular updates, PPTs, projects,
                        quizzes, Probeprüfungen (mock exams), question banks, assessments, and interactive forums.</p>
                </div>
                <!-- card 4 -->
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1764569461German_Occupational_Courses_200.jpg"
                            loading="lazy " alt="Japanese Occupational Courses">
                    </div>
                    <h3 class="text-xl font-[600] text-orange-600 mt-4">German Occupational Courses</h3>
                    <p class="text-gray-700 text-[14px] mt-2">At Indo Berlin Language & Culture School, we offer
                        programs designed to build your beruflichen Fähigkeiten (professional skills),
                        Arbeitsplatzkompetenzen (workplace competencies), and confidence to secure rewarding jobs (jobs)
                        internationally.</p>
                </div>
                <!-- card 5 -->
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1764569537Internship_for_German_Language.jpg"
                            loading="lazy " alt=" Internship for Japanese, Kazumi School">
                    </div>
                    <h3 class="text-xl font-[600] text-orange-600 mt-4">Internship for German Language</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Indo Berlin Language & Culture School provides internship
                        support through Yuva Intern, India’s first virtuelle (virtual) internship platform, allowing you
                        to choose from the best curated internships that match your Fähigkeiten (skills) and interests.
                    </p>
                </div>
                <!-- card 6 -->
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1764569717Study_Abroad_&_Recruitment_Services.jpg"
                            loading="lazy " alt="Study Abroad, Kazumi School">
                    </div>
                    <h3 class="text-xl font-[600] text-orange-600 mt-4">Study Abroad & Recruitment Services</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Indo Berlin Language & Culture School offers study abroad
                        and Arbeitsvermittlung (job placement) support via Leo & Chase, the No. 1 recruitment provider,
                        assisting you from Visumantrag (visa application) to settling abroad.
                    </p>
                </div>
                <!-- card 7 -->
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755408255agota_kazumi.webp"
                            loading="lazy " alt="Agota Framework, Kazumi School">
                    </div>
                    <h3 class="text-xl font-[600] text-orange-600 mt-4">Unique 10 in 1 Program: Agota™ Framework</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Learn through innovative teaching methods that make
                        learning easy and praxis-oriented (practical). This framework focuses on developing your
                        Fähigkeiten (abilities) and Karriere (career) growth.</p>
                </div>
                <!-- card 8 -->
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1764569856Global_Presence.jpg"
                            loading="lazy " alt="Global Presence, Kazumi School">
                    </div>
                    <h3 class="text-xl font-[600] text-orange-600 mt-4">Global Presence</h3>
                    <p class="text-gray-700 text-[14px] mt-2">With offices in over 4 countries—the UK, USA, Middle East,
                        and India—Indo Berlin Language & Culture School is a global brand offering a diverse learning
                        Umgebung (environment), with around 1200+ international studenten (students).</p>
                </div>
                <!-- card 9 -->
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1764569871International_Alumni_Network.jpg"
                            loading="lazy " alt=" International Alumni, Kazumi School">
                    </div>
                    <h3 class="text-xl font-[600] text-orange-600 mt-4">International Alumni Network</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Join a diverse Gemeinschaft (community) of learners and
                        professionals from around the world.</p>
                </div>
                <!-- card 10 -->
                <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                    <div class="flex items-center justify-center mb-2">
                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1764569886Cultural_Training.jpg"
                            loading="lazy " alt="Japanese Cultural Training">
                    </div>
                    <h3 class="text-xl font-[600] text-orange-600 mt-4">Cultural Training</h3>
                    <p class="text-gray-700 text-[14px] mt-2">Explore Traditionen (traditions), etiquettes, festivals,
                        and cultural practices in an authentic German-speaking environment.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Accreditations & Affiliations section --}}
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 capitalize my-4">Accreditations
            &
            Affiliations
        </h2>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645607611762844935goethe_institut.png"
                        loading="lazy " alt="AAEFL" class="h-28 w-auto">
                </div>
            </div>
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645607871762844969telc.jpeg"
                        loading="lazy " alt="AAEFL56" class=" h-28 w-auto">
                </div>
            </div>
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645608031762845006testdaf.png"
                        loading="lazy " alt="AAEF565L" class=" h-28 w-auto">
                </div>
            </div>
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645608591736849226DBS_C-01.png"
                        loading="lazy " alt="AAEFLewe" class=" h-28 w-auto">
                </div>
            </div>
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1764560873Logo_Florida_7.jpg" loading="lazy "
                        alt="AAEFdfhL" class=" h-16 w-auto">
                </div>
            </div>
            <!-- Card 6 -->
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645609091686549627AAEFL.webp"
                        loading="lazy " alt="AAEFL897" class=" h-24 w-auto">
                </div>
            </div>
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex gap-2 justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755413236nsdc.webp" loading="lazy "
                        alt="AAEFLfsdf" class=" h-16 w-auto">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753882471skills.svg" loading="lazy "
                        alt="AAEFLsde" class=" h-16 w-auto">

                </div>
            </div>
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755412903ukaf.webp" loading="lazy "
                        alt="AAEFL" class=" h-24 w-auto">
                </div>
            </div>
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://cdn.henryharvin.com/images/1683959347ezgif.com-resize%20(20).webp" loading="lazy "
                        alt="AAEFLcxcvcxz" class=" h-24 w-auto">
                </div>
            </div>
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753941817ezgif.com-resize_(1).webp"
                        loading="lazy " alt="AAEFLqwdD" class=" h-24 w-auto">
                </div>
            </div>
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755413059ministry.webp" loading="lazy "
                        alt="AAEFLFGEFF" class=" h-24 w-auto">
                </div>
            </div>
            <div class="bg-white p-4 grid place-content-evenly place-items-center gap-4">
                <div class="w-full mx-auto text-center overflow-hidden flex justify-center">
                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753941817ezgif.com-resize_(1).webp"
                        loading="lazy " alt="AAEFDFEEGEL" class=" h-24 w-auto">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- placement partners section --}}
<section class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 capitalize my-4">Placement
            Partners
        </h2>
        <div class="swiper linearswiper">
            <div class="swiper-wrapper my-4" style="transition-timing-function: linear !important;">
                <!-- card 1 -->
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645617721762844450DAAD_–_Deutscher_Akademischer_Austauschdienst.webp"
                        loading="lazy " alt="images-8">
                </div>
                <!-- card 2 -->
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645618001762844511Humboldt_University_of_Berlin.png"
                        loading="lazy " alt="images-81">
                </div>
                <!-- card 3 -->
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645618651762844532Ludwig‑Maximilians‑Universität_München_(LMU_Munich).jpg"
                        loading="lazy " alt="images-8">
                </div>
                <!-- card 4 -->
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645618881762844562Freie_Universität_Berlin.png"
                        loading="lazy " alt="images-82">
                </div>
                <!-- card 5 -->
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645619871762844583University_of_Heidelberg.png"
                        loading="lazy " alt="images-83">
                </div>
                <!-- card 6 -->
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645620061762844636Lufthansa_Group.jpg"
                        loading="lazy " alt="images-84">
                </div>
                <!-- card 7 -->
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645620271762844673Deutsche_Bank.png"
                        loading="lazy " alt="images-85">
                </div>
                <!-- card 8 -->
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645620451762844728Mercedes‑Benz_India.jpg"
                        loading="lazy " alt="images-86">
                </div>
                <!-- card 9 -->
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645620621762844762Siemens_AG.png"
                        loading="lazy " alt="images-88">
                </div>
                <!-- card 10 -->
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645621471762844793Bosch_Group.webp"
                        loading="lazy " alt="images-87">
                </div>
                <!-- card 11 -->
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[80px] object-contain mx-auto" src="
https://d1d5cy0fmpy9m8.cloudfront.net/images/17645621621762844849EAQUALS.jpg" loading="lazy " alt="images-89">
                </div>
                <!-- card 12 -->
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645621891762844901OSD.png" loading="lazy "
                        alt="images-809">
                </div>
                <!-- card 13 -->
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645622051762844824ALTE.jpeg" loading="lazy "
                        alt="images-8FDF">
                </div>
                <!-- card 14 -->
                <div
                    class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center text-white text-xl font-[500] bg-cover bg-top">
                    <img class="max-h-[40px] sm:max-h-[48px] md:max-h-[56px] object-contain mx-auto"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17645622591762844698TÜV_Rheinland.png"
                        loading="lazy " alt="images-8DFD">
                </div>

            </div>
        </div>
    </div>
</section>

{{-- esteemed faculty section --}}


{{-- Agota™ Framework section --}}
<section class="py-12 mx-auto px-4">
    <div class="max-w-6xl mx-auto" bis_skin_checked="1">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-2 text-orange-600 capitalize my-4">Agota™ Framework
        </h2>
        <p class="text-[16px] text-gray-800 font-[600] text-center">
            AGOTA™ Framework is a trajectory that offers complete growth of an individual, incorporating the two most
            significant focus areas of contemporary learning:
            <span class="font-bold text-gray-900">The Kompetenz (Kompetenz) development and Karriere (Karriere)
                development.</span>
        </p>

        <p class="text-[16px] text-gray-800 font-[600] text-center mt-4">
            <span class="font-bold text-gray-900">Kompetenz (Kompetenz) development</span> is about building
            capabilities that not only meet current job demands but also anticipate future needs. It includes:
        </p>

        <div class="relative grid md:grid-cols-2 gap-2 my-2" bis_skin_checked="1">
            <div bis_skin_checked="1">
                <ul class="disk mt-2">
                    <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                        <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                            bis_skin_checked="1">
                            <p class="col-span-2 text-orange-600">
                                1: Training
                                <span class="block text-[12px] text-gray-800 font-[600]">
                                    144 Hours of Two-Way Live Online-Interaktive Sitzungen (interactive sessions)
                                </span>
                            </p>

                            <div class="relative h-fit mx-auto mb-4 mt-2 " bis_skin_checked="1">
                                <a target="_blank" href="https://youtu.be/lMkxmdUnAPc"
                                    bis_size="{&quot;x&quot;:258,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1734}">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487194ezgif.com-resize (32).webp"
                                        loading="lazy " alt="Video Thumbnail"
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
                            <p class="col-span-2 text-orange-600">
                                2: Projects
                                <span class="block text-[12px] text-gray-800 font-[600]">
                                    Facility to undergo Projekte (projects) along with the course
                                </span>
                            </p>

                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://youtu.be/p86YBsCkb0A"
                                    bis_size="{&quot;x&quot;:580,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1734}">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719575893ezgif.com-resize - 2024-06-28T172803.379.webp"
                                        loading="lazy " alt="Video ThumbnailRE"
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
                            <p class="col-span-2 text-orange-600">
                                3: Masterclass
                                <span class="block text-[12px] text-gray-800 font-[600]">
                                    Access to 52+ Masterclass Sessions for essential soft Fähigkeiten (skills)
                                    development
                                </span>
                            </p>

                            <div class="relative h-fit mx-auto mb-4 mt-2 " bis_skin_checked="1">
                                <a target="_blank" href="https://youtu.be/K7HdNdMwOuE"
                                    bis_size="{&quot;x&quot;:258,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1847}">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719576156sxw (2).webp"
                                        loading="lazy " alt="Video ThumbnaiERl"
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
                            <p class="col-span-2 text-orange-600">
                                4: Student Engagement & Events
                                <span class="block text-[12px] text-gray-800 font-[600]">
                                    Free Access to #AskHenry Hackathons und Wettbewerbe (competitions) and many other
                                    facilities from Henry Harvin®
                                </span>
                            </p>

                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://youtu.be/Gk3t1W3LVZ8"
                                    bis_size="{&quot;x&quot;:580,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1847}">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719577083dcwcw.webp"
                                        loading="lazy " alt="Video ThumREbnail"
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
                            <p class="col-span-2 text-orange-600">
                                5: Membership
                                <span class="block text-[12px] text-gray-800 font-[600]">
                                    30 Months Gold Mitgliedschaft (membership) of Henry Harvin® School of Languages
                                </span>
                            </p>

                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://www.youtube.com/watch?v=bzJOMiJu_QA">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1728970566Membership_Card_Collage_(1).png"
                                        loading="lazy " alt="Video ThumbnailTTT"
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
                            <p class="col-span-2 text-orange-600">
                                6: E-Learning
                                <span class="block text-[12px] text-gray-800 font-[600]">
                                    Get free access to the LMS having PPTs, projects, self-paced videobasierte
                                    Lerninhalte (video-based learning), library, quizzes, Fragenbank (question bank),
                                    practice tests, final assessments, and a Forum (forum) powered by Examopedia
                                </span>
                            </p>

                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://www.youtube.com/watch?v=XUQm0ecT6ts">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487342ezgif.com-resize (35).webp"
                                        loading="lazy " alt="Video ThumbnailQWTRT"
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
                <p class="text-[15px] text-left my-8">
                    <span class="font-bold text-gray-900">Karriere (Karriere) development</span> lays focus on the
                    essentials for acquiring a good career or diving into a highly competent one. It includes:
                </p>

                <ul class="disk">
                    <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                        <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                            bis_skin_checked="1">
                            <p class="col-span-2 text-orange-600">
                                7: Zertifizierung + Lizenz (Certification + License)
                                <span class="block text-[12px] text-gray-800 font-[600]">
                                    Distinguish your profile with global credentials and showcase expertise with our
                                    Abschlusszertifikat (completion certificate) with Berufslizenz (professional
                                    license)
                                </span>
                            </p>

                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://youtu.be/LJH79vKhyXc"
                                    bis_size="{&quot;x&quot;:258,&quot;y&quot;:2242,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:2242}">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487248ezgif.com-resize (33).webp"
                                        loading="lazy " alt="Video ThumbnailWERWG"
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
                            <p class="col-span-2 text-orange-600">
                                8: Praktikumsunterstützung (Internship Support)
                                <span class="block text-[12px] text-gray-800 font-[600]">
                                    Get internship support with Henry Harvin® and in top MNCs like J.P. Morgan,
                                    Accenture & many more via Yuva Intern
                                </span>
                            </p>

                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://www.youtube.com/shorts/2od0SMHat-A">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719575988d233dd23d.webp"
                                        loading="lazy " alt="Video DSSDDThumbnail"
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
                            <p class="col-span-2 text-orange-600">
                                9: Unternehmertum Mentorship (Entrepreneurship Mentorship)
                                <span class="block text-[12px] text-gray-800 font-[600]">
                                    Mentorship from young, successful entrepreneurs to set up a sustainable and
                                    skalierbares Geschäft (scalable business) from scratch at both freelance and
                                    entrepreneur levels
                                </span>
                            </p>

                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank"
                                    href="https://www.youtube.com/watch?v=pdffXkaWqVg&amp;feature=youtu.be">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487388ezgif.com-resize (36).webp"
                                        loading="lazy " alt="Videodfvdfv Thumbnail"
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
                            <p class="col-span-2 text-orange-600">
                                10: Platzierungsunterstützung (Placement Support):
                                <span class="block text-[12px] text-gray-800 font-[600]">
                                    Get 3-in-1 placement support through Einstellungsveranstaltungen (placement drives),
                                    premium access to the Jobportal (job portal), and personalized Beratung (consulting)
                                </span>
                            </p>
                            <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                <a target="_blank" href="https://www.youtube.com/shorts/KTb2gD30FNw">
                                    <img id="videoThumbnail"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487296ezgif.com-resize (34).webp"
                                        loading="lazy " alt="Videodvdffvdf Thumbnail"
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
                <img class="agota_image sticky" loading="lazy " alt="agota ddd frame"
                    style="width:100%; max-width:500px; top:80px; margin: auto;"
                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753941681ezgif.com-resize.webp">
            </div>
        </div>
    </div>
</section>

{{-- life in japan section --}}
<section class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 capitalize mt-4 mb-2">
            Pflegeberuf in Deutschland
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="mt-4 relative">
                <img class="agota_image sticky" style="width:100%; max-width:500px; top:80px; margin: auto;"
                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755327584ezgif.com-png-to-webp-converter_(2).webp"
                    loading="lazy" alt="Germany Nursing">
            </div>

            <div class="mt-6 text-sm text-gray-700">
                <p class="mb-3">
                    Germany is known for its excellence and exceptional healthcare standards. The efficient medical
                    infrastructure has attracted many nurses worldwide. Germany is an ocean of opportunities for
                    qualified nursing professionals. If you are a nurse looking for an ideal international place to
                    work, Germany is ideal for you. Here why:
                </p>

                <ul class="list-disc ml-5 space-y-2 text-gray-700 text-sm leading-relaxed">
                    <li>
                        <strong>High Demand for Qualified Nurses:</strong>
                        Due to expanding healthcare needs, ageing population, and rehabilitation centers, there is a
                        significant need for professional nurses in Germany.
                    </li>

                    <li>
                        <strong>Competitive Salary Packages:</strong>
                        German nurses are offered handsome salaries ranging between €2,800 to €4,500 gross depending on
                        experience.
                    </li>

                    <li>
                        <strong>Excellent Working Conditions:</strong>
                        Clean and advanced facilities, regulated working hours, paid annual leaves, maternity /
                        paternity leaves, and overtime allowances.
                    </li>

                    <li>
                        <strong>Path Towards Permanent Residency:</strong>
                        Foreign nurses are eligible to apply for permanent residency or German citizenship after a few
                        years.
                    </li>

                    <li>
                        <strong>Free or Subsidized Education:</strong>
                        Adaptation and language courses are free or low-cost, including opportunities for higher
                        studies or specialization.
                    </li>

                    <li>
                        <strong>Strong Social Security Benefits:</strong>
                        Employees are covered under health insurance, unemployment insurance, pension schemes, and
                        accident insurance.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


{{-- Jobs & Careers in Japan --}}
<section class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 capitalize mt-4 mb-2">
            Geschmack der deutschen Sprache
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
            <div class="mt-6 text-sm text-gray-700">
                <p class="mb-3">
                    Germany is a country where tradition (Tradition) meets modernity (Modernität), creating a culture
                    admired worldwide for its discipline (Disziplin), efficiency (Effizienz), and precision (Präzision).
                    Germans deeply value order (Ordnung) and punctuality (Pünktlichkeit), believing that structure and
                    time management reflect respect and reliability. The famous German saying “Ordnung muss sein” (There
                    must be order) perfectly captures this national mindset.
                </p>

                <ul class="list-disc ml-5 space-y-2 text-gray-700 text-sm leading-relaxed">
                    <li>
                        <strong>Communication in Germany:</strong>
                        is typically direct (direkte Kommunikation) and honest. People prefer clarity over formality,
                        although in professional settings (berufliche Umgebung), titles like Herr and Frau are used
                        respectfully. This straightforward approach shows the German belief in authenticity
                        (Authentizität) and responsibility (Verantwortung).
                    </li>

                    <li>
                        <strong>German culture :</strong>
                        is also known for its vibrant festivals (Feste). The world-famous Oktoberfest in Munich
                        celebrates Bavarian traditions (bayerische Traditionen), while Christmas markets
                        (Weihnachtsmärkte) fill cities with lights, music, and the aroma of Glühwein (mulled wine) and
                        Lebkuchen (gingerbread). These events reflect the Gemeinschaftsgeist (community spirit) that
                        binds people together.
                    </li>

                    <li>
                        <strong>Food in Germany:</strong>
                        is hearty and regional (regionaltypisch). Dishes like Bratwurst, Sauerkraut, and Brezeln
                        (pretzels) are classics, and bread (Brot) has almost 300 varieties. Germany’s beer culture
                        (Bierkultur) is world-renowned, with every region boasting its own brews.
                        <br>
                        Culturally, Germany has shaped the world through its contributions to music (Musik), philosophy
                        (Philosophie), and literature (Literatur). Great minds like Beethoven, Goethe, and Nietzsche
                        continue to influence global thought.
                    </li>

                    <li>
                        <strong>Modern Germany:</strong>
                        embraces multiculturalism (Multikulturalismus), blending global influences while preserving its
                        heritage. Germans also value work-life balance (Work-Life-Balance), ensuring time for family
                        (Familie) and leisure (Freizeit).
                    </li>

                </ul>
            </div>

            <div class="mt-4 relative">
                <img class="agota_image sticky" loading="lazy" alt="agota new frame"
                    style="width:100%; max-width:500px; top:80px; margin: auto;"
                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753942112ezgif.com-png-to-webp-converter.webp">
            </div>
        </div>
    </div>
</section>

{{-- <section class="py-12 px-4 bgpgray-100">
    <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 capitalize my-4">Our Latest Updates!
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
                <button class="bg-orange-500 text-white text-xs px-3 py-1 rounded hover:bg-orange-600">Read more...</button>

            </div>
            <p class="text-xs text-gray-500 border-t border-orange-500 bg-gray-200 mt-2 p-1">📅 June 9, 2025</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded shadow overflow-hidden">
            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175274331911667691_20945544.jpg"  loading="lazy "alt="Okinawa Branch"
                class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-lg mb-2">Okinawa Branch is Almost Ready</h3>
                <p class="text-sm text-gray-600 mb-4">Our Okinawa Branch is Almost Ready! Okinawa Building With only one
                    week left until the opening of our new Japanese school in Okinawa...</p>
                <button class="bg-orange-500 text-white text-xs px-3 py-1 rounded hover:bg-orange-600">Read more...</button>

            </div>
            <p class="text-xs text-gray-500 border-t border-orange-500 bg-gray-200 mt-2 p-1">📅 June 9, 2025</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded shadow overflow-hidden">
            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175274331911667691_20945544.jpg"  loading="lazy "alt="Okinawa Branch"
                class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-lg mb-2">Okinawa Branch is Almost Ready</h3>
                <p class="text-sm text-gray-600 mb-4">Our Okinawa Branch is Almost Ready! Okinawa Building With only one
                    week left until the opening of our new Japanese school in Okinawa...</p>
                <button class="bg-orange-500 text-white text-xs px-3 py-1 rounded hover:bg-orange-600">Read more...</button>

            </div>
            <p class="text-xs text-gray-500 border-t border-orange-500 bg-gray-200 mt-2 p-1">📅 June 9, 2025</p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded shadow overflow-hidden">
            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175274331911667691_20945544.jpg"  loading="lazy "alt="Okinawa Branch"
                class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-lg mb-2">Okinawa Branch is Almost Ready</h3>
                <p class="text-sm text-gray-600 mb-4">Our Okinawa Branch is Almost Ready! Okinawa Building With only one
                    week left until the opening of our new Japanese school in Okinawa...</p>
                <button class="bg-orange-500 text-white text-xs px-3 py-1 rounded hover:bg-orange-600">Read more...</button>

            </div>
            <p class="text-xs text-gray-500 border-t border-orange-500 bg-gray-200 mt-2 p-1">📅 June 9, 2025</p>
        </div>
    </div>
</section> --}}
@endsection