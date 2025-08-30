@extends('layouts.app')
@section('content')
    <section class="py-12 px-4 max-w-7xl mx-auto">
        <div>
            <div
                class="bg-white text-gray-900 max-w-4xl mx-auto mt-8 p-8 rounded-xl shadow-xl space-y-4 border border-red-600">
                <h1 class="text-2xl font-bold text-red-700">Help our learners get certified & turn into achievers!</h1>

                <p><span class="font-semibold text-red-600">Henry Harvin</span>, one of India’s largest edtech companies,
                    with the mission of making <span class="italic">“educated employable”</span>, has on-boarded over <span
                        class="font-semibold">25K experts</span> and helped in metamorphosing the careers of more than <span
                        class="font-semibold">half a million professionals globally</span>, within a very short span of time.
                </p>

                <p>If you possess the skills and expertise, then put them to good use and join our formidable team’s
                    entrepreneurial zeal to transform the careers of hundreds of thousands of individuals.</p>

                <p class="font-semibold">Together, we have & we will continue to impact lives!</p>

                <p>If you’re a <span class="font-semibold">motivated, curious, and hands-on person</span>, who is excited and
                    enthusiastic about working on solving challenging problems, then contact us at:</p>

                <p class="text-lg text-blue-700 font-bold">
                    <a href="mailto:careers@henryharvin.com" class="underline">careers@henryharvin.com</a>
                </p>
            </div>
        </div>
    </section>
    <section class="py-12 px-4 max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-center text-red-600 mb-10">Employee Benefits</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

            <!-- Left: Benefits List -->
            <ul class="space-y-3 text-red-700 text-base list-disc pl-5">
                <li><strong>Timely Salary</strong> (No delay even during lockdown)</li>
                <li><strong>Insurance</strong> of 5 Lacs on Road Accident & 15 Lacs on Air Accident</li>
                <li><strong>Make DD</strong> of upto 1 Lac for free</li>
                <li><strong>Yearly appraisals</strong> (Happened even during lockdown)</li>
                <li><strong>Flexible weekly off</strong></li>
                <li><strong>Quarterly Rewards &amp; Recognitions</strong></li>
                <li><strong>Lifetime free credit card</strong></li>
                <li><strong>Anywhere Banking Salary Accounts</strong></li>
                <li><strong>Flexible timings</strong> (except for critical departments)</li>
                <li><strong>Healthy Work Environment</strong></li>
                <li><strong>Community Services</strong> – Donation Drives</li>
            </ul>

            <!-- Right: Full-height YouTube Video Embed -->
            <div class="w-full h-full">
                <iframe class="w-full h-full min-h-[500px] rounded-lg shadow-lg"
                    src="https://www.youtube.com/embed/sqkPFSjaIEI"
                    title="Employee Benefits | Henry Harvin Job Reviews @henryharvin" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>

        </div>
    </section>

    <section class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Our Presence
            </h2>
            <div class="grid lg:grid-cols-2 gap-5">
                <div class="border bg-white lg:order-1 order-2 grid gap-6">
                    <p class="bg-red-600 text-center text-white py-2 text-lg">Asia Pacific Offices</p>
                    <div class="md:grid-cols-2 shadow-xl grid grid-cols-1 gap-2 place-content-justify py-2">
                        <div class="w-full">
                            <div class="mt-2">
                                <p class="ml-4 mb-1 font-[600] text-red-600 text-[14px]">Henry Harvin Asia Pacific Head
                                    Office
                                </p>
                                <span class="flex mx-4 gap-4 mb-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Address:</p>
                                    <p class="text-[12px]">Henry Harvin House B-12 Sector-6 Noida (UP)- 201301</p>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Contact:</p>
                                    <a href="tel: {{ config('app.inquiry.ind') }}"
                                        class="underline text-[12px] font-[600] text-[#007bff]">{{ config('app.inquiry.ind') }}</a>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Courses Offered:</p>
                                    <a href="https://www.henryharvin.com/our-courses"
                                        class="underline text-[12px] font-[600] text-[#007bff]">Click Here</a>
                                </span>
                                <a href="https://www.youtube.com/watch?v=NPYG6SVonek" target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center ml-4 mt-2 gap-2 px-2 py-1 bg-white hover:bg-red-600 shadow-xl border border-[#4f2d7f] font-semibold text-[12px] rounded-full shadow transition duration-300 group"
                                    style="border:  1px solid #dadada;">
                                    <i class="fa fa-youtube-play text-[20px] text-[#4f2d7f]" style="color:#ce0909;"></i>

                                    <!-- Button Text -->
                                    <span class="text-[#4f2d7f]" style="color:black">Noida office in just 30 sec.</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid place-content-center grid-cols-2 pl-2">
                            <img class="h-40 w-fit py-2 px-3"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1735989644WhatsApp_Image_2025-01-04_at_4.26.55_PM_(1).jpeg"
                                alt="">
                            <a href="https://maps.app.goo.gl/NZ8m6jrJiXTdKvuE7" target="_blank"
                                class="inline-block border border-gray-300 shadow-md m-2 rounded-lg overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Henry+Harvin+House+B-12+Sector-6+Noida+UP+201301&output=embed"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </a>
                        </div>
                    </div>

                    <div class="md:grid-cols-2 shadow-xl grid grid-cols-1 gap-2 place-content-justify py-2">
                        <div class="w-full">
                            <div class="">
                                <p class="ml-4 mb-1 font-[600] text-red-600 text-[14px]">Henry Harvin Bangalore Regional
                                    Office</p>
                                <span class="flex mx-4 gap-4 mb-2">
                                    <p class="text-red-600 font-[400] text-[12px] ">Address:</p>
                                    <p class="text-[12px]">One.co work 2/3, 2nd floor, 80 feet Road, Sony world Junction,
                                        Koramangal, Above KFC, Bangalore 560095</p>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Contact:</p>
                                    <a href="tel: {{ config('app.inquiry.ind') }}"
                                        class="underline text-[12px] font-[600] text-[#007bff]">{{ config('app.inquiry.ind') }}</a>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Courses Offered:</p>
                                    <a href="https://www.henryharvin.com/our-courses"
                                        class="underline text-[12px] font-[600] text-[#007bff]">Click Here</a>
                                </span>
                                <a href="https://www.youtube.com/shorts/us9oQ_d8WmE" target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center ml-4 mt-2 gap-2 px-2 py-1 bg-white hover:bg-red-600 shadow-xl border border-[#4f2d7f] font-semibold text-[12px] rounded-full shadow transition duration-300 group"
                                    style="border:  1px solid #dadada;">
                                    <i class="fa fa-youtube-play text-[20px] text-[#4f2d7f]" style="color:#ce0909;"></i>

                                    <!-- Button Text -->
                                    <span class="text-[#4f2d7f]" style="color:black">Bangalore office in just 30 sec.</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid place-content-center grid-cols-2 pl-2">
                            <img class="h-40 w-fit py-2 px-3"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1735986708WhatsApp_Image_2025-01-04_at_4.01.17_PM.jpeg"
                                alt="">
                            <a href="https://maps.app.goo.gl/NZ8m6jrJiXTdKvuE7" target="_blank"
                                class="inline-block border border-gray-300 shadow-md m-2 rounded-lg overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.7785630174353!2d77.61769037380935!3d12.921949015967485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15a5b2a8b7c5%3A0x1ce16cc39be979e5!2sHenry%20Harvin%20%7C%20Cyber%20Security%20%7C%20ACCA%20%7C%20Medical%20Coding%20%7C%20Six%20Sigma%20Certification%20%7C%20PMP%20%7C%20SAP%20Training%20Courses%20%7C%20Bangalore!5e0!3m2!1sen!2sus!4v1752673597426!5m2!1sen!2sus"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </a>
                        </div>
                    </div>
                    <div class="md:grid-cols-2 shadow-xl grid grid-cols-1 gap-2 place-content-justify py-2">
                        <div class="w-full">
                            <div class="">
                                <p class="ml-4 mb-1 font-[600] text-red-600 text-[14px]">Henry Harvin Chennai Regional
                                    Office
                                </p>
                                <span class="flex mx-4 gap-4 mb-2">
                                    <p class="text-red-600 font-[400] text-[12px] ">Address:</p>
                                    <p class="text-[12px]">Prestige Palladium Bayan 129, 140, Greams Rd, Thousand Lights
                                        West,
                                        Thousand Lights, Chennai, Tamil Nadu 600006</p>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Contact:</p>
                                    <a href="tel: {{ config('app.inquiry.ind') }}"
                                        class="underline text-[12px] font-[600] text-[#007bff]">{{ config('app.inquiry.ind') }}</a>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Courses Offered:</p>
                                    <a href="https://www.henryharvin.com/our-courses"
                                        class="underline text-[12px] font-[600] text-[#007bff]">Click Here</a>
                                </span>
                                <a href="https://www.youtube.com/shorts/NZwl4A7iHc0" target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center ml-4 mt-2 gap-2 px-2 py-1 bg-white hover:bg-red-600 shadow-xl border border-[#4f2d7f] font-semibold text-[12px] rounded-full shadow transition duration-300 group"
                                    style="border:  1px solid #dadada;">
                                    <i class="fa fa-youtube-play text-[20px] text-[#4f2d7f]" style="color:#ce0909;"></i>

                                    <!-- Button Text -->
                                    <span class="text-[#4f2d7f]" style="color:black">Chennai office in just 30 sec.</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid place-content-center grid-cols-2 pl-2">
                            <img class="h-40 w-fit py-2 px-3"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1735985194fewffefe.PNG" alt="">
                            <a href="https://maps.app.goo.gl/ySmB35ZzN3KnqHmh8" target="_blank"
                                class="inline-block border border-gray-300 shadow-md m-2 rounded-lg overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15546.565999294276!2d80.2357101554199!3d13.05847660000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52679f89ec88bd%3A0x4a636a9981953e66!2sHenry%20Harvin%20Education%20%7C%20Cyber%20Security%20%7C%20EPR%20%7C%20Digital%20Marketing%20%7C%20ACCA%20%7C%20Medical%20Coding%20Course%20%7C%20Chennai!5e0!3m2!1sen!2sus!4v1752833090166!5m2!1sen!2sus"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </a>
                        </div>
                    </div>
                    <div class="md:grid-cols-2 shadow-xl grid grid-cols-1 gap-2 place-content-justify py-2">
                        <div class="w-full">
                            <div class="">
                                <p class="ml-4 mb-1 font-[600] text-red-600 text-[14px]">Henry Harvin Hyderabad Regional
                                    Office</p>
                                <span class="flex mx-4 gap-4 mb-2">
                                    <p class="text-red-600 font-[400] text-[12px] ">Address:</p>
                                    <p class="text-[12px]">Hitech City N Heights, Level 6, N Heights, Plot No 38, Phase 2,
                                        Siddiq Nagar, HITEC City, Hyderabad, Telangana 500081</p>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Contact:</p>
                                    <a href="tel: {{ config('app.inquiry.ind') }}"
                                        class="underline text-[12px] font-[600] text-[#007bff]">{{ config('app.inquiry.ind') }}</a>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Courses Offered:</p>
                                    <a href="https://www.henryharvin.com/our-courses"
                                        class="underline text-[12px] font-[600] text-[#007bff]">Click Here</a>
                                </span>
                                <a href="https://www.youtube.com/watch?v=nEAM0I-0H1Q" target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center ml-4 mt-2 gap-2 px-2 py-1 bg-white hover:bg-red-600 shadow-xl border border-[#4f2d7f] font-semibold text-[12px] rounded-full shadow transition duration-300 group"
                                    style="border:  1px solid #dadada;">
                                    <i class="fa fa-youtube-play text-[20px] text-[#4f2d7f]" style="color:#ce0909;"></i>

                                    <!-- Button Text -->
                                    <span class="text-[#4f2d7f]" style="color:black">Hyderabad office in just 30
                                        sec.</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid place-content-center grid-cols-2 pl-2">
                            <img class="h-40 w-fit py-2 px-3"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1735987840WhatsApp_Image_2025-01-04_at_4.08.42_PM_(1).jpeg"
                                alt="">
                            <a href="https://maps.app.goo.gl/n2G9jH3ChHbYeok88" target="_blank"
                                class="inline-block border border-gray-300 shadow-md m-2 rounded-lg overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.176057026715!2d78.36627656950354!3d17.451285564403065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9316ff44f461%3A0x166548d0b0f0ffc9!2sHenry%20Harvin!5e0!3m2!1sen!2sus!4v1752833368915!5m2!1sen!2sus"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </a>
                        </div>
                    </div>
                    <div class="md:grid-cols-2 shadow-xl grid grid-cols-1 gap-2 place-content-justify py-2">
                        <div class="w-full">
                            <div class="">
                                <p class="ml-4 mb-1 font-[600] text-red-600 text-[14px]">Henry Harvin Pune Regional
                                    Office</p>
                                <span class="flex mx-4 gap-4 mb-2">
                                    <p class="text-red-600 font-[400] text-[12px] ">Address:</p>
                                    <p class="text-[12px]">32 INSIGNIA, Pan card club road, Near Westport Building, Baner,
                                        Pune-
                                        411045</p>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Contact:</p>
                                    <a href="tel: {{ config('app.inquiry.ind') }}"
                                        class="underline text-[12px] font-[600] text-[#007bff]">{{ config('app.inquiry.ind') }}</a>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Courses Offered:</p>
                                    <a href="https://www.henryharvin.com/our-courses"
                                        class="underline text-[12px] font-[600] text-[#007bff]">Click Here</a>
                                </span>
                                <a href="https://www.youtube.com/shorts/LgTZu8m0ZX4" target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center ml-4 mt-2 gap-2 px-2 py-1 bg-white hover:bg-red-600 shadow-xl border border-[#4f2d7f] font-semibold text-[12px] rounded-full shadow transition duration-300 group"
                                    style="border:  1px solid #dadada;">
                                    <i class="fa fa-youtube-play text-[20px] text-[#4f2d7f]" style="color:#ce0909;"></i>

                                    <!-- Button Text -->
                                    <span class="text-[#4f2d7f]" style="color:black">Pune office in just 30 sec.</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid place-content-center grid-cols-2 pl-2">
                            <img class="h-40 w-fit py-2 px-3"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1735989741WhatsApp_Image_2025-01-04_at_4.28.25_PM.jpeg"
                                alt="">
                            <a href="https://maps.app.goo.gl/cLVq3tMcvU16d6Lj8" target="_blank"
                                class="inline-block border border-gray-300 shadow-md m-2 rounded-lg overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.3448583827767!2d73.77518827393672!3d18.55848496801752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf5bb0f4e17b%3A0xb83b11870a62bf6a!2sHenry%20Harvin%20Pune!5e0!3m2!1sen!2sus!4v1752833462526!5m2!1sen!2sus"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </a>
                        </div>
                    </div>
                    <div class="md:grid-cols-2 shadow-xl grid grid-cols-1 gap-2 place-content-justify py-2">
                        <div class="w-full">
                            <div class="">
                                <p class="ml-4 mb-1 font-[600] text-red-600 text-[14px]">Henry Harvin Chandigarh Regional
                                    Office</p>
                                <span class="flex mx-4 gap-4 mb-2">
                                    <p class="text-red-600 font-[400] text-[12px] ">Address:</p>
                                    {{-- <p class="text-[12px]">Next 57, Sector 17 Sco 170-1-2 Sector 17-C, near Yes Bank, Chandigarh 160017</p> --}}
                                    <p class="text-[12px]">ST Square Building Plot No C 167, GF, Office No. 007, Phase 8B,
                                        Industrial Area, Sector 74, Sahibzada Ajit Singh Nagar, Punjab 140308</p>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Contact:</p>
                                    <a href="tel: {{ config('app.inquiry.ind') }}"
                                        class="underline text-[12px] font-[600] text-[#007bff]">{{ config('app.inquiry.ind') }}</a>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Courses Offered:</p>
                                    <a href="https://www.henryharvin.com/our-courses"
                                        class="underline text-[12px] font-[600] text-[#007bff]">Click Here</a>
                                </span>
                                <a href="https://www.youtube.com/shorts/TesIUN5cLsg?feature=share" target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center ml-4 mt-2 gap-2 px-2 py-1 bg-white hover:bg-red-600 shadow-xl border border-[#4f2d7f] font-semibold text-[12px] rounded-full shadow transition duration-300 group"
                                    style="border:  1px solid #dadada;">
                                    <i class="fa fa-youtube-play text-[20px] text-[#4f2d7f]" style="color:#ce0909;"></i>

                                    <!-- Button Text -->
                                    <span class="text-[#4f2d7f]" style="color:black">Chandigarh office in just 30
                                        sec.</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid place-content-center grid-cols-2 pl-2">
                            <img class="h-40 w-fit py-2 px-3"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1741756747ST-Square-Building.jfif"
                                alt="">
                            <a href="https://maps.app.goo.gl/FbskGozvXsVLkd8t9" target="_blank"
                                class="inline-block border border-gray-300 shadow-md m-2 rounded-lg overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3429.254346289235!2d76.78229057438837!3d30.739356285314585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feddd70aab053%3A0x3c74eeca0f8d5c25!2sHenry%20Harvin%20%7CCyber%20Security%2C%20Medical%20Coding%2C%20Chandigarh%20Office%20%2CHR%20Courses%2C%20Data%20Science%2C%20Six%20Sigma%20%7C%20Chandigarh!5e0!3m2!1sen!2sus!4v1752833522859!5m2!1sen!2sus"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </a>
                        </div>
                    </div>
                    <div class="md:grid-cols-2 shadow-xl grid grid-cols-1 gap-2 place-content-justify py-2">
                        <div class="w-full">
                            <div class="">
                                <p class="ml-4 mb-1 font-[600] text-red-600 text-[14px]">Henry Harvin Mumbai Regional
                                    Office
                                </p>
                                <span class="flex mx-4 gap-4 mb-2">
                                    <p class="text-red-600 font-[400] text-[12px] ">Address:</p>
                                    <p class="text-[12px]">Technopolis Knowledge Park, 5th floor, Hanuman Nagar, Andheri
                                        East,
                                        Mumbai, Maharashtra 400093</p>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Contact:</p>
                                    <a href="tel: {{ config('app.inquiry.ind') }}"
                                        class="underline text-[12px] font-[600] text-[#007bff]">{{ config('app.inquiry.ind') }}</a>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Courses Offered:</p>
                                    <a href="https://www.henryharvin.com/our-courses"
                                        class="underline text-[12px] font-[600] text-[#007bff]">Click Here</a>
                                </span>
                                <a href="https://www.youtube.com/watch?v=n4fyfzxCD4s&feature=youtu.be" target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center ml-4 mt-2 gap-2 px-2 py-1 bg-white hover:bg-red-600 shadow-xl border border-[#4f2d7f] font-semibold text-[12px] rounded-full shadow transition duration-300 group"
                                    style="border:  1px solid #dadada;">
                                    <i class="fa fa-youtube-play text-[20px] text-[#4f2d7f]" style="color:#ce0909;"></i>

                                    <!-- Button Text -->
                                    <span class="text-[#4f2d7f]" style="color:black">Mumbai office in just 30 sec.</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid place-content-center grid-cols-2 pl-2">
                            <img class="h-40 w-fit py-2 px-3"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1735987931WhatsApp_Image_2025-01-04_at_4.09.05_PM.jpeg"
                                alt="">
                            <a href="https://maps.app.goo.gl/9FdqXAfHvudcYuKT8" target="_blank"
                                class="inline-block border border-gray-300 shadow-md m-2 rounded-lg overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.803621133493!2d72.86093957395215!3d19.116269150709627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9ed7b7bc41d%3A0xf2a618390ccb19cb!2sHenry%20Harvin!5e0!3m2!1sen!2sus!4v1752833572851!5m2!1sen!2sus"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </a>
                        </div>
                    </div>
                    <div class="md:grid-cols-2 shadow-xl grid grid-cols-1 gap-2 place-content-justify py-2">
                        <div class="w-full">
                            <div class="">
                                <p class="ml-4 mb-1 font-[600] text-red-600 text-[14px]">Henry Harvin Kolkata Regional
                                    Office
                                </p>
                                <span class="flex mx-4 gap-4 mb-2">
                                    <p class="text-red-600 font-[400] text-[12px] ">Address:</p>
                                    <p class="text-[12px]">11th Floor Technopolis Building, Salt lake, BP Block, Sector V,
                                        Bidhannagar, Kolkata, West Bengal 700091</p>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Contact:</p>
                                    <a href="tel: {{ config('app.inquiry.ind') }}"
                                        class="underline text-[12px] font-[600] text-[#007bff]">{{ config('app.inquiry.ind') }}</a>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Courses Offered:</p>
                                    <a href="https://www.henryharvin.com/our-courses"
                                        class="underline text-[12px] font-[600] text-[#007bff]">Click Here</a>
                                </span>
                                <a href="https://www.youtube.com/shorts/aqwXyFs-Brc" target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center ml-4 mt-2 gap-2 px-2 py-1 bg-white hover:bg-red-600 shadow-xl border border-[#4f2d7f] font-semibold text-[12px] rounded-full shadow transition duration-300 group"
                                    style="border:  1px solid #dadada;">
                                    <i class="fa fa-youtube-play text-[20px] text-[#4f2d7f]" style="color:#ce0909;"></i>

                                    <!-- Button Text -->
                                    <span class="text-[#4f2d7f]" style="color:black">Kolkata office in just 30 sec.</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid place-content-center grid-cols-2 pl-2">
                            <img class="h-40 w-fit py-2 px-3"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1735988299WhatsApp_Image_2025-01-04_at_4.25.32_PM_(1).jpeg"
                                alt="">
                            <a href="https://maps.app.goo.gl/NQL1P7TFzGcVGCdN6" target="_blank"
                                class="inline-block border border-gray-300 shadow-md m-2 rounded-lg overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7369.819691876434!2d88.34337737045144!3d22.545049688722116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02770c5dd48d7f%3A0xb1c34a247b63b63!2sHenry%20Harvin%20%7C%20TEFL%2C%20Six%20Sigma%2C%20French%2C%20German%2C%20Six%20Sigma%2C%20Data%20Science%20TESOL%20Course%20in%20Kolkata!5e0!3m2!1sen!2sus!4v1752833796268!5m2!1sen!2sus"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </a>
                        </div>
                    </div>
                    <div class="md:grid-cols-2 shadow-xl grid grid-cols-1 gap-2 place-content-justify py-2">
                        <div class="w-full">
                            <div class="">
                                <p class="ml-4 mb-1 font-[600] text-red-600 text-[14px]">Henry Harvin Delhi (North East)
                                    Office</p>
                                <span class="flex mx-4 gap-4 mb-2">
                                    <p class="text-red-600 font-[400] text-[12px] ">Address:</p>
                                    <p class="text-[12px]">B-46/6, Wazirabad Road, near ICICI Bank, Bhajanpura, Delhi
                                        110053</p>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Contact:</p>
                                    <a href="tel: {{ config('app.inquiry.ind') }}"
                                        class="underline text-[12px] font-[600] text-[#007bff]">{{ config('app.inquiry.ind') }}</a>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Courses Offered:</p>
                                    <a href="https://www.henryharvin.com/our-courses"
                                        class="underline text-[12px] font-[600] text-[#007bff]">Click Here</a>
                                </span>
                                <a href="" target="_blank" rel="noopener noreferrer"
                                    class="inline-flex items-center ml-4 mt-2 gap-2 px-2 py-1 bg-white hover:bg-red-600 shadow-xl border border-[#4f2d7f] font-semibold text-[12px] rounded-full shadow transition duration-300 group"
                                    style="border:  1px solid #dadada;">
                                    <i class="fa fa-youtube-play text-[20px] text-[#4f2d7f]" style="color:#ce0909;"></i>

                                    <!-- Button Text -->
                                    <span class="text-[#4f2d7f]" style="color:black">Delhi office in just 30 sec.</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid place-content-center grid-cols-2 pl-2">
                            <img class="h-40 w-fit py-2 px-3"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1736855155WhatsApp_Image_2025-01-11_at_2.10.03_PM.jpeg"
                                alt="">
                            <a href="https://maps.app.goo.gl/vSoq5J2wZFsRP6qS8" target="_blank"
                                class="inline-block border border-gray-300 shadow-md m-2 rounded-lg overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.53464518852!2d77.25704157429664!3d28.70356398085374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfdded2dbebd1%3A0x13fe2d7cff05acb6!2sHenry%20Harvin%20Paramedical%20Academy%20%7C%20Medical%20Coding%20%7C%20Medical%20Writing%20%7C%20Paramedical%20%7C!5e0!3m2!1sen!2sus!4v1752833920559!5m2!1sen!2sus"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </a>
                        </div>
                    </div>
                    <div class="md:grid-cols-2 mt-6 pb-6 shadow-xl grid grid-cols-1 gap-2 place-content-justify">
                        <div class="w-full">
                            <div class="">
                                <p class="ml-4 mb-1 font-[600] text-red-600 text-[14px]">Henry Harvin Ahmedabad Regional
                                    Office</p>
                                <span class="flex mx-4 gap-4 mb-2">
                                    <p class="text-red-600 font-[400] text-[12px] ">Address:</p>
                                    <p class="text-[12px]">Phoenix Complex Building., Opposite to the Commerce 6th road
                                        metro
                                        station., Near Vijay Cha Rasta. Navrangpura. Pincode - 380009
                                        Ahmedabad (Gujarat)</p>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Contact:</p>
                                    <a href="tel: {{ config('app.inquiry.ind') }}"
                                        class="underline text-[12px] font-[600] text-[#007bff]">{{ config('app.inquiry.ind') }}</a>
                                </span>
                                <span class="flex items-center mx-4 gap-2">
                                    <p class="text-red-600 font-[400] text-[12px]">Courses Offered:</p>
                                    <a href="https://www.henryharvin.com/our-courses"
                                        class="underline text-[12px] font-[600] text-[#007bff]">Click Here</a>
                                </span>
                                <a href="https://www.youtube.com/shorts/RHf2WoiwLNk?feature=share" target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center ml-4 mt-2 gap-2 px-2 py-1 bg-white hover:bg-red-600 shadow-xl border border-[#4f2d7f] font-semibold text-[12px] rounded-full shadow transition duration-300 group"
                                    style="border: 1px solid #dadada;">
                                    <i class="fa fa-youtube-play text-[20px] text-[#4f2d7f]" style="color:#ce0909;"></i>

                                    <!-- Button Text -->
                                    <span class="text-[#4f2d7f]" style="color:black">Ahmedabad office in just 30
                                        sec.</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid place-content-center grid-cols-2 pl-2">
                            <img class="h-40 w-fit py-2 px-3"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1735987015WhatsApp_Image_2025-01-04_at_4.01.40_PM.jpeg"
                                alt="">
                            <a href="https://maps.app.goo.gl/hXqRMB7f1i9kUsD36" target="_blank"
                                class="inline-block border border-gray-300 shadow-md m-2 rounded-lg overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.5112289989656!2d72.54929367407553!3d23.041711815616022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8585077f9557%3A0x1a45840b3f9721d5!2sHenry%20Harvin%20%7CHR%20Courses%2CMedical%20Coding%2C%20Six%20Sigma%2CData%20Science%2C%20Cyber%20Security%2C%20TEFL%2CERP%20%7CAhmedabad!5e0!3m2!1sen!2sus!4v1752833979324!5m2!1sen!2sus"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="border mt-4 md:mt-0 bg-white">
                        <p class="bg-red-600 text-center text-white py-2 text-lg">Middle East Office(s)</p>
                        <div class="md:grid-cols-2 shadow-xl grid grid-cols-1 gap-2 place-content-justify py-2">
                            <div class="w-full">
                                <p class="mx-4 mt-4">Henry Harvin Co. L.L.C.</p>
                                <div class="mt-2">
                                    <p class="ml-4 mb-1 font-[600] text-red-600 text-[14px]">Henry Harvin Middle East
                                        Head
                                        Office</p>
                                    <span class="flex mx-4 gap-4 mb-2">
                                        <p class="text-red-600 font-[400] text-[12px] ">Address:</p>
                                        <p class="text-[12px]">Office No: 2703, Blue Matrix, 27th floor The Prime Tower,
                                            Business Bay, Dubai, UAE</p>
                                    </span>
                                    <span class="flex items-center mx-4 gap-2">
                                        <p class="text-red-600 font-[400] text-[12px]">Contact:</p>
                                        <a href="tel:{{ config('app.customer.uae') }}"
                                            class="underline text-[12px] font-[600] text-[#007bff]">{{ config('app.customer.uae') }}</a>
                                    </span>
                                    <span class="flex items-center mx-4 gap-2">
                                        <p class="text-red-600 font-[400] text-[12px]">Courses Offered:</p>
                                        <a href="https://www.henryharvin.com/our-courses"
                                            class="underline text-[12px] font-[600] text-[#007bff]">Click Here</a>
                                    </span>
                                    <a href="https://www.youtube.com/watch?v=IEJ-m_ZZE90" target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center ml-4 mt-2 gap-2 px-2 py-1 bg-white hover:bg-red-600 shadow-xl border border-[#4f2d7f] font-semibold text-[12px] rounded-full shadow transition duration-300 group"
                                        style="border:  1px solid #dadada;">
                                        <i class="fa fa-youtube-play text-[20px] text-[#4f2d7f]"
                                            style="color:#ce0909;"></i>

                                        <!-- Button Text -->
                                        <span class="text-[#4f2d7f]" style="color:black">Dubai office in just 30
                                            sec.</span>
                                    </a>
                                </div>
                            </div>
                            <div class="grid place-content-center grid-cols-2 pl-2">
                                <img class="h-40 w-fit py-2 px-3"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1736409418WhatsApp_Image_2025-01-09_at_1.22.48_PM.jpeg"
                                    alt="">
                                <a href="https://maps.app.goo.gl/Yv5Spsznw7DspxLq5" target="_blank"
                                    class="inline-block border border-gray-300 shadow-md m-2 rounded-lg overflow-hidden">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.439046502524!2d55.268941474153365!3d25.188412232058848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f695488797293%3A0x2d2fc635c7724030!2sHenry%20Harvin%20in%20Dubai!5e0!3m2!1sen!2sus!4v1752834253078!5m2!1sen!2sus"
                                        width="100%" height="100%" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="border bg-white">
                        <p class="bg-red-600 text-center text-white py-2 text-lg">Americas Office(s)</p>
                        <div
                            class="md:grid-cols-2 pb-4 mt-6 shadow-xl grid grid-cols-1 gap-2 place-content-justify place-items-center">
                            <div class="w-full">
                                <p class="mx-4 mt-4">Henry Harvin Inc</p>
                                <div class="mt-2">
                                    <p class="ml-4 mb-1 font-[600] text-red-600 text-[14px]">Henry Harvin America Head
                                        Office
                                    </p>
                                    <span class="flex mx-4 gap-4 mb-2">
                                        <p class="text-red-600 font-[400] text-[12px] ">Address:</p>
                                        <p class="text-[12px]">8 The Green, # 19614, Dover, DE 19901, United States</p>
                                    </span>
                                    <span class="flex items-center mx-4 gap-2">
                                        <p class="text-red-600 font-[400] text-[12px]">Contact:</p>
                                        <a href="tel:{{ config('app.customer.usa') }}"
                                            class="underline text-[12px] font-[600] text-[#007bff]">{{ config('app.customer.usa') }}</a>
                                    </span>
                                    <span class="flex items-center mx-4 gap-2">
                                        <p class="text-red-600 font-[400] text-[12px]">Courses Offered:</p>
                                        <a href="https://www.henryharvin.com/our-courses"
                                            class="underline text-[12px] font-[600] text-[#007bff]">Click Here</a>
                                    </span>
                                    <a href="/" target="_blank" rel="noopener noreferrer"
                                        class="inline-flex items-center ml-4 mt-2 gap-2 px-2 py-1 bg-white hover:bg-red-600 shadow-xl border border-[#4f2d7f] font-semibold text-[12px] rounded-full shadow transition duration-300 group"
                                        style="border:  1px solid #dadada;">
                                        <i class="fa fa-youtube-play text-[20px] text-[#4f2d7f]"
                                            style="color:#ce0909;"></i>

                                        <!-- Button Text -->
                                        <span class="text-[#4f2d7f]" style="color:black">Americas office in just 30
                                            sec.</span>
                                    </a>
                                </div>
                            </div>
                            <div class="grid place-content-center grid-cols-2 pl-2">
                                <img class="h-40 w-fit py-2 px-3"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1736409518WhatsApp_Image_2025-01-09_at_1.12.05_PM.jpeg"
                                    alt="">
                                <a href="https://maps.app.goo.gl/1BphTg4MNcAf4qfP9" target="_blank"
                                    class="inline-block border border-gray-300 shadow-md m-2 rounded-lg overflow-hidden">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40954930.37435238!2d164.124755859375!3d37.56199695314352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbfbe6770a26f%3A0x52b66af00517c649!2sHenry%20Harvin%20Academy%20%7C%20Data%20Science%20Course%2C%20Cyber%20Security%20Course%2C%20SAP%20Course%20%26%201200%20More!5e1!3m2!1sen!2sin!4v1752838276061!5m2!1sen!2sin"
                                        width="100%" height="100%" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="border mt-4 bg-white">
                        <p class="bg-red-600 text-center text-white py-2 text-lg">United Kingdom Office(s)</p>
                        <div class="md:grid-cols-2 shadow-xl grid grid-cols-1 gap-2 place-content-justify py-2">
                            <div class="w-full">
                                <p class="mx-4 mt-4">Henry Harvin Limited</p>
                                <div class="mt-2">
                                    <p class="ml-4 mb-1 font-[600] text-red-600 text-[14px]">Henry Harvin United Kingdom
                                        Head
                                        Office</p>
                                    <span class="flex mx-4 gap-4 mb-2">
                                        <p class="text-red-600 font-[400] text-[12px] ">Address:</p>
                                        <p class="text-[12px]">Office No: 71–75 Shelton Street Covent Garden London WC2H
                                            9JQ</p>
                                    </span>
                                    <span class="flex items-center mx-4 gap-2">
                                        <p class="text-red-600 font-[400] text-[12px]">Contact:</p>
                                        <a href="tel:{{ config('app.inquiry.uk') }}"
                                            class="underline text-[12px] font-[600] text-[#007bff]">{{ config('app.inquiry.uk') }}</a>
                                    </span>
                                    <span class="flex items-center mx-4 gap-2">
                                        <p class="text-red-600 font-[400] text-[12px]">Courses Offered:</p>
                                        <a href="https://www.henryharvin.com/our-courses"
                                            class="underline text-[12px] font-[600] text-[#007bff]">Click Here</a>
                                    </span>
                                    <a href="/" target="_blank" rel="noopener noreferrer"
                                        class="inline-flex items-center ml-4 mt-2 gap-2 px-2 py-1 bg-white hover:bg-red-600 shadow-xl border border-[#4f2d7f] font-semibold text-[12px] rounded-full shadow transition duration-300 group"
                                        style="border:  1px solid #dadada;">
                                        <i class="fa fa-youtube-play text-[20px] text-[#4f2d7f]"
                                            style="color:#ce0909;"></i>

                                        <!-- Button Text -->
                                        <span class="text-[#4f2d7f]" style="color:black">United Kingdom office in just 30
                                            sec.</span>
                                    </a>
                                </div>
                            </div>
                            <div class="grid place-content-center grid-cols-2 pl-2">
                                <img class="h-40 w-fit py-2 px-3"
                                    src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1736856248WhatsApp_Image_2025-01-07_at_12.41.20_PM_(1).jpeg"
                                    alt="">
                                <a href="https://maps.app.goo.gl/7zv83Erf1SeZBxBA8" target="_blank"
                                    class="inline-block border border-gray-300 shadow-md m-2 rounded-lg overflow-hidden">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9079047214555!2d-0.12612132337946214!3d51.51490557181507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760568735c6933%3A0xa64a68bdb1b00c0b!2sHenry%20Harvin%20in%20UK%20%7C%20Training%20Courses%20on%20Cyber%20Security%2C%20Digital%20Marketing%2C%20TEFL%2C%20Data%20Science%20%26%20ACCA%20Certification!5e0!3m2!1sen!2sin!4v1752835602944!5m2!1sen!2sin"
                                        width="100%" height="100%" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </a>
                            </div>

                        </div>
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
@endsection
