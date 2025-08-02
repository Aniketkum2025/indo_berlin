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
        <div class="relative w-full overflow-hidden"
            style="background-size: cover; background-repeat: no-repeat; background-image: url(https://d1d5cy0fmpy9m8.cloudfront.net/images/1753942717banner.webp); background-position: top;">
            <!-- Video Background -->
            {{-- <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover">
            <source src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175274277337088-413229662_medium.mp4"
                type="video/mp4">
            Your browser does not support the video tag.
        </video> --}}
            <div class="bg-black bg-opacity-70">
                <div class="relative z-10 grid md:flex py-2 gap-6 justify-center items-center h-full text-center">
                    <div class="md:w-7/12 w-full bg-[#0000003b] p-4 rounded-md space-y-4 text-left">
                        <h1 class="text-[26px] md:text-[32px] font-[500] text-red-600">Japanese Language Course | 日本語コース
                        </h1>
                        <div class="flex space-x-4 mb-8 items-center ">
                            <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"
                                class="bg-red-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-red-600">Apply
                                Now</a>
                            <a href="/about-us"
                                class="bg-red-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-red-600"> Learn
                                More</a>
                        </div>
                        {{-- <div class="">
                            <p class="text-white text-[16px] font-[400] mb-2"> Henry Harvin® Ranks #1 for Language
                                Courses by <a class="text-blue-600"
                                    href="https://www.educationworld.in/top-french-institutes-in-india/" rel="noopener"
                                    target="_blank">Education World</a></p>
                            <p></p>
                        </div> --}}
                        <div id="countryPrice" class="grid grid-cols-1 mt-4 lg:gap-2 gap-4">
                            <div class="w-full">
                                <span class="text-[16px] font-[600] text-red-600">Starts In 3 day</span>
                                <span class="font-[800] text-[16px] mt-1 text-red-600">04 Aug 2025</span>
                            </div>
                        </div>
                        <div class="text-red-600 text-[20px] flex flex-col space-y-2">
                            <p class="font-[600]"><a data-modal-target="authentication-modal"
                                    data-modal-toggle="authentication-modal" type="button"><span
                                        class="text-white">Forbes</span> features
                                    Henry Harvin <span class="text-white font-semibold">4.8 / 5</span> ⭐⭐⭐⭐⭐</a></p>
                            <p class="text-white text-[16px]"><span class="text-red-600">★ 4.9</span> (1583 Ratings) • 2129
                                Learners
                            </p>
                        </div>
                        <div class="font-ad">
                            <p class="text-white text-[15px] font-[600] text-justify"> Henry Harvin® offers a Japanese
                                language course based on ‘JF’ Standard for Japanese Language Education to learn in an easy
                                manner | Get support from trainers to help you get your overall Japanese language skills |
                                The course aims to teach Japanese at 5 levels: N5,N4,N3,N2,&amp;N1 along with proficiency in
                                4 writing systems of the Japanese language: Kanji, Hiragana, Katakana, Romaji | Ace the
                                exams such as JLPT, NAT &amp; JFT | </p>
                        </div>



                    </div>
                    <div class="md:w-4/12 w-full ">
                        <div class="relative bg-white rounded-lg border-2 border-red-600 shadow mb-2">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between px-4 py-2 border-b rounded-t">
                                <h3 class="text-[20px] font-[600] text-red-600 text-center">
                                    Book a Live Class
                                </h3>

                            </div>

                            <!-- Modal body -->
                            <form class="p-2 md:p-2 space-y-2 text-left">
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
                        <div class="shadow-lg grid place-content-center bg-white text-center rounded-lg relative mx-auto max-w-full"
                            id="nsdc-logo-div">
                            <img class="img-nsdc" id="nsdc-logo"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1747289179NSDC_Govt-Logo.png"
                                alt="images3">
                        </div>
                    </div>
                </div>
                <div class="max-w-7xl swiper linearswiper2 py-6">
                    <div class="swiper-wrapper my-4" style="transition-timing-function: linear !important;">
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658990804165899080411.webp"
                                loading="lazy" alt="Image 1">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658990847165899084712.webp"
                                loading="lazy" alt="Image 2">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658990870165899087013.webp"
                                loading="lazy" alt="Image 3">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658990891165899089114.webp"
                                loading="lazy" alt="Image 4">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991692165899169215.webp"
                                loading="lazy" alt="Image 5">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991716165899171616.webp"
                                loading="lazy" alt="Image 6">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991741165899174117.webp"
                                loading="lazy" alt="Image 7">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991760165899176018.webp"
                                loading="lazy" alt="Image 8">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991784165899178419.webp"
                                loading="lazy" alt="Image 9">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991811165899181120.webp"
                                loading="lazy" alt="Image 10">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991839165899183921.webp"
                                loading="lazy" alt="Image 11">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991861165899186122.webp"
                                loading="lazy" alt="Image 12">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991985165899198523.webp"
                                loading="lazy" alt="Image 13">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992005165899200524.webp"
                                loading="lazy" alt="Image 14">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992032165899203225.webp"
                                loading="lazy" alt="Image 15">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992054165899205426.webp"
                                loading="lazy" alt="Image 16">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992073165899207327.webp"
                                loading="lazy" alt="Image 17">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992092165899209228.webp"
                                loading="lazy" alt="Image 18">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992113165899211329.webp"
                                loading="lazy" alt="Image 19">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992133165899213330.webp"
                                loading="lazy" alt="Image 20">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992158165899215831.webp"
                                loading="lazy" alt="Image 21">
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <section class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Accreditations
                & Affiliations
            </h2>
            <div class="swiper linearswiper">
                <div class="swiper-wrapper my-4" style="transition-timing-function: linear !important;">
                    <div class="swiper-slide w-auto px-1 md:px-6 flex items-center justify-center">
                        <img class="max-h-[120px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1724768847Screenshot_2024-08-27_190332.png"
                            alt="slide-1" loading="lazy" />
                    </div>
                    <div class="swiper-slide w-auto px-1 md:px-6 flex items-center justify-center">
                        <img class="max-h-[120px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753255971sxsssswc.PNG" alt="slide-2"
                            loading="lazy" />
                    </div>
                    <div class="swiper-slide w-auto px-1 md:px-6 flex items-center justify-center">
                        <img class="max-h-[120px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1726071455watts_we_logo_jft.png"
                            alt="slide-3" loading="lazy" />
                    </div>
                    <div class="swiper-slide w-auto px-1 md:px-6 flex items-center justify-center">
                        <img class="max-h-[120px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1736849226DBS_C-01.png" alt="slide-4"
                            loading="lazy" />
                    </div>


                    <div class="swiper-slide w-auto px-1 md:px-6 flex items-center justify-center">
                        <img class="max-h-[120px] mt-6 object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753943295ezgif.com-resize_(2).webp"
                            alt="slide-5" loading="lazy" />
                    </div>
                    <div class="swiper-slide w-auto px-1 md:px-6 flex items-center justify-center">
                        <img class="max-h-[120px] object-contain mx-auto"
                            src="https://cdn.henryharvin.com/images/1686549627AAEFL.webp" alt="slide-6"
                            loading="lazy" />
                    </div>
                    <div class="swiper-slide w-auto px-1 md:px-6 flex items-center justify-center">
                        <img class="max-h-[120px] object-contain mx-auto" src="https://nsdcindia.org/logo_nsdc.svg"
                            alt="slide-7" loading="lazy" />
                    </div>

                    <div class="swiper-slide w-auto px-1 md:px-6 flex items-center justify-center">
                        <img class="max-h-[120px] object-contain mx-auto"
                            src="https://cdn.henryharvin.com/images/1683959258ezgif.com-gif-maker%20-%202023-05-13T115731.582.webp"
                            alt="slide-9" loading="lazy" />
                    </div>
                    <div class="swiper-slide w-auto px-1 md:px-6 flex items-center justify-center">
                        <img class="max-h-[120px] object-contain mx-auto"
                            src="https://cdn.henryharvin.com/images/1683959347ezgif.com-resize%20(20).webp" alt="slide-10"
                            loading="lazy" />
                    </div>
                    <div class="swiper-slide w-auto px-1 md:px-6 flex items-center justify-center">
                        <img class="max-h-[120px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753941817ezgif.com-resize_(1).webp"
                            alt="slide-11" loading="lazy" />
                    </div>
                    <div class="swiper-slide w-auto px-1 md:px-6 flex items-center justify-center">
                        <img class="max-h-[120px] object-contain mx-auto"
                            src="https://cdn.henryharvin.com/images/1683958602ezgif.com-resize%20(16).webp" alt="slide-12"
                            loading="lazy" />
                    </div>
                    <div class="swiper-slide w-auto px-1 md:px-6 flex items-center justify-center">
                        <img class="max-h-[120px] object-contain mx-auto"
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753941817ezgif.com-resize_(1).webp"
                            alt="slide-13" loading="lazy" />
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="videoGrid" class="py-12 px-4 hidden">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Hear from our
            learners about their experience</h2>
        <div class="relative max-w-7xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2">
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy"
                                src="https://www.youtube.com/embed/K4NAAHCtbo8?si=LXy3IH_0Yi3e4Enm"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy"
                                src="https://www.youtube.com/embed/mZkFP1ZWJv4?si=-Y9J-o95RPIPRE45"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy"
                                src="https://www.youtube.com/embed/YqdggC5M90s?si=c_BOR0hUt09zg6nm"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy"
                                src="https://www.youtube.com/embed/L9QZCK1P5O0?si=6Du0Kau5d7-Vn1wH"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy"
                                src="https://www.youtube.com/embed/JYPNfkyyx08?si=InTVIl5Q4CYfW1md"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy"
                                src="https://www.youtube.com/embed/BooTihSy8dA?si=KvuZtk5Ubs5H_h9l"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy"
                                src="https://www.youtube.com/embed/h2558oOB2GM?si=wHCvqM2tY1LV7UM5"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy"
                                src="https://www.youtube.com/embed/uggeKrYDD1s?si=8b-KUM3PjomaUw1w"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy"
                                src="https://www.youtube.com/embed/TQM2QkyQ9eE?si=9qhmBWvz-F1LB67e"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy"
                                src="https://www.youtube.com/embed/TQM2QkyQ9eE?si=htkH4vwPYAgp-Tf6"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy"
                                src="https://www.youtube.com/embed/_BMlRAi9dK8?si=bRm1y5uPfNQ_v0g9"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy"
                                src="https://www.youtube.com/embed/_BMlRAi9dK8?si=ezzy0eafQv0oFdjQ"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy"
                                src="https://www.youtube.com/embed/5rIlYy7SO08?si=auENFCTaltWwCFdc"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy" src="https://www.youtube.com/embed/HAI_ZAMooLk"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy" src="https://www.youtube.com/embed/K4NAAHCtbo8"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy" src="https://www.youtube.com/embed/mZkFP1ZWJv4"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy" src="https://www.youtube.com/embed/YqdggC5M90s"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy" src="https://www.youtube.com/embed/L9QZCK1P5O0"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="py-12 px-4">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 mt-2">
            <div class="md:col-span-2">
                <div>
                    <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-red-600 capitalize">Key Highlights
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 mx-auto gap-2">
                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711777063icon (1).png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">670 Hours of Instructor-Led
                                    Sessions</h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711779552Doubt%20solving%20session.png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">224 Hours of Live
                                    Interactive Doubt Solving Sessions</h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711779671Industry%20expert%20sessions.png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">112 Hours of Live Master
                                    Sessions by Industry Experts</h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711779837Self paced.png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">576 Hours of Self-Paced
                                    Learning</h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711780067Capstone.png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">Job-Ready Portfolio of 67+
                                    Capstone Projects</h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711780133assesments.png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">290 Auto-Graded Assessments
                                    powered by Examopedia</h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1713174360icon-1.png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">134+ Industry Case Studies
                                </h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1712051679hands on excercise (2).png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">1005 Guided Hands-On
                                    Exercises</h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711780980Assignments.png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">67+ Assignments and Mini
                                    Projects</h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711781074Hackathons.png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">2 Mock Interviews and 3
                                    Hackathons</h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711781459Mentorship.png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">15 Hours of Mentorship by
                                    Industry Experts</h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1739631998icon_2.png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">Upgradation to Sector Skill
                                    Council Certification</h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1712569767GM-Logo (1).png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">Get 36 Months Gold
                                    Membership of Henry Harvin® School of Languages</h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711781357Internship.png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">Get a guaranteed Internship
                                    with Henry Harvin® and in top MNCs like J.P. Morgan, Accenture & many more via Forage
                                </h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711781409Placements.png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">Get 3 in 1 Placement support
                                    through Placement Drives, Premium access to Job portal & Personalized Job Consulting
                                </h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1711781642Hallmark%20certification.png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">Earn Certification of Course
                                    from Henry Harvin®, Govt of India recognized & Award-Winning Institute and NSDC
                                    Certification</h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1737087801dbs.png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">Upgradation to globally
                                    recognized Swiss Certification from Dunster Business School, Switzerland</h5>
                            </div>
                        </div>

                        <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                            <div class="flex items-start gap-2">
                                <div class="w-2/12">
                                    <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1739632069icon_3.png"
                                        alt="images">
                                </div>
                                <h5 class="w-9/12 text-[14px] font-medium text-red-700 italic">Upgrade to SAMADHAN Govt.
                                    Certifications and earn credits for related jobs</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:px-4 p-3 border-2 border-red-700 mt-6">
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
                                    style="font-family:Arial"><span style="color:#000000">This level is the second level
                                        of
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
                                    style="font-family:Arial"><span style="color:#000000">This level seems to be
                                        difficult.
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
                                        style="font-family:Arial,sans-serif"><span style="color:#000000">Facility to
                                            undergo
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
                                        style="font-family:Roboto,sans-serif"><span style="color:#000000">Get free access
                                            to
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
                                        style="font-family:Roboto,sans-serif"><span
                                            style="color:#000000"><strong>Internship
                                                Support</strong></span></span></span><span style="font-size:11pt"><span
                                        style="font-family:Roboto,sans-serif"><span style="color:#000000">: Get Internship
                                            Support
                                            with Henry Harvin® and in top MNCs like J.P. Morgan, Accenture &amp; many more
                                            via 100X
                                            Suite and Yuva Intern</span></span></span></li>
                            <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                        style="font-family:Roboto,sans-serif"><span
                                            style="color:#000000"><strong>Entrepreneurship
                                                Mentorship: </strong></span></span></span><span
                                    style="font-size:11pt"><span style="font-family:Roboto,sans-serif"><span
                                            style="color:#000000">Mentorship from
                                            Young
                                            Successful Entrepreneurs to set up a sustainable &amp; scalable Business from
                                            scratch at
                                            both Freelance &amp; Entrepreneur level</span></span></span></li>
                            <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                        style="font-family:Roboto,sans-serif"><span
                                            style="color:#000000"><strong>Placement
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
                                    style="font-size:10.5pt"><span style="font-family:Arial"><span
                                            style="color:#434343">via
                                            Yuva
                                            Intern</span></span></span></li>
                            <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                        style="font-family:Arial"><span style="color:#434343">Weekly
                                        </span></span></span><span style="font-size:10.5pt"><span
                                        style="font-family:Arial"><span style="color:#434343"><strong>10+ job
                                                opportunities
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
                                        style="font-family:Arial"><span style="color:#434343"><strong>develop competence
                                                in
                                                accomplishing
                                                tasks</strong></span></span></span><span style="font-size:10.5pt"><span
                                        style="font-family:Arial"><span style="color:#434343"> in
                                            Japanese</span></span></span></li>
                            <li style="list-style-type:disc"><span style="font-size:10.5pt"><span
                                        style="font-family:Arial"><span style="color:#434343"><strong>Broaden your
                                                perspective</strong></span></span></span><span
                                    style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">
                                            on
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
                                        style="font-family:Arial"><span style="color:#434343">and get familiar with
                                            cultural
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
                                        style="font-family:Arial"><span
                                            style="color:#434343">Get</span></span></span><span
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
                                        style="font-family:Arial"><span
                                            style="color:#434343">Get</span></span></span><span
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
                {{-- <div class="text-center py-10">
                    <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">COURSE
                        FEATURES </h2>

                    <div
                        class="bg-red-700 text-white mt-6 px-6 py-6 rounded-lg flex flex-col sm:flex-row items-center justify-between space-y-4 sm:space-y-0 sm:space-x-8 max-w-6xl mx-auto">

                        <!-- Duration -->
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19 4h-1V2h-2v2H8V2H6v2H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2zM5 20V9h14v11H5z">
                                </path>
                            </svg>
                            <span class="font-[600]">Duration : 4 Months - 24 Months</span>
                        </div>

                        <!-- Timing -->
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M12 1a11 11 0 1011 11A11.013 11.013 0 0012 1zm1 17h-2v-6h6v2h-4z"></path>
                            </svg>
                            <span class="font-[600]">Timing : 08 AM - 11.00 PM</span>
                        </div>

                        <!-- Batch Size -->
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05A5.96 5.96 0 0120 17v2h4v-2.5c0-2.33-4.67-3.5-8-3.5z">
                                </path>
                            </svg>
                            <span class="font-[600]">Batch Size : 3-10 Students</span>
                        </div>

                    </div>
                </div> --}}
                <div class="text-center py-10">
                    <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Our
                        Placement Stats </h2>
                    <div class="grid md:grid-cols-3 grid-cols-1 gap-4 mt-4 mb-4">
                        <div class="shadow-md rounded-md py-4">
                            <div class="mx-4">
                                <span class="flex items-center gap-2 py-[10px] h-14">
                                    <span class="text-[28px] font-[600]  text-[#50607d]">80%</span>
                                    <img class="h-4"
                                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1706523530progressnew.svg"
                                        alt="images38" loading="lazy">
                                </span>
                                <p class="text-sm font-semibold mt-2 text-[#51565e]">Average salary hike</p>
                            </div>
                        </div>
                        <div class="shadow-md rounded-md py-4">
                            <div class="mx-8">
                                <span class="flex items-center gap-2 py-[10px] h-14">
                                    <span class="text-[28px] font-[600] text-[#50607d]">2100+</span>
                                </span>
                                <p class="text-sm font-semibold mt-2 text-[#51565e]">Access the best jobs in industry</p>
                            </div>
                        </div>
                        <div class="shadow-md rounded-md py-4">
                            <div class="mx-8">
                                <span class="flex items-center gap-2 py-[10px] h-14">
                                    <span class="text-[28px] font-[600] text-[#50607d]">150%</span>
                                    <img class="h-6"
                                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1706523530progressnew.svg"
                                        alt="images39" loading="lazy">
                                </span>
                                <p class="text-sm font-semibold mt-2 text-[#51565e]">Maximum salary hike</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="text-center py-10">
                    <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Access
                        the best jobs in the industry </h2>
                    <div class="my-3 md:block hidden">
                        <img class="w-full" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719478413q23ew.webp"
                            alt="icons-carrid">
                    </div>
                    <div class="my-3 md:hidden block">
                        <img class="w-full" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719478543dwddd.webp"
                            alt="icons-carri5">
                    </div>
                </div> --}}
                <div class="">
                    <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-red-600 capitalize">Japanese
                        Language
                        Course
                        Curriculum</h2>

                    <ul class="flex flex-col max-w-5xl mx-auto space-y-3">

                        <!-- Module 1 -->
                        <!-- Module: N5 Level -->
                        <li class="bg-red-600 shadow-lg rounded" x-data="{ open: false }">
                            <h3 @click="open = !open"
                                class="flex text-white justify-between items-center font-semibold px-4 py-4 cursor-pointer">
                                <div class="flex gap-2 items-center">
                                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719481027ezgif.com-resize%20(14).webp"
                                        class="w-8" alt="N5 Level Icon">
                                    N5 Level
                                </div>
                                <svg :class="{ 'rotate-180': open }"
                                    class="h-5 w-5 transform transition-transform duration-300" fill="none"
                                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </h3>
                            <div x-show="open" x-transition class="bg-white text-black p-4 text-sm space-y-4">
                                <div class="mx-6 pl-6">
                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 1:
                                                        Introduction</strong></span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">In this module, learn Japanese Language, reading
                                                    and writing grounds of Japanese and special accents</span></span></span>
                                    </p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Ice Breaker-
                                                        Learning Matrix explanation</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Introduction
                                                        to the 3 Scripts</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Basic Accents
                                                        in Japanese Language- アクセント</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 2:
                                                        Hiragana
                                                        Syllabary</strong></span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">Learn the basic script understanding and learn
                                                    methods to learn and usage, word formation, and
                                                    reading</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Phonetics of
                                                        Hiragana, Stroke Order- ひらがな書き順</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">あ/ か/ さ
                                                        groups</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">な/ た は groups
                                                        and words</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">ま/ ら/ わ/ ん
                                                        groups and words</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Writing and
                                                        Reading words in Hiragana</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Derivatives
                                                        concept　が　ざ　だ　ば　ぱ- Phonetics Jump</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Stress Sounds-
                                                        Double sounds</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Long
                                                        Sounds</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Reading/Writing of Hiragana Words-
                                                        読み書き練習</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 3:
                                                        Katakana
                                                        Syllabary</strong></span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">Learn about second Script of Japanese
                                                    Language</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Significance
                                                        of Katakana- Phonetics</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Stroke Order
                                                        ア　から　ン　まで</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Long Sounds-
                                                        いい、えい、うう、おう</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Derivatives
                                                        concept　ガ　ザ　ダ　バ　パ</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Stress Sounds-
                                                        つ使い</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Word Formation
                                                        of Foreign Words</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Important
                                                        Katakana Words List and formation</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 4:
                                                        Greetings/Expressions</strong></span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">Learn about special greetings used in Japanese
                                                    Language</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">挨拶</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">表現</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 5:
                                                        Beginners
                                                        Terminologies</strong></span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">小学語彙</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Days of the
                                                        Week- 月曜から日曜まで</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Numbers
                                                        1-100</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">30 words
                                                        vocabulary</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Months of the
                                                        Year- 一月から１２月まで</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Significance
                                                        of Prefixes and Suffixes- お、語、人</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 6:
                                                        Verbs</strong></span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">同士</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Verbs Types
                                                        and description/ Sentence Syntax- 文章図栗</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Desu/
                                                        Usage/Basic Tenses- です作り方</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Arimasu/Usage/Basic Tenses-
                                                        あります作り方</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Masu/Usage/Basic Tenses-
                                                        ます形作り方</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Verb List-
                                                        語彙リスト</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Subject Verb
                                                        relation</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 7: Counter
                                                        Suffixes</strong></span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">Learn the usage of special Unit suffixes
                                                    words</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Suffixes as
                                                        per the category.e.g. だい、まい、人- &nbsp;
                                                        台，まい、人、かい、がい、はい</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 8:
                                                        Introduction to
                                                        Particles</strong></span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">上司</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Significance
                                                        of Particles in a sentence</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">は　で　に　を　と　も　から　まで　-
                                                        上司使い方</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Sentence
                                                        Formation- 文章作り方</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">復習</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 9:
                                                        Introduction to
                                                        Adverbs</strong></span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">副詞</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">とても　あまり　だんだん、ますますなど</span></span></span>
                                        </li>
                                    </ul>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 10:
                                                        Introduction to
                                                        Adjectives</strong></span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">形容詞</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Types of
                                                        Adjectives and its Mechanism- 形容詞類</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">いAdjectives
                                                        &amp; Tenses of I Adjectives- い形容詞</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Na Adjectives
                                                        &amp; Tenses of Na- Adjectives- な形容詞</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 11:
                                                        Introduction to
                                                        Kanjis</strong></span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">漢字紹介</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Understanding
                                                        the Origin and its geometry</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Stroke Order
                                                        and its significance</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Kanjis and its
                                                        readings- 音読み及び訓読み</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Usage of
                                                        Kanjis in a sentence- 文章付き漢字</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 12:
                                                        Conversation
                                                        Ethics</strong></span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">Learn special expressions and conversation put
                                                    up as per Japanese Culture</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Kaiwa as per
                                                        Japanese Culture- 会話表現</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Jiko Shoukai-
                                                        自己紹介</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Asking
                                                        Questions- どうして、どれ、どの、どこ</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module 13: Introduction
                                                to N5
                                                Advance</strong></span></p>

                                    <p><span style="font-size:14px">Learn about JLPT N5 Preparation, revision of Kanjis
                                            learnt in basic and JLPT N5 first 20 Kanjis</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">JLPT N5- Learning Matrix explanation</span></li>
                                        <li><span style="font-size:14px">Kanji of Number and time- 数字漢字, 時間漢字</span></li>
                                        <li><span style="font-size:14px">Readings and Stroke order- 漢字意味及び読み書き</span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module 14:
                                                Verbs</strong></span></p>

                                    <p><span style="font-size:14px">Enhance your knowledge by usage of Verbs</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">V ましょう- 文章作り</span></li>
                                        <li><span style="font-size:14px">V た- 文章作り</span></li>
                                        <li><span style="font-size:14px">形- 文章作り</span></li>
                                        <li><span style="font-size:14px">V辞書形-文章作り</span></li>
                                        <li><span style="font-size:14px">Ｖ普通形- Ｖ普通形作り方</span></li>
                                        <li><span style="font-size:14px">文章翻訳及び意味わかり- 読み書き練習</span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module 15:
                                                Phrases</strong></span></p>

                                    <p><span style="font-size:14px">Learn Can Do, And / And Etc Phrase, Toka/Toka
                                            Phrase</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">ことができる, ことがある- 文章作り, 会話表現</span></li>
                                        <li><span style="font-size:14px">や　や　など</span></li>
                                        <li><span style="font-size:14px">とか　とか　Ｖ</span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module 16: Conversation
                                                Cont</strong></span>
                                    </p>

                                    <p><span style="font-size:14px">Asking Questions using expressions/Replying Questions
                                            and Using Adjectives in Conversation</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">そうですね, そうですか, ええと- 会話表現</span></li>
                                        <li><span style="font-size:14px">すきです</span></li>
                                        <li><span style="font-size:14px">嫌いです- 文章作り方</span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module 17: Special
                                                Adjectives</strong></span>
                                    </p>

                                    <p><span style="font-size:14px">Learn using Correct form of Adjectives while
                                            conversing</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">が　欲しい　です- 得意形容詞</span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module 18: Telling
                                                Time</strong></span></p>

                                    <p><span style="font-size:14px">Learn using Japanese style of telling time, Sentence
                                            Practice using verbs/Adjectives and Adverbs, Reading Skills Progress</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">何時, 何時間, 午前, 午後, ごろ, ぐらい- 会話表現</span></li>
                                        <li><span style="font-size:14px">形容詞付き, 副詞形容詞付き- 文章作り練習及び説明</span></li>
                                        <li><span style="font-size:14px">Comprehensions solving- 読解問題</span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module 19: Verbs
                                                Cont..</strong></span></p>

                                    <p><span style="font-size:14px">Learn plain Forms of the verbs and phrases using Plain
                                            forms cont..</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">たけい, たりたりする- 文章付き</span></li>
                                        <li><span style="font-size:14px">たりたりする, たけいあとで, 辞書形前に</span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module 20: Kanjis
                                                Cont..</strong></span></p>

                                    <p><span style="font-size:14px">Learn 20 More kanjis Including Adjectives, Practice
                                            Kanjis in Sentences, Dictation of Kanjis for better Practice</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Meaning Stroke order and Readings</span></li>
                                        <li><span style="font-size:14px">訓読み付き言葉- 練習</span></li>
                                        <li><span style="font-size:14px">訓読み付き言葉- 練習</span></li>
                                        <li><span style="font-size:14px">復習</span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module 21: Adverbs
                                                Cont..&nbsp;</strong></span></p>

                                    <p><span style="font-size:14px">Understand adverbs sensitivity</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">どんどん, もともと, 時々, 色々, わざわざ, だいたい, ずいぶん-
                                                意味付き文章作り方</span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module 22: Adjectives
                                                Cont..</strong></span>
                                    </p>

                                    <p><span style="font-size:14px">形容詞, Usage of Correct Adjectives in Kaiwa</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Complex Adjectives with its correct usage- 形容詞類,
                                                文章付き, 注意すること</span></li>
                                        <li><span style="font-size:14px">素敵ですね, へたです, 上手です, 嫌いです, ほしいです</span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module 23: Verbs Forms
                                                Cont..</strong></span>
                                    </p>

                                    <p><span style="font-size:14px">Continuous / State denoting forms and usage in
                                            Phrases</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">てけい- て形作り方, 文法付き, 文章付き</span></li>
                                        <li><span style="font-size:14px">Ｖ手てから</span></li>
                                        <li><span style="font-size:14px">Ｖて　います</span></li>
                                        <li><span style="font-size:14px">置いておいてください。</span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module 24: Listening
                                                Practice
                                                Cont..</strong></span></p>

                                    <p><span style="font-size:14px">Preparation of Listening Section for JLPT N5</span>
                                    </p>

                                    <ul>
                                        <li><span style="font-size:14px">聴解会話</span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module 25: JLPT Paper
                                                Practice</strong></span>
                                    </p>

                                    <p><span style="font-size:14px">Understand JLPT Paper attempt</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and Grammar section- 読解と文法</span></li>
                                        <li><span style="font-size:14px">Kanji Section- 漢字と語彙</span></li>
                                        <li><span style="font-size:14px">Listening Section- 聴解</span></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="bg-red-600 shadow-lg rounded" x-data="{ open: false }">
                            <h3 @click="open = !open"
                                class="flex text-white justify-between items-center font-semibold px-4 py-4 cursor-pointer">
                                <div class="flex gap-2 items-center">
                                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719481027ezgif.com-resize%20(14).webp"
                                        class="w-8" alt="N5 Level Icon">
                                    N4 Level
                                </div>
                                <svg :class="{ 'rotate-180': open }"
                                    class="h-5 w-5 transform transition-transform duration-300" fill="none"
                                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </h3>
                            <div x-show="open" x-transition class="bg-white text-black p-4 text-sm space-y-4">
                                <div class="mx-6 pl-6">
                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        1:&nbsp;</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Revision
                                                        (<span style="background-color:#ffffff">Phrases and Connecting,
                                                            Kanjis learnt in Basic, JLPT N4 20
                                                            Kanji)</span></span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Phrases and
                                                        Connecting, Revision of Kanjis learnt in Basic, JLPT N4 20
                                                        Kanji</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Vたりたりする, ができる,
                                                        ことができる, じしょけいまえに, ことがある, ほど, ほうがいいです, なければならない, てもいいです, ませんか,
                                                        ていただきませんか, たらいいですか</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Reading and
                                                        Comprehension</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Readings and
                                                        Stroke order</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Combination
                                                        Words</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Kanji Reading
                                                        drill</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        2:&nbsp;</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Grammar</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    かのうけ</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    みえる</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    みられる</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    きける</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    きこえる</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Vocabulary</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    語彙</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Kanji</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    読み方及び接続</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">speed Reading
                                                        drill</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span
                                                    style="color:#000000">-読み練習</span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        3:&nbsp;</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Grammar</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Verb
                                                        forms</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Conjunctions</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Sentence
                                                        Joiners</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                                    ながら</span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                                    なにか、なにが</span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                                    どこか、どこが</span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                                    だれか、だれが</span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                                    それに、それで</span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                                    つまり</span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                                    でも、しかし、けど、が</span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                                    し、し</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Vocabulary</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    語彙</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Kanji</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    読み方及び接続</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Reading and
                                                        translation</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    読み練習</span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        4:&nbsp;</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Grammar</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    ている</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span
                                                    style="color:#000000">てある</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span
                                                    style="color:#000000">しまう</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span
                                                    style="color:#000000">てしまいした</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Vocabulary</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    語彙</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Kanji</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    読み方及び接続</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Reading and
                                                        translation</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span
                                                    style="color:#000000">-読み練習</span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        5:&nbsp;</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Grammar</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Verb
                                                        Forms</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">- 自動詞 Intransitive
                                                    verbs</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">- 他動詞 Transitive
                                                    Verbs</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Vocabulary</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">- Specific
                                                    Terminology</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Kanji</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    読み方及び接続</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Reading and
                                                        translation</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    読み練習</span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        6:&nbsp;</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Grammar-Patterns using Transitive and
                                                        Intransitive verbs &amp; Adverbs</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span
                                                    style="color:#000000">-他動詞てある</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    自動詞ている</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    まだ、あまり、だんだん、どんどん</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Vocabulary</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    語彙</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    読み方及び接続</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    読み練習</span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        7:&nbsp;</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Grammar</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">- Revision with
                                                    Practice sheets</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Vocabulary</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">- Cooking/
                                                    conversation drill; terminology used</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Kanji</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    書きおよび読み練習</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Reading and
                                                        translation</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span
                                                    style="color:#000000">-読み練習</span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        8:&nbsp;</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Grammar<strong
                                                            class="text-red-600">-</strong>Verb forms &amp; ending verb
                                                        forms</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">- Volitional
                                                    form</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">- Volitional
                                                    form　とおもう</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    のつもりです</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    辞書形つもりです</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    のよていです</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    辞書形よていです</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Vocabulary</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    語彙</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Kanji</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    書き順及び読み練習</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Reading and
                                                        translation</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span
                                                    style="color:#000000">-総読</span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        9:&nbsp;</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Grammar</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span
                                                    style="color:#000000">-ほうがいいです</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    でしょう</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    かもしりません</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    かもしれない</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    もしかしたら</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    Quantifierで</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Vocabulary</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    語彙</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Kanji</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span
                                                    style="color:#000000">-漢字音読み付き言葉</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Writing
                                                        skills</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span
                                                    style="color:#000000">-普通な読解書き練習及び説明</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Communication
                                                        drill</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span
                                                    style="color:#000000">-駅、ホテル、空港での会話</span></span></span></p>

                                    <p><span style="font-size:14px"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        10:&nbsp;</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Grammar</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span style="color:#000000">Sentence end
                                                        patterns</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    という意味です</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    といっていました</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    とつたえてください</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    ていただきませんか</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    ていただけませんか</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Vocabulary</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span
                                                    style="color:#000000">-語彙及び使い方</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:14px"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Kanji</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    漢字で日本式名前</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:14px"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    読解翻訳および説明</span></span></span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                11:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar</span></li>
                                        <li><span style="font-size:14px">Connecting Phrases</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- とおりに</span></p>

                                    <p><span style="font-size:14px">たあとで</span></p>

                                    <p><span style="font-size:14px">自所形まえに</span></p>

                                    <p><span style="font-size:14px">ておきます</span></p>

                                    <p><span style="font-size:14px">ままにおいておいてください</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- ことわざ</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- 練習</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                12:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar</span></li>
                                        <li><span style="font-size:14px">Adjectives Connection</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- い形容詞接続</span></p>

                                    <p><span style="font-size:14px">な形容詞接続</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary, Minna no nihongo chapter 41-43</span>
                                        </li>
                                    </ul>

                                    <p><span style="font-size:14px">- 語彙</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- 読み方及び接続</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                13:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar- Pattern of facts and rumors</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- ようです</span></p>

                                    <p><span style="font-size:14px">らしいです</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- 語彙</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- 読み方及び接続</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- 読み練習</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                14:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar- Patterns using Likewise with
                                                Verbs</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-ようにする</span></p>

                                    <p><span style="font-size:14px">ようになる</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- 語彙</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- 読み方及び接続</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- 読み練習</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                15:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar</span></li>
                                        <li><span style="font-size:14px">Passive Sound</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-受身形</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- 練習</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- 読み方及び接続</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- 読み練習</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                16:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar</span></li>
                                        <li><span style="font-size:14px">Patterns using Passive sound</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-Nによって</span></p>

                                    <p><span style="font-size:14px">から作られる</span></p>

                                    <p><span style="font-size:14px">で作られる</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary- Minna no nihongo vocabulary Chapter
                                                44</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-語彙</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-読み方及び接続</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- 読み練習</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                17:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar- Revision with Practice sheets</span>
                                        </li>
                                        <li><span style="font-size:14px">Vocabulary</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-祭り、行事用語</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-書きおよび読み練習</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- 読み練習</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                18:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar</span></li>
                                        <li><span style="font-size:14px">Verb and noun Qualifiers</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- のは</span></p>

                                    <p><span style="font-size:14px">のが</span></p>

                                    <p><span style="font-size:14px">のを</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary- Minna no nihongo Chapter 45,46</span>
                                        </li>
                                    </ul>

                                    <p><span style="font-size:14px">-語彙</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-書き順及び読み練習</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-総読</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                19:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar</span></li>
                                        <li><span style="font-size:14px">Revision</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-練習</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-語彙</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-漢字音読み付き言葉</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Writing skills</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-普通な読解書き練習及び説明</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Communication drill</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-注文、面接</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                20:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar</span></li>
                                        <li><span style="font-size:14px">Particle patterns</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-で</span></p>

                                    <p><span style="font-size:14px">せいで</span></p>

                                    <p><span style="font-size:14px">おかげで</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary- Revision till chapter 50</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-語彙及び使い方</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-書き順及び読み練習</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-読解翻訳および説明</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                21:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar</span></li>
                                        <li><span style="font-size:14px">Giving /Receiving Verbs</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-やる</span></p>

                                    <p><span style="font-size:14px">もらう</span></p>

                                    <p><span style="font-size:14px">くれる</span></p>

                                    <p><span style="font-size:14px">さしあげる</span></p>

                                    <p><span style="font-size:14px">くださる</span></p>

                                    <p><span style="font-size:14px">いただく</span></p>

                                    <p><span style="font-size:14px">Vてみます</span></p>

                                    <p><span style="font-size:14px">かどうか</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-用語</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-書き順及び読み練習</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-読解翻訳および説明</span></p>

                                    <p><br>
                                        <span style="font-size:14px"><strong class="text-red-600">Module
                                                22:&nbsp;</strong></span>
                                    </p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar</span></li>
                                        <li><span style="font-size:14px">Purpose pattern</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- Nのために</span></p>

                                    <p><span style="font-size:14px">- V辞書形ために</span></p>

                                    <p><span style="font-size:14px">- のに</span></p>

                                    <p><span style="font-size:14px">- も</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary- Tools/furniture</span></li>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-書き順及び読み練習</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-読解翻訳および説明</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                23:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar</span></li>
                                        <li><span style="font-size:14px">Patterns</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-辞書形そうです</span></p>

                                    <p><span style="font-size:14px">いきそうです</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-語彙及び使い方</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-書き順及び読み練習</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-読解翻訳および説明</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                24:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar</span></li>
                                        <li><span style="font-size:14px">Patterns</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-rootverbやすいです</span></p>

                                    <p><span style="font-size:14px">rootverbにくいです</span></p>

                                    <p><span style="font-size:14px">たべすぎる</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-語彙及び使い方</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-書き順及び読み練習</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- 読解翻訳および説明</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                25:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar</span></li>
                                        <li><span style="font-size:14px">Patterns on situation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-Pl form場合</span></p>

                                    <p><span style="font-size:14px">のに</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-語彙及び使い方</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-書き順及び読み練習</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-読解翻訳および説明</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                26:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar</span></li>
                                        <li><span style="font-size:14px">Patterns</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-ところです</span></p>

                                    <p><span style="font-size:14px">辞書形ところです</span></p>

                                    <p><span style="font-size:14px">ているところです</span></p>

                                    <p><span style="font-size:14px">たばかりです</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary- Verbal Practice</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-語彙及び使い方</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-書き順及び読み練習</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-読解翻訳および説明</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                27:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar</span></li>
                                        <li><span style="font-size:14px">Revision</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-練習</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary-Situational Sounds</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-語彙及び使い方</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-書き順及び読み練習</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">- 読解翻訳および説明</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                28:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar</span></li>
                                        <li><span style="font-size:14px">Causative form</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-使役系</span></p>

                                    <p><span style="font-size:14px">味がする</span></p>

                                    <p><span style="font-size:14px">においがする</span></p>

                                    <p><span style="font-size:14px">Nのようです</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary-Situational Sounds</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-語彙及び使い方</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-書き順及び読み練習</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-読解翻訳および説明</span></p>

                                    <p><span style="font-size:14px"><strong class="text-red-600">Module
                                                29:&nbsp;</strong></span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Grammar- More patterns</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-になる</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Vocabulary-Telecon Communication</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-にする</span></p>

                                    <p><span style="font-size:14px">おはいりください</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Kanji</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-書き順及び読み練習</span></p>

                                    <ul>
                                        <li><span style="font-size:14px">Reading and translation</span></li>
                                    </ul>

                                    <p><span style="font-size:14px">-読解翻訳および説明</span></p>
                                </div>
                            </div>
                        </li>
                        <li class="bg-red-600 shadow-lg rounded" x-data="{ open: false }">
                            <h3 @click="open = !open"
                                class="flex text-white justify-between items-center font-semibold px-4 py-4 cursor-pointer">
                                <div class="flex gap-2 items-center">
                                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719481027ezgif.com-resize%20(14).webp"
                                        class="w-8" alt="N5 Level Icon">
                                    N3 Level
                                </div>
                                <svg :class="{ 'rotate-180': open }"
                                    class="h-5 w-5 transform transition-transform duration-300" fill="none"
                                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </h3>
                            <div x-show="open" x-transition class="bg-white text-black p-4 text-sm space-y-4">
                                <div class="mx-6 pl-6">
                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        1:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Reading and translation-
                                                    Patterns, Minna no nihongo chapter 1, 説読</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Vてももらえませんか, Vていただけませんか, Vてももらえないでしょうか,
                                                        Vていただけないでしょうか, Vていただけないだろうか</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">練習</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        2:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, kanji- Patterns, Minna no
                                                    nihongo chapter 2, 漢字</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">のようだ, のような, のように,
                                                        ことは/が/を</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み方及び接続</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        3:&nbsp;</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Minna no nihongo chapter 2 contd.., 漢字,
                                                    読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">という, いつ/ どこ/ なに/ だれ/
                                                        どんなに　でも</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み方及び接続</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み練習</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        4:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Minna no nihongo chapter 3, 練習,
                                                    読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">じゃなくて, のだ。、のではない,
                                                        なん人も、何回も、何枚も</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み方及び接続</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み練習</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        5:&nbsp;</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Revision, 練習, 読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">たら、ば、と、なら, というのは、というこたは、, ようにいう , ように注意する ,
                                                        ように伝える, ように頼む</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">練習</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み方及び接続</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み練習</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        6:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Minna no nihongo chapter 3 contd.., 10漢字,
                                                    読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み方及び接続</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み練習</span></span></span></li>
                                    </ul>

                                    <p><br>
                                        &nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        7:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation-Patterns, Minna no nihongo chapter 4, writing Kanji,
                                                    読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">ことにしている, ことになる, ことになっている, Vてほしい,
                                                        Vないでほしい</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">祭り、行事用語</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">書きおよび読み練習</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み練習</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        8:&nbsp;</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Minna no nihongo chapter 4 contd.., 漢字,
                                                    読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">そうな, そうに, なさそう, そうもない</span></span></span>
                                        </li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">書き順及び読み練習</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">総読</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        9:&nbsp;</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Minna no nihongo chapter 5, Combination Words,
                                                    Essay writing, General Conversation</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">ちゃう, とく, させられる, である, たがる, たがっている, ましたら、,
                                                        まして</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">漢字音読み付き言葉,
                                                        普通な読解書き練習及び説明</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">注文、面接</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        10:&nbsp;</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Minna no nihongo chapter 5 contd.., 漢字,
                                                    読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">。。じゃないん？, Vたところに, Vたところで, のだろうか, との/ での/
                                                        からの/ までの/ への, だろうと思う</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙及び使い方</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">書き順及び読み練習</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読解翻訳および説明</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        11:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Minna no nihongo chapter 6, 漢字,
                                                    読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">..て、って, つもりはない, つもりだった, Vたつもり,
                                                        Vていりつもり</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">書き順及び読み練習</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読解翻訳および説明</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        12:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Minna no nihongo chapter 6 contd.., 漢字,
                                                    読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Vてばかりいる, とか, Vてくる, Vていく</span></span></span>
                                        </li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">書き順及び読み練習</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読解翻訳および説明</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        13:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Reading and translation-
                                                    Patterns, Minna no nihongo chapter ７, 説読</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Vなくてはならない, Vなくてはいけない, だけだ, ただ,
                                                        だけでいい</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">練習</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        14:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji - Patterns, Minna no
                                                    nihongo chapter 7 contd, 漢字</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">なんか, なんて, なくちゃ, なきゃ</span></span></span>
                                        </li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み方及び接続</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        15:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Revision, 漢字, 読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Vたままに, Nのままに, からだ</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み方及び接続</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み練習</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        16:&nbsp;</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Minna no nihongo chapter 8, 練習,
                                                    読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">あいだ, あいだに, まで, までに</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み方及び接続</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み練習</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        17:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Minna no nihongo chapter 8 contd.., 練習,
                                                    読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">ために, ためだ, Ｖてもかまわない</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">練習</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み方及び接続</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み練習</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        18:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Minna no nihongo chapter 9, 10漢字,
                                                    読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span style="color:#000000">ほど,
                                                        ほとはない, ほどではない</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み方及び接続</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み練習</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        19:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Minna no nihongo chapter 9 contd.., writing
                                                    Kanji, 読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">忘れる, 合う, かえる, ということになる, はずだ, はずが, はずはない,
                                                        はずだった, ことが, ことも</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">祭り、行事用語</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">書きおよび読み練習</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読み練習</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        20:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Minna no nihongo chapter 10, 漢字,
                                                    読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Ｖた結果、, の結果, 出す, 始める,
                                                        終わる</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">書き順及び読み練習</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">総読</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        21:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Writing skills,
                                                    Communication drill- Patterns, Minna no nihongo chapter 10 contd..,
                                                    Minna no nihongo chapter 10 contd.., Combination Words, Essay writing,
                                                    General Conversation</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Ｖたら　どう？, より　ほうが</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">漢字音読み付き言葉,
                                                        普通な読解書き練習及び説明</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">注文、面接</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        22:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Minna no nihongo chapter 11, 漢字,
                                                    読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">らしい, として, ずに, ず</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙及び使い方</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">書き順及び読み練習</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読解翻訳および説明</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        23:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Minna no nihongo chapter 12, 漢字,
                                                    読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span style="color:#000000">もの,
                                                        もんだから, Ｖられる, っぱなし</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">語彙</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">書き順及び読み練習</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読解翻訳および説明</span></span></span></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        24:</strong></span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000">Grammar, vocabulary, Kanji, Reading and
                                                    translation- Patterns, Full Revision, 漢字, 読解</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">おかげで, おかげだ, せいで, せいだ, みたいだ, どちらかと言えば, ほうだ,
                                                        Vますように, Vませんように</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span style="color:#000000">語彙,
                                                        書き順及び読み練習</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">読解翻訳および説明</span></span></span></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="bg-red-600 shadow-lg rounded" x-data="{ open: false }">
                            <h3 @click="open = !open"
                                class="flex text-white justify-between items-center font-semibold px-4 py-4 cursor-pointer">
                                <div class="flex gap-2 items-center">
                                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719481027ezgif.com-resize%20(14).webp"
                                        class="w-8" alt="N5 Level Icon">
                                    N2 Level
                                </div>
                                <svg :class="{ 'rotate-180': open }"
                                    class="h-5 w-5 transform transition-transform duration-300" fill="none"
                                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </h3>
                            <div x-show="open" x-transition class="bg-white text-black p-4 text-sm space-y-4">
                                <div class="mx-6 pl-6">
                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 1: 文字
                                                        語彙</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Vocabulary</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">-
                                                    Phrases</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">-
                                                    Phrases contd</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">-
                                                    Reading and translation comprehension</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">-
                                                    Vocabulary discussion of comprehension</span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Combination words</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">- 100
                                                    kanjis</span></span></span></p>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 2: 文法
                                                        読解</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Vocabulary</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">-
                                                    Patterns</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">- Noun
                                                    Clauses</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">-
                                                    Correct usage of Clauses</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">- Usage
                                                    of compound words</span></span></span></p>

                                    <p>&nbsp;</p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 3:
                                                        日本文化</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Japan Work Culture</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">-Events
                                                    in Japan</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">-
                                                    Vocabulary of customs</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">- Speed
                                                    Reading</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">-
                                                    Reading discussion</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">-
                                                    Editorial Writing</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">-
                                                    Japanese work culture 労働環境</span></span></span></p>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial,sans-serif"><span style="color:#000000">- Art
                                                    and customs 伝統芸</span></span></span></p>

                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </li>
                        <li class="bg-red-600 shadow-lg rounded" x-data="{ open: false }">
                            <h3 @click="open = !open"
                                class="flex text-white justify-between items-center font-semibold px-4 py-4 cursor-pointer">
                                <div class="flex gap-2 items-center">
                                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719481027ezgif.com-resize%20(14).webp"
                                        class="w-8" alt="N5 Level Icon">
                                    N1 Level
                                </div>
                                <svg :class="{ 'rotate-180': open }"
                                    class="h-5 w-5 transform transition-transform duration-300" fill="none"
                                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </h3>
                            <div x-show="open" x-transition class="bg-white text-black p-4 text-sm space-y-4">
                                <div class="mx-6 pl-6">
                                    <p><span style="font-size:11pt"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        1:</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">文字
                                                        語彙</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial"><span style="color:#000000">-
                                                    Vocabulary</span></span></span></p>

                                    <ol>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Phrases</span></span></span></li>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">Phrases
                                                        contd</span></span></span></li>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">Reading and
                                                        translation comprehension</span></span></span></li>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">Vocabulary
                                                        discussion of comprehension</span></span></span></li>
                                    </ol>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial"><span style="color:#000000">-Combination
                                                    words- 100 kanjis</span></span></span></p>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        2:</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">文法
                                                        読解</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial"><span
                                                    style="color:#000000">-Vocabulary</span></span></span></p>

                                    <ol>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">Adverbs</span></span></span></li>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">Adjectives
                                                        usage</span></span></span></li>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">Correct usage
                                                        of Adverbs&nbsp;</span></span></span></li>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">Usage of
                                                        compound words</span></span></span></li>
                                    </ol>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial"><span
                                                    style="color:#000000"><strong class="text-red-600">Module
                                                        3:&nbsp;</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span
                                                        style="color:#000000">日本文化</span></span></span></li>
                                    </ul>

                                    <p style="margin-left:48px"><span style="font-size:11pt"><span
                                                style="font-family:Arial"><span style="color:#000000">-Japan Work
                                                    Culture</span></span></span></p>

                                    <ol>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">Kanjis
                                                        contd</span></span></span></li>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">Reading
                                                        comprehension using idioms</span></span></span></li>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">Understanding
                                                        of idioms and usage in a sentence</span></span></span></li>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">Speed
                                                        Reading</span></span></span></li>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">Reading
                                                        discussion</span></span></span></li>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">Editorial
                                                        Writing</span></span></span></li>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">Japanese work
                                                        culture 労働環境</span></span></span></li>
                                        <li style="list-style-type:decimal"><span style="font-size:11pt"><span
                                                    style="font-family:Arial"><span style="color:#000000">Art and
                                                        customs 伝統芸</span></span></span></li>
                                    </ol>
                                </div>
                            </div>
                        </li>
                        <li class="bg-red-600 shadow-lg rounded" x-data="{ open: false }">
                            <h3 @click="open = !open"
                                class="flex text-white justify-between items-center font-semibold px-4 py-4 cursor-pointer">
                                <div class="flex gap-2 items-center">
                                    <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719481027ezgif.com-resize%20(14).webp"
                                        class="w-8" alt="N5 Level Icon">
                                    JLPT/ NAT /JFT Exam Preparation
                                </div>
                                <svg :class="{ 'rotate-180': open }"
                                    class="h-5 w-5 transform transition-transform duration-300" fill="none"
                                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </h3>
                            <div x-show="open" x-transition class="bg-white text-black p-4 text-sm space-y-4">
                                <div class="mx-6 pl-6">
                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong>Module 1: Structure of
                                                        Paper</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Exam Structure</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Planning</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Coupling</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Initiating Questions</span></span></span>
                                        </li>
                                    </ul>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 2: Tips
                                                        &amp; Tricks of the JLPT/ NAT/ JFT
                                                        Exam</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Tricks &amp; Techniques from Industry
                                                        Experts</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Last-Minute Preparation
                                                        Tips</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 3: Sample
                                                        Papers</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Overview of 20+ Sample Papers &amp; Practice
                                                        Questions</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Answering Techniques and
                                                        Tips</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Detailed Review of Answers and
                                                        Rationales</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 4:
                                                        Important Questions of the Exam</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Sample Questions</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Important Questions of the
                                                        Exam</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Practice all critical questions of the exams
                                                        according to the weightage. Get hands-on practice in all essential
                                                        sections of the JLPT/ NAT/ JFT</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Mock Q &amp; A</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 5: Doubt
                                                        Solving</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Q&amp;A Sessions</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Instructor moderation to ensure accurate
                                                        information</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Case Studies and Practical
                                                        Examples</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Resource Utilization for
                                                        Doubt-Solving</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Feedback and
                                                        Improvement</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 6: Mock Q
                                                        &amp; A</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span style="color:#000000">10+
                                                        Mock Q &amp; A</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Mock Exam Reviews</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Discussion of correct and incorrect
                                                        responses</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 7:
                                                        Revision I</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">In-depth review of all the levels- N5, N4,
                                                        N3, N2, &amp; N1</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Practice with complex
                                                        scenarios</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Q&amp;A session</span></span></span></li>
                                    </ul>

                                    <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span
                                                    style="color:#000000"><strong class="text-red-600">Module 8:
                                                        Revision II</strong></span></span></span></p>

                                    <ul>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">In-depth review of all the levels- N5, N4,
                                                        N3, N2, &amp; N1</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Practice with complex
                                                        scenarios</span></span></span></li>
                                        <li style="list-style-type:disc"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif"><span
                                                        style="color:#000000">Q&amp;A session</span></span></span></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
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
                                <input type="text" name="name" id="name" placeholder="Name"
                                    required=""
                                    class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-1">
                                <span id="name_error3" class="text-red-500 text-xs"></span>
                            </div>

                            <div>
                                <label for="email" class="block text-sm mb-1 font-[600] text-red-600">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email"
                                    required=""
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
                                                                                            S67.94,13.05,66.52,7.74z"
                                    fill="#f00">
                                </path>
                                <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4" x-data="{ activeTab: 'tab1' }">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-red-600 capitalize">Our Certification
            </h2>
            <div class="bg-white shadow-lg rounded-xl p-6">
                <!-- Tabs -->
                <div class="flex flex-col md:flex-row justify-center items-center gap-4 mb-6">
                    <!-- Tab 1 Button -->
                    <button
                        :class="activeTab === 'tab1' ? 'bg-red-800 text-white border-purple-700' :
                            'bg-white text-gray-700 border-gray-300'"
                        class="flex items-center gap-4 px-6 py-3 border-2 rounded-lg shadow transition-all duration-200 bg-red-800 text-white border-purple-700"
                        @click="activeTab = 'tab1'">
                        <img src="https://cdn.henryharvin.com/images/1704868318hhicon.webp" alt="Henry Harvin"
                            class="h-10 w-auto bg-white rounded-full">
                        Henry Harvin® Certificate
                    </button>

                    <!-- Tab 2 Button -->
                    <button
                        :class="activeTab === 'tab2' ? 'bg-red-800 text-white border-purple-700' :
                            'bg-white text-gray-700 border-gray-300'"
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
                    <p class="text-gray-700 font-medium"> Language Techniques</p>
                </div>
                <div class="flex items-start space-x-3">
                    <i
                        class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                    <p class="text-gray-700 font-medium">Communication Skills</p>
                </div>
                <div class="flex items-start space-x-3">
                    <i
                        class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                    <p class="text-gray-700 font-medium">Presentation Skills</p>
                </div>
                <div class="flex items-start space-x-3">
                    <i
                        class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                    <p class="text-gray-700 font-medium">Story-telling</p>
                </div>
                <div class="flex items-start space-x-3">
                    <i
                        class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                    <p class="text-gray-700 font-medium">Active Listening</p>
                </div>
                <div class="flex items-start space-x-3">
                    <i
                        class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                    <p class="text-gray-700 font-medium">Storyboard</p>
                </div>
                <div class="flex items-start space-x-3">
                    <i
                        class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                    <p class="text-gray-700 font-medium">Decision-Making</p>
                </div>
                <div class="flex items-start space-x-3">
                    <i
                        class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                    <p class="text-gray-700 font-medium">Critical thinking and analysis</p>
                </div>
                <div class="flex items-start space-x-3">
                    <i
                        class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                    <p class="text-gray-700 font-medium">Cultural Understanding</p>
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
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-2 text-[#da2028] capitalize my-4">Agota™
                Framework
            </h2>
            <p class="text-[16px] text-gray-800 font-[600] text-center">AGOTA™ Framework is a trajectory that offers
                complete growth of an individual incorporating the two most significant focus areas of contemporary
                learning:<span class="font-bold text-gray-900"> The 能力 (Nōryoku) development and キャリア (Kyaria)
                    development. </span></p>
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
                                <p class="col-span-2 text-red-600">2: Projects
                                    <span class="block text-[12px] text-gray-800 font-[600]"> Facility to undergo projects
                                        along with the course</span>
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
                                <p class="col-span-2 text-red-600">3: Student Engagement &amp; Events
                                    <span class="block text-[12px] text-gray-800 font-[600]"> Free Access to #AskHenry
                                        Hackathons and Competitions &amp; many other facilities from Henry Harvin®</span>
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
                                <p class="col-span-2 text-red-600">4: Masterclass
                                    <span class="block text-[12px] text-gray-800 font-[600]">Access to 52+ Masterclass
                                        Sessions for essential soft スキル (Sukiru) development</span>
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
                                <p class="col-span-2 text-red-600">5: Membership
                                    <span class="block text-[12px] text-gray-800 font-[600]"> 30 Months Gold Membership of
                                        Henry Harvin® School of Languages</span>
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
                                <p class="col-span-2 text-red-600">6: E-Learning Access
                                    <span class="block text-[12px] text-gray-800 font-[600]">Get free access to the LMS
                                        having PPTs, projects, self-paced video-based learning, library, quizzes, question
                                        bank, practice tests, final assessments, and a forum, powered by
                                        <a href="https://examopedia.com/"
                                            class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1734598082examopedia_logo.webp"
                                                loading="lazy " alt="Examopedia Logo"
                                                class="h-3">Examopedia</a></span><a href="https://examopedia.com/"
                                        class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"> </a>


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
                                <p class="col-span-2 text-red-600">8: Internship Support
                                    <span class="block text-[12px] text-gray-800 font-[600]">Get Internship Support with
                                        Henry Harvin® and in top MNCs like J.P. Morgan, Accenture &amp; many more via 100X
                                        Suite and
                                        <a href="https://yuvaintern.com//"
                                            class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                                src="https://yuvaintern.com/assets/img/logo.png" loading="lazy "
                                                alt="YUVA Logo" class="h-3">Yuva Intern</a></span><a
                                        href="https://yuvaintern.com//"
                                        class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1">
                                    </a>.
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
                                <p class="col-span-2 text-red-600">9: Entrepreneurship Mentorship
                                    <span class="block text-[12px] text-gray-800 font-[600]">Mentorship from Young
                                        Successful Entrepreneurs to set up a sustainable &amp; scalable Business from
                                        scratch at both Freelance &amp; Entrepreneur level</span>
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
                                <p class="col-span-2 text-red-600">10: Placement Support
                                    <span class="block text-[12px] text-gray-800 font-[600]">Get 3 in 1 Placement support
                                        through Placement Drives, Premium access to the Job portal &amp; Personalized Job
                                        Consulting</span>
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
    <section class="py-12 bg-gray-100 mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize mt-4 mb-4"> Why
                Kazumi Japanese &amp; Culture 文化 School?
            </h2>
            <div class="py-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 text-center">
                    <div
                        class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center col-span-1 sm:col-span-1 md:col-span-1">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753789102Trainerteaching.jpg"
                                loading="lazy " alt="wwww">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Native Japanese Trainers</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Learn from certified, highly 経験豊富 (keiken hōfu) and 情熱的な
                            (jōnetsu-teki na) faculties.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753789154examsheet.jpg"
                                loading="lazy " alt="course">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">JLPT Intensive Course</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Excel in the JLPT with our 専門的な (Senmon-teki na)
                            modules, mock tests, personalized coaching, and JLPT-focused materials sourced directly from
                            Japan.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753881317elearning.jpg"
                                loading="lazy " alt="access">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Access to E-learning Portal</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Kazumi partners with <span>
                                <a href="https://examopedia.com/"
                                    class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1734598082examopedia_logo.webp"
                                        loading="lazy " alt="Examopedia Logo" class="h-4">Examopedia</a></span><a
                                href="https://examopedia.com/"
                                class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"> </a>
                            , a comprehensive E-learning portal that provides future updates, PPTs, projects, quizzes, 模擬試験
                            (Mogi Shiken), question banks, assessments and interactive forums.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753789196OccupationalPrograms.jpg"
                                loading="lazy " alt="offer">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Japanese Occupational Courses</h3>
                        <p class="text-gray-700 text-[14px] mt-2">At Kazumi, we offer programs that will help you build
                            corporate, business and 職場 (shokuba) skills required to secure good 仕事 (shigoto)
                            internationally.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753774339talking.jpg"
                                loading="lazy " alt="">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Internship for Japanese Language</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Kazumi provides Internship Support via
                            <span><a href="https://yuvaintern.com//"
                                    class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                        src="https://yuvaintern.com/assets/img/logo.png" loading="lazy "
                                        alt="Yuva Intern Logo" class="h-4">Yuva Intern</a></span><a
                                href="https://yuvaintern.com//"
                                class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"> </a>
                            , India’s first バーチャル (bācharu) internship platform where you get to select from the best
                            curated internships that match your skills and interests.
                        </p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753881283study.jpg" loading="lazy "
                                alt="study">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Study Abroad &amp; Recruitment Services</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Kazumi offers study abroad and 就職支援 (Shūshoku Shien) via
                            <a href="https://leochase.com/"
                                class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                    src="https://leochase.com/wp-content/uploads/2025/04/Logo_Leo-Chase_F.png"
                                    loading="lazy " alt="Leo &amp; Chase Logo" class="h-3">Leo &amp; Chase </a>
                            , no. 1 recruitment provider, assisting from visa application to settling abroad.
                        </p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753881176agota2.jpg" loading="lazy "
                                alt="Unique">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Unique 10 in 1 Program: Agota™ Framework</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Learn through innovative teaching methods that make
                            learning easy and 実践的 (Jissen-teki). This framework essentially promotes the 能力 (Nōryoku)
                            development and キャリア (Kyaria) development.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753789015orconnections.jpg"
                                loading="lazy " alt="globle">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Global Presence</h3>
                        <p class="text-gray-700 text-[14px] mt-2">With offices in 4+ countries, UK, USA, Middle East, and
                            India, Kazumi is a global brand, offering a global learning 環境 (kankyō), with around 1200+
                            international 学生 (gakusei).</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753774903Network.jpg"
                                loading="lazy " alt="international">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">International Alumni Network</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Join a diverse コミュニティ(Komyuniti) of learners and
                            professionals from around the world.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753774206culture.jpg"
                                loading="lazy " alt="culture two">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Cultural Training</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Explore 伝統 (Dentō), etiquettes, festivals, and practices
                            used in an authentic environment.</p>
                    </div>
                </div>
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
